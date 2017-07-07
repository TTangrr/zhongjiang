<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\cooperation\product.html";i:1499320703;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\header.html";i:1499236209;s:79:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\publics\footer.html";i:1498139237;}*/ ?>
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
                        <li><a href="<?php echo url('cooperation/product'); ?>">产品介绍</a></li>
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
                <span class="mianT_span">产品介绍 | PRODUCTS</span>
            </div>
            <div class="product">
                <div class="product_top">
                    <div class="product_name">
                        <img src="<?php echo $shangp['logo']; ?>" width="396" height="277" alt="" />
                    </div>
                    <div class="product_info">
                        <p class="prod_bt"><?php echo $shangp['title']; ?></p>
                        <p>产品类别：	<?php echo $shangp['p_category']; ?></p>
                        <p>产品规格：	<?php echo $shangp['p_guige']; ?></p>
                        <p>产品原产地：<?php echo $shangp['p_chandi']; ?></p>
                        <p>产品价格：	<?php echo $shangp['price']; ?></p>
                        <p>上架时间：<?php echo $shangp['create_time']; ?></p>
                        <form action="" method="get">
                            <?php echo(session('username'))?>
                        <p class=" prod_pad">
                            <span class="l">购买数量：</span>
                            <a href="#" id="jia" name="jia" class="prod_jia"></a>
                            <input name="" id="liang" type="text" class="prod_tetx" value="" />
                            <a href="#" id="jian" class="prod_jian"></a>
                        </p>
                        </form>
                        <p><a href="<?php echo url('dingdan/dingdan',['id'=>$vo['id']]); ?>" class="qiang_click prod_dg"></a></p>
                        <input type="hidden" id="t" name="t" value="<?php echo $shangp['id']; ?>" />
                    </div>
                </div>
                <div class="proTd">
                    <div class="proTd_top">
                        产品特点
                    </div>
                    <div class="proTd_yte">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script>
//    $(".qiang_click").click(function(){
//        var count =$(".prod_tetx input").val();
//        url = "<?php echo url('dingdan/dingdan',['id'=>$shangp['id']]); ?>"+"&count="+count;
//        window.open(url);
//    })
    $('#jian').click(function(){
      //alert("sdfgdsg");
        var id= $('#t').val();
      //  alert(id);
        var url ="<?php echo url('cooperation/product'); ?>";
        var postDdata ={
            'id':id,
        }
        $.post(url,postDdata,function(result){

            $data=JSON.parse(result);
            var liang="";
             liang='<input name="" id="liang" type="text" class="prod_tetx" value="$data.p_buy" />';
            $('#liang').html(liang);
        },'json')
  });
    $('#jia').click(function(){
        //alert("sdfgdsg");
        var id= $('#t').val();
        //  alert(id);
        var url ="<?php echo url('cooperation/productjian'); ?>";
        var postDdata ={
            'id':id,
        }
        //alert(postDdata);
        $.post(url,postDdata,function(result){

            $data=JSON.parse(result);
            var liang="";
            liang='<input name="" id="liang" type="text" class="prod_tetx" value="$data.p_buy" />';
            $('#liang').html(liang);
        },'json')
    })
</script>

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
