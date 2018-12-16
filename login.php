<?php
	include('connection.php');   
	session_start();   
	if(isset(($_POST['username']),($_POST['password']))){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query = $conn->prepare("SELECT username, password FROM users WHERE 
	username=? AND password=? ");
	$query->execute(array($username,$password));
	$nums = $query->rowCount();	
	echo $nums;
	if($nums>0){
	$_SESSION['user']=$username;
	}
	}
?>	