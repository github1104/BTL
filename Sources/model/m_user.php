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

	function addComment($id_user,$noidung,$idDv){
		$sql ="INSERT INTO comment(idUser,NoiDung,idBaiViet) VALUES(?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array($id_user,$noidung,$idDv));
	}

	function getComment($idDv){
		$sql = "SELECT name,cmt.* FROM user JOIN comment cmt on user.id = cmt.idUser where idBaiViet='$idDv' order by cmt.id desc";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function addRepComent($idComment,$name,$noidung){
		$sql ="INSERT INTO repcomment(idComment,name,NoiDung) VALUES(?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array($idComment,$name,$noidung));
	}

	function getRepComment($idComment){
		$sql = "SELECT name,NoiDung,create_up FROM repcomment where idComment='$idComment'";
		$this->setQuery($sql);
		return $this->loadAllRows(array($idComment));
	}

	function getNumRepComment($idComment){
		$sql = "SELECT COUNT(idComment) numRep FROM repcomment where idComment='$idComment'";
		$this->setQuery($sql);
		return $this->loadRow(array($idComment));
	}
}
?>