<?php
include('controller/c_user.php');
$c_user = new C_user();
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
</div>