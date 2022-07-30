<?php
	include("./includes/connection.php");
	$ans = $_GET['answer'];
	$faq_id = $_GET['faq_id'];
	$sql = "UPDATE faq SET answer='".$ans."' WHERE faq_id='".$faq_id."'";
	if(mysqli_query($con,$sql)){
		header("location:manage_faq.php");
	}
	else{
		echo mysqli_error($con);
	}
?>