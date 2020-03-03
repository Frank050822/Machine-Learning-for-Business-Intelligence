<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
	<style type="text/css">
		.container
		{
			margin:10px auto;
			height:300px;
			width:400px;
		}
		.table
		{
			margin:20px auto;
			border:1px solid black;
		}
	</style>

<body>
<h3 align = "center">Register</h3>
<div class = "container">
<form
	method = "post"
	action = "checkRegister.php">
	<table class = "table" border = "1">
		<tr>
			<th>username</th>
			<td align = "center">
				<input type = "text" name = "username" placeholder="username"/>
			</td>
		</tr>
		<tr>
			<th>gender</th>
			<td align = "center">
				male<input type = "radio" name = "gender" value = "male"/>
				female<input type = "radio" name = "gender" value = "female"/>
			</td>
		</tr>
		<tr>
			<th>birthdate</th>
			<td align = "center">
				<input type = "text" name = "birthdate" placeholder="1900-01-01"/>
			</td>
		</tr>

<!--from tr to /tr, it means one row of a form. From th to /th, it means that head of form. From td to /td, it means that the normal cells of from. !-->
	

		<tr>
			<th>education</th>
			<td align = "center">
				<select name="edu">
					<option value="1">undergraduate</option>
					<option value="2">graduate</option>
				</select>
			</td>
		</tr>


		<tr>
			<th>password</th>
			<td>
				<input type = "password" name = "password1"/>
			</td>
		</tr>
		<tr>
			<th>password again</th>
			<td>
				<input type = "password" name = "password2"/>
			</td>
		</tr>

<!--
colspan, 合并单元格 !
name是属性
value是显示的值
-->
		<tr>
			<td colspan="2" align = "center">
				<input type = "submit" value = "submit" name = "submit">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "reset" value = "reset">
			</td>
		</tr>
	</table>
</form>
</div>
</body>
</html>