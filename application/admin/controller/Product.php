<?php
namespace app\admin\controller;
use think\Controller;


class Product extends Controller

{
	private $object;
	public function _initialize()
	{
		$this->object=model('Bis');
	}
    public function brand()
    {

		//基本商家3信息
		//总店信息
		//自己用户信息
		$bisData = model('bis')->getBisByStatus();

		return $this->fetch('',["bisData"=>$bisData,]);

	}
	  public function edit()
    {
		$id = input("get.id");
		//halt($id);
		$citys = model("City")->cityindex($id);
		$categorys = model("Category")->getCategoryByParentId($id);
		$location = model('BisLocation')->get($id);
		$bisData = model('Bis')->get($id);
		return $this->fetch('',['citys'=>$citys,'categorys'=>$categorys,"bisData"=>$bisData,"location"=>$location]);

	}
	public function save($id){

		$data = input("post.");
		//halt($data);
		$location =  model('BisLocation')->save($data,['id'=>$data['id']]);

		if(   $location )
		{
			$this->success("更新成功");
		}
		else{
			$this->success("更新失败");

		}


	}

	
}
?>