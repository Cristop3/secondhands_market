<?php
namespace Admin\Controller;
use Think\Controller;
/**
 *          这是后台登录模块 控制器
 *          1.显示登录页面
 *          2.处理管理员登录验证
 * 
 */
class LoginController extends Controller{
    
    //1.显示登录页面
    public function login(){
        $this->display();
    }

    //2.处理管理员登录验证
    public function doLogin(){

        $managerName = trim($_POST['managername']);
        $password = trim($_POST['password']);

        $manager = M('Manager');
        $where['managerName'] = $managerName;
        $where['password'] = $password;

        $res = $manager-> where($where)-> find();
        if($res){
            session('managername',$managerName);
            redirect('../Index/index');
        }else{
            redirect('../Login/login');
        }

    }
}
?>