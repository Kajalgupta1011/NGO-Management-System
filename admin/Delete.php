<?php include("./includes/session_check.php");
		?>
		<!DOCTYPE html>
		<html>

		<head>
			<meta charset="UTF-8">
			<link rel="shortcut icon" type="image/x-icon" href="../images/logo_icon.png" />
			<title>Admin Panel - Helping Hands</title>
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
           <?php include("./includes/connection.php");
error_reporting(0);
$user_id=$_GET['rn'];
$user="DELETE FROM user_data WHERE user_id='$user_id'";
$data=mysqli_query($con,$user);

if($data)
{
    echo"<font color='red'> Record has beed deleted";

}
else
{
    echo"<font color='red'> Record  not deleted";
}
           ?>
            <div>
				<?php include("./includes/footer.html");	?>

			</div>
            </body>


</html>