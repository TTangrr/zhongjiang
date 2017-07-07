<?php
namespace app\common\model;

use\think\Config;

use\think\Db;

use\think\Loader;

use\think\Model;

use\think\Session;
	
class User extends BaseModel
{
	public function add($data = [])
	{
		{
			if (!is_array($data)) {
				exception("传入数据不是一个数组");
			}
			$data['status'] = 1;
			return $user = $this->data($data)->allowField(true)->save();

		}

	}

	public function getusername($username)
	{
		if (!$username) {
			exception("传入数据不对");
		}
		$data = ["username"=>$username];
		return $user = $this->where($data)->find();

	}

}
	
