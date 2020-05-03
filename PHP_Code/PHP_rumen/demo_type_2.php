<?php
	//临时转换的列子
	
	$var = 3.9;
	//舍掉小数部分
	var_dump((int)$var);
	echo '<br />';
	
	$var = true;
	var_dump((string)$var);
	echo '<br />';
	
	$var = '3king';
	var_dump((bool)$var,(boolean)$var);
	echo '<br />';
	
	//临时转换成空
	$var = 'hello';
	var_dump((unset)$var);
	echo '<br />';
	
	$var = 123;
	var_dump((array)$var);
	echo '<br />';
	
	$var = 12.3;
	var_dump((object)$var);
	echo '<hr />';
	
	
	//通过系统函数完成临时转换
	$var = '3yao';
	var_dump(intval($var));
	echo '<br />';
	//没有realval()这个函数
	/*Fatal error: Uncaught Error: Call to undefined function realval()
	调用了未定义的函数realval()*/
	var_dump(floatval($var),doubleval($var));
	echo '<br />';
	var_dump(boolval($var));
?>