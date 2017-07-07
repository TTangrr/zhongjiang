<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status)
{
    if($status == 1)
    {
        $str = "<span class='label label-success radius'>审核</span>";
    }elseif($status == 0)
    {
        $str = "<span class='label label-error radius'>未审核</span>";
    }else{

        $str = "<span class='label label-success radius'>删除</span>";
    }
    return $str;
}
function doCurl($url, $type=0, $data=[]) {
    $ch = curl_init(); // 初始化
    // 设置选项
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER,0);
    if($type == 1) {
        // post
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    //echo "dsf";
    //执行并获取内容
    $output = curl_exec($ch);
    // 释放curl句柄
    curl_close($ch);
    return $output;
}
function bisRegister($status)
{
    if($status == 1)
    {
        $str = "审核成功";
    }else if($status == 0)
    {
        $str = "未审核,请查看邮件等待";
    }else
    {
        $str = "未审核成功";
    }
    return $str;

}
function getCity($path) //获取城市下级
{
    if(empty($path))
    {
        return "";
    }
    if( preg_match("/,/",$path))
    {
        $citypath = explode(",",$path);
        $cityid = $citypath[1];//获取最后一个id
    }
    else{
        $cityid =  $path;
    }

    $city = model('City')->get($cityid);

    return $city->name;

}
function locationids($ids)
{
    if(!$ids)
    {
        return 1;
    }

    if( preg_match("/,/",$ids))
    {
        $arr = explode(",",$ids);
    }
    return count($arr);

}
function show($status,$messige,$data=[]){

    return [
        "status"=>$status,
        "messige"=>$messige,
        "data"=>$data,
    ];
   // return $datas;
}
