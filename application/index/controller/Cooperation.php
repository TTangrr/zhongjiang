<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Cooperation extends Controller
{

	public function industry()
	{
		$dao=model("Publics")->index();

		return $this->fetch('',['dao'=>$dao]);
	}


	 public function introduce(){

		 $dao=model("Publics")->index();

		 return $this->fetch('',['dao'=>$dao]);
	 }
	 

	public function producta(){
		$dao=model("Publics")->index();

		return $this->fetch('',['dao'=>$dao]);
	}
	public function production(){

		$dao=model("Publics")->index();

		return $this->fetch('',['dao'=>$dao]);
	}
	public function story(){

		$dao=model("Publics")->index();

		return $this->fetch('',['dao'=>$dao]);
	}
	public function technical(){

		$dao=model("Publics")->index();

		return $this->fetch('',['dao'=>$dao]);
	}
}
