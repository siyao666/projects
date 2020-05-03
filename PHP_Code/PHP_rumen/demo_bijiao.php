<?php
	var_dump(
		1==1,
		1==='1',
		1<>'1'
	);
	echo '<hr />';
	var_dump(
		3<=>1,
		3<=>3,
		3<=>5
	);
	echo '<hr />';
	var_dump(
		'a'<=>'a',
		'c'<=>'a',
		'c'<=>'d'
	);
	
	//null检测符
	
	echo '<hr />';
	var_dump(
		true??'king'??123,
		0??false??null??'hello world',
		$abc??'hello world'
	);
?>