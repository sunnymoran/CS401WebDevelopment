<?php
 session_start();
?>
<html>
<head>
 <title> Create Account</title>
 	<link rel = "stylesheet" href="stylesheets/createaccount.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon-32x32.png" >
	<img src="images/Logo.PNG" width="200" height ="100">  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="javascript/main_page.js"></script>
	<script src="javascript/navigation.js"></script>
	<script src="javascript/jquery.burn.min.js"></script>
	<script src="javascript/burning.js"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Antonio&family=Zen+Dots&display=swap" rel="stylesheet">

</head>
<body>
<h1 class ="burning">reviewgeeksworld </h1>
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

<form method="post" action="account_handler.php" enctype="multipart/form-data" >
  <div class="container">
    <h1 class ="burning">Sign Up</h1>
    <p>Please fill in this form to create an account.</p>

    <label for="username"><b>Username</b></label>
    <input value="<?php echo isset($_SESSION['form_data']['username']) ? $_SESSION['form_data']['username'] : ''; ?>" type="text" placeholder="Enter Username" id="username" name="username" >

    <label for="email"><b>Email</b></label>
    <input value="<?php echo isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>" type="text" placeholder="Enter Email" id="email" name="email" >

    <label for="age"><b>Age</b></label>
    <input value="<?php echo isset($_SESSION['form_data']['age']) ? $_SESSION['form_data']['age'] : ''; ?>" type="text" placeholder="Enter Age" id="age" name="age">
	
	<label for="password"><b>Password</b></label>
    <input value="<?php echo isset($_SESSION['form_data']['user_password']) ? $_SESSION['form_data']['user_password'] : ''; ?>" type="password" placeholder="Enter password" id="user_password" name="user_password" >
    
    <div class="clearfix">
      <input type="submit" class="signupbtn" value="Submit"></input>
    </div>
  </div>
<?php
    if (isset($_SESSION['messages'])) {
      foreach ($_SESSION['messages'] as $message) {
       echo "<div class='" . $_SESSION['class'] . " message'>{$message}</div>";
      }
    }
    unset($_SESSION['messages']);
?>
</form>
<div class = "Instructions">
Please follow the instructions in order to succesfully create an account:
<ul>
			<li>Age: must be a valid number</li>
			<li>Email: Must be a valid email address Example: kingdom@gmail.com</li>	
</ul>


</div>
		

</body>
</html>