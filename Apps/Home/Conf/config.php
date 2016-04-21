<?php

return array(
    //'配置项'=>'配置值'
    'APP_DEBUG' => TRUE,
    'DB_TYPE' => 'MYSQL',
    'DB_HOST' => 'localhost',
    'DB_NAME' => 'test', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'root', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => 't_', // 数据库表前缀
    
    //smarty 定界符   
    'TMPL_L_DELIM' => '<!--{', // 模板引擎普通标签开始标记
    'TMPL_R_DELIM' => '}-->', // 模板引擎普通标签结束标记
    
    //trance 信息
    'SHOW_PAGE_TRACE'=>1,
    'SHOW_ADV_TIME' => true, // 是否显示详细的运行时间
    'SHOW_DB_TIMES' => false, // 显示数据库查询和写入次数
    'SHOW_CACHE_TIMES' => false, // 显示缓存操作次数
    'SHOW_USE_MEM' => false, // 显示内存开销
    'SHOW_LOAD_FILE' => false, // 显示加载文件数
    'SHOW_FUN_TIMES' => false, // 显示函数调用次数
     
);
