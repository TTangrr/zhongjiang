<?php
namespace app\common\model;
use think\Model;

class Productlist extends Model
{
//	protected $pk='id';
//	protected $table='productlist';
	protected $autoWriteTimestamp = true;
	public function add($data)
	{
		return $this->save($data);
	}

	public  function  index(){
		$data=[
			"status"=>['neq',-1],
		];
		return $this->where($data)->paginate(6);
	}

	public  function  shangp(){
		$data=[
			"status"=>['neq',-1],
		];
		return $this->where($data)->find();
	}

	public function edit($data){
//print_r($data);die;
		$find = $this->save($data,$data['id']);
		//halt($find);
		if(false===$find){
			return ['vaid'=>0,'message'=>$this->getError()];
		}else{
			return ['vaid'=>1,'message'=>"修改成功"];
		}

	}
}