<?php
	date_default_timezone_set("PRC");
	//常用系统函数
	
	//1、有关输出的函数
	//print():类似于echo输出提供的内容，本质是一种结构(不是函数)，返回1，可以不需要使用括号
	//print_r():类似于var_dump(),但是比var_dump()简单，不会输出数据的类型，只会输出值(数组打印使用较多)
	
	echo print('hello<br />');
	print 'hello<br />';
	
	$a = 'hello<br />';
	print_r($a);
	
	//2、有关时间的函数
	//date()按照指定格式对应的时间戳(从1970年格林威治时间开始计算的秒数)，如果没有指定特定的时间戳，那么就是默认解释当前时间戳
	//time()获取当前时间的时间戳
	//microtime()获取微秒级别的时间
	//strtotime()按照规定格式字符串转换成时间戳
	
	echo date('Y-m-d H:i:s'),'<br />';
	echo time(),'<br />';
	echo microtime(),'<br />';
	echo strtotime('tomorrow 10 hours');//中文不行

	//3、有关数学的函数
	/*
	 max():指定参数中最大的值
	 min():比较两个数中较小的值
	 rand():得到一个随机数，指定区间的随机整数
	 mt_rand():与rand一样，只是底层结构不一样，效率比rand高(建议使用)
	 round():四舍五入
	 ceil():向上取整
	 floor():向下取整
	 pow():求指定数字的指定指数次结果：pow(2,8)==2^8==256
	 abs():绝对值
	 sqrt():求平方根
	 * */
	echo '<hr />';
	echo ceil(3.01);//4
	
	//4、有关函数的函数
	/*
	 function_exists():判断指定的函数名字是否在内存中存在(帮助用户不去使用一个不存在的函数，让代码安全性更高)
	 func_get_arg():在自定义函数中去获取指定数值对应的参数
	 func_get_args():在自定义函数中获取所有的参数(数组)
	 func_num_args():获取当前自定义函数的参数数量
	 * */
	echo '<hr /><pre>';
	function test($a,$b){
		//获取指定参数
		var_dump(func_get_arg(1));
		//获取所有参数
		var_dump(func_get_args());
		//获取参数数量
		var_dump(func_num_args());
		echo '<br />',$a,$b;
	}
	//调用参数
	function_exists('test') && test(1,'2',3,4);
?>