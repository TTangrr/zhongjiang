<?php
namespace app\index\controller;
use think\Controller;

class Jyzq extends Controller
{
	private $object;//����ȫ�ֱ���
	public function _initialize()
	{
		$this->object=model('Story');//����model���category����
	}
	public function index()
	{   $index=$this->object->index();
		$dao=model("Publics")->index();

		return $this->fetch('',["index"=>$index,'dao'=>$dao]);
	}

}
