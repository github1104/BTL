<?php
ob_start();
include('model/m_admin.php');
class C_admin{
	function getUser(){
		$m_admin = new M_admin();
		$user = $m_admin->getUser();
		return $user;
	}

	function getLich(){
		$m_admin = new M_admin();
		$lich = $m_admin->getLich();
		return $lich;
	}

	function dangxuat(){
		session_start();
		session_destroy();
		header('location:../../index.php');	
	}

	function getdichvu(){
		$m_admin = new M_admin();
		$dichvu = $m_admin->dichvu();
		return $dichvu;
	}
}
ob_end_flush();
?>