<?php
namespace app\api\controller;
use think\Controller;
use think\Request;
use think\File;
use think\UploadFile;


class Image extends Controller
{
	
	public function upload(){
		
		//加在文件
		$file=Request::instance()->file('file');
		//给定一个目录

		$info = $file->move('upload');
		//print_r($info);die;
		if($info && $info->getPathname()){
			
			return show(1,'success','/thinkphp_5.0.9/public/'.$info->getPathname());
		}
		return show (0,'upload error');
	}
}