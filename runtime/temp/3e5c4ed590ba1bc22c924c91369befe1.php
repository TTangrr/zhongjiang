<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\cooperation\technical.html";i:1499323785;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\header.html";i:1499236209;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\footer.html";i:1498139237;}*/ ?>
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
                <span class="mianT_span">技术支持 | TECHNOLOGY</span>
            </div>
            <div class="feedbck">
                <div class="newsxx">
                    一、中江柚品种特性及发展情况<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;中江柚属于文旦柚系品种，引自福建，首栽于我市永安乡，母树在中江永安乡场镇。1993年参加四川省优质果品评选，以总分83.6分被评为省优果品，近年来得到了中江县委、县政府的高度重视，得到了快速发展，直到2000年底，共发展中江柚250万株左右，但产量只有80万个左右，主要集中在子金乡印台村。该品种单果重2.5－3斤左右，倒卵圆形，金黄色，果上有油胞、芳香，果皮薄，果肉脆嫩化渣、汁多味甜，可溶性固形物达11.6%，种子少或无核；果实较耐贮藏；属于早熟品种，9月下旬-10月上旬成熟；树势中庸，易栽培，易丰产，一年栽，3-4年可试花挂果，6-7年可丰产，亩产可达5000斤以上。其缺点是易裂果，裂果率可达10-20%，故应选择6-7月份水源能解决的地方发展栽培。<br />
                    二、中江柚丰产优质栽培技术<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;为了使中江柚尽快投产，产生效益，为我们致富奔小康作出贡献，我们就应学习、掌握和采用先进的科学的中江柚栽培技术，该项技术可用八个字来概括，即：种（良种壮苗）、建（高标准建园）、肥（科学施肥）、水（适时排灌）、剪（合理修剪）、保（保花保果）、治（加强病虫防治）、促（控长促花）。具体来讲：<br />
                    （一）积极推广优良品种，培育发展良种壮苗<br />
                    良种壮苗是中江柚获得“三高”的物质基础，首先必须加强对中江柚的提纯选优，从中选出裂果率低或不裂果、丰产稳产优质的优选单株，进行繁殖推广；其次要培育良种壮苗，发展栽植良种壮苗，杜绝劣等苗出圃。苗木质量好坏，直接影响到成活率、树体生长发育、丰产性和果实品质等，良种壮苗要求：（1）无检疫性病虫害，如黄龙病、溃疡病、果实蝇等；（2）品种纯正，砧木优良，嫁接部位愈合良好；（3）苗木生长健壮，主干端直，一般苗高40厘米以上，茎粗0.8厘米以上，并有3个以上分枝，每枝长20厘米以上；（4）根系完整，主侧根发达，一般主根长16.5厘米以上，并且有3-4条侧根，须根发达。<br />
                    （二）高标准建园，确保质量效益<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;柚树根深树高，经济寿命长，几十年上百年固定在同一地点生长结果。因此，新建柚园只有始终坚持高标准、高质量建园，才能获得高产、优质和高效益。<br />
                    1、应选择坡度在25度以下的山地、丘陵和排灌方便、土壤疏松湿润的地方建园。<br />
                    2、整地时必须全面修筑等高反坡梯田和保土贮水竹节沟及梯田外缘作梯梗，并种上香根草、百喜草等。<br />
                    3、新建园应坚持“三大一篓”，即大穴、大肥、大苗和营养篓（袋）假植。所谓大穴，就是挖深、宽一米的壕沟或一米见方的穴；大肥，就是每立方米分3-4层填埋20公斤稻草或绿肥、厩肥100-150斤、石灰1-1.5斤、磷肥1-1.5公斤、麸饼1-1.5公斤作基肥；大苗，按良种壮苗出圃；营养篓（袋）假植带土移栽（营养土配置，以菜园土、水稻田表土、干塘泥、火土为基础，每立方土中加入人粪2担、磷肥2-3公斤、猪牛粪3-4担拌匀成堆，外用稀泥密封堆沤30-45天，9月份用营养篓（袋）装营养土假植小苗，第二年9月份带土移栽）。                </div>
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
