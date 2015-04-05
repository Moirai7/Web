<?php
return array(
	//'=>'
	//'=>'
	'DB_TYPE'   => 'mysql', // 
	'DB_HOST' => 'localhost',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_NAME' => 'ss',
	'DB_PREFIX' => 'ss_',
	'DB_CHARSET'=> 'utf8', 

	'USER_AUTH_KEY' => 'authId',
	
	'LOAD_EXT_FILE' => 'common',
	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__' => __ROOT__.'/Public',
	),
	'URL_CASE_INSENSITIVE' => true,
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTE_RULES'=>array(
		'shop/deletebook/id/:id'            => 'shop/deletebook',
		'shop/booklist/id/:id/level/:level/page/:page'   => 'index/info',
		'shop/booklist/id/:id/level/:level'   => 'index/info',
		'shop/booklist/id/:id'   => 'index/info',
		'shop/booklist/id/:id/page/:page'   => 'index/info',
		'shop/order/id/:id'               	=> 'shop/order',
		'shop/buy/id/:id'               	=> 'shop/buy',
		'shop/changeinfo/id/:id'            => 'shop/changeinfo',
		'shop/delete/id/:id'               	=> 'shop/delete',
		'shop/book/id/:id'               	=> 'shop/book',
		'shop/returnemail/id/:id/buyer/:buyer'               	=> 'shop/returnemail',
		'shop/user'               			=> 'shop/user',
		'shop/editinfo'              	 	=> 'shop/editinfo',
		'shop/history/page/:page'           => 'shop/history',
		'shop/showcart/page/:page'          => 'shop/showcart',
		'shop/seller/page/:page'            => 'shop/seller',
		'shop/management/page/:page'            => 'shop/management',
		'shop/add'							=> 'shop/add',
		'shop/senduptodate'							=> 'shop/senduptodate',
		'shop/sendemail'							=> 'shop/sendemail',
		'shop/search/page/:page'			=> 'shop/search',	
		'admin/emailVerify/:str'            => 'admin/emailVerify',
		'admin/logout'               		=> 'admin/logout',
		'admin/login'               		=> 'admin/login',
		'admin/change'               		=> 'admin/change',
		'admin/joinus'               		=> 'admin/joinus',
		'admin/submit'               		=> 'admin/submit',
		'admin/resume'               		=> 'admin/resume',
	),
	
	
	'URL_PARAMS_BIND_TYPE'  =>  1,
	//
	'TMPL_TEMPLATE_SUFFIX' => '.php',
	//U.contorlaction
	//U('con/function',array('=>'=>,'',1())concon
	//UURL
	//'{:U('...')}'
	//I(','','htmlspecialchars')GET POST 
	'URL_HTML_SUFFIX' => '',
	//'URL_MODEL' => 0;//1....
	//'DEFAULT_FILTER' => 'htmlspecialchars'
	//$this->_post(')
	'SMTP_SERVER' =>'smtp.163.com',	 //
	'SMTP_PORT' =>25,	 //
	'SMTP_USER_EMAIL' =>'moirai_sale@163.com', //SMTP(
	'SMTP_USER'=>'moirai_sale@163.com',	 //SMTP
	'SMTP_PWD'=>'304832851',	 //SMTP
	'SMTP_MAIL_TYPE'=>'HTML',	 //HTML,TXT()
	'SMTP_TIME_OUT'=>30,	 //
	'SMTP_AUTH'=>true,	 //(

	'MAIL_ADDRESS'=>'moirai_sale@163.com', // 邮箱地址
    'MAIL_SMTP'=>'smtp.163.com', // 邮箱SMTP服务器
    'MAIL_LOGINNAME'=>'moirai_sale@163.com', // 邮箱登录帐号
    'MAIL_PASSWORD'=>'304832851', // 邮箱密码
    'MAIL_SENDER'=>'moirai', //发件人名字
    'MAIL_AUTH'=>true,//邮箱认证
);