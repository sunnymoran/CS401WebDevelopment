<?php	
	session_start();
	
	require_once 'KLogger.php';
	require_once 'Dao.php';
	
	$logger = new KLogger ( "log.txt" , KLogger::WARN);
	
	$errors = array();
	
    $username = $_SESSION['current_user'];
	
	$table = "commentsSam";
	
	 $dao = new Dao();
	
	if($username == ''){
		$errors[] = "Please login before commenting";	
	}
	
	$logger->LogWarn("inserting into a table,username =[{$username}]");
	
	if(count($errors) > 0){
    $logger->LogWarn(print_r($errors,1));
    $_SESSION['messages'] = $errors;
	$_SESSION['class'] = "bad_error";
	$_SESSION['form_data2'] = $_POST;
	header('Location: samurai.php'); 
	exit;
  }	else{
	 $dao->insertComment($username,$_POST['comment'],$table);
	 $_SESSION['class'] = "success_account";
	 $_SESSION['messages'] = array("Thanks for posting");
	 $_SESSION['form_data2'] = $_POST;
	 header('Location: samurai.php');
	 exit;
  }	  
	
	