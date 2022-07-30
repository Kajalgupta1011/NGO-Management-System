<?php
	include("./includes/connection.php");
	
$id = $_POST["id"];
$password = $_POST["password"];
	
$sql = "UPDATE user_data SET password='".$password."' WHERE user_id='".$id."'";

$q = mysqli_query($con,$sql);

if($q==1){
	?>
	<script>
		alert("Password Has Changed!!");
		window.location="./login.php";
	</script>
	<?php
	header("location:login.php");
}
else{
	echo "ERROR...!!!";
}

mysqli_close($con);

?>