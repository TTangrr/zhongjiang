<?
namespace app\admin\validate;

use think\Validate;

class Category extends Validate{
	
	protected $rule =[
	
		'username'=>'require',
		
	];
	protected $mssage =[
	
		'username.require'=>'����д�û���',
	]
}




?>