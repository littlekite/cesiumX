require('dotenv').config({ path: __dirname + '/.env' });
const electron = require('electron');
const app = electron.app; // Module to control application life.
const BrowserWindow = electron.BrowserWindow; // Module to create native browser window.
const Menu = electron.Menu;
const parseArgs = require('minimist');
const isDev = require('electron-is').dev();
const ipcMain = electron.ipcMain;
const autoUpdater = require('electron-updater').autoUpdater;
const log = require('electron-log');
var shell = require('shelljs');
var httpServer = require('http-server');
var path = require('path');
var exePath = path.dirname(app.getPath('exe'));

const { exec } = require('child_process');
/*
const {
  uploadGameFolderToBucket,
  uploadArchiveToBucket,
} = require('./S3Upload');
*/
const {
  serveFolder,
  stopServer,
  getLocalNetworkIps,
} = require('./ServeFolder');
const { startDebuggerServer, sendMessage } = require('./DebuggerServer');
const { buildMainMenuFor } = require('./MainMenu');
const { loadPiskelWindow } = require('./PiskelWindow');
const throttle = require('lodash.throttle');

// Logs made with electron-logs can be found
// on Linux: ~/.config/<app name>/log.log
// on OS X: ~/Library/Logs/<app name>/log.log
// on Windows: %USERPROFILE%\AppData\Roaming\<app name>\log.log
autoUpdater.logger = log;
autoUpdater.logger.transports.file.level = 'info';
log.info('GDevelop Electron app starting...');

// Keep a global reference of the window object, if you don't, the window will
// be closed automatically when the JavaScript object is garbage collected.
let mainWindow = null;

const args = parseArgs(process.argv.slice(2));
const isIntegrated = args.mode === 'integrated';
const devTools = !!args['dev-tools'];

// Quit when all windows are closed.
app.on('window-all-closed', function () {
  app.quit();
});

