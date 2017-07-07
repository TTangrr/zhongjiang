<?php
namespace app\admin\controller;

use app\common\model\Admin;


use think\Controller;
class Login extends Controller
{
    public function login()
    {
		
		
		
		//$data=db('admin')->find(1);//测试数据库是否连接
		//var_dump($data);die;
		if (request()->isPost()){
			
			//halt($_POST);
			$res=(new Admin())->login(input('post.'));
			
			if($res['valid']){
				
				//说明登陆成功
				$this->success($res['msg'],'admin/index/index');exit;
			}else{
				//说明登陆失败
				$this->error($res['msg']);exit;
			}
		}
	
		return $this->fetch('login');
		

	
 }
 
	public function loginout(){
		
		session(null);
		
		return $this->fetch('login');
	}
 
}

?>