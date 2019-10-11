<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title><?php echo $article['title']; ?>_小风筝</title>
    <meta name="keywords" content="<?php echo $article['keywords']; ?>" />
    <meta name="description" content="<?php echo $article['description']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/groupkit.css">
    <link rel="stylesheet" href="/js/vendors/layui/css/layui.css"  media="all">
    <link rel="stylesheet" type="text/css" href="/css/swipebox.css">
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
                                    <span class="icon"><i class="fa fa-fw">&#xf040;</i></span>
                                    <span class="title">签名</span>
                                </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1 <?php if(MOUDEL_NAME== 'biaoqing'): ?>activ<?php endif; ?>">
                                    <a href="/biaoqing/">
                                    <span class="icon"><i class="fa fa-fw fa-drupal"></i></span>
                                    <span class="title">表情</span>
                                    </a>
                                    <img src="/images/xin.gif" style="position: absolute;top:-18px;right: 5px;" />
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1">
                                    <a rel="nofollow">
                                    <span class="icon"><i class="fa fa-fw" style="color: #74CEFE;">&#xf03e;</i></span>
                                    <span class="title" style="color: #74CEFE;">背景</span>
                                    </a>
                            </div>
							<!--
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1">
                                    <a rel="nofollow">
                                    <span class="icon"><i class="fa fa-fw fa-stumbleupon-circle"></i></span>
                                    <span class="title">搭配</span>
                                    </a>
                            </div>
                            <div class="layui-col-xs3 layui-col-sm3 layui-col-md1">
                                    <a rel="nofollow">
                                    <span class="icon"><i class="fa fa-fw">&#xf0a2;</i></span>
                                    <span class="title">动态</span>
                                    </a>
                            </div>
							-->
                             <div class="layui-col-xs3 layui-col-sm3 layui-col-md1">
                                    <a rel="nofollow">
                                    <span class="icon"><i class="fa fa-fw" style="color: #74CEFE;">&#xf075;</i></span>
                                    <span class="title" style="color: #74CEFE;">评论</span>
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
            <blockquote class="index-tips"><img style="margin-top: -5px;margin-right: 3px;" src="images/hot.gif" >精选：<a href="/<?php echo $article['id']; ?>.html"><?php echo $article['title']; ?></a></blockquote>
               <div class="layui-row layui-col-space5">
                <div class="layui-col-md12">
                  <div class="layui-card"  style="border: 1px solid #dedede;">
                    <h2 class="layui-card-header" style="font-size: 1.4em;color: #333;font-weight: bold;height: auto;"><?php echo $article['title']; ?></h2>
                    <div class="layui-card-body" style="font-size: 16px;">
                      <?php if($article['rele_type']==2): ?>
                      <?php foreach($article['c_list'] as $k=>$r): ?>
                            <?php if($k%6==0): ?>
                            <div class="layui-row layui-col-space5" style="margin-bottom: 15px;">
                            <div class="layui-col-xs6 layui-col-sm4 layui-col-md2" style="text-align: center;">
                            <a href="<?php echo $r['headpic']; ?>" class="swipebox">
                            <img src="<?php echo $r['headpic']; ?>" alt="<?php echo $r['alt']; ?> <?php echo $r['title']; ?>" title="<?php echo $r['title']; ?>" class="headpic"/>
                            </a>
                            <div class="info_title"><?php echo $r['title']; ?></div>
                            </div>
                            <?php else: ?>
                            <div class="layui-col-xs6 layui-col-sm4 layui-col-md2" style="text-align: center;">
                            <a href="<?php echo $r['headpic']; ?>" class="swipebox">
                            <img src="<?php echo $r['headpic']; ?>" alt="<?php echo $r['alt']; ?> <?php echo $r['title']; ?>" title="<?php echo $r['title']; ?>" class="headpic"/>
                            </a>
                            <div class="info_title"><?php echo $r['title']; ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($k%6==5): ?>
                            </div>
                            <?php endif; ?>
                      <?php endforeach; ?>
                      <?php else: ?>
                        <?php foreach($article['c_list'] as $k=>$r): ?>
                            <?php if($k%4==0): ?>
                            <div class="layui-row layui-col-space10" style="margin-bottom: 15px;">
                            <div class="layui-col-xs6 layui-col-sm4 layui-col-md3" style="text-align: center;">
                            <a href="<?php echo $r['expresstion']; ?>" class="swipebox">
                            <img src="<?php echo $r['expresstion']; ?>" alt="<?php echo $r['alt']; ?> <?php echo $r['title']; ?>" title="<?php echo $r['title']; ?>" width="<?php echo $r['w']; ?>" height="<?php echo $r['h']; ?>"/>
                            </a>
                            <div class="info_title"><?php echo $r['title']; ?></div>
                            </div>
                            <?php else: ?>
                            <div class="layui-col-xs6 layui-col-sm4 layui-col-md3" style="text-align: center;">
                            <a href="<?php echo $r['expresstion']; ?>" class="swipebox">
                            <img src="<?php echo $r['expresstion']; ?>" alt="<?php echo $r['alt']; ?> <?php echo $r['title']; ?>" title="<?php echo $r['title']; ?>" width="<?php echo $r['w']; ?>" height="<?php echo $r['h']; ?>" />
                            </a>
                            <div class="info_title"><?php echo $r['title']; ?></div>
                            </div>
                            <?php endif; ?>
                            <?php if($k%4==3): ?>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                      <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                      <?php echo $article['description']; ?>
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
            <li>QQ: <a href="qq:+1026431088@qq.com" class="telephone"><span>1026431088</span></a></li>
            <li class="last-li">WeChat：<a href="wechat:yankuan2018">yankuan2015</a></li>
            <li class="last-li">时间轴：<a href="/others/timeshaft.html">大事记</a></li>
        </ul>
        <div class="cboth"></div>
    </div>
</div>
    <script src="/js/vendors/layui/layui.js" charset="utf-8"></script>
    <script src="/js/jquery-1.9.1.min.js" charset="utf-8"></script>
    <script src="/js/jquery.swipebox.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
  	$('.swipebox').swipebox();
});
</script>
</body>
</html>