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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="javascript/jquery.burn.min.js"></script>
	<script src="javascript/burning.js"></script>    
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Antonio&family=Zen+Dots&display=swap" rel="stylesheet">	
  </head>
  <body>
  <h1 class="burning">4.3/5.0</h1> 
  <h1 class="burning">Sherlock</h1> 
  <h2 class="burning">"Don't let it get to you. I always feel like screaming when you walk into a room"</h2>
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
				<img src="images/sherlock.jpg"> 	
				<div class = "description">
					<p>A modern update finds the famous sleuth and his doctor partner solving crime in 21st century London..</p>					
					<div class = "list">
					<ul>
						<li>Network: PBS, BBC One</li>
						<li>Writers: Mark Gatiss, Steven Moffat, Stephen Thompson</li>
						<li>Release: 2010</li>
						<li>Genre: Mystery </li>
						<li>Seasons: 4</li>
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
