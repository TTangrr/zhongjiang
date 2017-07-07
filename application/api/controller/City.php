<?php

namespace app\api\controller;

use think\Controller;

class City extends Controller{
    private $object;

    public  function _initialize(){
        $this->object=model('city');
    }
    public function cityindex(){

        $id = input("post.id");
      // halt($id);
        if(!intval($id)){

            $this->error();
        }

        $city = $this->object->cityindex($id);
         // print_r($city);die;
       // return $this->fetch('',["city"=>$city]);
        //return json_encode($city);
       if($city){
            return show(1,"success",$city);

        }else{
           return $this->success("Ê§°Ü");
        }


    }
}