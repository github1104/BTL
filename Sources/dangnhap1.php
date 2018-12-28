<?php
session_start();
require('controller/c_user.php');
$username=$_POST['username'];
$password=$_POST['password'];
$c_user = new C_user();
$c_user->dangnhapTK($username,$password);


?>