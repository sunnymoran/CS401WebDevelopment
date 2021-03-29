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
	<img src="images/Logo.PNG" width="200" height ="100">      
  </head>
  <body>
  <h1>5.0/5.0</h1> 
  <h1>Persona 5 Strikers</h1> 
  <h2>"Hee-Ho!"</h2>
		<div class ="profile">
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
				<img src="images/P5S.jpg"> 	
				<div class = "description">
					<p>Join the Phantom Thieves and strike back against the corruption overtaking cities across Japan. A summer vacation with close friends
					takes a sudden turn as a distorted reality emerges; reveal the truth and redeem the hearts of those imprisoned at the center of the crisis! </p>					
					<div class = "list">
					<ul>
						<li> Developers: Atlus, Omega Force, P Studio</li>
						<li>Engine: Unity</li>
						<li>Platforms: PS4, Windows, Xbox One, PS5, Xbox Series X</li>
						<li>Release: February 20, 2020</li>
						<li>Genre: JRPG, Adventure </li>
						<li>Mode(s): Single-player</li>
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
