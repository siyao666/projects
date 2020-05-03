<?php
	$str = "
		<table border='1' width='500px' bgcolor='pink'>
			<tr>
				<td>邮编</td>
				<td>用户名</td>
				<td>邮箱</td>
			</tr>
			<tr>
				<td>1</td>
				<td>siyao</td>
				<td>2544347013@qq.com</td>
			</tr>
		</table>
	";
	//echo $str;

	//通过heredoc的写法
	/*$str=<<<TABLE
	<table border='1' width='500px' bgcolor='blue'>
		<tr>
			<td>邮编</td>
			<td>用户名</td>
			<td>邮箱</td>
		</tr>
		<tr>
			<td>1</td>
			<td>siyao</td>
			<td>2544347013@qq.com</td>
		</tr>
	</table>
	TABLE;*/
	echo $str;
?>