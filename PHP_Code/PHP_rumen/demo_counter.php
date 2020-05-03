<html>
	<head>
		<title>计算器</title>
	</head>
	<body>
		<h1>计算器</h1>
		<form action="" method="post">
			num1 <input type="text" name="num1" />
			<select name="op">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="%">%</option>
			</select>
			num2 <input type="text" name="num2" />
			<hr />
			<input type="submit" value="计算" name="btn"/>
		</form>
		<?php 
			error_reporting(E_ALL&~E_NOTICE);
			$btn = $_POST['btn'];
			if($btn){
				//print_r($_POST);
				$num1 = $_POST['num1'];
				$op = $_POST['op'];		
				$num2 = $_POST['num2'];	
				if(is_numeric($num1)!=null && is_numeric($num2)!=null){
					if($op=='+'){
						$res = $num1 + $num2;
					}elseif($op=='-'){
						$res = $num1 - $num2;
					}elseif($op=='*'){
						$res = $num1 * $num2;
					}elseif($op=='/'){
						if($num2!=0){
							$res = $num1 / $num2;
						}else{
							exit('0不能当做除数');
						}
					}elseif($op=='%'){
						$res = $num1 % $num2;
					}else{
						echo '非法操作';
					}
					//echo $num1.$op.$num2.'='.$res;
					echo "运算结果为：<br/>{$num1}{$op}{$num2}={$res}";
				}else{
					exit('非法操作数！');
				}
			}
			
		?>
	</body>
</html>