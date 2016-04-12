<?php
                            /**
                             *
                             *     前台模块Home下的配置文件
                             * 
                             */
return array(
	/*'配置项'=>'配置值'*/
    
    //显示页面Trace信息
    'SHOW_PAGE_TRACE' => true,

    //前台应用连接数据库
    'DB_DSN' => 'mysql://root:@localhost:3306/SecondHands_Market',

    //修改模板中的左定界符
    'TMPL_L_DELIM' => '<{',

    //修改模板中的右定界符
    'TMPL_R_DELIM' => '}>', 

    //设置表前缀为"tp_"
    'DB_PREFIX' => 'tp_',

    
);