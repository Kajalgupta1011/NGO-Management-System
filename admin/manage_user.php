		<?php include("./includes/session_check.php");
		?>
		<!DOCTYPE html>
		<html>

		<head>
			<meta charset="UTF-8">
			<link rel="shortcut icon" type="image/x-icon" href="../images/logo_icon.png" />
			<title>Admin Panel - Helping Hands</title>
			<link rel="stylesheet" type="text/css" href="./css/manage_user.css">
			<link rel="stylesheet" type="text/css" href="./css/style.css">
			<link rel="stylesheet" type="text/css" href="./css/style_form.css">
		</head>

		<body>
			<div id="header">
				<div>
					<a href="index.php" id="logo"><img src="../images/logo.png" alt="logo"></a>
					<ul>
						<li><a href="home.php">Donations</a></li>
						<li><a href="upload_media.php">Upload Media</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="events.php">Events</a></li>
						<li class="current"><a href="ngo_activities.php">NGO Activities</a></li>
						<li class="log_btn"><a href="./logout.php">Logout</a></li>
					</ul>
				</div>
			</div>


			
			<div id="body">\


				<table border="2" cellspacing="5" padding="10px">
					<tr>
						<th> User Id</th>
						<th> First Name</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Password</th>
						<th>Security Q</th>
						<th>Ans</th>
						<th>Opration</th>
					</tr>

					<?php
			error_reporting(0);
			include("./includes/connection.php");
			$query = "SELECT* FROM user_data";
			$data = mysqli_query($con, $query);
			$fetch = mysqli_num_rows($data);
			if ($fetch != 0) {

				while ($result = mysqli_fetch_assoc($data))
				 {
					 
					echo "
<tr>
<td>" . $result['user_id'] . "</td>
<td>" . $result['first_name'] . "</td>
<td>" . $result['mobile'] . "</td>
<td>" . $result['email'] . "</td>
<td>" . $result['password'] . "</td>
<td>" . $result['security_que'] . "</td>
<td>" . $result['answer'] . "</td>
<td><a href ='Delete.php?rn=$result[user_id]'>Delete</td>
</tr>
";

				}
			} else {
				echo "no records found";
			}
			?>
				</table>
			</div>
			<div>
				<?php include("./includes/footer.html");	?>

			</div>
		</body>

		</html>