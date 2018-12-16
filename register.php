<?php
	include('connection.php');   
	session_start();   
	if(isset($_POST)){
        $rgusername=$_POST['rgusername'];
        $rgpassword=$_POST['rgpassword'];
        $rgname=$_POST['rgname'];
        $email=$_POST['rgemail'];
        $query = $conn->prepare('INSERT INTO users (name, username, password, email) values (?, ?, ?,?)');
        $query->execute(array($rgname,$rgusername,md5($rgpassword),$email));
        $nums = $query->rowCount();	
        $_SESSION['user']=$rgusername;
        header('location:index.php');
	}
?>	