<?php
	header('content-type:text/html;charset=utf-8');
	date_default_timezone_set('PRC');
	$i=3;
	switch($i){//比对的时候是松散比较==1=='1'
		case 1;
		echo 'a<br/>';
		break;
		case 2;
		echo 'b<br/>';
		break;
		case 3;
		echo 'c<br/>';
		break;
		case 4;
		echo 'd<br/>';
		break;
		default:
		echo '没有找到<br/>';
		break;
	}
	echo 'continue...<br/>';
	
	
	
	//得到当前是一周内的第几天
	$day = date('w');
	
	if($day==0){
		$str='星期日';
	}elseif($day==1){
		$str='星期一';
	}elseif($day==2){
		$str='星期二';
	}elseif($day==3){
		$str='星期三';
	}elseif($day==4){
		$str='星期四';
	}elseif($day==5){
		$str='星期五';
	}elseif($day==6){
		$str='星期六';
	}
	echo date('Y年m月d日 ').$str.date(' H:i:s');
	echo '<hr/>';
	
	$day = date('w');
	switch($day){
		case 0:
		$res='星期日';
		break;
		case 1:
		$res='星期一';
		break;
		case 2:
		$res='星期二';
		break;
		case 3:
		$res='星期三';
		break;
		case 4:
		$res='星期四';
		break;
		case 5:
		$res='星期五';
		break;
		case 6:
		$res='星期六';
		break;
	}
	$dateStr = date('Y年m月d日 ').$res.date(' H:i:s');
	echo $dateStr;
?>