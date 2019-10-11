<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title><?php echo $classify_title; ?>_<?php if(!empty($current_page)): ?>第<?php echo $current_page; ?>页_<?php endif; ?>小风筝</title>
    <meta name="keywords" content="<?php echo $classify_key; ?>" />
    <meta name="description" content="<?php echo $classify_des; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/groupkit.css">
    <link rel="stylesheet" href="/js/vendors/layui/css/layui.css"  media="all">
    <link rel="stylesheet" type="text/css" href="/css/light.css">
    <link rel="stylesheet" type="text/css" href="/css/share.min.css">
</head>
<body class="home">
    <div class="status-bar">
    <div class="content">
        <div class="order">
            <i class="layui-icon layui-icon-face-smile"></i> <span class="title">欢迎来到小风筝！</span>
        </div>
        <div class="cboth"></div>
    </div>
</div>
<div class="header" >
    <div class="head_div">
    <div class="layui-row layui-col-space30">
       <div class="layui-col-xs5 layui-col-sm2 layui-col-md2">
       <!--
       <a href="/" class="logo" style="margin-left: auto;margin-right: auto;">小风筝</a>
       -->
       <img class="logo" src="/images/logo.png" style="margin-left: auto;margin-right: auto;"/>
       </div>
       <div class="layui-col-xs6 layui-col-sm8 layui-col-md8">
            <div class="k_ind_d" style="margin-top: 30px;">
                <form class="k_2jvJJ k_mV0BM" data-test="nav-bar-search-form-form">
                <button title="Search Unsplash" class="k_2VoZY k_DWLeW" data-test="nav-bar-search-form-button">
                <svg class="k_2-tlh k_1azRR k_1mPD6" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false"><path d="M31 28.64l-7.57-7.57a12.53 12.53 0 1 0-2.36 2.36l7.57 7.57zm-17.5-6a9.17 9.17 0 1 1 6.5-2.64 9.11 9.11 0 0 1-6.5 2.67z"></path></svg>
                <span class="k_ind_sear">Search</span>
                </button>
                <div class="k_2ZbDJ">
                <input type="search" name="searchKeyword" placeholder="搜索你感兴趣的东西"  class="k_3q0cO k_3FYu1"  id="SEARCH_FORM_INPUT_nav-bar" title="Search Unsplash" autocapitalize="none" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" autocomplete="off" value="">
                </div>
            </form>
            </div>
        </div>
        <div class="layui-col-xs1 layui-col-sm1 layui-col-md1">
        <img class="qrcode" src="/images/qrcode.png" style="margin-left: auto;margin-right: auto;"/>
        </div>
    </div>
    </div>
