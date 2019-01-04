<?php
ob_start();
include('model/m_user.php');
class C_user{
	function dangkyTK($name,$username,$password,$email){
		$m_user=new M_user();
		$id_user = $m_user->dangky($name,$username,$password,$email);
		if($id_user>0){
			$user = $m_user->dangnhap($username,$password);
			$_SESSION['sucuess'] = "Đăng kí thành công";
			$_SESSION['user'] = $name;
			$_SESSION['id_user']=$user->id;
			if(headers_sent()){
				die('<script type="text/javascript">window.location.href="index.php"</script>');
			}
			else{
				header('location:dangky.php');
				die();
			}	
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']); 
			}
		}
		else{
			$_SESSION['error'] = "Đăng ký thất bại";
			if(headers_sent()){
				die('<script type="text/javascript">window.location.href="dangky.php"</script>');
			}
			else{
				header('location:dangky.php');
				die();
			}	
		}
	}

	function dangnhapTK($username,$password){
		$m_user = new M_user();
		$user = $m_user->dangnhap($username,$password);
		$admin = $m_user->dangnhapAdmin($username,$password);
		
		if($user){
			if($admin){
			$_SESSION['admin']=$admin->name;
			echo "1";
			}
			else{
			$_SESSION['user']=$user->name;
			$_SESSION['id_user']=$user->id;
			echo "1";
			}
		}
		else{
			echo "0";
		}

	}

	function dangxuat(){
		session_destroy();
		header("refresh:0;url=". $_SERVER['HTTP_REFERER']);	
	}

	function addComment($id_user,$noidung,$idDv){
		$m_user = new M_user();
		$binhluan = $m_user->addComment($id_user,$noidung,$idDv);
	}

	function getComment($idDv){
		$m_user = new M_user();
		$comment = $m_user->getComment($idDv);  	
		return array('comment'=>$comment);
	}

	function addRepComment($idComment,$name,$noidung){
		$m_user = new M_user();
		$binhluan = $m_user->addRepComent($idComment,$name,$noidung);	

	}

	function getRepComment($idComment){
		$m_user = new M_user();
		$repComment = $m_user->getRepComment($idComment);  	
		return array('RepComment'=>$repComment);
	}

	function getNumRepComment($idComment){
		$m_user = new M_user();
		$repComment = $m_user->getNumRepComment($idComment);
		return $repComment->numRep;
	}

	function addDatLich($id_user,$name,$phone,$diachi,$thongtin,$yeucau){
		$m_user = new M_user();
		$datlich = $m_user->datlich($id_user,$name,$phone,$diachi,$thongtin,$yeucau);	
		if($datlich){
			$_SESSION['dlSussess']="Đặt lịch thành công";
		}
		else{
			$_SESSION['fail']="Đặt lịch không thành công";
		}
	}

	function checkDL($id_user){
		$m_user = new M_user();
		$status = $m_user->checkDL($id_user);
		if($status){
		return $status->status;
		}

	}
}
ob_end_flush();
?>
