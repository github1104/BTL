<?php
session_start();
require('controller/c_user.php');
$c_user = new C_user();
$c_user->dangxuat();

?>