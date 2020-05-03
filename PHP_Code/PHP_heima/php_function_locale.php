<?php
	//PHP中作用域
	$global = 'global area'; 
	
	function display(){
		$inner = __FUNCTION__;   //局部变量
		//访问全局变量
		//echo $global;  //不能访问
		
		//访问全局变量
		//var_dump($GLOBALS);
		//echo $GLOBALS['global'];
		
		
		//定义变量：使用全局变量
		global $global;      //全局空间存在
		echo $global;
		
		//定义变量：全局不存在
		global $local;      
		$local = 'inner';
	}
	//echo $inner;      //不能访问
	display();
	echo '<br />',$local;
	
	/*
	 如果想函数内部使用外部变量；除了$GLOBALS之外，通过参数传值(如果统一战线还可以使用引用传值)
	 * 
	 * */
?>