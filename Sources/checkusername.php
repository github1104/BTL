<?php
include('model/m_user.php');
$rgusername=$_POST['rgusername'];
$m_user = new M_user();
$check = $m_user->checkusername($rgusername);
?>