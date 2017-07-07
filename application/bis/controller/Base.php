<?php
namespace app\bis\controller;
use think\Controller;
class Base extends  Controller
{
    public $account;
    public function _initialize() {
        // �ж��û��Ƿ��¼
        $isLogin = $this->isLogin();
        if(!$isLogin) {
            return $this->redirect(url('login/index'));
        }
    }
    //判定是否登录
    public function isLogin()//�ж��û��Ƿ�
    {
        $user = $this->getLogin();
        if($user && $user->id)
        {
            return true;
        }else{
            return false;
        }

    }

    public function getLogin()
    {
        if(!$this->account)
        {
            $this->account = session("bisAccount", "", "bis");
        }
        return $this->account;

    }








}