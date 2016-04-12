<?php
namespace Home\Controller;
use Think\Controller;
/**
 *
 *             登录模块 控制器
 */
class LoginController extends Controller{
    
    //1.显示登录页面模板
    public function login(){
        $this->display();
    }

    //2.处理登录表单提交 登录成功则跳转到Login模板目录下的flindex模板
    public function doLogin(){
        session('error',null); 
        $username = trim($_POST['username']);
        $password = $_POST['password'];

        $user = M('User');
        $where['username'] = $username;
        $where['password'] = $password;
        $res = $user->field('headPic,id')->where($where)->find();
        if($res){

            //若登录成功 则把用户名和头像图片名 还有用户编号id 存入session中
            session('username',$username); 
            session('headPic',$res['headPic']);
            session('uId',$res['id']);

            //session('error','1');
            sleep(1);
            // if(isset($_GET['showGods']) && $_GET['showGods']==2){
            //     $this->redirect('Gods/showGods');
            // }
            // if(isset($_GET['index']) && $_GET['index']==2){
            //     $this->redirect('Index/index'); 
            // }
            redirect('../Index/index');
            
        }else{
            
            session('error',"0"); 
            $this->redirect('Login/login');
        }
    }
    
}
?>