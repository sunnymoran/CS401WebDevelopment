<!DOCTYPE html>
<html>
  <head>
    <title> Games Page</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png">
	<link rel = "stylesheet" href="stylesheets/games_section.css"/>
	<img src="images/Logo.PNG" alt="Logo Image" width="200" height ="100">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="javascript/main_page.js"></script>
	<script src="javascript/navigation.js"></script>
	<script src="javascript/jquery.burn.min.js"></script>
	<script src="javascript/burning.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Antonio&family=Zen+Dots&display=swap" rel="stylesheet">
  </head>
  <body>
	<h1 class="burning"> Games</h1> 
		<div class ="profile">
		 <h3> Profile </h3>
			<a href="createaccount.php">Create An Account! </a>
			<span class="logout"><a href="logout.php">Logout</a></span>
		</div>
	<div id="menu">
		<ol>
			<li><a href="main.php"> Home Page </a></li>
			<li><a href="games.php"> Games </a></li>
			<li><a href="movies.php"> Movies </a></li>
			<li><a href="TV.php"> TV </a></li>
			<li><a href="music.php"> Music </a></li>
			<li><a href="forums.php"> Forums </a></li>
			<li><a href="TV.php"> Etc.. </a></li>		
		</ol>
	</div>
	<div class="current_page">
		<h3> home > games</h3>
	</div>
	<div class="main">
		<div class= "content">
			<a href="LikeADragon.php">
			<img src="images/Yakuza.jpg">	
			</a>	
			<div class= "rating">
				Rating: 4.9/5
			</div>
			
		</div>		
		<div class= "content">
			<a href = "P5S.php">
			<img src="images/P5S.jpg">
			</a>
			<div class= "rating">
				Rating: 5/5
			</div>
		</div>
		<div class= "content">
			<a href="P4G.php">
			<img src="images/P4G.jpg">
			</a>
			<div class= "rating">
				Rating: 4/5
			</div>
		</div>	
		<div class= "content">
			<a href="Val.php">
			<img src="images/Val.png">
			</a>
			<div class= "rating">
				Rating: 3.5/5
			</div>
		</div>	
		<div class= "content">
			<a href ="Doom.php">
			<img src="images/doom.jpg">
			</a>
			<div class= "rating">
				Rating: 4/5
			</div>	
		</div>
	</div>
		<div class="footer">
			<li class="first">&copy;2021 Sunny Moran</li>
			<li><a href="main.html"> main page </a></li>
			<li><a href="forums.html"> Forums </a></li>
			<li><a href="FAQ">FAQ</a></li>
		</div>
  </body>
</html>