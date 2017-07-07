<?php
namespace app\bis\controller;

use think\Controller;
use think\Request;

class Register extends  Controller{

    public function index()
    {
        $City = model("City")->cityindex();
        $categorys = model("Category")->getCategoryByParentId();
        return $this->fetch('',['City'=>$City,'categorys'=>$categorys]);
    }

    public function add(){

        //验证
        if(!request()->isPost()){
			//请求是否用post提交数据
            $this->error("请求失败");
				
        }
        $data = input("post.");      //获取post提交的数据
        //halt($data);
        $validate = validate('Bis');
        //halt($validate);
        if(!$validate->scene('add')->check($data))
        {
            return $this->error($validate->getError());
        }
        //获取地图经、纬度
       $laning =\Map::Mapintf($data['address']);
       // halt($laning);
//         if(empty($laning) || $laning['status'] !=0 || $laning['result']['precise'] !=1){
//
//            $this->error("地址不正确，请填写精确地址");
//        }
        //基本信息入库
            //商户信息是否存在
        $accountResult = model('BisAccount')->get(['username'=>$data['username']]);//获取用户名
        //echo model('BisAccount')->getLastSql();exit;
        if($accountResult) {
            $this->error('该用户存在，请重新分配');
        }
        $bisData = [
            'name' => $data['name'],
            'city_id' => $data['city_id'],
            'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'].','.$data['se_city_id'],
            'logo' => $data['logo'],
            'licence_logo' => $data['licence_logo'],
            'description' => empty($data['description']) ? '' : $data['description'],
            'bank_info' =>  $data['bank_info'],
            'bank_user' =>  $data['bank_user'],
            'bank_name' =>  $data['bank_name'],
            'faren' =>  $data['faren'],
            'faren_tel' =>  $data['faren_tel'],
            'email' =>  $data['email'],
        ];
         $bisId = model('Bis')->add($bisData);//添加基本信息入库

        //总店信息入库
        // 总店相关信息检验
        $data['cat'] = '';
        if(!empty($data['se_category_id'])) {
            $data['cat'] = implode('|', $data['se_category_id']);
        }
        // 总店相关信息入库
        $locationData = [
            'bis_id' => $bisId,//链接字段 外键
            'name' => $data['name'],
            'logo' => $data['logo'],
            'tel' => $data['tel'],
            'contact' => $data['contact'],
            'category_id' => $data['category_id'],
            'category_path' => $data['category_id'] . ',' . $data['cat'],
            'city_id' => $data['city_id'],
            'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'].','.$data['se_city_id'],
            //城市相关联数据
           // 'api_address' => $data['address'],
            'open_time' => $data['open_time'],
            'content' => empty($data['content']) ? '' : $data['content'],
            'is_main' => 1,// 代表的是总店信息
            'xpoint' => empty($laning['result']['location']['lng']) ? '' : $laning['result']['location']['lng'],
            'ypoint' => empty($laning['result']['location']['lat']) ? '' : $laning['result']['location']['lat'],
        ];
        $locationId = model('BisLocation')->add($locationData);

        //总店信息入库
        $data['code']= mt_rand(100,10000);//随机数
        $accountId=[
            'bis_id'=>$bisId,
            'username'=>$data['username'],
            'code'=>$data['code'],
            'password'=>md5($data['password'].$data['code']),
            'is_main'=>1,//最高权限
        ];
        $accountdata = model("BisAccount")->add($accountId);
        if(!$accountdata){
            $this->error("请输入用户信息");

        } 
		//要发送一个邮件去审核   邮箱接口
        $request = Request::instance();
		 
        $url=request()->domain().url('bis/rgeister/wcon',['id'=>$bisId]);
		
        $title = "o2o入驻申请通知";
        $content = "您提交的入驻申请需等待平台方审核，您可以通过点击链接<a href='".$url."' target='_blank'>查看链接</a> 查看审核状态";
        \phpmailer\Email::send($data['email'],$title,$content);
		
		$this->success("申请成功",url("register/wcon",['id'=>$bisId]));
    }
	
    public function wcon($id){
        if(empty($id))
        {
            return $this->error("你不存在这个id");
        }
        //echo ("欢迎");exit;
        $detail = model('Bis')->get($id);
        $this->fetch('register/waiting',["detail"=>$detail]);
    }
}




