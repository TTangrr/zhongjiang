<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/16
 * Time: 10:25
 */

namespace app\api\controller;
use think\Controller;

class Category extends Controller
{
    private $object;

    public function _initialize()
    {
        $this->object = model('category');
    }

    public function getCategoryByParentId()
    {
        $id = input("post.id");
        if(!intval($id))
        {
            $this->error();
        }
        $categorys = $this->object->getCategoryByParentId($id);
        //$this->assign();
        //return $this->fetch('', ["categorys" => $categorys]);

        if($categorys)
        {
            return show(1,"success",$categorys);
           // $this->success("�ɹ�");
        }
        else{
        $this->success("失败");
        }

    }

}