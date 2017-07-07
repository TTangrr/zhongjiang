<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/19
 * Time: 14:18
 */
namespace app\common\model;

use think\Model;

class City extends  Model{

    public function cityindex($parent_id=0){
       //halt($parent_id);
        $data = [
            'status' => 1,
            'parent_id' => $parent_id,

        ];
    //halt($data);
        $order =[

            'id' => 'desc',
        ];
        $result = $this->where($data)->order($order)->select();
        //echo $this->getLastSql();

        return $result;


    }
    public function getNormalCitys() {
        $data = [
            'status' => 1,
            'parent_id' => ['gt', 0],
        ];

        $order = ['id'=>'desc'];

        return $this->where($data)
            ->order($order)
            ->select();

    }

    public function getNormalCitysuname() {
        $data = [
            'status' => 1,
            // 'parent_id' => 0,
        ];

        $order = ['id'=>'desc'];

        return $this->where($data)
            ->order($order)
            ->select();
    }
    public function edit($data){
//print_r($data);die;
        $find = $this->save($data,$data['id']);
        //halt($find);
        if(false===$find){
            return ['vaid'=>0,'message'=>$this->getError()];
        }else{
            return ['vaid'=>1,'message'=>"修改成功"];
        }

    }
}