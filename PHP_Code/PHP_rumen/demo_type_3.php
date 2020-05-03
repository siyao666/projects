<?php
	//永久转换的例子
	
	//得到变量的类型
	$var = 123;
	var_dump($var);
	echo '<br />';
	echo gettype($var);//integer
	echo '<hr />';
	
	//永久转换settype($var,type)
	$var = '3yaoyao';
	var_dump($var);
	settype($var,'int');
	echo '<br />';
	var_dump($var);
	
	$var_2 = 11.1;
	settype($var_2,'yaoyao');//非法类型
	var_dump($var_2);
?>