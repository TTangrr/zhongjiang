<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\hydt\index.html";i:1499134021;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\header.html";i:1499145400;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\footer.html";i:1498139237;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="author" content="$Id$" />
    <meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
    <meta http-equiv="keywords" content="关键字" />
    <meta http-equiv="description" content="描述" />
    <link type="text/css" href="__STATIC__/index/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />

    <title>首页</title>
</head>

<body>
<div class="centBox">
    <div class="top">
        <?php if(session("user")): ?>
     <span>   <a>欢迎<?php echo session("user"); ?>登录</a>
        <a href="<?php echo url('user/logout'); ?>">退出</a>
        <?php else: ?>
      【<a href="<?php echo url('user/login'); ?>">登陆管理</a> 】
         <?php endif; ?>
            【<a href="<?php echo url('bis/register/index'); ?>">申请入驻</a>】
            【<a href="#">前往采购</a>】  【<a href="#">联系我们</a>】</span>
        您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888
    </div>
    <div class="top2">
        <div class="top2R">
            <div class="soru">
                <input name="" type="text" class="soru_input" />
            </div>
            <input name="" type="submit" class="soru_banu" />
        </div>
        <div class="logo">
            <a href="#" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>
<div class="nav">
    <div class="nav_nei">
        <div class="natebia_ji"></div>
        <div class="natebia"><a href="<?php echo url('cooperation/introduce'); ?>" class="natebia_a">特别推荐</a></div>
        <div class="navR">
            <ul>
                <?php if(is_array($dao) || $dao instanceof \think\Collection || $dao instanceof \think\Paginator): if( count($dao)==0 ) : echo "" ;else: foreach($dao as $key=>$vo): ?>
                <li><a href="<?php echo url($vo['url'],['id'=>$vo['id']]); ?>" <?php if(input('param.id')==$vo['id']): ?> class="xuanz" <?php endif; ?>><?php echo $vo['title']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>

<div class="centBox">
	<div class="neiye clearfix">
    	<div class="neiyeL">
        	<div class="banL noel">
       	 		 <div class="yuyue">
       		  		<p><a href="#"><img src="__STATIC__/index/text/1.gif" width="232" height="213" alt="" />
             		 中江瓜蒌</a></p>
              		<p><a href="<?php echo url('cooperation/product'); ?>" class="yuyue_a"></a></p>
          		</div>
      		</div>
            <div class="hezuo">
           	<div class="hezuo_top">推荐合作单位</div>
                <div class="hezuo_text">
                    <?php if(is_array($hzs) || $hzs instanceof \think\Collection || $hzs instanceof \think\Paginator): $i = 0; $__LIST__ = $hzs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="#"><img src="<?php echo $vo['logo']; ?>" width="206" height="60" alt="" /></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
          </div>
        </div>
        <div class="neiyeR">
        	<div class="neiBT">
            	<span class="mianT_span">行业信息 | INFORMATION </span>
            </div>
            <div class="neiText">
            	<div class="neiIfino">
                	<ul>
                    	<li class="l"><a href="#" class="xuanz">最新信息</a>|</li>
                        <li class="l"><a href="#">行业信息</a>|</li>
                        <li class="l"><a href="#">展会信息</a>|</li>
                        <li class="l"><a href="#">市场信息</a></li>
                    </ul>
                </div>
                <div class="haide">
                	<div class="haide_te">
                        <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    	<a href="#"><img src="<?php echo $vo['logo']; ?>" width="208" height="142" alt="" /></a>
                    	<h1><a href="#" class="haide_h1"><?php echo $vo['title']; ?></a></h1>
                      <?php echo $vo['content']; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="nawsTe">
                    	<ul>
                        	<li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                            <li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                            <li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                            <li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                            <li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                            <li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                            <li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                            <li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                            <li><span>2013-09-21</span><a href="#">&middot;求购玉米小麦大豆高粱</a> </li>
                        </ul>
                    </div>
                    <div class="feiye">
                    	<ul>
                        	<li><input type="submit" value="确定" class="feiye_ban" />
                            <li>到第<input name="" type="text" class="feiye_ingp" />页</li>
                            <li><a href="#">下一页</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#" class="xuanz">1</a></li>
                        	<li><a href="#" class="feiye_hs">上一页</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

<div class="fooer">
	<div class="fooer_nei">
   	  服务中心  |  联系我们  |  平台介绍  |  网站地图  |  邮件反馈  |  友情链接<br />
    	客服热线：0838-8888888  平台名称：展销网 <br />
   	中江县名优产品展销　版权所有 蜀ICP备 05000282号-2
 	<p><a href="#"><img src="__STATIC__/index/images/jg.gif" /></a></p>   
    </div>
</div>
</body>
</html>
