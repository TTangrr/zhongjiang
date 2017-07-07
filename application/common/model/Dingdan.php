<?php
namespace app\common\model;
use think\Model;

class Dingdan extends Model
{
//	protected $pk='id';
//	protected $table='productlist';
	protected $autoWriteTimestamp = true;
	public function add($data)
	{
		return $this->save($data);
	}


}