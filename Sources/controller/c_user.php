<?php
ob_start();
include('model/m_user.php');
class C_user{
	function dangkyTK($name,$username,$password,$email){
		$m_user=new M_user();
		$id_user = $m_user->dangky($name,$username,$password,$email);
		if($id_user>0){
			$_SESSION['sucuess'] = "Đăng kí thành công";
			$_SESSION['user'] = $name;
			if(headers_sent()){
				die('<script type="text/javascript">window.location.href="index.php"</script>');
			}
			else{
				header('location:index.php');
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
		
		if($user){
			$_SESSION['user']=$user->name;
			header("location:index.php");
		}

	}

	function dangxuat(){
		session_destroy();
		header("location:index.php");	
	}
}
ob_end_flush();
?>
