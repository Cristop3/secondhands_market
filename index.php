<?php
                /**
                 *      前台应用入口文件定义相关信息
                 * 
                 */
    //定义总应用目录
    define('APP_PATH','./Apps/');

    //开启调试模式(若修改文件后会立即生效，不会产生缓存)
    define('APP_DEBUG',true);

    //关闭目录安全文件
    define('BUILD_DIR_SECURE',false);

    //引入框架核心文件
    require "./ThinkPHP/ThinkPHP.php";
?>