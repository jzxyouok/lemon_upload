<?php

return [

	/*
	|--------------------------------------------------------------------------
	| 超级管理员组ID
	|--------------------------------------------------------------------------
	*/
	'super_role_id'         => 1,

	/*
	|--------------------------------------------------------------------------
	| 前台注册默认的会员组ID
	|--------------------------------------------------------------------------
	*/
	'front_role_id'         => 100,

	/*
	|--------------------------------------------------------------------------
	| 子账号默认的会员组ID, 不允许删除
	|--------------------------------------------------------------------------
	|
	*/
	'sub_role_id'           => 101,

	/*
	|--------------------------------------------------------------------------
	| 缓存的生效时间 (分钟)
	|--------------------------------------------------------------------------
	| 默认是 1440 , 1天, 用户初始化控制器时候对网站配置的缓存
	*/
	'cache_period'          => 1440,

	/*
	|--------------------------------------------------------------------------
	| 默认分页数量
	|--------------------------------------------------------------------------
	| 默认 为 15条
	*/
	'page_num'              => 15,

	/*
	|--------------------------------------------------------------------------
	| 版权信息, 不可更改, 否则可能造成系统不可用
	|--------------------------------------------------------------------------
	*/
	'author'                => 'Mark Zhao',
	'email'                 => 'zhaody901@126.com',
	'website'               => 'http://www.sour-lemon.com/',

	/*
	|--------------------------------------------------------------------------
	| debug 项目, 便于调试使用, 必须项目不是正式环境 并且 启用 APP_DEBUG
	|--------------------------------------------------------------------------
	|
	*/
	'debug_operation'       => env('APP_DEBUG') && env('LM_DE_OPERATION') ? true : false,

	/*
	|--------------------------------------------------------------------------
	| 是否启用开发者账号 ， 启用开发者账号之后可以从后台管理系统中管理开发者， 进而登录开发者账号
	|--------------------------------------------------------------------------
	*/
	'enable_develop'        => env('LM_EN_DEVELOP') ? true : false,

	/*
	|--------------------------------------------------------------------------
	| 系统启用的IP转换库
	|--------------------------------------------------------------------------
	| Supported: "qqwry", "tiny" ,'sina', 'taobao'
	*/
	'ip_store'              => 'qqwry',

	/*
	|--------------------------------------------------------------------------
	| 短信发送接口
	|--------------------------------------------------------------------------
	: ihuyi : 互亿无线   www.ihuyi.com
	: log   : 保存到本地, 不是真实发送
	|
	*/
	'sms_api_type'          => env('SMS_API_TYPE', 'log'),
	/*
	|--------------------------------------------------------------------------
	| 签名
	|--------------------------------------------------------------------------
	| jianzhou : 【建周科技】
	|
	*/
	'sms_sign'              => env('SMS_SIGN'),

	/*
	|--------------------------------------------------------------------------
	| ihuyi // 3***Z***
	|--------------------------------------------------------------------------
	*/
	'sms_account'  => env('SMS_ACCOUNT'),
	'sms_password' => env('SMS_PASSWORD'),

	/*
	|--------------------------------------------------------------------------
	| git 可执行的路径, 用于对日志的追踪
	|--------------------------------------------------------------------------
	*/
	'git_path'              => [
		'windows' => env('LM_GIT_WIN_PATH'),
		'linux'   => env('LM_GIT_LINUX_PATH', 'git'),
	],

	/*
	|--------------------------------------------------------------------------
	| redis 配置
	|--------------------------------------------------------------------------
	|
	*/
	'redis'                 => [
		'dev_prefix' => 'dev_',
	],

	/*
	|--------------------------------------------------------------------------
	| app 所有的版本号, 用户更新检测, 版本说明, 下载等使用
	|--------------------------------------------------------------------------
	*/
	'app_versions' => [
		'1.0.0' => '',
		'1.1.0' => '',
		'1.2.0' => '',
		'1.3.0' => '',
		'1.4.0' => '',
		'2.0.0' => '',
		'3.0.0' => '',
		'3.1.0' => '',
	],

	/*
	|--------------------------------------------------------------------------
	| app 加密 key
	|--------------------------------------------------------------------------
	*/
	'app_crypt_key' => ''
];