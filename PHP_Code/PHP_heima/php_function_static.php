<?php
	function display(){
		$local = 1;  //局部变量
		
		//定义静态变量
		static $count = 1;   //静态变量
		echo $local++,$count++,'<br />';
	}
	display();
	display();
	display();
	
	/*
	静态变量的原理：系统在进行编译的时候就会对static这一行进行初始化；为静态变量赋值
	
	函数在调用的时候，会自动跳过static关键字这一行 
	 * */
	
	/*
	 静态变量的使用
	 1、为了统计：当前函数被调用的次数
	 2、为了统筹函数多次调用得到的不同结果(递归思想)
	 * */
?>