<?php
$idDv=$_GET['id'];
include'controller/c_user.php';
$c_user = new C_user();
$comment = $c_user->getComment($idDv);
$comment = $comment['comment'];
?>
<div class="container-fuild" id="dichvu" style="margin-top: 80px;margin-bottom: 20px;">
	<div class="row" style="margin-right:0;">
		<div class="container">
			<h1 class="display-4 text-center">Dịch vụ Spa, Grooming chó mèo</h1>
			<hr class="hr">
			<h3>Dịch vụ làm	đẹp chó, mèo ngày càng được nhiều người lựa chọn</h3>
			<br>
			<p class="text">Cún cưng là những đứa con tinh thần quý giá hơn bất cứ điều gì đối với con người chúng ta. Nếu là một tín đồ yêu cún cũng như yêu thú cưng, chắc chắn bạn sẽ luôn mong muốn chăm sóc cho các bé một cơ thể khỏe mạnh, một bộ lông hoàn mỹ, sạch sẽ thơm tho, và một diện mạo xinh đẹp nhất có thể.</p>
			<br>
			<img src="public/pic/cutdog1.jpg" alt="Cặp corgi" style="width: 650px;display: block;margin:auto;">
			<p style="text-align: center;"><em>Dịch vụ cắt tỉa lông thú cưng-PetHH</em></p>
				
			<p class="text">Thế nhưng cuộc sống bận rộn thường khiến cho các sen không có đủ thời gian tận tay chăm sóc, vệ sinh và làm đẹp cho các boss. Đó chính là lý do mà rất nhiều khách hàng đã tin tưởng và lựa chọn gửi gắm niềm tin vào dịch vụ Grooming - tỉa lông cho chó mèo tại PetHH - salon làm đẹp cho cún cưng bằng tất cả tình yêu thương xuất phát từ trái tim và đã có thâm niên 10 năm tại HN trong lĩnh vực cung cấp dịch vụ chăm sóc thú cưng và cắt tỉa lông cho chó mèo.</p>

			<img src="public/pic/cutdog2.jpg" alt="" style="width: 650px;display: block;margin:auto;">
			<p style="text-align: center;"><em>Salon làm đẹp cho cún cưng bằng tất cả tình yêu thương</em></p>
			<img src="public/pic/cutcat.jpg" alt="" style="width: 650px;display: block;margin:auto;">
			<p style="text-align: center;"><em>Tắm rửa thường xuyên để giữ sức khỏe cho các bé</em></p>
			<h3>Các công đoạn làm việc: </h3>
			<br>
			<p class="text">Bước 1: Kiểm tra da, lông vật nuôi nhằm xác định tình trạng lông và da của cún cưng.<br>
			   Bước 2: Tư vấn các mẫu, kiểu cắt lông phù hợp đối với mật độ lông, chất lông và độ dài lông cún yêu cho khách lựa chọn.<br>
			   Bước 3: Cắt tỉa lông và tạo kiểu cho thú cưng bằng kéo cắt lông, tông đơ chuyên nghiệp.<br>
			   Bước 4: Sấy lông để loại bỏ lớp lông thừa bám dính trên thân bé.<br>
				Bước 5: Chải lông để tạo độ phồng trên thân thú cưng.<br>
				Bước 6: Xịt nước hoa cao cấp dưỡng lông chuyên dụng cho cún.
			</p>
			<br>
			<h3>Bảng giá dịch vụ</h3>
			<p class="text">
				Bảng giá cắt tỉa lông chó mèo đã bao gồm dịch vụ tắm cho chó mèo trọn gói, sấy khô, chải lông rụng, cắt dũa móng, vệ sinh tai mà không phải tính thêm bất cứ phụ phí nào khác.<br>
				-Dưới 2kg: 250k;<br>
				-Dưới 5kg: 350k;<br>
				-Dưới 10kg: 450k;<br>
				-Dưới 20kg: 650k;<br>
			</p>
			<br>
			<h3>Tại sao nên chọn dịch vụ tỉa lông chó mèo, chăm sóc làm đẹp tại spa chó mèo PetHH ?</h3>
			<p class="text">
			- 10 năm kinh nghiệm hoạt động trong lĩnh vực làm đẹp tại Hà Nội, chăm sóc cho thú cưng, chúng tôi thấu hiểu nhu cầu và tâm tư của các chú chó mèo hơn ai hết.<br>

			- Đội ngũ nhân viên cắt tỉa lông thú có chuyên môn tay nghề cao, được đào tạo và cấp bằng grooming.<br>

			- Dog Paradise là một tập thể được xây dựng nên bằng tình yêu thương động vật, luôn mong muốn dành những điều tốt đẹp nhất cho thú cưng.<br>

			- Nhận đặt trước lịch hẹn grooming cho bé cưng để thuận tiện giờ giấc của bố mẹ.<br>

			- Có dịch vụ đưa đón các bé tận nơi, tư vấn khách hàng tận tâm.<br>
			</p>
			<br>
			<!--  Comment -->
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