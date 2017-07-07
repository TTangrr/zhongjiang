<?php
namespace app\index\controller;
use think\Controller;
use think\Model;
class Publics extends Controller
{
	public function index()
	{
		$dao=model("Publics")->index();

//halt($hzs);
		return $this->fetch('header',["dao"=>$dao]);
	}

}
