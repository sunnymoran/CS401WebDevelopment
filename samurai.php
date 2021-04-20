<?php
session_start();
$_SESSION['tableSam'] = "commentsSam";
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Sunny's Website</title>
	<link rel = "stylesheet" href="stylesheets/page.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="javascript/jquery.burn.min.js"></script>
	<script src="javascript/burning.js"></script>
	<img src="images/Logo.PNG" width="200" height ="100">      
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Antonio&family=Zen+Dots&display=swap" rel="stylesheet">
  </head>
  <body>
  <h1 class="burning">4.5/5.0</h1> 
  <h1 class="burning">Samurai Champloo</h1> 
  <h2 class="burning">"Only hope can give rise to the emotion we call despair"</h2>
		<div class ="profile">
				<?php
        		if(isset($_SESSION['current_user'])){
        		echo $_SESSION['current_user'];
        		}

        		?>
		 <h3> Profile </h3>
			<a href="createaccount.php">Create An Account! </a>
			<span class="logout"></br><a href="logout.php">Logout</a></span>
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
		<div class = "main_content">
				<img src="images/samurai.jpg"> 	
	
				<div class = "description">
					<p>Samurai Champloo tells the story of three strangers in the Tokugawa era (also known as the Edo Period) who come together on a journey across Japan. 
					A young woman named Fuu is working as a waitress in a tea shop when she is harassed by a band of samurai. 
					She is saved by Mugen, a mysterious rogue, and Jin, a young ronin </p>					
					<div class = "list">
					<ul>
						<li> Program Creator: Shinichiro Watanabe</li>
						<li>First Episode Date: May 24, 2005</li>
						<li>Where to watch: Hulu, Amazon Prime Video, Itunes</li>
						<li>Cast: Kazuya Nakai, Steve Blum, Ginpei Sato, Ayako Kawasumo,...</li>
						<li>Genre: Action Fiction</li>
						<li>Seasons: 1 season, 24 episodes</li>
					</ul>
					</div>
				</div>
			
		    <div class = "comments">
		    <form method="post" action="comment_handler.php" enctype="multipart/form-data2">
				<div class="input_box">
					<label for="comment">Comment:</label>
						<input value="<?php echo isset($_SESSION['form_data2']['comment']) ? $_SESSION['form_data2']['comment'] : '' ; ?>" type="text" id="comment" name="comment">
				</div>
					<input type="submit" value="Submit">
		<?php
			require_once 'Dao.php';
			$dao = new Dao();
			$table = 'commentsSam';
			$comments = $dao->getComments($table);
		?>
		<table class = "comment_table">
			<thread>
				<tr>
					<th> Username </th>
					<th> Comment </th>
					<th> Date </th>
				</tr>
			</thread>
			
		<tbody>
		`
      <?php
          foreach ($comments as $comment) {
            echo
              "<tr><td>" . htmlspecialchars($comment['username']) . "</td>" .
              "<td>" . htmlspecialchars($comment['comment_value']) . "</td>" .
              "<td>" . htmlspecialchars($comment['time_inserted']) ."</td>";
          }
      ?>	 
	  </form>
      </tbody>
		</table>
		</div>
			<?php
				if (isset($_SESSION['messages'])) {
					foreach ($_SESSION['messages'] as $message) {
						echo "<div class='" . $_SESSION['class'] . " message'>{$message}</div>";
						}
							}
					unset($_SESSION['messages']);
					?>
		
	</div>		
    <div class="footer">
     <li class="first">&copy;2021 Sunny Moran</li>
     <li><a href="main.html"> main page </a></li>
	 <li><a href="forums.html"> Forums </a></li>
     <li><a href="FAQ">FAQ</a></li>
	</div>
  </body>
</html>
