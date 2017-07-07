<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\wamp\www\thinkphp_5.0.9\public/../application/index\view\user\reg.html";i:1499093470;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>注册</title>
  <link rel="stylesheet" href="__STATIC__/index/css/base.css" />
  <link rel="stylesheet" href="__STATIC__/index/css/register.css" />


</head>
<body>
<div class="wrapper">
  <div class="head">
    <ul>
      <li><a href="/"><img src="__STATIC__/index/images/logo.png" alt="logo"></a></li>
      <li class="divider"></li>
      <li><a href="/"></a></li>
    </ul>
    <div class="login-link">
      <span>我已注册，现在就</span>
      <a href="<?php echo url('user/login'); ?>">登录</a>
    </div>
  </div>

  <div class="content">
    <form action="<?php echo url('user/reg'); ?>" method="post">
      <p class="pass-form-item">
        <label class="pass-label">用户名</label>
        <input type="text" name="username" class="pass-text-input" placeholder="请设置用户名">
      </p>
      <p class="pass-form-item">
        <label class="pass-label">邮箱号</label>
        <input type="text" name="email" class="pass-text-input" placeholder="可用于接受团购券账号和密码便于消费">
      </p>

      <p class="pass-form-item">
        <label class="pass-label">密码</label>
        <input type="text" name="password" class="pass-text-input" placeholder="请设置登录密码">
      </p>
      <p class="pass-form-item">
        <label class="pass-label">确认密码</label>
        <input type="text" name="repassword" class="pass-text-input" placeholder="请设置登录密码">
      </p>
      <p class="pass-form-item">
        <label class="pass-label">验证码</label>
        <input type="text" name="verifycode" class="pass-text-input " placeholder="请输入验证码">
       <div> <img src="<?php echo captcha_src(); ?>" onclick="this.src=this.src+'?'+Math.random()"> <a id="kanbuq" href="javascript:;">看不清，换一张</a> </div>
      </p>

      <p class="pass-form-item">
        <input type="submit" value="注册" class="pass-button">
      </p>
    </form>

  </div>

  <div class="foot">
    <div>
      <div>2016&nbsp;©Baidu</div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="__STATIC__/index/js/respond.min.js"></script>
<script type="text/javascript" src="__STATIC__/index/js/jquery-1.11.3.min.js"></script>
</html>