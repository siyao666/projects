<?php
	//设置错误级别，E_ALL但除了NOTICE
	error_reporting(E_ALL&~E_NOTICE);
	//PHP变量传值
	
	//传递值
	$a = 10;
	$b = $a;
	$b = 5;
	echo $a,$b,'<br />';//a=10,b=5
	
	//引用传递
	$c = 10;
	$d =& $c;
	$c = 5;
	echo $c,$d;//c=5,d=5
	echo '<hr />';
	
	//数据转换
	$aa = 'abc.1.1';
	$bb = '1.1.abc';
	
	//自动转换
	echo $aa+$bb;  //算数+运算，系统先转换成数值类型(整形和浮点型)，然后运算
	echo '<br />';
	//强制装换
	echo '<br />',(float)$aa,(float)$bb;
	
	//判断数据类型
	echo '<hr />';
	var_dump(is_int($aa));//false
	var_dump(is_string($aa));///true
	
	echo '<hr />';
	echo gettype($aa);
	echo '<br />';
	
	//设置类型
	var_dump(settype($bb,'int'));
	echo '<br />';
	echo gettype($bb),$bb;
?>