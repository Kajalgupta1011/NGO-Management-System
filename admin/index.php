<?php
	session_start();	
	if(isset($_SESSION["admin"])){
		header("location:admin/home.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="./images/logo_icon.png" />
	<title>Admin Login - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="./images/logo.png" alt="logo"></a>
		</div>
	</div>
	<div id="body">
		<div>
			<div class="login_div">
				<h3>Login</h3>
				<form action="./admin_check.php" method="post" class="user">
					<label>Admin</label>
					<input type="text" name="admin">
					<label>Password</label>
					<input type="password" name="password">
					<input style="color:navy; background:gainsboro" type="submit" value="Login" > 
					
					<a href="../login.php" class="back_button">back</a>
					
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>