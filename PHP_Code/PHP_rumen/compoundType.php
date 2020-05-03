<?php
	header('content-type:text/html;charset=utf-8');
	//设置错误级别，E_ALL但除了NOTICE
	error_reporting(E_ALL&~E_NOTICE);
	
	//测试符合类型
	//声明一个变量
	$arr = array();//空数组
	var_dump($arr);
	$arr = array('FengSiYao',18,'女',666.66);
	echo '<pre>';
	var_dump($arr);
	
	//对象
	$obj = new StdClass();
	var_dump($obj);
	
	//资源
	$handle = fopen('demo_float.php','r');
	var_dump($handle);
	
	//测试空
	//未声明的变量直接使用
	var_dump($notExistsVar);
	
	//声明一个变量并赋值为nulls
	$var = null;
	var_dump($var);
	echo "<hr />";
	
	$var_1 = 123;
	var_dump($var_1);
	//通过unset()注销变量
	unset($var_1);
	var_dump($var_1);
	
	$a=$b=$c='siyao';
	var_dump($a,$b,$c);
	//通过unset()一次注销多个变量
	unset($a,$b,$c);
	var_dump($a,$b,$c);
?>