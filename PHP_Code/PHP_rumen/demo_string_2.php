<?php
	//对于字符串中的指定字符做增删改查操作
	$str = 'abcdef';
	//查找
	echo $str{0};
	echo '<br />';
	echo $str{3};
	echo '<br />';
	
	//修改
	//注意，修改的时候只能一个字符替换一个字符,不要对于中文字符做操作
	$str{2}='i';
	echo $str;
	echo '<br />';
	
	//删除  不能为空字符串
	$str{0} = '';
	echo $str;
	echo '<br />';
	
	//增加
	$str{6} = 'g';
	echo $str;
	echo '<hr />';
	
	$str = 'abc';
	$str{5} = 'e';//abc  e
	echo $str;
	echo '<br />';
	var_dump($str);
	echo '<br />';
	echo '<hr />';
	
	/*
	 $string = 'siyao';
	 
	 1.输出首字母
	 2.将字符串中y变成b
	 3.将字符串i删除掉
	 4.在字符串中末尾添加一个!
	 * */
	$string = 'siyao';
	echo $string{0};
	echo '<br />';
	
	$string{2} = 'b';
	echo $string;
	echo '<br />';
	
	/*$string{1} = '';
	echo $string;
	echo '<br />';*/
	
	$string{5} = '!';
	echo $string;
?>