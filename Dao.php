<?php

require_once 'KLogger.php';

class Dao{
	
public $user = "b8b1c69439373f";
public $password = "c5f68dd2";
public $dsn = 'mysql:dbname=heroku_c500d82065985fc;host=us-cdbr-east-03.cleardb.com';
protected $logger;	
	
	public function __construct(){
		$this->logger = new KLogger ("log.txt", KLogger::DEBUG);
	}	
	
	private function getConnection(){
	try{    
		$connection = new PDO($this->dsn,$this->user,$this->password);

	}catch (PDOException $e){
		$error = 'Connection failed: ' . $e->getMessage();
		$this->logger->LogError($error);
	}
	return $connection;
  }
  
   public function deleteComment ($user_id,$table) {
    $this->logger->LogInfo("deleting comment id [{$user_id}]");
    $conn = $this->getConnection();
    $deleteQuery = "delete from $table where user_id = :user_id";
    $q = $conn->prepare($deleteQuery);
    $q->bindParam(":user_id", $user_id);
    $q->execute();
  }
  
  
  public function getComments($table){
    $connection = $this->getConnection();
    try {
        $rows = $connection->query("select * from $table order by time_inserted desc", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }
  
	public function insertAccount($username,$email,$age,$user_password){
//	$this->logger->LogInfo("inserting an account username=[{$username}],email=[{$email}],age=[{$age}],password=[{$user_password}] "); 
	$conn = $this->getConnection();
	$saveQuery = "insert into users (username, email, age, user_password) values (:username, :email, :age , :hash)";
	$q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":email", $email);
    $q->bindParam(":age", $age);
	$hash = hash('sha256',$user_password);
	$q->bindParam(":hash", $hash);
	$this->logger->LogDebug("[{$username}][{$email}][{$age}][{$user_password}]");
    $q->execute();
	}
	
	public function getAccount($username){
	$conn = $this->getConnection();
		try{
			$q = $conn->prepare("SELECT username FROM user WHERE username = :username",PDO::FETCH_ASSOC);
		} catch (Exception $e){			
			echo print_r($e,1);
			exit();		
		}
		return $account;
	}	
	
  
    public function insertComment ($username,$comment,$table) {
	$this->logger->LogInfo("inserting into a table,username =[{$username}] comment =[{$comment}],table=[{$table}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into $table (username, comment_value) values (:username,:comment)";
    $q = $conn->prepare($saveQuery);
	$q->bindParam(":username", $username);
    $q->bindParam(":comment", $comment);
	$this->logger->LogDebug("[{$comment}][{$table}]");
    $q->execute();
  }
  
  
  public function accountExists($username, $password){
		$conn = $this->getConnection();
		try{
		$hash = hash('sha256',$password);
		$q = $conn->prepare("select count(*) as total from users where username = :username and user_password = :hash");
        $q->bindParam(":username", $username);
        $q->bindParam(":hash", $hash);
        $q->execute();
        $row = $q->fetch();
        if ($row['total'] == 1) {			
           $this->logger->LogInfo("user found!" . print_r($row,1));
           return true;
        } else {
			$this->logger->LogInfo("user not found!" . print_r($row,1));
           return false;
        } 
		}catch(Exception $e) {
		echo print_r($e,1);
		exit();  
  } 
		
}

}

	
