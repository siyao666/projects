<?php
	header('Content-type:text/html;charset=utf-8');
	//PHP错误处理
	/*
	 错误分类：
	 1、语法错误(parse error)
	 2、运行时错误(runtime error)
	 3、逻辑错误
	 
	 错误代号：
	 1)系统错误：
	 	E_PARSE:编译错误，代码不会执行
	 	E_ERROR:fatal error，致命错误，会导致代码不能正确继续执行(出错的位置断掉)
	 	E_WARNING:warning，警告错误，不会影响代码执行，但是可能的到意想不到的结果
	 	E_NOTICE:notice，通知错误，不会影响代码执行
	 2)用户错误：E_USER_ERROR,E_USER_WARNING,E_USER_NOTICE
	 3)其他：E_ALL，代表着所有错误
	 * */
	$a = 100;
	//输出
	echo $a;
	//除法运算
	$b = 0;
	if($b==0){
		//人为触发错误(错误提示)
		trigger_error('除数不能为0!');//默认notice，会继续执行
		trigger_error('除数不能为0!',E_USER_ERROR);//默认error，代码不会执行
	}
	echo 'hello';
?>