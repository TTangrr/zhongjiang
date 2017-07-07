<?php
namespace app\admin\controller;
use think\Controller;

class Bis extends Controller
{
    private $object;
    public function _initialize()
    {
          $this->object=model('Bis');
    }
    public function index(){
        $bis = $this->object->getBisByStatus(1);
        return $this->fetch('',["bis"=>$bis]);
    }

    public function apply(){
        $bis=$this->object->getBisByStatus();
        return $this->fetch('',["bis"=>$bis]);

    }
    public function detail($id){
               $id=input('get.id');
       // halt($id);
        $citys = model("City")->cityindex();
        //halt($citys);
        $categorys = model("Category")->getCategoryByParentId();
        //基本商家信息

        //halt($accountData);

        $bisData = model('bis')->get($id);
        $accountData = model('BisAccount')->get(["bis_id"=>$id,"is_main"=>1]);
       //halt($accountData);
        $locationData = model('BisLocation')->get(["bis_id"=>$id,"is_main"=>1]);
       // halt($locationData);
        return $this->fetch('',['citys'=>$citys,'categorys'=>$categorys,
            "bisData"=>$bisData,
            "accountData"=>$accountData,
            "locationData"=>$locationData,
        ]);
    }

    public function status($id,$status)//修改状态
    {

        $res = model('bis')->save(["status"=>$status],["id"=>$id]);    //save   更新  添加  修改    delete()//删除
        $account =  model('BisAccount')->save(["status"=>$status],["bis_id"=>$id]);
        $location =  model('BisLocation')->save(["status"=>$status],["bis_id"=>$id]);

        if($res || $account ||  $location)
        {
            $this->success("更新成功");
        }
        else{
            $this->success("更新失败");

        }

    }
}