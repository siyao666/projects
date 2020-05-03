<?php
	//匿名函数
	$func = function(){
		echo 'hello world';
	};
	/*$func();
	echo '<br />';
	var_dump($func);//变量保存匿名函数，本质得到的是一个对象(closure)*/
	
	
	//闭包函数
	function display(){
		//定义变量：局部变量
		$name = __FUNCTION__;
		
		//定义匿名函数
		$innerfunction = function() use($name){  //use就是将外部变量(局部)保留给内部使用(闭包)
			//函数内部的函数
			echo $name;
		};
		$innerfunction();
	}
	display();
	echo '<br />';
	/*
	 证明：函数的局部变量在函数使用完之后没有被释放？
	 1、使用内部匿名函数
	 2、匿名函数使用局部变量 ：use;
	 3、匿名函数被返回给外部使用
	 * */
	
	//闭包函数
	function display1(){
		//定义变量：局部变量
		$name = __FUNCTION__;
		
		//定义匿名函数
		$innerfunction = function() use($name){  //use就是将外部变量(局部)保留给内部使用(闭包)
			//函数内部的函数
			echo $name;
		};
		//返回内部匿名函数
		return $innerfunction;
	}
	$closure = display1();
	//到46行位置：display1函数运行结束：理论上局部变量$name应该已经被释放
	$closure();
	
	/*
	 当前局部变量$name在45行display1函数运行结束后，并没有被释放，从而在外部调用内部匿名函数可以被使用
	 * */
?>