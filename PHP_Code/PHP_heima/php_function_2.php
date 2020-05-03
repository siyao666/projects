<?php
	//函数返回值
	
	function display(){
		//输出
		echo __FUNCTION__;  //输出当前函数名字
	}
	//var_dump(display());
	
	//返回值作用：将计算结果返回给调用处
	function add($num1,$num2){
		return $num1 + $num2; //返回结果
	}
	echo add(10,20);
	return 'hello world';
	echo add(10,20); //不再执行：上面return结束了
	
	/*
	 注意：函数的返回值可以是任意数据类型
	 return关键字:
	1、return在函数内部存在的价值：返回当前函数的结果(当前函数运行结束)
		return直接结束函数，所以后面所有内容都不再执行
	2、return还可以在文件中直接使用(不在函数里面)：代表文件将结果return后面跟的内容，
		转交给包含当前文件的位置(通常在系统配置文件中使用较多)
	* * */
	
	
?>