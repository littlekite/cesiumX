var shell = require('shelljs');
var args = require('minimist')(process.argv.slice(2));

if (!shell.test('-f', './node_modules/.bin/build')) {
  shell.echo('⚠️ Please run npm install in electron-app folder');
  shell.exit(1);
}

if (!args['skip-app-build']) {
  //shell.cd('../app');
  //shell.exec('npm run build');
  //shell.cd('../electron-app');
    //shell.cd('C:\Users\Administrator\AppData\Local\Programs\k\resources\app.asar.unpacked\www\model');
    //shell.exec('http-server --cors');
    //return;
  
}


//shell.rm('-rf', 'app/www');
//shell.mkdir('-p', 'app/www');
//shell.cp('-r', '../app/build/*', 'app/www');

