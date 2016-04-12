<?php
    namespace Home\Controller;
    use Think\Controller;
    //use Think\Verify;
    /**
     *
     *      这里是公共模块 用来放需要的公共方法
     *      1.验证码方法
     * 
     */
    
    class PublicController extends Controller{
        public function code(){
            $verify = new \Think\Verify();
            $verify -> fontSize = 16; //定义验证码字体大小
            $verify -> length = 3; //定义验证码个数
            $verify -> imageW = 100; //定义验证码图片宽度
            //$verify -> useNoise = false; //定义是否使用背景混淆色
            $verify -> codeSet = '0123456789'; //定义固定的验证码数
            $verify -> entry();
        }
    }
    
?>