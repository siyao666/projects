<?php
	header('content-type:text/html;charset=utf-8');
	$username = 'king';
	echo $username,'<hr />';
	
	//单引号不解析变量，双引号解析变量
	echo '$username';
	echo '<br />';
	echo "$username";
	echo '<br />';
	
	
	//如果内容中和定界符有冲突，这时候需要转义符来解决
	$str = 'He Said "I\'m Fine"';
	$str_2 = "He Said \"I'm Fine\"";
	echo $str_2;
	echo '<br />';
	
	//单引号只解析\'和\\两个转义符
	$str = '!\r@\n#\t%a\\b\'c\$de';
	//双引号解析所有的转义符
	$str_2 = "!\r@\n#\t%a\\b\'c\$de";
	echo $str;
	echo '<br />';
	echo $str_2;
	echo '<hr />';
	
	$var = 123;
	//$var的值为123
	echo '$var的值为$var';//这种不行
	echo '<br />';
	echo "\$var的值为$var";
	echo '<hr />';
	
	//PHP引擎在解析变量的时候会尽可能多的向后取合法字符，认为取的越多，这个变量的含义越明确
	$username = 'yaoyao';
	//将变量括成一个整体
	echo "名称{$username}是我";//名称yaoyao是我
	
	
?>