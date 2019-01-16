<?php
$idDv=$_GET['id'];
include('controller/c_user.php');
$c_user = new C_user();
$comment = $c_user->getComment($idDv);
$comment = $comment['comment'];
if(isset($_SESSION['id_user'])){
  $id_user = $_SESSION['id_user'];
  $status =  $c_user->checkDL($id_user);
    if($status=="waiting"){
      $_SESSION['dlWaiting'] = "Bạn đã đặt lịch vui lòng chờ chúng tôi gọi lại sau";
    }
    if(!$status){
      if(isset($_POST['datlich'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $diachi = $_POST['diachi'];
        $thongtin = $_POST['thongtin'];
        $yeucau = $_POST['yeucau'];
        $datlich = $c_user->addDatLich($id_user,$name,$phone,$diachi,$thongtin,$yeucau);
       }
      }
}
else{
  
}
?>
<div class="container-fuild" id="dichvu" style="margin-top: 68px;margin-bottom: 20px;">
    <div class="lh_wrapper">
        <img src="public/pic/datlich.jpg" alt="" style="width: 100%;">
        <div class="caption-centered-datlich ">
            <h1>Đặt lịch</h1>
            <?php
            if(isset($_SESSION['fail'])){
              ?>
            <div class='alert alert-danger'><?=$_SESSION['fail']?></div>
            <?php
              }
            if(isset($_SESSION['dlSussess'])) echo "<div class='alert alert-success'>".$_SESSION['dlSussess']."</div>";
            ?>
            <?php
              if(isset($_SESSION['dlWaiting'])){
                  echo "<div class='alert alert-info'>".$_SESSION['dlWaiting']."</div>";
              }
              else{
            ?>
            <form class="" method="post">
               <div class="form-group">
                  <label >Họ và tên:</label>
                  <input type="text" class="form-control" name="name" required>
               </div>
               <div class="form-group">
                  <label >Số điện thoại:</label>
                  <input type="phone" class="form-control" name="phone" required>
               </div>
               <div class="form-group">
                  <label >Địa chỉ:</label>
                  <textarea class="form-control" name="diachi" required></textarea>
               </div>
               <div class="form-group">
                  <label >Thông tin về pet(Tên,tuổi,cân nặng,giống):</label>
                  <textarea class="form-control" name="thongtin" required></textarea>
               </div>
               <div class="form-group">
                  <label >Yêu cầu chi tiết:</label>
                  <textarea class="form-control" name="yeucau" required></textarea>
               </div>
               <button type="submit" class="btn btn-secondary mb-2" id="datlich" name="datlich">Đặt lịch</button>
            </form>
            <?php
                }
            ?>
        </div>
    </div>

    <div class="container mt-5">
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