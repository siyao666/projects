<?php
	//运算符
	//算数运算符
	$a = $b =10;  //连贯赋值运算：两个不同变量
	$c = 0;
	//var_dump($a / 0); 错误：被除数不能为0
	
	//比较运算符
	$a = '123';//字符串
	$b = 123;//整型
	//判断相等
	var_dump($a == $b);
	//判断全等
	var_dump($a === $b);
	echo '<hr />';
	
	
	
	//三元运算符
	/*
	三元运算符可以进行符合三元运算符：三元运算符中的表达式2和表达式3都是可以是另外一个三元运算符
	表达式1 ? (表达式2 ? 表达式4 ：表达式5) : (表达式3 ? 表达式6 : 表达式7);
	*/
	$a = 10;
	$b = 20;
	$c = $a = 10 ? ($a<$b ? $a : $b) :0;
	echo $c;
	
	
	//自操作运算符
	/*
	 前置自操作：先把自己所保存的值留下来，然后改变自己，自己给别人的值是原来的值; 先自增，后执行
	 后置自操作：先把自己改变，然后改变后的值给别人;  先执行，后自增
	 * */
?>