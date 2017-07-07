<?php
namespace app\common\model;
use\think\Model;

class Category extends Model
{
	protected $autoWriteTimestamp = true;
	public  function add($data)
	{
		//halt($data);
		$data['status'] = 1;
		//$data['create_time'] = time();
		return $this->save($data);
	}

	public function savecategory()
	{
		$data = [
			"parent_id" => 0,
			"status" => 1,
		];
		$order = [
			"listorder" => "desc",
		];

		return $this->where($data)->order($order)->select();//���ݱ��ѯ���

	}

	public function indexcategory($parent_id=0)
	{
		$data = [
			'parent_id' => $parent_id,
			'status' => ['neq',-1],//���Ϊ-1
		];

		$order =[
			'listorder' => 'desc',
			'id' => 'desc',
		];
		$result = $this->where($data)->order($order)->paginate();
		//echo $this->getLastSql();

		return $result;

	}
	public function getCategoryByParentId($parent_id=0)
	{

		$data = [

			'status' => 1,
			'parent_id' => $parent_id,
		];

		$order =[
			'id' => 'desc',
		];
		$result = $this->where($data)
			->order($order)
			->select();
		//echo $this->getLastSql();
		return $result;

	}

}
	
