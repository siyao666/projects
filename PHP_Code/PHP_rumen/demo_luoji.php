<?php
	header('content-type:text/html;charset=utf-8');
	//逻辑运算符
	//逻辑与
	var_dump(
		true && true,
		true && false,
		false && true,
		false && false
	);
	echo '<hr/>';
	
	//逻辑或
	var_dump(
		true || true,
		true || false,
		false || true,
		false || false
	);
	echo '<hr/>';
	
	//逻辑非
	var_dump(
		!false,
		!true
	);
	echo '<hr/>';
	
	//逻辑异或
	var_dump(
		true xor true,
		true xor false,
		false xor true,
		false xor false
	);
	echo '<hr/>';
	
	//逻辑与，短路
	$i = 0;
	$j = 1;
	if($i&&$j){
		echo 'true';
	}else{
		echo 'false';
	}
	echo '<br/>';
	
	$i = 0;
	$j = 1;
	if($i && --$j){
		echo 'true';
	}else{
		echo 'false';
	}
	var_dump($i,$j);
	echo '<hr/>';
	
	//逻辑或，短路
	$i = 1;
	$j = 1;             
	if($i-- || ++$j){
		echo 'true';
	}else{
		echo 'false';
	}
	var_dump($i,$j);
	echo '<hr/>';
	
	$i = 1;
	$j = 0;
	var_dump(
		!0,
		@(++$abcd && --$cacsvsv),
		@(--$i || --$j)
	);
?>