<?php
	header('content-type:text/html;charset=utf-8');
	/*$_GET 地址栏传递参数
	$_POST 表单或其他方式的隐藏传值*/
	
	//print_r($_POST);
	$total = $_POST['money']; //总金额
	$num = $_POST['num']; //总个数
	$min = 0.01; //设置最少值
	for($i=1;$i<$num;$i++){
		$safe_total = ($total-($num-$i)*$min)/($num-$i);//限制了每个人最多领多少钱
		$money = mt_rand($min*100.00,$safe_total*100.00)/100.00;//mt_rand表示整数随机数
		$total = $total-$money;//剩余多少钱
		$arr['res'][$i] = array(
			'i'=>$i,
			'money'=>$money,
			'total'=>$total
		);
	}
	$arr['res'][$num] = array(
		'i'=>$num,
		'money'=>$total,
		'total'=>0
	);
	$arr['msg']=1;
	echo json_encode($arr);
?>