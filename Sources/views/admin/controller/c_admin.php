<?php
ob_start();
include('model/m_admin.php');
class C_admin{
	function getUser(){
		$m_admin = new M_admin();
		$user = $m_admin->getUser();
		return $user;
	}

	function dangxuat(){
		session_start();
		session_destroy();
		header('location:../../index.php');	
	}

}
ob_end_flush();
?>