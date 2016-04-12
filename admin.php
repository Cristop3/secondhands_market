<?php
                        /**
                         *  后台应用模块入口文件定义
                         * 
                         */
    //定义Apps总应用下的后台模块
    define('BIND_MODULE','Admin');

    //定义后台模块生成路径
    define('APP_PATH','./Apps/');

    //开启调试模式
    define('APP_DEBUG',true);

    //关闭项目目录安全文件
    define('BUILD_DIR_SECURE',false);

    //引入thinkphp核心文件
    require "./ThinkPHP/ThinkPHP.php";
?>