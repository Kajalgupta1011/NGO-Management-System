<?php
	include("connection.php");
	if(isset($_POST['send_msg'])){
	//for creating unique id with database checked
	$f = 0;
	$id = "";
	while($f != 1){
		$temp_id = uniqid("MG");
		//query for checking the uniqueid is exist in table or not
		$sql = "SELECT * FROM messages WHERE msg_id='".$temp_id."'";	
		$q = mysqli_query($con,$sql);
		if(mysqli_num_rows($q)==0){
			$id = $temp_id;
			$f = 1;
		}
	}
		$sql = "INSERT into messages(msg_id,name,email,message) VALUES('".$id."','".$_POST['sender_name']."','".$_POST['sender_email']."','".$_POST['message']."')";
		$result = mysqli_query($con,$sql);
		if($result==1){
			?>
			<script>
				alert("Your message is sent.");
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert("Message sending failed..!");
			</script>
			<?php
			echo mysqli_error($con);	
		}
		
	}
?>
<div id="footer">
	<div>
		<form action="" method="post">
			<h2>Send A Message</h2>
			<label for="name" style="margin:0px"><span>Your Name:</span>
				<input type="text" id="name" name="sender_name" pattern="[a-zA-Z'-'\s]*" title="Please Enter Valid Name" required>
			</label>
			<label for="emailad" style="margin:0px"><span>Email Address:</span>
				<input type="email" id="emailad" name="sender_email" required>
			</label>
			<label for="message" style="margin:0px"><span class="message">Message:</span>
				<textarea name="message" id="message" cols="30" rows="10" required></textarea>
			</label>
			<input type="submit" class="send" name="send_msg" value="Send">
		</form>
		<div>
			<h2>Contact Details</h2>
			<ul>
				<li>
					<b>Location</b>
					<span>:</span>
					<p>
						Goregaw EAST
						Near FilmCity,
						Powder Galli,
						Mumbai.
					</p>
				</li>
				<li>
					<b>Whatsapp</b>
					<span>:</span>
					<p>
					<a href="https://wa.me/9768815796">
					<img src="images\call.png" height="30px" width="30px">
						<!-- (+91) 9408185145 -->
					</a>
					</p>
				</li>
				<li>
					<b>Email</b>
					<span>:</span>
					<p>
						<a href="" class="email" target="_blank">help@helpinghands.org</a>
					</p>
				</li>
				<li>
					<b>Social</b>
					<span>:</span>
					<div> 
						<a href="https://www.facebook.com/" id="facebook" target="_blank">facebook</a>
						<a href="https://twitter.com/" id="twitter" target="_blank">twitter</a>
						<a href="" id="googleplus" target="_blank">google&#43;</a>
						<a href="https://wa.me/9768815796" id="whatsapp" target="_blank">whatsapp</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<p>
		Helping Hands &copy; Copyright 2022. All rights reserved.
	</p>
</div>