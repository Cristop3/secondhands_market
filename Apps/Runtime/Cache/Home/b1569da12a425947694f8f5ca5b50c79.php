<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>前台登录页面</title>
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/base.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/Flogin.css" />
        <script type="text/javascript" src="/SecondHands_Market/Public/Js/Home/jQuery.js"></script>
        <script type="text/javascript" src="/SecondHands_Market/Public/Js/Home/login_bg.js"></script>
    </head>
    <body>
        
        <div class='login_bg'>
            <ul>        
                <li><img src='/SecondHands_Market/Public/Images/login_bg/bg06.jpg' /></li>
                <li><img src='/SecondHands_Market/Public/Images/login_bg/bg02.jpg' /></li>
                <li><img src='/SecondHands_Market/Public/Images/login_bg/bg08.jpg' /></li> 
                <li><img src='/SecondHands_Market/Public/Images/login_bg/bg04.jpg' /></li>     
            </ul>
        </div>

        <div class='login_box'>
            <h1>用户登录</h1>
            <form action='/SecondHands_Market/index.php/Home/Login/doLogin' method='post' name='myForm'>
                <div class='username'>
                    <lable>用户名：</lable>
                    <input type='text' name='username' />
                    <span>请填写用户名!</span>
                </div>
                <div class='password'>
                    <lable>密　码：</lable>
                    <input type='password' name='password' />
                    <span>请填写密码!</span>
                </div>
                <p id='test'><?php echo (session('error')); ?></p>
                <p class='error'>用户名或密码输入错误!</p>
                <button type='submit' class='btnSub btn btn-primary'>立即登录</button>
                <p class='register'><a href=''>什么您还没有账号？点我点我！注册</a></p>
            </form>
        </div>
        
        <div class='login_img' id='moveImg'>
                <img src='/SecondHands_Market/Public/Images/login_bg/monkey03.png' /> 
        </div>

        <div class='go'>
                <img src='/SecondHands_Market/Public/Images/login_bg/go2.png' />
        </div>     
    </body>
</html>