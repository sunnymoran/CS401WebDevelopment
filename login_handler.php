<?php
  session_start();
  
  $errors = array();
  
  require_once 'KLogger.php';
  
  $logger = new KLogger ("log.txt", KLogger::DEBUG);
  
  $username = $_POST['username'];
  
  $password = $_POST['password'];
  
 
  
  require_once 'Dao.php';
  
  $dao = new Dao();
  
  $_SESSION['authenticated'] = $dao->accountExists($username, $password);

  if ($_SESSION['authenticated']) {
	 $_SESSION['class1'] = "success_account";
	 $_SESSION['messages1'] = array("Succesful login, Welcome: $username");
	 $logger->LogDebug("workign username username =[{$username}]");
	 $_SESSION['current_user'] =$_POST['username'];
	 $_SESSION['form_data1'] = array();
     header('Location: main.php'); 
     exit;
  } else {
	 $_SESSION['class1'] = "bad_error";
	 $_SESSION['messages1'] = array("Incorrect username or password, please try again");
	 $_SESSION['form_data1'] = $_POST;
     header('Location: main.php');
     exit;
  }