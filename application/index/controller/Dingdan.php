<?php
namespace app\index\controller;
use think\Controller;

class Dingdan extends Controller
{
	public function dingdan()
	{
		$user=session('user');
		//halt($user['id']);
		$dao=model("Publics")->index();
		if(!$user){
			 $this->error("请登录","user/login");
		}else{
			  $this->fetch('',['dao'=>$dao]);

		}
		$id=input("get.id");
		$list=model("Productlist")->find($id);
		//halt($list);
		//halt(user_id);
		$ids = (session('user.id'));
		$gou=db("dingdan")->where('productlist_id',$ids)->select();
		//halt($gou);
		/* if(['productlist_id'==$list['id'] ]|| ['user_id'==$list['id']]){
			$gou=model("dingdan")->where(['productlist_id'=>$list['id'],'user_id'=>$list['id']])->add($list);
			//	halt($gou);
			return $this->fetch('',['list'=>$list,'gou'=>$gou]);
		}else{ */
			return $this->error("购物车已存在,看看其他的吧！","index/index");
		

	}
/* $product=db('product')->alias('c')
->join('__ORDER__ o','c.id=o.product_id')
->join('__PRODUCTION__ p','c.id=p.product_id')
->where(['c.id'=>$data['id']])
->find();
$product=db('productlist')->alias('p')
			->join('__DINGDAN__d','p.id=d.productlist_id')
			->join('__USER__u','p.id=u.productlist_id')
			->where(['p.id'=>$data['id']])->find();*/

}
