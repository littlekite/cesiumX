<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="/js/vendors/layui/css/layui.css"  media="all">
  <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
<div id="300740" style="font-size: 24px;width: 888px;height: 100%;margin-left: auto;margin-right: auto;margin-top: 400px;text-align: center;"></div>      
<script src="/js/vendors/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['form', 'layedit', 'laydate','jquery'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  var $= layui.jquery;
     setInterval(function() {
         $.post("http://www.k.com/manage/caiji300",'1=1',function(res){
        	$("#300740").html(res);
        },'json');
    }, 5000);
   

  
  
});
</script>

</body>
</html>