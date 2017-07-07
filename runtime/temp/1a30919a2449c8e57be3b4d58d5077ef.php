<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\cooperation\introduce.html";i:1499323785;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\header.html";i:1499236209;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\footer.html";i:1498139237;}*/ ?>
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
				<div class="lanmu">
					<ul>
						<li><a href="<?php echo url('cooperation/introduce'); ?>">合作社介绍</a></li>
						<li><a href="<?php echo url('product/product'); ?>">产品介绍</a></li>
						<li><a href="<?php echo url('cooperation/technical'); ?>" class="xuanz">技术支持</a></li>
						<li><a href="<?php echo url('cooperation/industry'); ?>">行业前景</a></li>
						<li><a href="<?php echo url('cooperation/story'); ?>">致富故事</a></li>
						<li><a href="<?php echo url('cooperation/production'); ?>">生产基地</a></li>
					</ul>
				</div>
			</div>
			<div class="dianhua">
				<div class="dianhua_top">联系电话</div>
				<div class="dianhua_text">
					联  系  人：陈波 （总裁） <br />
					电       话 ：86 0838 7102727<br />
					移动电话 ：	138-8180-1576<br />
					传       真 ：86 0838 7102771<br />
					地       址 ：	中国 四川 德阳市四川省德阳市中江县双龙镇                </div>
			</div>
		</div>
		<div class="neiyeR">
			<div class="neiBT">
				<span class="mianT_span">合作社介绍 | INTRODUCTION</span>
			</div>
			<div class="feedbck">
				<div class="newsxx">
					<strong>宏波养殖实业有限公司</strong>创立于2009年，是中江县一家集养殖、种植、餐饮、地产、矿产和网络为一体的多元化民营企业。现有员工122人，其中高级技术人员及管理人员15人。公司自成立以来，本着以诚信为本求实创新、勇于开拓的精神，大力进行企业经营结构调整，为力争三年内成为中江的龙头企业，五年内成为四川知名企业，十年后成为上市公司的远大目标而奋斗。<br />
					一、养殖业：<br />
					肉牛基地于2009年元月正式启动，基地位于县城南面20余公里，距离省会成都100公里，有省道罗桂路穿行而过的中江县双龙镇。基地采用了公司加农户的发展模式，以农业产业化为发展思路。力争使该基地发展成为年出栏肉牛2000余头以上，创产值逾2000余万元的大型养殖基地。目前基地配有畜牧师3人，具体负责指导农户牛舍建设、青饲料储藏、疫病防治和饲料搭配等工作。<br />
					二、种植业：<br />
					宏波柚子林生态农业观光园占地150余亩，离县城仅2公里，位于东北镇喜胜村是中江县最大的中江柚和福建沙田柚的种植基地，年产柚子50至100吨。现有高级农艺师1人，助理农艺师2人，技工2人，目前基地正计划改良品种，力争年产值能达到100余万元。为了提高土地利用价值，同时该基地正在筹建中江食用菌核心试范区。利用牛粪开发，生产食用菌。预计到2011年初，该园将建成集养殖。种植，观光，休闲为一体的现代循环农业经济园。<br />
					三、餐饮业：<br />
					蟠桃园休闲庄位于中江县通济镇，占地20余亩，交通便利，是集餐饮、休闲、观光为一体的农家乐，其中有高级厨师2名，中级厨师3名，员工7人，能同时容纳300余人用餐。自2009年元月开业以来，相继推出三月赏桃花，六月品“蟠桃”的主题活动，吸引了大批餐饮游客。现日均营业额千元以上，年产值百万元以上。<br />
					四、矿产业：<br />
					公司现在西藏山南拥有一9平方公里的矿山，经专家仔细勘测，已探明有丰富的锑矿资源，目前正在开采中。预计年产锑矿8万吨，总产值近亿元。<br />
					五、地产业：<br />
					为了拉开向地产业进军的序幕，公司现已在中江县双龙镇征地65亩，进行农村场镇综合建设，届时将建成集农贸市场、街道、商品房、商铺、为一体的农村新镇。此项目现在已经破土动工，总投资3000多万元，预计将于2011年全面竣工。同时在永兴镇括地59亩投入小城镇建设。此项目正在运行中。<br />
					六、网络运作：<br />
					2009年8月，公司投资8万余元自主建成3G网络“四川肉牛网”和“四川养殖网”。这也标志着公司将战略思路调整到与互联网接轨，提高信息更新速度，加速发展养殖业的宏伟目标的开始。同时，四川肉牛网与四川养殖网也将被推广为四川地区养殖行业的门户网站，为广大养殖企业和养殖户提供一个买卖、咨询、发布广告的综合信息平台。目前网站已经建设成功，在正常运营中。                </div>
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
