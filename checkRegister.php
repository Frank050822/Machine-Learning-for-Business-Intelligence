<!DOCTYPE html>
<html>
<head>
	<title>CheckRegister...</title>
</head>
<body>

<?php
	if(isset($_POST["submit"])) {
        // 接受表单传过来的值
		$username = $_POST["username"];
		$gender = $_POST["gender"];
		$birthdate = $_POST["birthdate"];
		$pwd1 = $_POST["password1"];
        $pwd2 = $_POST["password2"];
        $edu = $_POST["edu"];

        if($edu == 1) {
        	$education = 'undergraduate';
        } else if($edu == 2){
        	$education = 'graduate';
        } else {
        	$education = 'undefined';
        }

        // 判断是否为空，如果为空跳转回去重新输入
		if($username == "" || 
			$gender == "" ||
			$birthdate == "" ||
			$pwd1 == "" ||
			$pwd2 == "") {
			header("refresh:3;url = register.php");
			echo 'INCOMPLETE INFORMATION';
			exit();
        }
        // 判断两次密码输入是否相同
		if($pwd1 != $pwd2) {
			header("refresh:3;url = register.php");
			echo 'Two password inputs are not same';
		}
        /*	
        // 生成username的sha值，并查询数据库有无重复
		$userid = sha1($username);
		$link = mysqli_connect('localhost', 'root', 'root');
		$db_selected = mysqli_select_db($link, 'php');
		mysqli_query($link, "set names 'utf8'");
		$sql = "select userid from userinfo";
		$result = mysqli_query($link, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			if($row["userid"] == $userid) {
				header("refresh:3;url = register.php");
				echo 'Username repeat';
				exit();
			}
        }
        */
        // 插入数据库
        $link = mysqli_connect('localhost', 'root', '');
		$db_selected = mysqli_select_db($link, 'FrankSQL');

// 黄色部分为sql语句，单引号是sql字符串，双引号是php的字符串,insert into userinfo(username, gender, birthdate, pwd) values(' 为第一段，看双引号里面的

		mysqli_query($link, "set names 'utf8'");
		$sqlInsert = "insert into userinfo(username, gender, birthdate, pwd, education) values('".$username."', '".$gender."', '".$birthdate."', '".$pwd1."', '".$education."')";
		if(mysqli_query($link, $sqlInsert)) {
			// header("refresh:3;url = index.php");
			echo "<h3 align = 'center'>SUCCESS</h3>";
		}
		else {
			echo mysqli_error($link);
		}
			
		mysqli_close($link);
	}
?>

</body>
</html>