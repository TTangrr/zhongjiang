<?php
namespace app\admin\controller;



class Index extends Common

{

    public function index()
    {
		//$this =new index();
		//return view();

		return $this->fetch();
	}
	
	
	public function welcome()
    {
		//$this =new index();
		//return view();

		return $this->fetch();
	}
	  public function email()
    {
        \phpmailer\Email::send("TTangrr@126.com","hahahh","hehhe");
        return "发送邮箱成功 ";
    }

    public function test()
    {
        \Map::Mapintf("成都天府广场地铁");exit;
        return 'singwa';
    }
    public function map()
    {
        return \Map::staticimage("成都天府广场地铁");

    }


	
}
?>