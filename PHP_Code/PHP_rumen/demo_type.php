<?php
	//设置错误级别，E_ALL但除了NOTICE
	error_reporting(E_ALL&~E_NOTICE);
	//其他类型转换成数值型
	echo 1+3,'<br />';
	echo 1+true,'<br />';//true->1
	echo 1+false,'<br />';//false->0
	echo 1+null,'<br />';//null->0
	echo 1+'3king','<br />';//3king->3
	echo 1+'2r3f4a','<br />';//3king->2
	echo 1+'2e2a4c','<br />';//201
	echo 1+'true','<br />';//'true'->0
	echo '<hr />';
	
	//其他类型转换成字符串型
	echo 'yaoyao<br />';
	echo '@',false,'@','<br />';
	echo '#',null,'#','<br />';
	$arr = array();
	echo $arr,'<br />';
	//对象不能直接转换成字符串，会报致命错误，程序终止执行
	/*$obj = new StdClass();
	echo $obj,'<br />';
	echo 'good good good<br />';*/
	echo '<hr />';
	
	//测试其他类型转换成布尔类型
	//找出转换成布尔类型假的有哪些情况，其他都会转换成布尔类型的true
	/*$dream = true;
	if($dream){
		echo '之后一定赚大钱';
	}else{
		echo '一定好好敲代码';
	}*/
	$var = 123;
	$var = 0;//0->false
	$var = 0.0;//0.0->false
	$var = '';//''->false
	$var = "";//""->false
	$var = ' ';
	$var = '0';//'0'->false
	$var = '0.0';//'0.0'->true
	$var = null;//null->false
	$var = array();//array()->false
	if($var){
		echo '真';
	}else{
		echo '假';
	}
?>