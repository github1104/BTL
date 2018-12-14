<?php
	include('connection.php');   
	session_start();   
	if(isset(($_POST['username']),($_POST['password']))){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from user where username='$username'and password='$password'";
	$query=mysqli_query($conn,$sql);
	$nums=mysqli_num_rows($query);

	if($nums>0){
	$row=mysqli_fetch_array($query);
	$_SESSION['user']=$username;
	header('location:index.php'); 
	}
	return $nums;
	}
?>