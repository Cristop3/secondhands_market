<?php if (!defined('THINK_PATH')) exit();?>                                    
                        <!-- 这里是展示所有二手商品信息的总模板 2016/4/5 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>二手商品信息详情</title>
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/base.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/Findex.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/showGods.css" />
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Home/jQuery.js'></script>
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Home/showGods.js' ></script>
    </head>
    <body>
        <header>
            <div class='headerOne'>
                <div class='toolbar'>
                    <div class='toolbar_left'>
                        <i class='mobile'><img src='/SecondHands_Market/Public/Images/index_head/mobile.png'></i>
                        <a href=''>手机版</a>
                        <a href=''>微信版</a>
                        <a href=''>APP</a>
                        <i class='sep'> | </i>
                        <a href=''>客户合作</a>
                    </div>
                    <div class='toolbar_right'>
                        <ul class='navbar_nav' id='nav_ul'>
                            
                            <li><a href='' >商户推广<i class='glyphicon glyphicon-chevron-down '></i></a></li>
                            <li><a href='' >合作工具<i class='glyphicon glyphicon-chevron-down '></i></a></li>
                            <li><a href='' >帮助</a></li>
                        </ul>
                        <ul class='menuDown'>
                            <li><a href='/SecondHands_Market/index.php/Home/Myself/myself'>发布的信息</a></li>
                            <li><a href='/SecondHands_Market/index.php/Home/Logout/logout/showGods/1'>退出</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='headerTwo'>
                <div class='location'>
                    <div class='logoImg'>
                        <h1>
                            <a href='#'>
                                <img src='/SecondHands_Market/Public/Images/index_head/logoImg.png' />
                            </a>
                        </h1>
                        <span class='logoTips'>自由 便捷 敬真我!</span>
                    </div>
                    
                    <div class='publish'>
                        <a class='btnPublish' id='btnPublish'>免费发布信息</a>
                    </div>
                </div>
            </div>
        </header>

        <div class='container'>
            <div class='showLeft'>
                <h2>这里是商品的标题</h2>
                <div class='span'>
                    <span>这里是商品发布时间,浏览次数,商品编号</span>
                </div>
                <div class='hr'></div>
                <div class='showImg'>
                    这里是从后台加载的图片
                </div>
                <div class='showDetails'>
                    <table class='sdTable'>
                        <tr>
                            <td>价格：</td>
                            <td>140元</td>
                        </tr>
                        <tr>
                            <td>原价：</td>
                            <td>暂无</td>
                        </tr>
                        <tr>
                            <td>地址：</td>
                            <td>暂无</td>
                        </tr>
                        <tr>
                            <td>联系：</td>
                            <td>暂无</td>
                        </tr>
                        <tr>
                            <td>状态：</td>
                            <td>对方不在线</td>
                        </tr>
                        <tr>
                            <td>配送方式：</td>
                            <td>暂无</td>
                        </tr>
                    </table>
                </div>
                <div style='clear:both'></div>
                <ul class='sdUl'>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
                <!-- <div class='hr'></div> -->

                <h4>Ta的故事</h4>
                <div class='hr'></div>
                <p>新旧程度：由后台查询得知</p>
                <p class='content'>详细情况：</p>
                <span>详细情况由后台数据库得知</span>
                <div class='sdBigImg'>
                    这里是查看大图片暂时有这个功能
                </div>
            </div>


            <div class='showRight'>
                <div class='personInfo'>
                    <div></div>
                    <p>用户姓名：</p>
                    <p>注册时间：</p>
                </div>
            </div>
        </div>
    </body>
</html>