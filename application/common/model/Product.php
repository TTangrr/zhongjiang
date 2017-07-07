<?php
namespace app\common\model;

use think\Model;

class Product extends BaseModel
{
    /**
     * 通过状态获取商家数据
     * @param $status
     */
    public function getBisByStatus($status=0) {
        $order = [
            'id' => 'desc',
        ];
        $data = [
            'status' => $status,
        ];
        $result = $this->where($data)
            ->order($order)
            ->paginate(5);
        return $result;
    }
//    public function edit($data){
////print_r($data);die;
//        $find = $this->save($data,$data['id']);
//        //halt($find);
//        if(false===$find){
//            return ['vaid'=>0,'message'=>$this->getError()];
//        }else{
//            return ['vaid'=>1,'message'=>"修改成功"];
//        }
//
//    }

}