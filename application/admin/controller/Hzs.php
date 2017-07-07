<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 9:27
 */
namespace app\admin\controller;
use think\Controller;


class Hzs extends Controller

{
    private $object;//����ȫ�ֱ���
    public function _initialize()
    {
        $this->object=model('Hzs');//����model���category����
    }

    public function index()
    {   $index=$this->object->index();
        return $this->fetch('',["index"=>$index]);
    }
    public function add(){

        if(request()->isPost()){
            $data=input("post.");
            //halt($data);
            $list= $this->object->add($data);
//        $validate = validate('validate');
//        if($validate->scene('add')->check($data)){
//            return $this->error($validate->getError());
//        }
            if($list){
                $this->success("添加成功");

            }else{
                $this->error("添加失败");
            }
            return $this->fetch('hzs/index');
        }
        return $this->fetch('');
    }

    public function edit(){
        $id =input("get.id");
        //halt($id);
        $oldlist= $this->object->find($id);
        //  halt($oldlist);
        if(request()->isPost()){
            $res = $this->object->edit(input('post.'));
            //halt($res);
            if($res['vaid']){
                $this->success($res['message'],'hzs/index');exit;
            }else{
                $this->error($res['message']);exit;
            }
        }
        return  $this->fetch('',['oldlist'=>$oldlist]);
    }

    public function status(){
        //halt('dfgd0');
        $data= input("get.");
        // halt($data);

        if(!validate('Feedback')->scene('status')->check($data)){
            $this->error(validate('Feedback')->getError());
        }
        $res = $this->object->save(['status'=>$data['status']],['id'=>$data['id']]);
        //halt($res);
        if($res){
            $this->success("状态更新成功");
        }else{
            $this->success("状态更新失败");
        }
        return $this->fetch();
    }
    public function find(){

        $index="";
        if(request()->isPost()){
            $data = input('post.inp');
            //  halt($data);
            $index=db('productlist')->where('id|name','like',"{$data}%")->select();
        }
        if($index){
            //    halt("dfgdfg");
            return $this->fetch('index',["hzs"=>$index]);
        }else{
            $this->error("没有您要找的数据");
        }
    }
    public function yjfk(){

        return $this->fetch();
    }
}