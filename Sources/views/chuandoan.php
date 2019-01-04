<?php
$idDv=$_GET['id'];
include'controller/c_user.php';
$c_user = new C_user();
$comment = $c_user->getComment($idDv);
$comment = $comment['comment'];
?>
<div class="container-fuild" id="dichvu" style="margin-top: 80px;margin-bottom: 20px;">
	<div class="row">
		<div class="container">
			<h1 class="display-4 text-center">Chuẩn đoán hình ảnh - Xét nghiệm- Điều trị bệnh </h1>
			<hr class="hr">
			<details class="text">
				<summary>Chuẩn đoán hình ảnh và xét nghiệm </summary>
					<details  class="text">
						<summary>Siêu âm</summary>
						<p>Với hệ thống máy siêu âm hiện đại, luôn chẩn đoán đúng bệnh để các bác sĩ đưa ra phác đồ điều trị phù hợp</p>
						<img src="public/pic/sieuam.jpg" alt="" style="width: 650px;display: block;margin:auto;">
						<p style="text-align: center;"><em>Chú chó được các bác sĩ siêu âm</em></p>
					</details>
					<details class="text">
						<summary>Xét nghiệm</summary>
						<p>Phòng được trang bị các thiệt bị hiện đại cùng bác sĩ chuyên môn cao phục vụ cho việc chẩn đoán đúng bệnh của thú cưng</p>
						<img src="public/pic/xetnghiem.jpg" alt="" style="width: 650px;display: block;;margin: auto;">
						<p style="text-align: center;"><em>#</em></p>
					</details>
					<details class="text">
						<summary>Nội soi</summary>
						<p>Nội soi là phương pháp chuẩn đoán hiệu quả cho việc kiểm tra tai, mũi, họng của chó mèo khi chúng có các dấu hiệu bất thường</p>
						<img src="public/pic/noisoi.jpg" alt="" style="width: 650px;display: block;margin: auto;">
						<p style="text-align: center;"><em>#</em></p>
					</details>
					<details class="text">
						<summary>X-Quang</summary>
						<p>Chúng tôi sử dụng máy x-quang kỹ thuật số trong việc chuẩn đoán hình ảnh giúp cho hình ảnh sắc nét</p>
						<img src="public/pic/x-quang.jpg" alt="" style="width: 650px;display: block;margin: auto;">
						<p style="text-align: center;"><em>#</em></p>
					</details>
			</details>
			<details class="text">
				<summary>Khám chữa bệnh
					<img src="public/pic/xinh.jpg" alt="" style="width: 650px;display: block;margin: auto;">
					<p style="text-align: center;"><em>Khám lâm sàng và chuẩn bệnh cho thú cưng</em></p>
				</summary>
				
				<details class="text">
					<summary>Khám lâm sàng</summary>
					<p>Đây là bước đầu tiên khi thú cưng được đưa đến điều trị tại bệnh viện thú y PetHealth
					</p>
					<img src="public/pic/khamlamsang.jpg" alt="" style="width: 650px;display: block;margin: auto;">
					<p style="text-align: center;"><em>#</em></p>
				</details>
				<details class="text">
					<summary>Phẫu thuật </summary>
					<p>Thực hiện các phẫu thuật từ cơ bản đến chuyên sâu, phẫu thuật thẩm mỹ và theo yêu cầu
					</p>
					<img src="public/pic/phauthuat.png" alt="" style="width: 650px;display: block;margin: auto;">
					<p style="text-align: center;"><em>#</em></p>
				</details>
				<details class="text">
					<summary>Khám chữa tại nhà</summary>
					<p>Phục vụ nhưng khách hàng ở xa, không có thời gian hoặc sức khỏe của thú cưng không cho phép đến bệnh viện</p>
					<img src="public/pic/khamchuatainha.jpg" alt="" style="width: 650px;display: block;margin: auto;">
					<p style="text-align: center;"><em>#</em></p>
				</details>
				<details class="text">
					<summary>Châm cứu</summary>
					<p>Châm cứu kết hợp cùng liệu trình điều trị sẽ mang lại những kết quả tuyệt vời cho thú cưng</p>
					<img src="public/pic/chamcuu.png" alt="" style="width: 650px;display: block;margin: auto;"><p style="text-align: center;"><em>#</em></p>
				</details>
				<details class="text">
					<summary>Điều trị nội trú</summary>
					<p>Điều trị và lưu trú trực tiếp tại bệnh viện với sự chăm sóc và theo dõi của các bác sĩ</p>
					<img src="public/pic/d-tr-noitrujpg.jpg" alt="" style="width: 650px;display: block;margin: auto;">
					<p style="text-align: center;"><em>#</em></p>
				</details>
			</details>
			

			<!--  Binh Luan -->
			<div style="width: 700px;">
				<h4>Bình luận</h4>
				<!-- Form Comment -->
				<form id="formCMT">
					<div class="form-group">
					  <input type="hidden" id="iduser" value="<?=$_SESSION['id_user']?>">
					  <input type="hidden" id="idDv" value="<?=$idDv?>">
					  <textarea cols="60" class="form-control" name="comment" rows="4" id="comment" placeholder="Viết bình luận ..." ></textarea>
					  <button type="submit" class="btn btn-primary binhluan" name="binhluan" id="binhluan">Gửi</button>
					</div>			
				</form>
				<!-- Comment -->
				<?php
					foreach($comment as $cmt){
						$timestamp = $cmt->create_up;
						$date=date('d/m/Y ',strtotime($timestamp));
						$content=nl2br($cmt->NoiDung);
						$id=$cmt->id;
						//dung 2 vong lap de in rep comment
						$getNum = $c_user->getNumRepComment($id);
						$repComment = $c_user->getRepComment($id);
						$repComment = $repComment['RepComment'];
				?>
				<div class="media border p-2 " id='userComment<?=$id?>' >
				    <img src="public/pic/user.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
				    <div class="media-body">
				      <h4><?=$cmt->name?></h4>
				      <p id="noidungcmt" ><?=$content?></p>
				      <small><i>đăng ngày <?=$date?></i></small>				    
				      <button type="button" class="btn btn-primary float-right" onclick="showRep(<?=$id?>)" >Trả lời</button>     
				      <button type="button" class="btn btn-primary float-right" onclick="showViewRep(<?=$id?>)" >Có <?=$getNum?> phản hồi</button>  

			    	</div>
	  			</div>
	  			<!-- Rep Comment -->
	  				<?php
	  					foreach ($repComment as $repcmt) {
	  						$noidung=nl2br($repcmt->NoiDung);
	  						$repTimestamp = $repcmt->create_up;
							$repDate=date('d/m/Y ',strtotime($repTimestamp));
	  				?>
				<div class="media border p-2 ml-5 userReply<?=$id?>"  style="font-size: 16px;display: none;">
				    <img src="public/pic/user.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
				    <div class="media-body">
				      <h5><?=$repcmt->name?></h5>
				      <p id="repCmt"><?=$noidung?></p>
				      <small><i>đăng ngày <?=$repDate?></i></small>      
			    	</div>
	  			</div>	
	  				<?php
	  					}
	  				?>
	  			<!-- Form Rep Comment -->
	  			<form class='formReply<?=$id?> ml-5 mt-1' style="display: none;">
					<div class="form-group">					 
					  <textarea cols="50" class="form-control " name="repComment" rows="2" id='Repcomment<?=$id?>' ></textarea>
					  <button type="button" onclick="repcmt(<?=$id?>)" class="btn btn-primary Repbinhluan">Trả lời</button>
					</div>			
				</form>  
				<?php
  					}
	  			?>			
  			</div>
		</div>
	</div>
</div>