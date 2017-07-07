<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
class Index extends Controller
{
//	private $object;//����ȫ�ֱ���
//	public function _initialize()
//	{
//		$this->object=model('Productlist');//����model���category����
//	}
	public $account = '';
	public function index()
	{
		$index=model("Productlist")->index();
		$hzs=model("Hzs")->index();
		$dao=model("Publics")->index();

//halt($hzs);
		return $this->fetch('index',["index"=>$index,'hzs'=>$hzs,'dao'=>$dao]);
	}
	public function getLoginUser() {
		if(!$this->account) {
			$this->account = session('username', '', '');
		}
		return $this->account;
	}
}
