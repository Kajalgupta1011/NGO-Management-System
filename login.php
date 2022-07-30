<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0">
	<title>Get Involved - Helping Hands</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	
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
				<li><a href="news.php">News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
				   
					<li><a href="profile.php">profile</a></li>
					<li><a href="faq.php">FAQ</a></li>
					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php 
					}
					else{
				?>
					<li class="login"><a>Login</a></li>
					
				<?php
					}
				?>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
			<div>
				<div class="login_div">
					<h3>Login</h3>
					<form action="./login_check.php" method="post" class="user">
						<label>Email Address</label>
						<input type="email" name="email" required>
						<label>Password</label>
						<input type="password" name="password" required>
						<label class="forgot"><a href="forgot_password.php" style="text-decoration: none">forgot password ?</a></label><br>
						<input style="color:navy; background:gainsboro" type="submit" value="Login">
					</form>
				</div>
				<div class="register_div">
					<h3>Register</h3>
					<form action="./registration.php" method="post" onsubmit="return checkPassword()" class="user">
						<label>Your Full Name</label>
						<input type="text" name="name" pattern="[a-zA-Z'-'\s]*" title="Please Enter Valid Name" required>
						<label>Email Address</label>
						<input type="email" name="email" required>
						<label>Mobile No.</label>
						<input type="text" maxlength="10" pattern="[7-9]{1}[0-9]{9}"title="Phone number with 7-9 and remaining 9 digits with 0-9" name="mobile" required>
						<label>Password</label>
						<input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						<label>Confirm Password</label>
						<input type="password" name="password" id="password1" required>
						<label>Security Question</label>
						<select name="security_que"  required>
							<option value="who are you ?">who are you ?</option>
							<option value="month of your birth ?">month of your birth ?</option>
							<option value="what is your father name ?">what is your father name ?</option>
							<option value="what is your Best Friend name ?">what is your Best Friend name ?</option>
						</select>
						<!-- <input type="text" name="security_que" required> -->
						<label>Answer</label>
						<input type="text" name="answer" required>
						<input style="color:navy; background:gainsboro" type="submit" value="Register">
					</form>	
				</div>
			</div>
	</div>
	<?php	include("./includes/footer.php");	?>
</body>
</html>