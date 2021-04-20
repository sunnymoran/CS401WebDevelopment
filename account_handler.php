<?php
require_once 'KLogger.php';
session_start();
require_once 'Dao.php';
$errors = array();
$logger = new KLogger ("log.txt", KLogger::WARN);	
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
$dao = new Dao();

$age = $_POST['age'];
if(!is_numeric($age)){
	$errors[] = "Invalid Age: Enter a number";
}



if((!preg_match($regex,$_POST['email']))){
	$errors[] = "Invalid email: Please try again";
}	



if(count($errors) > 0){
    $logger->LogWarn(print_r($errors,1));
    $_SESSION['messages'] = $errors;
	 $_SESSION['class'] = "bad_error";
	$_SESSION['form_data'] = $_POST;
	header('Location: createaccount.php'); 
	exit;
  }	else{
	 $dao->insertAccount($_POST['username'],$_POST['email'],$_POST['age'],$_POST['user_password']);
	 $_SESSION['class'] = "success_account";
	 $_SESSION['messages'] = array("Thanks for creating an account");
	 $_SESSION['form_data'] = array();
	 header('Location: createaccount.php');
	 exit;
  }	  

 

