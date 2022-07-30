<?php
	session_start();
	include("./includes/connection.php");
	// include("./security_question.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0">
	<title>New Password - Helping Hands</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/style_form.css">
	<script type="text/javascript">
		function checkPassword(){
			if(document.getElementById("password").value == document.getElementById("password1").value){
				return true;
			}
			else{
				document.getElementById("password").style.border="2px solid #ff3300";
				document.getElementById("password1").style.border="2px solid #ff3300";
				return false;
			}
		}
	</script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="news.php">News &amp; Blog</a></li>
				<li><a href="donate.php">Donate</a></li>
				<li><a href="index.php">Back</a></li>
			</ul>
		</div>
	</div>
	<?php
		
		if(isset($_SESSION['user_id'])){
	?>
	<div id="body">
		<div style="margin-bottom:50px">
			<div class="login_div" style="margin-top:30px">
				<h3>Change Password</h3>
				<form action="change_password.php" method="post" onsubmit="return checkPassword()" class="user">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<label>Old Password</label>
					<input type="password" name="op" id="op" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<label>New Password</label>
					<input type="password" name="np" id="np">
					<label>Confirm Password</label>
					<input type="password" name="c_np" id="c_np">
					<input type="submit" value="Update">
				</form>
			</div>
		</div>
	</div>
	<?php
		}
		else{
			echo"<script>
				alert('Something Went Wrong...!!');
				window.location='./profile.php;
			</script>";
		}
	?>
</body>
</html>
