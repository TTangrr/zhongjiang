<?php
namespace app\common\model;
use think\Model;

class Publics extends Model
{

	protected $autoWriteTimestamp = true;
	public function add($data)
	{
		return $this->save($data);
	}
	public  function  index(){
		//echo('assad');die;
		$data =db('daohang')->order('id')->select();
		//halt($data);
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