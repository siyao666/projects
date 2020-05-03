<?php
	//PHP可变函数
	function display(){
		echo __LINE__,__FUNCTION__;
	}
	
	$func = 'display';
	//可变函数
	$func();
	echo '<br />';
	
	/*
	 可变函数在系统使用的过程中还是比较多的，尤其是使用很多系统函数的时候：
	 需要用户在外部定义一个自定义函数，都是是需要传入系统函数内部使用
	 * */
	 
	 
	 
	
	/*
	 将一个用户定义的函数传入给另一个函数(函数名)去使用的过程，
	 称之为回调过程，而被传入的函数称之为回调函数
	 * */
	//定义系统函数(假设)
	function sys_function($arg1,$arg2){
		//给指定的函数(第一个参数)，求对应的第二个参数值的4次方
		//为实际用户输入的数值进行处理
		$arg2 = $arg2 + 5;
		return $arg1($arg2);  //user_function(10)
	}
	
	//定义一个用户函数：求一个数的四次方
	function user_function($num){
		return $num*$num*$num*$num;
	}
	echo sys_function('user_function',5);
?>