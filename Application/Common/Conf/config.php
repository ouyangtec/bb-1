<?php
	//'配置项'=>'配置值'
	// 配置参数不区分大小写（因为无论大小写定义都会转换成小写），
return array(
	//'配置项'=>'配置值'
		'DB_TYPE'	=>  'MySQL',     // 数据库类型
		'DB_HOST'	=>  '127.0.0.1', 	// 服务器地址
		'DB_NAME'	=>  'chenxi',     // 数据库名
		'DB_USER'	=>  'root',     // 用户名
		'DB_PWD'	=>  'root',     // 密码
		'DB_PORT'	=>  '3306',     // 端口
		'DB_PREFIX'	=>  'Dawn_',     // 数据库表前缀
		'DB_CHARSET'=> 'utf8', // 字符集
    	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
		'ACTION_SUFFIX'        => '',
		'MULTI_MODULE'         => true,
		'MODULE_DENY_LIST'     => array('Common', 'Runtime'),
		'MODULE_ALLOW_LIST'    => array('Home', 'Admin'),//已有的模块
		'DEFAULT_MODULE'       => 'Admin',//默认模块
		'URL_HTML_SUFFIX'      => 'html',
		'LANG_SWITCH_ON'   => true,    	// 开启语言包功能 
		'LANG_AUTO_DETECT' => true,    // 自动侦测语言 开启多语言功能后有效
		'LANG_LIST'        => 'zh-cn,en-us', // 允许切换的语言列表 用逗号分隔
		'VAR_LANGUAGE'     => 'l',          // 默认语言切换变量
		'DEFAULT_LANG'     =>  'zh-cn', // 默认语言
);