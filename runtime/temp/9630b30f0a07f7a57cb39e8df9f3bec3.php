<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\dingdan\dingdan.html";i:1499236958;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\header.html";i:1499335776;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\footer.html";i:1498139237;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="author" content="$Id$" />
    <meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
    <meta http-equiv="keywords" content="关键字" />
    <meta http-equiv="description" content="描述" />
    <link href="__STATIC__/index/css/shop_cart.css" type="text/css" rel="stylesheet" />
    <link href="__STATIC__/index/css/css.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="__STATIC__/index/js/jquery.min.js"></script>
    <!--<script type="text/javascript" src="__STATIC__/index/js/scrolltopcontrol.js"></script>-->
    <link type="text/css" href="__STATIC__/index/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />

    <title>首页</title>
</head>

<body>
<div class="centBox">
    <div class="top">
        <?php if(session("user")): ?>
     <span>   <a>欢迎<?php echo session("user.username"); ?>登录</a>
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

<div class="route">
    <div class="route_div">
        <span class="route_span1">您的位置：</span>
        <span class="route_span2">|</span>
        <span class="route_span3"><a href="#" target="_blank" class="blue">首页</a></span>
        <span class="route_span4">购物车 </span>
    </div>
</div>
<!--route end-->

<div class="ruijie_main">
    <div class="shop_cart_title"><span>购物车</span></div><!--shop_cart_title end-->
    <div class="first_step">第一步：确认礼品</div>

    <div class="gift_ok_main">

        <div class="gift_ok_main_title">
            <span class="gift_title_1">No.</span>
            <span class="gift_title_2">产品图片</span>
            <span class="gift_title_3">产品名称</span>
            <span class="gift_title_4">售价</span>
            <span class="gift_title_5">订购数量</span>
            <span class="gift_title_6">金额</span>
            <span class="gift_title_7">删除</span>
            <div class="cli"></div>
        </div><!--gift_ok_main_title-->


        <!--1-->
        <div class="gift_ok_main_major">

            <div class="gift_number">1</div>
            <div class="gift_pic"><a href="#" target="_blank"><img src="images/cart_img1.gif" width="65" height="65"></a></div>
            <div class="gift_name"><a href="#" target="_blank" c>金属蓝牙耳机</a></div>
            <div class="gift_price">￥198.00</div>
            <div class="gift_amount"><span><a href="#" class="Remove flt"></a><input type="text" value="1" class="cartnum flt"><a href="#" class="Plus flt"></a></span></div>
            <div class="gift_money">￥198.00</div>
            <div class="gift_delete"><a href="#">删除</a></div>

            <div class="cli"></div>
        </div><!--gift_ok_main_major end-->

    </div><!--gift_ok_main end-->

    <div class="gift_total">合计： <span>￥<b>396</b>.00</span></div><!--gift_total end-->


    <div class="zuiz_botton"><a href="#">下一步，去结算&nbsp;&nbsp;<img src="images/right_arrow.png"></a> <a href="#" class="blue_bj" ><img src="images/left_arrow.png">&nbsp;&nbsp;继续购物</a></div>
</div>
<!--ruijie_main end-->



<br />
<br />
<br />
<br />



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
