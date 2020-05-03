<?php
	header('content-type:text/html;charset=utf-8');
	//常量
	//系统常量
	echo PHP_VERSION;
	echo '<br />';
	echo PHP_OS;
	echo '<br />';
	echo PHP_INT_MAX;
	echo '<hr />';
	
	//通过define()定义常量   常量一经定义不能改变
	define('TEST','this is a test');
	//echo 'TEST';输出是字符串
	echo TEST;
	echo '<hr />';
	
	define('USERNAME','yaoyao');
	define('AGE','18');
	define('EMAIL','2544347013@qq.com');
	define('MONEY',888888.88);
	define('TEST_ARRAY',array('a','b','c'));
	echo '用户名:',USERNAME,'<br />';
	echo '年龄:',AGE,'<br />';
	echo '电子邮件:',EMAIL,'<br />';
	echo '月薪:',MONEY,'<br />';
	var_dump(TEST_ARRAY);
	echo '<hr />';
	
	//常量默认区分大小写,使用的时候按照定义时的大小写来使用
	
	/*define('USERNAME1','yaoyao');
	echo USERNAME1;
	echo username1;*/
	
	
	
	//使用const关键字定义常量
	const WEIXINNAME = '我';
	echo WEIXINNAME;
	echo '<hr />';
	
	//通过deifned检测常量是否存在
	var_dump(defined('WEIXINNAME'));
	
	//get_defined_constants():返回的是数组，得到所有已定义的常量，包含系统常量和自定义常量
	echo '<pre>';
	print_r(get_defined_constants());
?>