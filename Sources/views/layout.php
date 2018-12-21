<?php
    session_start();    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--<script src="login.js"></script>-->    
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
</head>
<body>
<!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-branch" href="#">
                <img src="public/pic/logo.png" alt="logo" height="50" >
            </a>
         <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thông tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên Hệ</a>
                    </li>    
                </ul>
                <!-- session-login-logout -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php   
                        if(isset($_SESSION['user'])){
                        echo '<a class="nav-link" href="#" >Xin Chào '.$_SESSION['user'].'</a>';
                        }
                        else 
                        echo '<a class="nav-link" href="#" data-toggle="modal" data-target="#login">Đăng nhập</a>';
                        ?>
                    </li>
                    <li class="nav-item">
                    <?php   
                        if(isset($_SESSION['user'])){
                        echo '<a class="nav-link" href="logout.php" >Đăng xuất</a>';
                        }
                        else 
                        echo '<a class="nav-link" href="#" data-toggle="modal" data-target="#register">Đăng ký</a>';
                        ?>
                    </li>
                </ul>
        </div>
    </nav>
<!-- form login  -->
<div class="modal fade " id="login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          
          <h4 class="modal-title">Đăng Nhập</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
       </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post" >
            
            <label>Tên Đăng Nhập:</label>  
            <input type="text" name="username" id="username" class="form-control" required/>  
            <br>
            <label>Mật khẩu:</label>  
            <input type="password" name="password" id="password" class="form-control" required/>  
            <p id="checku" style="padding-left:1px"></p>
            <br />  

            <button type="button" id="login_button" class="btn btn-dark">Đăng nhập</button>  
            
          </form>
        </div>
        
      </div>
    </div>
</div>
<!-- form register -->
<div class="modal fade " id="register">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            
            <h4 class="modal-title">Đăng ký tài khoản</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="register.php" method="post">
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
            <button type="submit" id="signup_button" class="btn btn-dark">Đăng ký</button>  
            
            </form>
        </div>
        
        </div>
    </div>
</div>

<?php
    include("views/$view.php");
?>

</div>
<!-- footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center" id="txtFooter">
            <div class="col-md-4">
                <h5>Liên hệ</h5>
                <hr class="light"> 
                <p>Hotline: 19002018</p>
                <p>Mail: gmail@gmail.com</p>
                <p>Địa chỉ: 120 Trần Hưng Đạo,Hoàn Kiếm,Hà Nội,Việt Nam</p>
            </div>
            <div class="col-md-4">
                <h5>Giờ làm việc</h5>
                <hr class="light">
                <p>Thứ 2 - Thứ 6: 8h - 21h</p>
                <p>Cuối tuần: 8h-14h</p>                
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; PetHH 2018</h5>
            </div>
        </div>
    </div>  
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    //check username form dang ky
    $("#rgusername").blur(function(){
         var rgusername =$(this).val();
         $.post("checkusername.php",{rgusername},function(data){
             if(rgusername !=""){
                if(data==1){   
                    $("#checkr").html("tên đăng nhập đã tồn tại");
                    $("#checkr").css("color","red");
                }
                else{
                    $("#checkr").html("hợp lệ");
                    $("#checkr").css("color","green");
                }
            }
         });
     });

     // xu ly xac nhan mat khau
     $("#rgcfpassword").blur(function(){
         var rgcfpassword = $("#rgcfpassword").val();
         var rgpassword= $("#rgpassword").val();
         if(rgcfpassword!=rgpassword){
            $("#checkcf").html("xác nhận mật khẩu không trùng nhau");
            $("#checkcf").css("color","red");
         }
         else{
            $("#checkcf").html("");
         }
            
     });

     // xu ly form login
     $("#login_button").click(()=>{
          var username = $("#username").val();
          var password = $("#password").val();
          $.post("dangnhap.php",{username,password},function(data){           
             if(username !="" && password !="" ){
                if(data==0){   
                    $("#checku").html("Sai tên đăng nhập hoặc mật khẩu");
                    $("#checku").css("color","red");
                }
                else{
                    location.reload();
                }
                }
             else{
                $("#checku").html("Vui lòng nhập đầy đủ thông tin");
                $("#checku").css("color","red");
             }
         });
     })

     // reset input khi modal ẩn
     $('#login').on('hidden.bs.modal', function() {
              $('#username').val('');
              $("#password").val('');
              $("#checku").html("");
              
    })
      $('#register').on('hidden.bs.modal', function() {
              $('#rgusername').val('');
              $("#rgpassword").val('');
              $("#rgcfpassword").val('');
              $("#rgname").val('');
              $("#email").val('');
              $("#rgnumber").val('');
              $("#checkr").html("");
              $("#checkcf").html("");
              
    })
 })
</script>

</body>
</html>