</div>
    <div class="main">
        <div class="topbg">
            <div class="content">
                <div class="layui-row navi">
                     <div class="layui-col-md12">
                          <div class="layui-row" style="text-align: center;">
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'home'): ?>activ<?php endif; ?>">
                                <a href="/">
                                    <span class="title">首页</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'wangming'): ?>activ<?php endif; ?>">
                                <a href="/wangming/">
                                    <span class="title">网名</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'touxiang'): ?>activ<?php endif; ?>">
                                <a href="/touxiang/">
                                    <span class="title">头像</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'qianming'): ?>activ<?php endif; ?>">
                                <a href="/qianming/">
                                    <span class="title">签名</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'biaoqing'): ?>activ<?php endif; ?>">
                                    <a href="/biaoqing/">
                                    <span class="title">表情</span>
                                    </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'beijing'): ?>activ<?php endif; ?>">
                                    <a href="/beijing/">
                                    <span class="title">背景</span>
                                    </a>
                            </div>
                             <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'xiaoyouxi'): ?>activ<?php endif; ?>">
                                    <a href="/xiaoyouxi/">
                                    <span class="title">小游戏</span>
                                    </a>
                                    <img src="/images/xin.gif" style="position: absolute;top:-18px;right: 5px;" />
                            </div>
                             <div class="layui-col-xs3 layui-col-sm3 layui-col-md5">
                                    <a rel="nofollow">
                                    <span class="title" style="color: #74CEFE;">自定义</span>
                                    </a>
                            </div>
                     </div>
                     <!--
                     <div class="layui-row" style="text-align: center;">
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'home'): ?>activ<?php endif; ?>">
                                <a href="/">
                                    <span class="title">首页</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'music'): ?>activ<?php endif; ?>">
                                <a href="/music/">
                                    <span class="title">少儿音乐</span>
                                </a>
                            </div>
                     </div>
                     -->
                     </div>
                </div>
                   </div>
            </div>
     
            <div class="content" style="padding-top: 5px;">
                <div class="layui-row">
                    <div class="layui-col-md12">
                      <div class="layui-card">
                        <div class="layui-card-header k_header" style="color: <?php echo $classify_color; ?>;"> 
                            <div style="font-size: 1.4em;">
                                <?php echo $classify_name; ?>
                            </div>
                        </div>
                        <?php if(!empty($style)): ?>
                        <div class="layui-row" style="padding: 0 15px;">
                            <?php foreach($style as $sk=>$sr): ?>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1" style="font-size: 1em;">
                                <a href="/wangming/<?php echo $s_type; ?>/s?n=<?php echo $sr['style_n']; ?>" target="_blank">
                                    <div class="type_flag" style="background-color: <?php echo $sr['style_b_c']; ?>;">
                                    <span class="type_flag_font">
                                    <?php echo $sr['style_name']; ?>
                                    </span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <div class="layui-card-body" style="font-size: 16px;">
                            <?php foreach($netname as $k=>$r): ?>
                                <?php if($k%4==0): ?>
                                <div class="layui-row layui-col-space10">
                                <div class="layui-col-xs6 layui-col-sm4 layui-col-md3">
                                <div class="layui-row layui-col-space10">
                                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md12 netname<?php echo $k; ?>" style="font-size: 0.9em;">
                                        <?php echo $r['name']; ?>
                                        </div>
                                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md12" style="font-size: 1em;display: none;">
                                            <div class="layui-row">
                                                <div class="layui-col-xs2 layui-col-sm2 layui-col-md1 k_copy" title="复制" data-clipboard-action="copy" data-clipboard-target=".netname<?php echo $k; ?>" style="cursor: pointer;">
                                                <i class="fa fa-fw" style="color: #2AA9E0;">&#xf0ea;</i>
                                                </div>
                                                <div class="layui-col-xs2 layui-col-sm2 layui-col-md1">
                                                <i class="fa fa-fw" style="color: #2AA9E0;">&#xf044;</i>
                                                </div>
                                                <div class="layui-col-xs2 layui-col-sm2 layui-col-md1 k_like" data-source="<?php echo $r['id']; ?>" style="cursor: pointer;">
                                                <i class="fa fa-fw icon_unlike<?php echo $r['id']; ?>" style="color: #2AA9E0;<?php if($r['likenum'] > 0): ?>display: none;<?php endif; ?>">&#xf08a;</i>
                                                <i class="fa fa-fw icon_like<?php echo $r['id']; ?>" style="color: #2AA9E0;<?php if($r['likenum'] == 0): ?>display: none;<?php endif; ?>">&#xf004;</i>
                                                </div>
                                                <div class="layui-col-xs2 layui-col-sm2 layui-col-md1 like<?php echo $r['id']; ?>" style="<?php if($r['likenum'] == 0): ?>display: none;<?php endif; ?>">
                                                <?php echo $r['likenum']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="layui-col-xs6 layui-col-sm4 layui-col-md3">
                                    <div class="layui-row layui-col-space10">
                                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md12 netname<?php echo $k; ?>" style="font-size: 0.9em;">
                                        <?php echo $r['name']; ?>
                                        </div>
                                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md12" style="font-size: 1em;display: none;">
                                        <div class="layui-row">
                                            <div class="layui-col-xs2 layui-col-sm2 layui-col-md1 k_copy" title="复制" data-clipboard-action="copy" data-clipboard-target=".netname<?php echo $k; ?>" style="cursor: pointer;">
                                            <i class="fa fa-fw" style="color: #2AA9E0;">&#xf0ea;</i>
                                            </div>
                                            <div class="layui-col-xs2 layui-col-sm2 layui-col-md1">
                                            <i class="fa fa-fw" style="color: #2AA9E0;">&#xf044;</i>
                                            </div>
                                            <div class="layui-col-xs2 layui-col-sm2 layui-col-md1 k_like" data-source="<?php echo $r['id']; ?>" style="cursor: pointer;">
                                            <i class="fa fa-fw icon_unlike<?php echo $r['id']; ?>" style="color: #2AA9E0;<?php if($r['likenum'] > 0): ?>display: none;<?php endif; ?>">&#xf08a;</i>
                                            <i class="fa fa-fw icon_like<?php echo $r['id']; ?>" style="color: #2AA9E0;<?php if($r['likenum'] == 0): ?>display: none;<?php endif; ?>">&#xf004;</i>
                                            </div>
                                            <div class="layui-col-xs2 layui-col-sm2 layui-col-md1 like<?php echo $r['id']; ?>" style="<?php if($r['likenum'] == 0): ?>display: none;<?php endif; ?>">
                                            <?php echo $r['likenum']; ?>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($k%4==3): ?>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if(count($netname)%4 != 0): ?>
                            </div>
                            <?php endif; ?> 
                            <?php if(!empty($qrcode)): ?>
                            <div class="layui-row qrcode" style="margin-bottom: 10px;">
                                <div class="layui-col-xs12 layui-col-sm12 layui-col-md12" style="text-align: center;">
                                <a href="<?php echo $qrcode; ?>" class="swipebox">
                                <img src="<?php echo $qrcode; ?>" alt="扫描二维码手机访问" title="扫描二维码手机访问<?php echo $classify_name; ?>"/>
                                </a>
                                <div class="info_title">扫描上方二维码，可手机访问<?php echo $classify_name; ?></div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="layui-row" style="margin-bottom: 10px;text-align: center;">
                                <div class="info_title" style="color: #333;">分享当前网页到</div>
                                <div class="share-component" data-disabled="google,twitter,facebook,linkedin" data-description="一键分享,快乐传递"></div>
                            </div>
                            <?php if(!empty($page)): ?>
                                <div class="pagination">
                                <?php echo $page; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
            </div>
         </div>
    </div>
    <div class="footer">
    <div class="content">
        <ul class="company-details">
            <li class="first-li">&copy; 2018 小风筝</li>
            <li class="last-li">时间轴：<a href="/others/timeshaft.html">大事记</a></li>
            <li class="last-li"><a href="/others/tall.html">后言</a></li>
        </ul>
        <div class="cboth"></div>
    </div>
