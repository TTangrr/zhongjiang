<?php
namespace app\bis\controller;
use think\Controller;
use think\Request;
class Deal extends  Base
{
    public function index()
    {


    }
    public function add()
    {
        $bisId = $this->getLogin()->bis_id; //基本信息的入库
        if(request()->isPost())
        {
            $data =input("post.");
            $location = model("BisLocation")->get($data['location_ids']);
            $deals = [
                'bis_id' => $bisId,
                'name' => $data['name'],
                'image' => $data['image'],
                'category_id' => $data['category_id'],
                'se_category_id' => empty($data['se_category_id']) ? '' : implode(',', $data['se_category_id']),
                'city_id' => $data['city_id'],
                'location_ids' => empty($data['location_ids']) ? '' : implode(',', $data['location_ids']),
                'start_time' => strtotime($data['start_time']),
                'end_time' => strtotime($data['end_time']),
                'total_count' => $data['total_count'],
                'origin_price' => $data['origin_price'],
                'current_price' => $data['current_price'],
                'coupons_begin_time' => strtotime($data['coupons_begin_time']),
                'coupons_end_time' => strtotime($data['coupons_end_time']),
                'notes' => $data['notes'],
                'description' => $data['description'],
                'bis_account_id' => $this->getLogin()->id,
                'xpoint' => $location->xpoint,
                'ypoint' => $location->ypoint,


            ];
            //添加数据到数据库
            $id = model('Deal')->add($deals);
            if($id)
            {
                $this->success("添加成功",url("Deal/index"));
            }else{
                $this->error("添加失败");
            }
        }else
        {
            $citys = model("City")->cityindex();
            $categorys = model("Category")->getCategoryByParentId();
            $bislocations = model("BisLocation")->getNormalLocationByBisId($bisId);
            //print_r($bislocations);die;
            return $this->fetch('',['citys'=>$citys,'categorys'=>$categorys,"bislocations"=>$bislocations]);
        }

    }
}