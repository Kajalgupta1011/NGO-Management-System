<?php
	include("./includes/connection.php");
	echo "Thank you...";
	$sql = "SELECT * FROM messages WHERE msg_id='".$_GET['msg_id']."'";
	$result = mysqli_query($con,$sql);
	$rs = mysqli_fetch_array($result);
	echo $rs['message'] ?? NULL;	
?>