</div>
    <script src="/js/vendors/layui/layui.js" charset="utf-8"></script>
    <script src="/js/jquery-1.9.1.min.js" charset="utf-8"></script>
    <script src="/js/clipboard.min.js"></script>
    <script src="/js/share.min.js" charset="utf-8"></script>
<script>
//Demo
layui.use(['form','jquery'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,$= layui.jquery;
  //监听提交
  form.on('submit(formDemo)', function(data){
    var s_string;
    if (data.field.w_type != '' || data.field.w_style != '' || data.field.w_num !='')  {
        s_string = 'search?';
        if (data.field.w_type) {
            s_string = s_string + 't='+data.field.w_type;
        }
        if (data.field.w_style) {
            if (data.field.w_type == ''){
                s_string = s_string + 's='+data.field.w_style;
            }else {
                s_string = s_string + '&s='+data.field.w_style;
            }
        }
        if (data.field.w_num) {
            if (data.field.w_style == '' && data.field.w_type == '') {
                s_string = s_string + 'n='+data.field.w_num;
            }else {
                s_string = s_string + '&n='+data.field.w_num;
            }
        } 
    } else {
        s_string = window.location.href;
    }
    window.location.href = s_string;
    return false;
  });
    $('.k_like').click(function(){
        var netname_id = $(this).attr('data-source');
        console.log(netname_id);
        $.post("/api.php?m=102",{netname_id:netname_id},function(res){
			if(res.status){
               if (res.status == 1) {
                    var ori_like = $('.like'+netname_id).html();
                    $('.icon_unlike'+netname_id).hide();
                    $('.icon_like'+netname_id).show();
                    ori_like++;
                    $('.like'+netname_id).html(ori_like);
                    $('.like'+netname_id).show();
               } 
			}
    	},'json');
     })
    var clipboard = new ClipboardJS('.k_copy');
    clipboard.on('success', function(e) {
         layer.msg('复制成功', {time: 1000});
    });
    clipboard.on('error', function(e) {
        console.log(e);
    }); 
});
</script>
</body>
</html>