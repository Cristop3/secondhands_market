<?php
namespace Home\Controller;
use Think\Controller;

/**
 *
 *      退出登录模块
 * 
 */

class LogoutController extends Controller{
    
    /*退出登录 并清除所有的session数据*/
    public function logout(){
        //1.清除session中的数据
        session(null);

        //2.在某个页面退出就显示在某个页面
        if(isset($_GET['showGods']) && $_GET['showGods']==1){
          $this->redirect('Gods/showGods');  
        }
        if(isset($_GET['index']) && $_GET['index']==1){
            $this->redirect('Index/index');
        }
        
    }
}