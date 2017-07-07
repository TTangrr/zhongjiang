<?php
namespace app\common\validate;

use think\Validate;

class Admin extends Validate{
	
	protected $rule =[
		'username'=>'require',
		'password'=>'require',
		'email'=>'require',
		'code'=>'require|captcha'
	];
	 protected $message =[
	
		'username.require'=>'请输入用户名',
		'password.require'=>'请输入密码',
		 'email.require'=>'请输入邮箱号码',
		'code.require'=>'请输入验证码',
		
		'code.captcha'=>'验证码不正确'
	]; 
}





?>