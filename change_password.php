<?php
session_start();
include("./includes/connection.php");
if(isset($_SESSION['user_id'])){
	
	if(isset($_POST['op']) && isset($_POST['np']) && isset($_POST['c_np'])){
		$op = $_POST['op'];
		$np = $_POST['np'];
		$c_np = $_POST['c_np'];
		if(empty($op)){
			header("Location:profile.php?error=Old Password is Required");
		}else if(empty($np)){
			header("Location:profile.php?error=New Password is Required");
		}else if($np !== $c_np){
			header("Location:profile.php?error=The Confirm Password doesn't Match");
		}else{
			$id=$_SESSION['user_id'];
			$sql= "SELECT password FROM user_data WHERE user_id = '".$id."' AND password='".$op."'";
			$result = mysqli_query($con,$sql);
			if($result == 1){
				$sql2= "UPDATE user_data SET password='".$np."' WHERE user_id='".$id."'";
				$result2 = mysqli_query($con,$sql2);
				if($result2 == 1){
					?>
					<script>
						alert("Password Has Changed!!");
						window.location="./index.php";
					</script>
					<?php
					header("location:index.php");
				}
			}else{
				header("Location:profile.php?error=Password is Incorrect");
			}
		}


	}else{
		header("Location:profile.php");
	}


}else{
	header("Location:index.php");	
}



?>



