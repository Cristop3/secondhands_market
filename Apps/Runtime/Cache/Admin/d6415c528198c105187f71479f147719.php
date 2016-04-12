<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel='styleSheet' href='/SecondHands_Market/Public/Css/Home/bootstrap/css/bootstrap.min.css' />
        <link rel='styleSheet' href='/SecondHands_Market/Public/Css/Admin/Css/admin_login.css' />
    </head>
    <body>
        <div class='box'>
            <div class='login_head'>
                <a class='loginA'>CUIT校园二手交易市场后台管理</a>
            </div>
            <div class='login_cont'>
                <div class='inner'>
                    <img src='/SecondHands_Market/Public/Images/admin_login/login.png' height="600" width="1190" />
                </div>
                <div class='login_form'>
                    <div class='panel panel-primary loginPanel'>
                        <div class='panel panel-heading newPanel'>
                            <div class='panel-title '>
                                <h3>管理员登录</h3>
                            </div>
                        </div>
                        <div class='panel-body'>
                            <div class='container'>
                                <form role='form' class='form-inline'  action='login.php' method='post' onsubmit="return checkForm()">
                                 
                                    <lable><div class='glyphicon glyphicon-user tbUser'></div></lable>
                                    <input id='user' type='text' class='form-control input-lg inpUser' value='' name='username' placeholder='请输入您的管理员账号' autofocus><br><br>
                                    <lable><div class='glyphicon glyphicon-lock tbUser'></div></lable>
                                    <input id='pass' value='' type='password' class='form-control input-lg inpUser' name='password'><br><br>

                                    <input  class='btn btn-primary btnSub' type='submit' name='dosubmit' value='登录' />
                                </form>
                                <div class='contA'>
                                    <a href='findPass.php'>忘记密码</a>
                                    <a href='register.php'>免费注册</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>