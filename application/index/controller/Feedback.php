<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 9:27
 */
namespace app\index\controller;
use think\Controller;

class Feedback extends Controller
{
    private $object;//����ȫ�ֱ���
    public function _initialize()
    {
        $this->object=model('Feedback');//����model���category����
    }

    public function feedback(){
    if(request()->isPost()){
        $data = input("post.");
       // halt($data);
        $feed =$this->object->add($data);
        if($feed){
            $this->success("留言成功");
        }else{
            $this->error("留言失败");
        }
    }
        $feedback = $this->object->index();
        $hzs=model("Hzs")->index();
        $dao=model("Publics")->index();



        return $this->fetch('',['feedback'=>$feedback,'hzs'=>$hzs,'dao'=>$dao]);
    }

//    public function edit(){
//        $id =input("get.id");
//        //halt($id);
//       $oldlist= $this->object->find($id);
//      //  halt($oldlist);
//         if(request()->isPost()){
//             $res = $this->object->edit(input('post.'));
//            //halt($res);
//             if($res['vaid']){
//                 $this->success($res['message'],'Feedback/index');exit;
//               }else{
//                   $this->error($res['message']);exit;
//               }
//         }
//       return  $this->fetch('',['oldlist'=>$oldlist]);
//    }
//
//    public function status(){
//        //halt('dfgd0');
//        $data= input("get.");
//       // halt($data);
//
//        if(!validate('Feedback')->scene('status')->check($data)){
//            return $this->error(validate('Feedback')->getError());
//        }
//        $res = $this->object->save(['status'=>$data['status']],['id'=>$data['id']]);
//        //halt($res);
//        if($res){
//            $this->success("状态更新成功");
//        }else{
//            $this->success("状态更新失败");
//        }
//        return $this->fetch();
//    }
//    public function find(){
//
//        $index="";
//        if(request()->isPost()){
//            $data = input('post.inp');
//           //  halt($data);
//            $index=db('feedback')->where('id|name','like',"{$data}%")->select();
//        }
//        if($index){
//            //    halt("dfgdfg");
//            return $this->fetch('index',["index"=>$index]);
//        }else{
//            $this->error("没有您要找的数据");
//        }
//    }
//    public function yjfk(){
//
//        return $this->fetch();
//    }
}