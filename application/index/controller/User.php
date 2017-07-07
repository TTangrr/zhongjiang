<?php
namespace app\index\controller;
use think\Controller;
class User extends Controller
{
	public function login()
	{
		/*$user = session('user', '', 'index');

		if($user || $user->id)
		{
			//echo ("sdgbs");die;
			$this->redirect("index/index");
		}*/
		return $this->fetch();
	}

	public function reg()
	{
		if(request()->isPost())
		{
			$data = input("post.");
			//验证验证码
			if(captcha_check($data['verifycode']))
			{
				$this->error("你输入的验证码不对");
			}
			//确认密码
			if($data['password'] != $data['repassword'] )
			{
				$this->error("2次输入密码不一致，请从新输入");

			}

			$data['code'] = mt_rand(100,10000); //mt_rand 随机数
			$data['password'] = md5($data['password'].$data['code']);

			$res = model('User')->add($data);
			if($res)
			{
				$this->success("注册成功","user/login");
			}else{
				$this->error("注册失败");

			}

		}

		return $this->fetch();
	}
	public function logincheck()
	{
		if(!request()->isPost())
		{
			$this->error("数据不对");
		}
		$data = input('post.');
		$user = model('User')->getusername($data['username']);
		if (!$user || $user->status != 1) {
			$this->error("用户不存在，或者改用户未审核通过");
		}
		if(md5($data['password'].$user->code) != $user->password) {
			$this->error('密码不正确');
		}
		//$pwd = model('User')->get(["password" => md5($data['password'] . $user->code)]);
		/*if (!$pwd) {
			$this->error("密码错误");
		}*/
		 model('User')->updateById(["last_login_time" => time()], $user->id);
		session('user.username', $user['username']);

		session('user.id', $user['id']);


		//print_r($user['username']);die;
		//print_r($user['username']);die;

		//print_r($_SESSION);die;
		return $this->success('登录成功', url('index/index'));

	}

	public function logout()
	{
		session("user",null);
		$this->redirect("user/login");

	}



}
