<?php
namespace app\common\model;

use\think\Config;

use\think\Db;

use\think\Loader;

use\think\Model;

use\think\Session;
	
class Login extends BaseModel
{
	public function add($data = [])
	{
		{
			if (!is_array($data)) {
				exception("�������ݲ���һ������");
			}
			$data['status'] = 1;
			return $user = $this->data($data)->allowField(true)->save();

		}

	}

	public function getusername($username)
	{
		if (!$username) {
			exception("�������ݲ���");
		}
		$data = ["username"=>$username];
		return $user = $this->where($data)->find();

	}

}
	
