<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Product extends Controller
{
	 public function product(){
		 $data=db('productlist')->select();
		// halt($data);
		 $id=input('get.id');
		 //halt($id);
		 $shangp=model("Productlist")->find($id);
		//halt($shangp);
		 $dao=model("Publics")->index();
		 
		 //获取商品抢购数量
		 $shangp['count']=input('get.count',1,'intval');
		 
		 if(request()->isAjax()){
			 
			 return show(1,'success',$shangp['count']);
			 
		 }

			 return $this->fetch('',['dao'=>$dao,'shangp'=>$shangp]);

	 }
	/* public function productjian(){
	$data=db('productlist')->select();
	// halt($data);
	$id=input('post.id');
	$shangp=model("Productlist")->shangp();
	$dao=model("Publics")->index();

	$jia=Db('productlist')->where('id',$id)->setDec('count');//setDec
	if($jia){
		$shu=Db('productlist')->where('id',$id)->field('count')->find();
		return json_encode($shu);
	}else{
		return $this->fetch('product',['dao'=>$dao,'shangp'=>$shangp,'jia'=>$data]);
	}
}
 */
}
