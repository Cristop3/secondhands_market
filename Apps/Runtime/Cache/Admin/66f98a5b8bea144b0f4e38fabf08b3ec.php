<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Admin/admin_showApplyfor.css" />
    </head>
    <body>
        <div class='box'>
            <table class='table table-bordered table-striped'>
                <tr>
                    <td>标题</td>
                    <td><?php echo ($title); ?></td>
                </tr>
                <tr>
                    <td>类型</td>
                    <td><?php echo ($type); ?></td>
                </tr>
                <tr>
                    <td>现价(元)</td>
                    <td><?php echo ($nowPrice); ?></td>
                </tr>
                <tr>
                    <td>原价(元)</td>
                    <td><?php echo ($costPrice); ?></td>
                </tr>
                <tr>
                    <td>新旧程度</td>
                    <td><?php echo ($degree); ?></td>
                </tr>
                <tr>
                    <td>描述</td>
                    <td><?php echo ($details); ?></td>
                </tr>
                <tr>
                    <td>图片</td>
                    <td></td>
                </tr>
                <tr>
                    <td>地区</td>
                    <td><?php echo ($address); ?></td>
                </tr>
                <tr>
                    <td>联系电话</td>
                    <td><?php echo ($connPhone); ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>