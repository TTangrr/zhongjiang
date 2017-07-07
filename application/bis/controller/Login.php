<?php
namespace app\bis\controller;
use think\Controller;
class Login extends  Controller
{
    public function index()
    {
        if (request()->isPost()) {
            $data = input("post.");
            //通过商家入驻查询用户信息
            $tel = model('BisAccount')->get(["username" => $data['username']]);
            // print_r($tel->id);die;
            if (!$tel || $tel->status != 1) {
                $this->error("用户不存在，或者改用户未审核通过");
            }
            //密码
            $pwd = model('BisAccount')->get(["password" => md5($data['password'] . $tel->code)]);
            if (!$pwd) {
                $this->error("密码错误");
            }
            model('BisAccount')->updateById(["last_login_time" => time()], $tel->id);
            //存储session
            // 保存用户信息  bis是作用域
            session('bisAccount', $tel, 'bis');
            return $this->success('登录成功', url('index/index'));

        }else{
                //读取session
                $account = session("bisAccount", "", "bis");//
                if ($account && $account->id) {
                    $this->redirect("index/index");

                }
                return $this->fetch();
            }


      }


    public function logout()
    {
        //$account = session("bisAccount");//
        session(null,"bis");
        $this->redirect("login/index");
    }

}