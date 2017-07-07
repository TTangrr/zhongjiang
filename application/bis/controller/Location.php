<?php
namespace app\bis\controller;
use think\Controller;
use think\Request;
class Location extends  Base
{

    public function index()
    {
        // $City = model("City")->indexcity();
        // $categorys = model("Category")->getCategoryByParentId();
        // return $this->fetch('',['City'=>$City,'categorys'=>$categorys]);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost()) {
            $data = input("post.");
            //1：验证
            //print_r($data);exit;//halt
            //$validate = validate('Bis');
            //print_r ($data);die;
            /*if (!$validate->scene('add')->check($data)) {
                return $this->error($validate->getError());
            }*/
            //获取地图 经度  维度
            $laning = \Map::Mapintf($data['address']);
            //print_r($lnglat);exit;
            //0                       // 1
            if (empty($laning) || $laning['status'] != 0 || $laning['result']['precise'] != 1) {
                $this->error("地址不对，请填写精确地址");
            }
            //基本信息入库


            $bisId = $this->getLogin()->bis_id; //基本信息的入库
            //总店信息入库
            $data['cat'] = '';
            if (!empty($data['se_category_id'])) {
                $data['cat']
                    = implode('|', $data['se_category_id']);
            }
            // 总店相关信息入库
            $locationData = [
                'bis_id' => $bisId,//链接字段  外键  相关联
                'name' => $data['name'],
                'logo' => $data['logo'],
                'tel' => $data['tel'],
                'contact' => $data['contact'],
                'category_id' => $data['category_id'],

                'category_path' => $data['category_id'] . ',' . $data['cat'],
                'city_id' => $data['city_id'],

                'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'] . ',' . $data['se_city_id'],
                //城市相关联数据
                'api_address' => $data['address'],
                'open_time' => $data['open_time'],
                'content' => empty($data['content']) ? '' : $data['content'],
                'is_main' => 1,// 代表的是总店信息
                'xpoint' =>
                    empty($laning['result']['location']['lng']) ? '' : $laning['result']['location']['lng'],
                'ypoint' =>
                    empty($laning['result']['location']['lat']) ? '' : $laning['result']['location']['lat'],
            ];

            $locationId = model('BisLocation')->add($locationData); //总店信息入库
            if($locationId)
            {
                $this->success("数据添加成功");
            }
            else {

                $this->success("数据添加失败");
            }
        }
        else
        {
            $citys = model("City")->cityindex();
            $categorys = model("Category")->getCategoryByParentId();
            return $this->fetch('',['citys'=>$citys,'categorys'=>$categorys]);
        }
        //  $this->success("申请成功",url("register/wcon",['id'=>$bisId]));

    }



}