<?php
	//while循环
	$i = 1;
	while($i<=10){
		echo $i++,'<br />';
	}
	echo '<hr />';
	//do...while循环
	//输出1-10之间的偶数(条件判定加入)
	$i = 1;
	do{
		if($i%2 != 1){
			echo $i,'<br />';
		}
		//条件变更
		$i++;
	}while($i <= 10);
?>