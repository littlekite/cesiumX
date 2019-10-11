<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>小游戏_小风筝</title>
    <meta name="keywords" content="小风筝，小游戏" />
    <meta name="description" content="小游戏是小风筝的娱乐模块，这里可以玩一些轻松的小游戏" />
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
    <div class="layui-row">
       <div class="layui-col-xs5 layui-col-sm2 layui-col-md2">
       <a href="/" class="logo" style="margin-left: auto;margin-right: auto;">小风筝</a>
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
                                    <span class="icon"><i class="fa fa-fw">&#xf015;</i></span>
                                    <span class="title">首页</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'wangming'): ?>activ<?php endif; ?>">
                                <a href="/wangming/">
                                    <span class="icon"><i class="fa fa-fw">&#xf031;</i></span>
                                    <span class="title">网名</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'touxiang'): ?>activ<?php endif; ?>">
                                <a href="/touxiang/">
                                    <span class="icon"><i class="fa fa-fw">&#xf007;</i></span>
                                    <span class="title">头像</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'qianming'): ?>activ<?php endif; ?>">
                                <a href="/qianming/">
                                    <span class="icon"><i class="fas fa-file-signature"></i></span>
                                    <span class="title">签名</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'biaoqing'): ?>activ<?php endif; ?>">
                                    <a href="/biaoqing/">
                                    <span class="icon"><i class="fas fa-smile-wink"></i></span>
                                    <span class="title">表情</span>
                                    </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'beijing'): ?>activ<?php endif; ?>">
                                    <a href="/beijing/">
                                    <span class="icon"><i class="fa fa-fw">&#xf03e;</i></span>
                                    <span class="title">背景</span>
                                    </a>
                                    <img src="/images/xin.gif" style="position: absolute;top:-18px;right: 5px;" />
                            </div>
                             <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'xiaoyouxi'): ?>activ<?php endif; ?>">
                                    <a href="/xiaoyouxi/">
                                    <span class="icon"><i class="fas fa-gamepad"></i></span>
                                    <span class="title">小游戏</span>
                                    </a>
                            </div>
                             <div class="layui-col-xs3 layui-col-sm3 layui-col-md5">
                                    <a rel="nofollow">
                                    <span class="icon"><i class="fa fa-fw" style="color: #74CEFE;">&#xf085;</i></span>
                                    <span class="title" style="color: #74CEFE;">自定义</span>
                                    </a>
                            </div>
                     </div>
                     </div>
                </div>
            </div>
        </div>
                <div class="content" style="padding-top: 5px;">
               <div class="layui-row">
                    <div class="layui-col-md12">
                      <div class="layui-card">
                       <div class="layui-card-header k_header" style="color: #ED227B;">
                            <div style="font-size: 1.4em;">
                                小游戏
                            </div>
                        </div>
                        <!--
                        <div class="layui-row" style="padding: 0 15px;">
                        </div>
                        -->
                        <div class="layui-card-body">
                            <div class="layui-row layui-col-space10" style="margin-bottom: 15px;">
                            <div class="layui-col-xs6 layui-col-sm4 layui-col-md3" style="text-align: center;">
                            <a href="/xiaoyouxi/s?n=car">
                            <img src="\uploads\game\icon\car.png"  width="100" height="100"/>
                            </a>
                            <div class="info_title">极速飞车</div>
                            </div>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="footer">
    <div class="content">
        <div class="copy">
            <p>小风筝是一个专业、强大的个性定制网站.</p>
        </div>
        <ul class="company-details">
            <li class="first-li">&copy; 2018 小风筝</li>
            <li class="last-li">时间轴：<a href="/others/timeshaft.html">大事记</a></li>
        </ul>
        <div class="cboth"></div>
    </div>
</div>
    <script src="/js/vendors/layui/layui.js" charset="utf-8"></script>
</body>
</html>