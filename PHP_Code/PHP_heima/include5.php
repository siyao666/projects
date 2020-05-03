<?php
	//require和include的区别
	//include包含文件
	//include 'a.php'; 如果包含出错后续代码还是会执行
	
	//require包含文件   如果包含出错后续代码不会执行
	require 'a.php';
	echo 'hello world';
?>