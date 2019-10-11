<!DOCTYPE html>
<html>
<head>
	<title>404错误!</title>
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/groupkit.css">
    <link rel="stylesheet" href="/js/vendors/layui/css/layui.css"  media="all">
<style type="text/css">
* {
	box-sizing: border-box;
}
.body {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 60vh;
}
.outter {
	border: 7px solid #333;
	width: 160px;
	height: 90px;
	display: flex;
	padding: 5px;
	border-radius: 5px;
	box-shadow: 0px 5px 15px rgb(25, 25, 25, 0.6);
	cursor: pointer;
}
.pole {
	background-color: #333;
	height: 30px;
	width: 7px;
	border-radius: 0 5px 5px 0;
	cursor: pointer;
   	box-shadow: 0px 5px 15px rgb(25, 25, 25, 0.6);
}
	
.outter:hover{
    box-shadow: 0px 10px 50px rgb(25, 25, 25, 0.7);
}
    
.inner {
	background-color: #333;
	height: 100%;
	opacity: 0;
	flex: 1;
	animation: charging-1 3s infinite;
	border-radius: 2px;
    text-align: center;
    color: white;
    font-size: 55px;
    text-shadow: 0px 0px 10px;
    font-family: monospace;
}
.inner:nth-child(2) {
	margin: 0 3px;
	animation: charging-2 3s infinite;
}
.inner:nth-child(3) {
	animation: charging-3 3s infinite;
}
@keyframes charging-1 {
	33%, 100% {
		opacity: 1;
	}
}
@keyframes charging-2 {
	0%, 33% {
		opacity: 0;
	}
	66%, 100% {
		opacity: 1;
	} 
}
@keyframes charging-3 {
	0%, 66% {
		opacity: 0;
	}
	100% {
		opacity: 1;
	}
}
</style>
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
     
<div class="body content" style="background: #fff;">
<div class="outter">
	<div class="inner">4</div>
	<div class="inner">0</div>
	<div class="inner">4</div>
</div>
<div class="pole"></div>
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