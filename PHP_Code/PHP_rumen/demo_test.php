<?php
	/*
	 字符串搜索相关
	 strpos($string,$search):返回字符串首次出现的位置，位置从0开始；如果没找到返回false
	 stripos($string,$search):忽略大小写的去搜索
	 strrpos($string,$search):返回字符串最后一次出现的位置；如果没找到返回false
	 strripos($string,$search):忽略大小写的去搜索最后一次出现的位置
	 * */
	$str = 'abcadebf';
	var_dump(strpos($str,'b'));//1
	var_dump(stripos($str,'B'));//1
	var_dump(strrpos($str,'b'));//6
	var_dump(strripos($str,'B'));//6
	echo '<hr />';
	
	//==和===的区别
	$email = '@2544347013@qq.com';
	if(strpos($email,'@')===false){
		echo '非法邮箱';
	}else{
		echo '合法邮箱';
	}
?>