<html>
	<head>
		<title>测试PHP文档组成--<?php echo "PHP脚本语言";?></title>
	</head>
	<style type="text/css">
		span{
			color: pink;
			font-size: 30px;
		}
		h3{
			padding: 5px 0;
			color: gold;
			text-align: center;
			background-color: plum;
			text-shadow: 0.2em 0.5em 0.1em #600,
     		-0.3em 0.1em 0.1em #060,
      		0.4em -0.3em 0.1em #006;
		}
	</style>
	<script type="text/javascript">
		alert("good");
	</script>
	<body>
		<span><?php echo "FengSiYao is very good";?></span>
		<h3>
			<?php
				//变量的例子
				
				//申明一个变量
				//变量名称最好含义明确
				/*$username = 'yaoyao';
				$age = 18;
				$tel = 13975425489;
				$var; //可以不赋值*/
				
				//$32_sx = 'yaoyao';//这是错误的
				$_age = 18; //这是可以的
				echo $_age;
				echo '<hr />';
				
				//即使中文可以，但也不要这样命名
				/*$你 = '好';
				echo $你;*/
				
				//小驼峰命名
				$firstName = 'yaoyao';
				//大驼峰命名
				$FirstName = 'yaoyao';
				//下划线命名
				$first_name = 'yaoyao';
				
				//PHP严格区分大小写
				$a = 123;
				$A = 456;
				echo $a;
				echo $A;
				
				echo '<hr />';
				
				//如果变量重名，后面的会把前面的覆盖
				$b = 666;
				$b = 888;
				echo $b;//888
				echo '<hr />';
				
				/*//PHP中可以不声明直接使用
				echo $aaa;*/
				
				//可变变量例子
				$i = 'j';
				$j = 'k';
				$k = 'hello world';
				echo $$$i;//$$j->$k
			?>
		</h3>
	</body>
</html>