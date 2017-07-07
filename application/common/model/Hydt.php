<?php
namespace app\common\model;
use think\Model;

class Hydt extends Model
{
//	protected $pk='id';
//	protected $table='hangye';
	protected $autoWriteTimestamp = true;
	public function add($data)
	{
		return $this->save($data);
	}
	public  function  index(){
		$data =db('hangye')->where('status',1)->select();
		return $data;
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