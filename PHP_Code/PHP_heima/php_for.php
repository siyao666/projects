<?php
	//循环结构：for循环
	
	//从1到10输出：初始为1，结构为10
	for($i=1;$i<=10;$i++){
		//输出
		echo $i,'<br />';
	}
	//最后：$i == 11
	echo '<hr />';
	echo $i;
	echo '<hr />';
	
	
	/*
	 for循环执行原理：
	 1、执行条件表达式1：定义初始化条件(执行一次)
	 2、执行条件表达式2：判断条件(n次)
	 	2.1 满足条件：执行循环体
	 	2.2 不满足条件：循环结束
	 3、执行循环体(n次)
	 4、执行条件表达式3：循环变量变化(n次)
	 5、执行条件表达式2；判断条件(n次)
	 6、重复执行3-4-2步骤：直到第2步不满足条件结束循环
	 * * */
	
	for($i=1,$end=10;$i<=$end;$i++){
		//输出
		//echo $i,'<br />';
	}
	
	/*
	 * for循环特殊使用：for循环中对应的括号(条件)可以一个都没有(死循环)
	 * 分号一定要有
	 * for(;;){
	 * 		//循环体
	 * }
	 * */
	//无条件for循环
	/*for(;;){
		echo 'hello world!','<br />';
	}*/
	
	
?>