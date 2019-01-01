<?php
session_start();
include'controller/c_user.php';
$c_user = new C_user();
$name = $_SESSION['user'];
$id_user = $_SESSION['id_user'];
$noidung = $_POST['Repcomment'];
$idComment = $_POST['idComment'];
date_default_timezone_set("Asia/Ho_Chi_Minh");
if(isset($id_user)){
	if ($noidung!=""){
		$repbinhluan = $c_user->addRepComment($idComment,$name,$noidung);
		$noidung=nl2br($noidung);
		echo "<div class='media border p-2 ml-5 userReply$idComment' style='font-size: 16px;'>
			    <img src='public/pic/user.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:45px;''>
			    <div class='media-body'>
			      <h5>$name</h5>
			      <p id='repCmt'>$noidung</p>
			      <small><i>đăng ngày ".date("d/m/Y")."</i></small>      
		      </div>";
	}
}
?>