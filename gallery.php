<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" charset="UTF-8" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Gallery - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li class="current"><a>gallery</a></li>
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
					<h2>
						Helping Hand NGO
					</h2>
					<p>
					Helpin Hand, an Indian social development organization, is directly benefitting over 15 lakh children and their families every year. We have more than 400 live welfare projects on education, healthcare, livelihood, and women’s empowerment in over 2,000 remote villages and urban slums across 25 states of India.
					The groundwork for a better life lies in education. It is the most powerful catalyst for social transformation. However, a child cannot be educated in isolation. Only an empowered family, especially the mother, would be willing to educate their child. Thus, rather than focusing on only one stage of a person's life, we believe in the lifecycle approach.
					</p>
				</div>
				<img src="images/gallery2.jpg" height="300px" width="400px">
			</div>
			<div class="body">
				<div>
					<h2>childrens Day</h2>
					<p>
					NGOs celebrate children’s day by inviting some special people like movie stars or other celebrities to entertain the children on children’s day.
					</p>
					<img src="images/gallery3.jpg" height="150px" width="250px">

				</div>
				<div>
					<h2>child Ngo</h2>
					<p>
					Donate money for children's education and support innovative schools. Your support can give a better future to children from low-income communities.
					</p>
					<img src="images/gallery1.jpg" height="150px" width="250px">
				</div>
				<div>
					<h2>Womens Ngo </h2>
					<p>
					Women’s need for equality emerged from ancient times due to gender inequality and male domination. For many reasons, women are being oppressed by members of their families and society.
					</p>
					<img src="images/gallery4.jpg" height="150px" width="250px">
				</div>
			</div>
			
		</div>
	</div>
				<!-- <div>
					<h2></h2>
					<p>
					</p>
				</div>
				<img src="" height="250px" width="500px">
			</div>
			<div class="body">
				<div>
					<h2></h2>
				</div>
				<div>
					<h2></h2>
					<p>
					</p>
				</div>
				<div>
					<h2></h2>
					<p>
					</p>
				</div>
			</div>
			<div class="footer">
				<p>
					stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
				</p>
				<a href="login.php">Get Involved</a>
			</div>
		</div>
	</div> -->
	<?php	include("./includes/footer.php");	?>
</body>
</html>