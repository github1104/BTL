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
			<h1 class="display-4 text-center">Dịch vụ trông giữ chó mèo - Khách sạn thú cưng</h1>
			<hr class="hr">
			<h3 >Dịch vụ trông giữ chó mèo 24/7</h3>
			<p class="text">
				Dịch vụ trông giữ chó mèo PetHH  tự hào là một trong những khách sạn chăm sóc thú cưng chuyên nghiệp đầu tiên tại Hà Nội xây dựng mô hình chăm sóc vật nuôi hiện đại. Khách sạn chó mèo Pet Mart luôn đảm bảo điều kiện ánh sáng và vệ sinh theo tiêu chuẩn chất lượng. Tất cả các khu vực của khách sạn đều được giám sát bởi hệ thống camera 24/7 đảm bảo quá trình quản lý và vận hành an toàn tối đa.
			</p>
			<img src="public/pic/petHotel.jpg" alt="" style="width: 750px;display: block;margin:auto;">
			<p style="text-align: center;"><em>Chỗ ở tiện nghi sạch sẽ</em></p>
			<br>
			<h3>Khách sạn thú cưng PetHH có những gì nổi bật?</h3>
			<p class="text">
				● Tất cả các phòng đều được ngăn bằng chất liệu tấm nhựa lõi thép và kính cường lực an toàn.<br>
				● Sàn trong phòng được trải bằng chất liệu thảm cách điện thân thiện, cách nhiệt an toàn cho thú cưng.<br>
				● Đèn led trong phòng cung cấp ánh sáng trắng tự nhiên dịu nhẹ không gây chói mắt cho thú cưng khi nhìn vào.<br>
				● Hệ thống hút khử mùi hoạt động 15 phút 1 lần để giảm bớt các chất gây ô nhiễm, bệnh tật và vi khuẩn trong không khí. Đây là hệ thống thường được thiết kế trong bệnh viện và trường học.<br>
				● Điều hòa nhiệt độ công suất lớn hoạt động cả ngày đảm bảo khí hậu nhiệt độ tốt nhất vào cả mùa hè lẫn mùa đông.<br>
				● Quạt cấp gió tươi có tác dụng lưu thông oxi và cấp gió trời bên ngoài vào khách sạn giúp cho thú cưng cảm nhận được không gian thông thoáng và thoải mái.<br>
				● Khách sạn luôn được vệ sinh sạch sẽ hàng ngày để tiêu diệt vi khuẩn.<br>
				● Tổ chức đào tạo liên tục cho nhân sự với nỗ lực cung cấp dịch vụ chăm sóc thú cưng tốt nhất và chuyên nghiệp.
			</p>
			<img src="public/pic/petHotel2.jpg" alt="" style="width: 750px;display: block;margin:auto;">
			<p style="text-align: center;"><em>Các boss tha hồ vui chơi thoải mái tại đây</em></p>
			<br>
			<h3 >Dịch vụ trông giữ chó mèo 24/7</h3>
			<div class="row">
				<div class="col-md-6">
					<p class="text">
						Thời gian ăn uống dành cho thú cưng đảm bảo theo khung giờ khoa học hợp lý. Chế độ dinh dưỡng đảm bảo cân bằng, phù hợp và cần thiết cho thú cưng.<br>
						Chế độ vui chơi thể thao: thú cưng sẽ được huấn luyện để nâng cao thể lực, tiêu hóa tốt và giao lưu với các thú cưng khác tại khách sạn hàng ngày. Chỉ áp dụng cho chó, không áp dụng cho mèo.<br>
						Chế độ vệ sinh: tắm miễn phí cho thú cưng khi đăng ký gửi tại khách sạn từ 3 ngày trở lên.<br>
					</p>
				</div>
				<div class="col-md-6">
					<img src="public/pic/petHotel1.jpg" alt=""  style="width: 100%;">
					<p style="text-align: center;"><em>Chế độ ăn uống đảm bảo</em>
				</div>
			</div>
			<h3>Bảng giá dịch vụ</h3>
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