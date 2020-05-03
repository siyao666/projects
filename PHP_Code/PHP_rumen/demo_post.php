<?php
	header('content-type:text/html;charset=utf-8');
	if(empty($_POST)){
		echo '
			<script>
				alert("非法操作");
				window.location.href = "reg.php";
			</script>';
		
	}
	//接收表单发送过来的数据
	//$_POST接收表单以post形式发送过来的数据，$_POST['名称']
	echo '用户名：',$_POST['username'],'<br />';
	echo '密码：',$_POST['password'],'<br />';
	echo '邮箱：',$_POST['email'],'<br />';
	echo '性别：',$_POST['sex'],'<br />';
?>