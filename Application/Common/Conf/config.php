<?php
return array(
    // '配置项'=>'配置值'
    //禁止模块访问
    //'MODULE_DENY_LIST' => array('Common', 'Runtime'),
    //允许模块访问
    //'MODULE_ALLOW_LIST' => array('Home', 'Admin'),
    'DEFAULT_MODULE' => 'Home', // 默认模块
    'URL_MODEL' => '2', // URL模式
    'SESSION_AUTO_START' => true, // 是否开启session
    'SHOW_PAGE_TRACE' => true, // 开启页面trace
    //'DB_FIELDS_CACHE' => false, // 关闭数据库字段缓存
    'DB_TYPE' => 'mysql',
    'DB_USER' => 'bobyco',
    'DB_PWD' => '888888',
    'DB_HOST' => '59.110.234.8',
    'DB_PORT' => '3306',
    'DB_NAME' => 'jrwl',
    'DB_CHARSET' => 'utf8',
    'DB_PARAMS' => array(),
    'DB_PREFIX' => 'jrwl_',
    'DB_DEBUG'  =>  TRUE // 数据库调试模式 开启后可以记录SQL日志 
    /* 'DB_TYPE' => 'pdo',
    'DB_USER' => 'bobyco',
    'DB_PWD' => '888888',
    'DB_PREFIX' => 'jrwl_',
    'DB_DSN'=>'mysql:host=59.110.234.8;dbname=jrwl;charset=UTF8' */
);