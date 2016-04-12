<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    //1.显示未登录的主界面
    public function index(){    
        $this->display();
    }

    //2.主页面检查是否存在用户登录
    public function checkIndex(){
        if(session('username') && session('headPic')){
            $data['username'] = session('username');
            $data['headPic'] = session('headPic');
            $data['flag'] = "1";
            $this->ajaxReturn($data);
        }else{
            $data['flag'] = "0";
            $this->ajaxReturn($data);
        }
    }
    
}