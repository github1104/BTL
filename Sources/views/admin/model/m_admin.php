<?php
include('database.php');
class M_admin extends database{
	function getUser(){
		$sql="SELECT * FROM user ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getLich(){
		$sql="SELECT * FROM datlich ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>