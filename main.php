<?php
 session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Sunny's Website</title>
	<link rel = "stylesheet" href="stylesheets/main.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png" >
	<img src="images/Logo.PNG" width="200" height ="100">      
  </head>
  <body>
  <h1>reviewgeeksworld </h1> 
  <h2>A hive of entertainment awaits you!</h2>
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
		<div class = "leftbox">		
			<div class="current_page">
				<h3> home > homepage </h3>
			</div>
			<div class="content">
				<h3> Popular Review Items </h3>
				<h4> Samurai Champloo (TV) </h4>
				<a href="samurai.php" >
					<img src="images/samurai.jpg"> 
					<div class = "rating">
					Rating: 4.5/5
					</div>
				</a>	
				<h4> Yakuza: Like a Dragon (Games)</h4>
				<img src="images/Yakuza.jpg">
					<div class = "rating">
					Rating: 4.9/5
					</div>
				<h4> Cowboy Bebop (TV) </h4>
				<img src="images/cowboy.jpg"> 
					<div class = "rating">
					Rating: 4.8/5
					</div>
				</div>			
		</div>
		<div class = "rightbox">
			<div class = "login">
				<h4> Login </h4>
				  <form method="post" action="login_handler.php" enctype="multipart/form-data1">	
					<div class = "input_box">
						<label for="username"> Username</label>
						<input value="<?php echo isset($_SESSION['form_data1']['username']) ? $_SESSION['form_data1']['username'] : ''; ?>" type="text" id="username" name="username">
					</div>
					<div class = "input_box">
						<label for="password">Password</label>
						<input value="<?php echo isset($_SESSION['form_data1']['password']) ? $_SESSION['form_data1']['password'] : ''; ?>" type="text" id="password" name="password">
					</div>
					<input class="login_button" type="submit" value="Submit">
				<div class = "message_return" >
					<?php
						if (isset($_SESSION['messages1'])) {
							foreach ($_SESSION['messages1'] as $message1) {
						echo "<div class='" . $_SESSION['class1'] . " message'>{$message1}</div>";
						}
							}
					unset($_SESSION['messages1']);
					?>
				</div>	
				   </form>
			</div>			
			<div class="forum_post">
				<h3> Popular Forum Items </h3>
				<h4> Popular Forum Item 1 </h4>
					<div class ="forum1">
					<img src="images/Breath.jpg">
					<p>
					I love this book. It does a good job portraying some of the dangers of breathing through your nose.
					It's important to get a better understanding of how important breathing is to your overall health.
					</p>
					</div>
				<h4> Popular Forum Item 2 </h4>
					<div class ="forum2">
						<img src="images/KillBill.jpg">
					<p>
						This is one of my favorite movies. It's an alltime classic that you need to watch if you haven't. My favorite part
						is when she takes on the entre Crazy 88s.
					</p>
					</div>
				<h4> Popular Forum Item 3 </h4>
					<div class ="forum3">
						<img src="images/Vanilla">
					<p>
						This album will make you question what's really important in your life. If you need something to listen to when
						everything seems difficult. Give Vanilla's albumn "Origin" a try.
					</p>
					</div>	
		</div>		
		</div>
    <div class="footer">
     <li class="first">&copy;2021 Sunny Moran</li>
     <li><a href="main_page.html"> main page </a></li>
	 <li><a href="forums.html"> Forums </a></li>
     <li><a href="FAQ">FAQ</a></li>
	</div>
  </body>
</html>
