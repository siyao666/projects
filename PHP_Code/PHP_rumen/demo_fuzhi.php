<style type="text/css">
	span{
		font-size: 30px;
	}
</style>
<?php
	//产生mt_rand()随机数
	echo mt_rand(1000,9999);
	echo '<br />';
	$code = '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
	$code .= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
	$code .= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
	$code .= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(1,9).'</span>';
	echo $code;
?>