<?php
namespace Home\Controller;
use Think\Controller;
/**
 *
 *      二手商品信息展示模块 控制器
 *      2016/4/5
 *      1.前台主页用户点击某个商品链接并传过来一个商品id，再通过商品id来进行数据的查询
 */
class GodsController extends Controller{
    
    //商品展示页面主模板
    public function showGods(){
        $this->display();   
    }
    
    public function checkLogin(){
        //查看用户是否登录
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
?>