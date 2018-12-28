<?php
include('database.php');
class M_user extends database{
	function dangky($name,$username,$password,$email){
		$sql="INSERT INTO user (name,username,password,email) VALUES(?,?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($name,$username,md5($password),$email));
		if($result){
			return $this->getLastId();	 
		}
		else{
			return false;
		}
	}

	function dangnhap($username,$md5_password){
		$sql="SELECT * FROM user WHERE username=? AND password=?";
		$this->setQuery($sql);
		$result = $this->execute(array($username,md5($md5_password)));
		$nums = $result->rowCount();
		if($nums>0){
			return $result->fetch(PDO::FETCH_OBJ);
		}
		else{
			echo $nums;
		}
	}

	function checkusername($rgusername){
		$sql="SELECT * FROM user WHERE username=?";
		$this->setQuery($sql);
		$result = $this->execute(array($rgusername));
		$nums = $result->rowCount();
		if($result){
			echo $nums;	 
		}
		else{
			return false;
		}
	}
	function login($username,$md5_password){
		$sql="SELECT *FROM user WHERE username='$username' and password='$md5_password'";
		$this->setQuery($sql)	;
		return $this->loadRow(array($username,$md5_password));
	}

}
?>