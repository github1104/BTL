<?php
session_start();
include'controller/c_user.php';
$c_user = new C_user();
$name = $_SESSION['user'];
$id_user = $_SESSION['id_user'];
$noidung = $_POST['comment'];
$idDv = $_POST['idDv'];
date_default_timezone_set("Asia/Ho_Chi_Minh");
if(isset($id_user)){
	if ($noidung!=""){
			$binhluan = $c_user->addComment($id_user,$noidung,$idDv);
			$content=nl2br($noidung);

			echo "<div class='media border p-2' id='userComment'>
				    <img src='public/pic/user.png' alt='John Doe' class='mr-3 mt-3 rounded-circle' style='width:60px;'>
				    <div class='media-body'>
				      <h4>$name</h4>
				      <p id='noidungcmt'>$content</p>
				      <small><i>đăng ngày ".date("d/m/Y")."</i></small>    
				      <button type='button'  class='btn btn-primary float-right' id='repbinhluan'>Trả lời</button>  
			    	</div>
	  			</div>";
	}
	else{
	
	}
}
?>