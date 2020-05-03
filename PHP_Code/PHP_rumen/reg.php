<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册页面</title>
	</head>
	<body>
		<h1>注册页面</h1>
		<form action="demo_post.php" method="post">
			<table border="1">
				<tr>
					<td>用户名</td>
					<td><input type="text" name="username" id="username" placeholder="请输入用户名" /></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="password" name="password" id="password" placeholder="请输入密码" /></td>
				</tr>
				<tr>
					<td>邮箱</td>
					<td><input type="email" name="email" id="email" placeholder="请输入邮箱" /></td>
				</tr>
				<tr>
					<td>性别</td>
					<td>
						<input type="radio" name="sex" id="sex" value="男" />男
						<input type="radio" name="sex" id="sex" value="女" />女
						<input type="radio" name="sex" id="sex" value="保密" />保密
					</td>
				</tr>
			</table>
			<input type="submit" value="注册"/>
		</form>
	</body>
</html>
