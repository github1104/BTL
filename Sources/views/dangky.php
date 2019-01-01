<?php
include('controller/c_user.php');
$c_user = new C_user();
if(isset($_POST['dangki'])){
  $rgname=$_POST['rgname'];
  $rgusername=$_POST['rgusername'];
  $rgpassword=$_POST['rgpassword'];
  $rgcfpassword=$_POST['rgcfpassword'];
  $rgemail=$_POST['rgemail'];
  if(!isset($_SESSION['user'])){
    if($rgpassword==$rgcfpassword){       
        $c_user = $c_user->dangkyTK($rgname,$rgusername,$rgpassword,$rgemail);
    }
    else{
        
    }
  }
  else{
      unset($_SESSION['sucuess']);
      $_SESSION['error']="Bạn đã đăng kí tài khoảng rồi";
  }
}

?>
 <div class="container" id="formDK"> 
     <h4>Đăng ký tài khoản</h4>
     <br>     
     <?php
         if(isset($_SESSION['error'])){
              echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
         }
         if(isset($_SESSION['sucuess'])){
              echo "<div class='alert alert-success'>".$_SESSION['sucuess']."</div>";
         }
     ?>
     <form action="#" method="post">
          <label>Họ tên :</label>  
          <input type="text" name="rgname" id="rgname" class="form-control"  required/>  
          <label>Tên đăng nhập:</label>  
          <input type="text" name="rgusername" id="rgusername" class="form-control"  required/> 
          <p id="checkr"></p> 
          <label>Mật khẩu:</label>  
          <input type="password" name="rgpassword" id="rgpassword" class="form-control" required/>  
          <label>Xác nhận mật khẩu:</label>  
          <input type="password" name="rgcfpassword" id="rgcfpassword" class="form-control" required/>
          <p id="checkcf"></p> 
          <label>Email: </label>  
          <input type="email" name="rgemail" id="email" class="form-control"  required/>  
          <label>Số điện thoại :</label>  
          <input type="number" name="rgnumber" id="rgnumber" class="form-control" min=9 required/> 
          <br />  
          <button type="submit" id="signup_button" name="dangki" class="btn btn-success">Đăng ký</button>  
          <br>
    </form>      
</div>  
