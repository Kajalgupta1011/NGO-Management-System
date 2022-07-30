<?php	session_start();
//include("admin/insert_event.php");
include("includes/connection.php");
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Events - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
	
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li class="current"><a>Events</a></li>
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
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>

	<div id="body">
		<div id="gallery">
			<div class="header">
				<div>
					<h2>Event!!!</h2>
					<p>
					Helpin Hand, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.
					The groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person's life, we believe in the lifecycle approach.
					
					<a href="donate.php" class="first">Rescue lost children on railway platforms from abuse, starvation and trafficking...</a>
					
					</p>
				</div>
				<img src="images\event_4.png" height="350px" width="450px">
				
			</div>
			<div class="body">
				<div>
					<h2>Event !!!</h2>
					
					<img src="images\event_1.jpg" height="150px" width="250px">
					<p>
					Women’s need for equality emerged from inequality and male domination in Indian society. For many reasons, women are being oppressed by members of their families and society.
					
					<br><a href="donate.php" class="first">Homeless Children Org</a>
					</p>
				</div>
				<div>
					<h2>Event !!!</h2>
					
					<img src="images\event_2.jpg" height="150px" width="250px">
					<p>
					NGOs celebrate children’s  day by inviting someday by inviting some special people like movie inviting some special people like movie stars or other celebrities to entertain the children on children’s day.
					<br><a href="donate.php" class="first">Carnival of Love</a>
					</p>
				</div>
				<div>
					<h2>Event !!!</h2>
					<img src="images\event_3.jpg" height="150px" width="250px">
					<p>
					Donate money for children's education and support education and support innovative schools. Your support can give a better future to children from low-income communities.

					<br><a href="donate.php" class="first">DoNation</a>
					</p>
				</div>
			</div>
			<!-- <div class="footer">
				<p>
					stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
				</p>
				<a href="login.php">Get Involved</a>
			</div>-->
		</div>
	</div>
	<?php	include("./includes/footer.php");	?>
</body>
</html>