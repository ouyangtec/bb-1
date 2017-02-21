<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
	'__UPLOAD__' => __ROOT__ . '/Upload',
	'__PUBLIC__' => __ROOT__ . '/Public', 
	'__IMG__' => __ROOT__ . '/Public/' . MODULE_NAME . '/images', 
	'__CSS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/css', 
	'__JS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/js'),
	'MENU_USER_AUTH_GATEWAY'        =>  '/Admin/login/',// 默认认证网关
	//'MENU_NOT_AUTH_MODULE'          =>  'Public,Common',	// 默认无需认证模块
	//'MENU_NOT_AUTH_CONTROLLER'      =>  'Public,Common,Index',	// 
);