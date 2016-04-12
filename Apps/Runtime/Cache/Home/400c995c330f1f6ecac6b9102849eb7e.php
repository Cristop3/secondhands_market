<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>前台主页面</title>
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/base.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/Findex.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/FLindex.css" />
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Home/jQuery.js'></script>
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Home/index.js'></script>

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
                            <li><a href='/SecondHands_Market/index.php/Home/Myself/myself' >发布的信息</a></li>
                            <li><a href="/SecondHands_Market/index.php/Home/Logout/logout/index/1">退出</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class='headerTwo'>
                <div class='location'>
                    <div class='logoImg'>
                        <h1>
                            <a href='/SecondHands_Market/index.php/Home/Gods/showGods'>
                                <img src='/SecondHands_Market/Public/Images/index_head/logoImg.png' />
                            </a>
                        </h1>
                        <span class='logoTips'>自由 便捷 敬真我!</span>
                    </div>
                    <div class='headSearch'>
                        <form class='searchForm' action=''>
                            <input type='text' name='query' class='searchInp' placeholder="请输入关键词或分类名..." />
                            <span id='btnQuery' class='btnSearch'><i class='glyphicon glyphicon-search'></i></span>
                        </form>
                        <div class='newLine'>
                            <a href=''>运动</a>
                            <a href=''>乐器</a>
                            <a href=''>书籍</a>
                            <a href=''>宠物</a>
                            <a href=''>自行车</a>
                            <a href=''>更多</a>
                        </div>
                    </div>
                    <div class='publish'>
                        <a class='btnPublish' id='publish'>免费发布信息</a>
                    </div>
                </div>
            </div>
        </header>

        <div class='container'>

            <div class='Viwepager'><!--轮播图布局-->
                <span class='leftPaper'></span>
                <span class='rightPaper'></span>
                <a id='btnLeft'><i class='glyphicon glyphicon-chevron-left stylei'></i></a>
                <a id='btnRight'><i class='glyphicon glyphicon-chevron-right stylei'></i></a>
                <ul id='V_ul'>
                    <li style='z-index:1'><img src='/SecondHands_Market/Public/Images/index_container/V1.png'></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/V2.png'></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/V3.png'></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/V4.jpg'></li>
                </ul>
            </div>
            
            <!--二手商品分类-->
            <div class='godsSort'>
                <section>
                    <div class='godsBox'>
                        <header>
                            <div class='title bg1'>
                                <i class='glyphicon glyphicon-camera'></i>
                                <h3>电子产品</h3>
                            </div>
                        </header>
                        <div class='links'>
                            <a href=''>二手手机</a>
                            <a href=''>二手电脑</a>
                            <a href=''>二手平板</a>
                            <a href=''>手机配件</a>
                            <a href=''>笔记本</a>
                            <a href=''>二手照相机</a>
                            <a href=''>台式电脑</a>
                            <a href=''>耳机</a>
                            <a href=''>单反摄影</a>
                            <a href=''>IPOD</a>
                        </div>
                        <div class='showImg'>
                            <ul class='ul1'>
                                <li><img src='/SecondHands_Market/Public/Images/index_container/phone1.png' /></li>
                                <li><img src='/SecondHands_Market/Public/Images/index_container/phone2.png' /></li>
                                <li><img src='/SecondHands_Market/Public/Images/index_container/phone3.png' /></li>
                            </ul>
                            <div class='ul1_div'>
                                <span class='active'></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class='godsBox'>
                        <header>
                            <div class='title bg2'>
                                <i class='glyphicon glyphicon-book'></i>
                                <h3>书籍</h3>
                            </div>
                        </header>
                        <div class='links'>
                            <a href=''>高等数学</a>
                            <a href=''>C语言教程</a>
                            <a href=''>C++语言精辟</a>
                            <a href=''>JAVA巨人</a>
                            <a href=''>HTML5初析</a>
                            <a href=''>javascript</a>
                            <a href=''>盗墓笔记</a>
                            <a href=''>鬼吹灯</a>
                            <a href=''>和空姐同居日子</a>
                            <a href=''>我们</a>
                        </div>
                        <div class='showImg book'>
                            <a href=''><img src='/SecondHands_Market/Public/Images/index_container/book1.png' /></a>
                            <a href=''><img src='/SecondHands_Market/Public/Images/index_container/book2.png' /></a>
                            <a href=''><img src='/SecondHands_Market/Public/Images/index_container/book3.png' /></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div class='godsBox'>
                        <header>
                            <div class='title bg3'>
                                <i class='glyphicon glyphicon-plane'></i>
                                <h3>运动装备</h3>
                            </div>
                        </header>
                        <div class='links'>
                            <a href=''>nike篮球</a>
                            <a href=''>运动护腕</a>
                            <a href=''>运动护膝</a>
                            <a href=''>签名足球</a>
                            <a href=''>哑铃组合</a>
                            <a href=''>健身卡</a>
                            <a href=''>夜跑耳机</a>
                            <a href=''>运动手环</a>
                            <a href=''>臂力棒</a>
                            <a href=''>指压板</a>
                        </div>
                        <div class='showImg sport'>
                            <a href=''><img src='/SecondHands_Market/Public/Images/index_container/sport1.png' /></a>
                            <a href=''><img src='/SecondHands_Market/Public/Images/index_container/sport2.png' /></a>
                            <a href=''><img src='/SecondHands_Market/Public/Images/index_container/sport3.png' /></a>
                        </div>
                    </div>
                </section>
                <section>
                    <div class='godsBox'>
                        <header>
                            <div class='title bg4'>
                                <i class='glyphicon glyphicon-headphones'></i>
                                <h3>乐器</h3>
                            </div>
                        </header>
                        <div class='links'>
                            <a href=''>二手吉他</a>
                            <a href=''>吉他乐谱</a>
                            <a href=''>竖笛</a>
                            <a href=''>口风琴</a>
                            <a href=''>架子鼓</a>
                            <a href=''>电子琴</a>
                            <a href=''>电吉他</a>
                            <a href=''>小型跑步机</a>
                            <a href=''>动感单车</a>
                            <a href=''>AD步行者</a>
                        </div>
                        <div class='showImg'>
                            <ul class='ul4'>
                                <li><img src='/SecondHands_Market/Public/Images/index_container/music1.png' /></li>
                                <li><img src='/SecondHands_Market/Public/Images/index_container/music2.png' /></li>
                                <li><img src='/SecondHands_Market/Public/Images/index_container/music3.png' /></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div class='godsBox'>
                        <header>
                            <div class='title bg5'>
                                <i class='glyphicon glyphicon-shopping-cart'></i>
                                <h3>杂货铺</h3>
                            </div>
                        </header>
                        <div class='links'>
                            <a href=''>盆景</a>
                            <a href=''>电台灯</a>
                            <a href=''>衣架</a>
                            <a href=''>小桌子</a>
                            <a href=''>软凳子</a>
                            <a href=''>木质凳子</a>
                            <a href=''>小型衣柜</a>
                            <a href=''>小型衣柜</a>
                            <a href=''>单反摄影</a>
                            <a href=''>IPOD</a>
                        </div>
                        <div class='showImg grocery'>
                                <a href=''><img src='/SecondHands_Market/Public/Images/index_container/grocery1.png' /></a>
                                <a href=''><img src='/SecondHands_Market/Public/Images/index_container/grocery2.png' /></a>
                                <a href=''><img src='/SecondHands_Market/Public/Images/index_container/grocery3.png' /></a>
                        </div>
                    </div>
                </section>
            </div>
            <div style='clear:both'></div>

            <!--布局转换的效果-->
            <div class='showChange'>
                <ul class='showUl'>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow1.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow2.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow3.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow4.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow5.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow6.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow7.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow8.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow9.png' /></li>
                    <li><img src='/SecondHands_Market/Public/Images/index_container/changeShow10.png' /></li>
                </ul>
            </div>

        </div>

        <div class='footer'>
            <img src='/SecondHands_Market/Public/Images/index_container/footer.png' />
        </div>

        
    </body>
</html>