// This method will be called when Electron has finished
// initialization and is ready to create browser windows.
app.on('ready', function () {
  if (isIntegrated && app.dock) {
    app.dock.hide();
  }

  // Create the browser window.
  const options = {
    //width: args.width || 1100,
    //height: args.height || 800,
    x: args.x,
    y: args.y,
    webPreferences: {
      webSecurity: false, // Allow to access to local files
    },
    enableLargerThanScreen: true,
    backgroundColor: '#f0f0f0',
  };

  if (isIntegrated) {
    options.acceptFirstMouse = true;
    options.skipTaskbar = true;
    options.hasShadow = false;
    options.frame = false;
    options.minimizable = false;
    options.movable = false;
    options.resizable = false;
    options.fullscreenable = true;
  }
  //options.fullscreen = true;
  mainWindow = new BrowserWindow(options);
 // if (!isIntegrated) mainWindow.maximize();
  mainWindow.maximize();
  //Expose program arguments
  global['args'] = args;
  log.info('file://' + __dirname + '/www/index.html');
  //shell.cd(__dirname+'/www/model');
  //shell.exec('http-server --cors');
  //httpServer.createServer().listen(8080);
  // Load the index.html of the app.
  if (isDev) {
    // Development (server hosted by npm run start)
    //mainWindow.loadURL('http://www.c.com');
    mainWindow.loadURL('file://' + __dirname + '/www/index.html');
    mainWindow.openDevTools();
  } else {
    // Production (with npm run build)
    mainWindow.loadURL('file://' + __dirname + '/www/index.html');
    if (devTools) mainWindow.openDevTools();
  }
  
  //Menu.setApplicationMenu(buildMainMenuFor(mainWindow));
  Menu.setApplicationMenu(null);
    
  mainWindow.on('closed', function () {
    // Dereference the window object, usually you would store windows
    // in an array if your app supports multi windows, this is the time
    // when you should delete the corresponding element.
    mainWindow = null;
    stopServer(() => {});
  });

  //Prevent any navigation inside the main window.
  mainWindow.webContents.on('will-navigate', (e, url) => {
    if (url !== mainWindow.webContents.getURL()) {
      e.preventDefault();
      electron.shell.openExternal(url);
    }
  });

  ipcMain.on('piskel-open-then-load-animation', (event, piskelData) => {
    loadPiskelWindow({
      parentWindow: mainWindow,
      devTools,
      onReady: piskelWindow =>
        piskelWindow.webContents.send('piskel-load-animation', piskelData),
    });
  });

  //TODO: Move in PiskelWindow? And use a callback like onReady
  ipcMain.on('piskel-changes-saved', (event, imageResources, newAnimationName) => {
    mainWindow.webContents.send('piskel-changes-saved', imageResources, newAnimationName);
  });

  // S3Upload events:
  /*
  ipcMain.on('s3-folder-upload', (event, localDir) => {
    log.info('Received event s3-upload with localDir=', localDir);

    uploadGameFolderToBucket(
      localDir,
      throttle((current, max) => {
        event.sender.send('s3-folder-upload-progress', current, max);
      }, 200),
      (err, prefix) => {
        event.sender.send('s3-folder-upload-done', err, prefix);
      }
    );
  });

 
  ipcMain.on('s3-file-upload', (event, localFile) => {
    log.info('Received event s3-file-upload with localFile=', localFile);

    uploadArchiveToBucket(
      localFile,
      throttle((current, max) => {
        event.sender.send('s3-file-upload-progress', current, max);
      }, 300),
      (err, prefix) => {
        event.sender.send('s3-file-upload-done', err, prefix);
      }
    );
  });
  */
  // ServeFolder events:
  ipcMain.on('serve-folder', (event, options) => {
    log.info('Received event to server folder with options=', options);

    serveFolder(options, (err, serverParams) => {
      event.sender.send('serve-folder-done', err, serverParams);
    });
  });

  ipcMain.on('stop-server', event => {
    log.info('Received event to stop server');

    stopServer(err => {
      event.sender.send('stop-server-done', err);
    });
  });

  ipcMain.on('get-local-network-ips', event => {
    event.sender.send('local-network-ips', getLocalNetworkIps());
  });

  // DebuggerServer events:
  ipcMain.on('debugger-start-server', (event, options) => {
    log.info('Received event to start debugger server with options=', options);

    startDebuggerServer({
      onMessage: ({ id, message }) =>
        event.sender.send('debugger-message-received', { id, message }),
      onError: error => event.sender.send('debugger-error-received', error),
      onConnectionClose: ({ id }) =>
        event.sender.send('debugger-connection-closed', { id }),
      onConnectionOpen: ({ id }) =>
        event.sender.send('debugger-connection-opened', { id }),
      onListening: () => event.sender.send('debugger-start-server-done'),
    });
  });

  ipcMain.on('debugger-send-message', (event, message) => {
    sendMessage(message, err =>
      event.sender.send('debugger-send-message-done', err)
    );
  });

  // This will immediately download an update, then install when the
  // app quits.
  autoUpdater.checkForUpdatesAndNotify();

  function sendUpdateStatus(status) {
    log.info(status);
    if (mainWindow) mainWindow.webContents.send('update-status', status);
  }
  autoUpdater.on('checking-for-update', () => {
    sendUpdateStatus({
      message: 'Checking for update...',
      status: 'checking-for-update',
    });
  });
  autoUpdater.on('update-available', info => {
    sendUpdateStatus({
      message: 'Update available.',
      status: 'update-available',
    });
  });
  autoUpdater.on('update-not-available', info => {
    sendUpdateStatus({
      message: 'Update not available.',
      status: 'update-not-available',
    });
  });
  autoUpdater.on('error', err => {
    sendUpdateStatus({
      message: 'Error in auto-updater. ' + err,
      status: 'error',
      err,
    });
  });
  autoUpdater.on('download-progress', progressObj => {
    let logMessage = 'Download speed: ' + progressObj.bytesPerSecond;
    logMessage = logMessage + ' - Downloaded ' + progressObj.percent + '%';
    logMessage =
      logMessage +
      ' (' +
      progressObj.transferred +
      '/' +
      progressObj.total +
      ')';
    sendUpdateStatus({
      message: logMessage,
      status: 'download-progress',
      bytesPerSecond: progressObj.bytesPerSecond,
      percent: progressObj.percent,
      transferred: progressObj.transferred,
      total: progressObj.total,
    });
  });
  autoUpdater.on('update-downloaded', info => {
    sendUpdateStatus({
      message: 'Update downloaded',
      status: 'update-downloaded',
      info,
    });
  });
});
  