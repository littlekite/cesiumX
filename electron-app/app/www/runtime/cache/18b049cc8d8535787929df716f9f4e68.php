
<div id="div1">
    <p>欢迎使用 wangEditor 编辑器</p>
</div>
<button id="btn1">获取html</button>
<button id="btn2">获取text</button>
<button id="btn3">提交</button>

<script type="text/javascript" src="/js/vendors/wangEditor/wangEditor.min.js"></script>
<script src="/js/jquery-1.9.1.min.js" charset="utf-8"></script>
<script type="text/javascript">

    var E = window.wangEditor
    var editor = new E('#div1')
    editor.customConfig.uploadImgServer = '/api.php?m=9999'  // 上传图片到服务器

    editor.create()

    document.getElementById('btn1').addEventListener('click', function () {
        // 读取 html
        alert(editor.txt.html())
    }, false)

    document.getElementById('btn2').addEventListener('click', function () {
        // 读取 text
        alert(editor.txt.text())
    }, false)
    document.getElementById('btn3').addEventListener('click', function () {
       $.ajax({
           type: "POST",
           url: "/api.php?m=10",
           data: "content="+encodeURIComponent(editor.txt.html()),
           success: function(msg){
                alert( "Data Saved: " + msg );
           }
       });
    }, false)
</script>