<?php
	include("./includes/connection.php");
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
				<li><a href="security_question.php">Back</a></li>
			</ul>
		</div>
	</div>
	<?php
		$id = $_POST["id"];
		$ans = $_POST["answer"];
		$sql = "SELECT * FROM user_data WHERE user_id='".$id."'";
		$result = mysqli_query($con,$sql);
		$rs = mysqli_fetch_array($result);
		$email = $rs["email"];
		$ans1 = $rs["answer"];
		if($ans == $ans1){
	?>
	<div id="body">
		<div style="margin-bottom:50px">
			<div class="login_div" style="margin-top:30px">
				<h3>New Password</h3>
				<form action="./password_update.php" method="post" onsubmit="return checkPassword()" class="user">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<label>Password</label>
					<input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<label>Confirm Password</label>
					<input type="password" name="password" id="password1" required>
					<input type="submit" value="Update">
				</form>
			</div>
		</div>
	</div>
	<?php
		}
		else{
			echo"<script>
				alert('Wrong Answer...!!');
				window.location='./security_question.php?email=$email'
			</script>";
		}
	?>
</body>
</html>