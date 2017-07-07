<?php
namespace app\common\model;

use think\Loader;

use think\Model;

class Admin extends Model{
	
	protected $pk =  'id';//主键
	
	protected $table = 'login';
	
	public function login($data){
		
		//halt($data);
		//执行验证
		$validate = Loader::validate('Admin');
			//如果验证码不通过
			if(!$validate->check($data)){
				return ['valid'=>0,'msg'=>$validate->getError()];
				//dump($validate->getError());
			}
			//对比用户名密码是否正确
			
		$userInfo = $this->where('username',$data['username'])->where('password',$data['password'])->find();
		//halt($userInfo);
		if(!$userInfo){
			//说明在数据库未匹配到相关数据
			return ['valid'=>0,'msg'=>'用户名或者密码不正确'];
		}
	
		//将用户信息存入到session中
		session('admin.id',$userInfo['id']);
		session('admin.username',$userInfo['username']);
		return ['valid'=>1,'msg'=>'登陆成功'];
	}

	public function add($data){

		return $this->data($data)->allowField(true)->save();
	}
	
}





?>