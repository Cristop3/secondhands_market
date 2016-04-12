<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>发布信息页面</title>
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/base.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/Findex.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/Fpublish.css" />
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Home/jQuery.js'></script>
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Home/publish.js'></script>
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Home/uploadPreview.min.js'></script>
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
        </header>

        <div class='container'>
            <img src='/SecondHands_Market/Public/Images/publish/publishHeader.png' />
            <div class='publishForm'>
                <h3>基本信息</h3>
                <hr/>
                <form action='/SecondHands_Market/index.php/Home/Publish/doPublish' method="post" enctype="multipart/form-data" id='myForm'>
                    <input type='text' name='state' value='0' hidden />
                    <table  id='myTable'>
                        <tr>
                            <td align="right"><i class='starRed'>*</i>标题：</td>
                            <td align="left">
                                <input type='text' name='title' />
                                <span id='titleSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="right"><i class='starRed'>*</i>类型：</td>
                            <td align="left">
                                <select name="type" >
                                    <option value=''></option>
                                    <option value="1">电子产品</option>
                                    <option value='2'>图书</option>
                                    <option value='3'>运动装备</option>
                                    <option value='4'>乐器</option>
                                    <option value='5'>杂货铺</option>
                                </select>
                                <span id='typeSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="right"><i class='starRed'>*</i>现价：</td>
                            <td align="left">
                                <input type='text' name='nowPrice' />
                                <em>元</em>
                                <span id='priceSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填且必为正实数字</strong></td></span>
                            
                        </tr>
                        <tr>
                            <td align="right">原价：</td>
                            <td align="left">
                                <input type='text' name='costPrice' />
                                <em>元</em>
                        </tr>
                        <tr>
                            <td align="right"><i class='starRed'>*</i>新旧程度：</td>
                            <td align="left">
                                <select name="degree" >
                                    <option value=''></option>
                                    <option value="1">全新</option>
                                    <option value='2'>99成新</option>
                                    <option value='3'>95成新</option>
                                    <option value='4'>9成新</option>
                                    <option value='5'>8成新</option>
                                    <option value='6'>7成新及以下</option>
                                </select>
                                <span id='degreeSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="right"><i class='starRed'>*</i>描述：</td>
                            <td align="left">
                                <textarea name="details"></textarea>
                                <span id='detailsSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                            </td>
                           
                        </tr>
                        <tr>
                            <td align="right"><i class='starRed'>*</i>上传图片：</td>
                            <td align="left">
                                <input type='file' name='godsPic1' style='border:none' id='up_img1' />
                                <span class='godsPicSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                                <div id="imgdiv1"><img id="imgShow1" width="100" height="100" /></div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type='file' name='godsPic2' style='border:none' id='up_img2' />
                                <span class='godsPicSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                                <div id="imgdiv2"><img id="imgShow2" width="100" height="100" /></div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type='file' name='godsPic3' style='border:none' id='up_img3' />
                                <span class='godsPicSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                                <div id="imgdiv3"><img id="imgShow3" width="100" height="100" /></div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type='file' name='godsPic4' style='border:none' id='up_img4' />
                                <span class='godsPicSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                                <div id="imgdiv4"><img id="imgShow4" width="100" height="100" /></div>
                            </td>
                        </tr>
                        <tr>
                            <td align="right"><i class='starRed'>*</i>地区：</td>
                            <td align="left">
                                <input type='text' name='address' />
                                <span id='addressSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填</strong></span>
                            </td>
                            
                        </tr>
                        <tr>
                            <td align="right"><i class='starRed'>*</i>联系电话：</td>
                            <td align="left">
                                <input type='text' name='connPhone' />
                                <span id='phoneSpan'><i class='glyphicon glyphicon-remove-circle '></i><strong>此项必填且必为11位数字号码</strong></span>
                            </td>
                        </tr>
                    </table>
                    <button class='btn btn-success btn-lg' id='messPublish' type='submit'>免费发布信息</button>
                </form>
            </div>
            <div class='titleMess'>
                   <img src='/SecondHands_Market/Public/Images/publish/titleMess.jpg' /> 
            </div>
            <div class='priceMess'>
                    <img src='/SecondHands_Market/Public/Images/publish/priceMess.png' />
            </div>



        </div>
        <footer>
            <img src='/SecondHands_Market/Public/Images/index_container/footer.png' />
        </footer>

    </body>
</html>