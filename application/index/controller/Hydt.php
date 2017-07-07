<?php
namespace app\index\controller;
use think\Controller;
use think\Model;

class Hydt extends Controller
{
	private $object;//����ȫ�ֱ���
	public function _initialize()
	{
		$this->object=model('Hzs');//����model���category����
	}
	public function index()
	{
		$index=model("Hydt")->index();
		$dao=model("Publics")->index();


		$hzs=$this->object->index();

		return $this->fetch('index',['index'=>$index,'hzs'=>$hzs,'dao'=>$dao]);
	}

}
