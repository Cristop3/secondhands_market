<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/base.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Home/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/SecondHands_Market/Public/Css/Admin/admin_applyfor.css" />
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Admin/jQuery.js'></script>
        <script type='text/javascript' src='/SecondHands_Market/Public/Js/Admin/admin_applyfor.js'></script>
    </head>
    <body>
        <div class='box'>
            <div class='title'>
                申请处理
            </div>
            <div class='tab'>
                <span class='spanDigitals'>电子产品申请<?php echo ($number); ?></span>
                <span class='spanBooks'>图书申请</span>
                <span class='spanSports'>运动装备申请</span>
                <span class='spanArguments'>乐器申请</span>
                <span class='spanGroceries'>杂货铺申请</span>
            </div>
            <div class='content'>
                
                <div class='digitals'>
                    <table class='table table-bordered table-striped myTable' >
                        <tr>
                            <th>编号</th>
                            <th>产品标题</th>
                            <th>发布者头像</th>
                            <th style='display:none'>产品类型</th>
                            <th>发布者名称</th>
                            <th>处理状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($res)): foreach($res as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><img src="/SecondHands_Market/Public/Uploads/<?php echo ($vo["headPic"]); ?>"></td>
                                <td style='display:none'><?php echo ($vo["type"]); ?></td>
                                <td><?php echo ($vo["username"]); ?></td>
                                <td><?php echo ($vo["state"]); ?></td>
                                <td><button class='btn btn-primary btn-sm'>查看</button></td>
                            </tr><?php endforeach; endif; ?>
                    </table>
                </div>
                <div class='books'>
                    <table class='table table-bordered table-striped myTable' >
                        <tr>
                            <th>编号</th>
                            <th>产品标题</th>
                            <th>发布者头像</th>
                            <th style='display:none'>产品类型</th>
                            <th>发布者名称</th>
                            <th>处理状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($res2)): foreach($res2 as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><img src="/SecondHands_Market/Public/Uploads/<?php echo ($vo["headPic"]); ?>"></td>
                                <td style='display:none'><?php echo ($vo["type"]); ?></td>
                                <td><?php echo ($vo["username"]); ?></td>
                                <td><?php echo ($vo["state"]); ?></td>
                                <td><button class='btn btn-primary btn-sm'>查看</button></td>
                            </tr><?php endforeach; endif; ?>
                    </table>
                </div>
                <div class='sports'>
                    <table class='table table-bordered table-striped myTable' >
                        <tr>
                            <th>编号</th>
                            <th>产品标题</th>
                            <th>发布者头像</th>
                            <th style='display:none'>产品类型</th>
                            <th>发布者名称</th>
                            <th>处理状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($res3)): foreach($res3 as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><img src="/SecondHands_Market/Public/Uploads/<?php echo ($vo["headPic"]); ?>"></td>
                                <td style='display:none'><?php echo ($vo["type"]); ?></td>
                                <td><?php echo ($vo["username"]); ?></td>
                                <td><?php echo ($vo["state"]); ?></td>
                                <td><button class='btn btn-primary btn-sm'>查看</button></td>
                            </tr><?php endforeach; endif; ?>
                    </table>
                </div>
                <div class='arguments'>
                    <table class='table table-bordered table-striped myTable' >
                        <tr>
                            <th>编号</th>
                            <th>产品标题</th>
                            <th>发布者头像</th>
                            <th style='display:none'>产品类型</th>
                            <th>发布者名称</th>
                            <th>处理状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($res4)): foreach($res4 as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><img src="/SecondHands_Market/Public/Uploads/<?php echo ($vo["headPic"]); ?>"></td>
                                <td style='display:none'><?php echo ($vo["type"]); ?></td>
                                <td><?php echo ($vo["username"]); ?></td>
                                <td><?php echo ($vo["state"]); ?></td>
                                <td><button class='btn btn-primary btn-sm'>查看</button></td>
                            </tr><?php endforeach; endif; ?>
                    </table>
                </div>
                <div class='groceries'>
                    <table class='table table-bordered table-striped myTable' >
                        <tr>
                            <th>编号</th>
                            <th>产品标题</th>
                            <th>发布者头像</th>
                            <th style='display:none'>产品类型</th>
                            <th>发布者名称</th>
                            <th>处理状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($res5)): foreach($res5 as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><img src="/SecondHands_Market/Public/Uploads/<?php echo ($vo["headPic"]); ?>"></td>
                                <td><?php echo ($vo["type"]); ?></td>
                                <td><?php echo ($vo["username"]); ?></td>
                                <td><?php echo ($vo["state"]); ?></td>
                                <td><button class='btn btn-primary btn-sm'>查看</button></td>
                            </tr><?php endforeach; endif; ?>
                    </table>
                </div>
                
            </div>
        </div>
    </body>
</html>