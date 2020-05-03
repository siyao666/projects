<?php
	//通过变量函数库检测变量类型，is_*
	$var = 22;
	var_dump(is_int($var));
	var_dump(is_float($var));
	echo '<hr />';
	//是否为标量类型
	$var = 123;
	$var = null;
	var_dump(is_scalar($var));
	echo '<br />';
	//是否为null
	$var = null;
	var_dump(is_null($var));
	echo '<br />';
	
	//检测是否为数值型或者是字符串形式的数值
	$var = 123;
	$var = 12.3;
	$var = '0';
	$var_2 = '2.3a';
	var_dump(is_numeric($var));
	var_dump(is_numeric($var_2));
?>