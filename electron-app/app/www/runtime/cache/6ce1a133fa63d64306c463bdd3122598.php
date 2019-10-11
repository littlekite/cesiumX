<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>小风筝-少儿舞蹈、音乐、美术，1对1艺术教育服务平台</title>
    <meta name="keywords" content="小风筝，少儿舞蹈，少儿美术，1对1，艺术教育，教育平台，乐器学习，少儿表演" />
    <meta name="description" content="小风筝1对1艺术教育平台以培养少儿的艺术天赋为使命，提供了全门类的少儿艺术培养，这里可以找到专属的艺术老师，也可以获取优质的在线艺术教育内容！" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/groupkit.css">
    <link rel="stylesheet" href="/js/vendors/layui/css/layui.css"  media="all">
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
       <div class="layui-col-xs6 layui-col-sm8 layui-col-md8 layui-col-md-offset1">
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
        <div class="layui-col-xs1layui-col-sm2 layui-col-md2">
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
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'music'): ?>activ<?php endif; ?>">
                                <a href="/music/">
                                    <span class="title">少儿音乐</span>
                                </a>
                            </div>
                     </div>
                     </div>
                </div>
                   </div>
            </div>
     
        <div class="content" style="background: #fff;">
            <div class="layui-row">
                <div class="layui-col-md12">
                  <div class="layui-card">
                    <div class="layui-card-body" style="font-size: 16px;padding-left: 22px;">
                      <h2 style="text-align: center;margin-top: 10px;"><?php echo $article['title']; ?></h2>
                      <?php echo htmlspecialchars_decode($article['content']); ?>
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
</body>
</html>