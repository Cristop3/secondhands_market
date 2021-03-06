<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>前台注册页面</title>
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/base.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/Fregister.css" />
        <script type="text/javascript" src='/SecondHands_Market/Public/Js/Home/jQuery.js'></script>
        <script type="text/javascript" src='/SecondHands_Market/Public/Js/Home/register.js'></script>
    </head>
    <body>
        <form action='/SecondHands_Market/index.php/Home/Register/doRegister' method='post' enctype="multipart/form-data">
            <div class='regBox'>
                <div class='regForm'>
                    <h2>用户注册</h2>
                    <table class='form_table'>
                        <tr>
                            <td><i class='glyphicon glyphicon-fire'></i></td>
                            <td class='td_text'>用户名:</td>
                            <td class='td_inp'><input type='text' name='username' /></td>
                            <td class='checkImg'><i title='ok_user'></i></td>
                            <td class='td_eMess'><p></p></td>
                        </tr>
                        <tr>
                            <td><i class='glyphicon glyphicon-fire'></i></td>
                            <td class='td_text'>密码:</td>
                            <td class='td_inp'><input type='password' name='password1' /></td>
                            <td class='checkImg'><i title='ok_pass1'></i></td>
                            <td class='td_eMess'><p></p></td>
                        </tr>
                        <tr>
                            <td><i class='glyphicon glyphicon-fire'></i></td>
                            <td class='td_text'>确认密码:</td>
                            <td class='td_inp'><input type='password' name='password' /></td>
                            <td class='checkImg'><i title='ok_pass2'></i></td>
                            <td class='td_eMess'><p></p></td>
                        </tr>
                        <tr>
                            <td><i class='glyphicon glyphicon-fire'></i></td>
                            <td class='td_text'>性别:</td>
                            <td class='td_pass'>
                                <input type='radio' name='sex' value='1' onfocus="this.blur();" />男
                                <input type='radio' name='sex' value='0' onfocus="this.blur();" />女
                            </td>
                            <td class='checkImg'><i></i></td>
                            <td class='td_eMess'><p></p></td>
                        </tr>
                        <tr>
                            <td><i class='glyphicon glyphicon-fire'></i></td>
                            <td class='td_text'>电话:</td>
                            <td class='td_inp'><input type='text' name='phone' /></td>
                            <td class='checkImg'><i title='ok_phone'></i></td>
                            <td class='td_eMess'><p></p></td>
                        </tr>
                        <tr>
                            <td><i class='glyphicon glyphicon-fire'></i></td>
                            <td class='td_text'>头像:</td>
                            <td class='td_pic'>
                                <!-- <div class='uploadPic btn btn-primary'>
                                    <span>上传头像</span>
                                    <input type='file' name='headPic' />
                                </div> -->
                                <input type='file' name='headPic' />
                            </td>
                            <td class='checkImg'><i></i></td>
                            <td class='td_eMess'><p></p></td>
                        </tr>
                         <tr>
                            <td><i class='glyphicon glyphicon-fire'></i></td>
                            <td class='td_text'>验证码:</td>
                            <td><input type='text' name='code' ></td>
                            <td><img src="/SecondHands_Market/index.php/Home/Public/code" onclick="this.src=this.src+'?'+Math.random()" /></td>
                            <td>5</td>
                        </tr> 
                    </table>
                    <button type='submit' name='doSubmit' class='btn btn-success btn-lg'>确认注册</button>
                    <button class='btn btn-danger btn-lg'>取消</button>
                </div>
            </div>
        </form>
    </body>
</html>