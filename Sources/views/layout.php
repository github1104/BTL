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
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
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
                        <a class="nav-link active" href="index.php">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thông tin</a>
                    </li>
                    <li class="nav-item dropdown dmenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Dịch vụ</a>
                         <div class="dropdown-menu " id="dropdownMenu">
                          <a class="dropdown-item" href="dichvu.php">Spa, cắt tỉa</a>
                          <a class="dropdown-item" href="tronggiu.php">Trông giữ chó mèo</a>
                          <a class="dropdown-item" href="#">Chuẩn đoán và điều trị</a>
                         </div>
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
                        echo '<a class="nav-link" id="btnLogin" href="#" data-toggle="modal" data-target="#login">Đăng nhập</a>';
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php   
                        if(isset($_SESSION['user'])){
                        echo '<a class="nav-link" href="dangxuat.php" >Đăng xuất</a>';
                        } 
                        else 
                        echo '<a class="nav-link" href="dangky.php" >Đăng ký</a>';
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
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1107.314892188475!2d105.79897954489317!3d21.01072847053825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca735bf45fd%3A0x4014585e41ee75f1!2zMTIwIFRy4bqnbiBEdXkgSMawbmcsIFRydW5nIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1545734127762" width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
    //ajax check username form dang ky
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
     

     // ajax xu ly xac nhan mat khau
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

     // ajax xu ly form login
     
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

     //navbar drop down hover
     $('.navbar-light .dmenu').hover(function () {
          $(this).find('#dropdownMenu').first().stop(true, true).slideDown(150);
      }, function () {
          $(this).find('#dropdownMenu').first().stop(true, true).slideUp(105)
      });

     //ajax binh luan
     $("#binhluan").click(()=>{
          comment = $("#comment").val();
          login = $("#btnLogin").val();
        //Neu chua dang nhap thi hien thi form dang nhap
        if (typeof login != 'undefined'){
          $('#login').modal('show');
        }
        else{
          $.post("comment.php",{comment},function(data){
              $("#comment").val('');
              $("#formCMT").after(data);
          })
        }
        return false;
     })

     //ajax rep binh luan
     $(".Repbinhluan").click(()=>{
        var login = $("#btnLogin").val();
        var id = $(this).attr("data-comid");
        var Repcomment = $("#Repcomment"+id).val(); 
        console.log(id);
        console.log(Repcomment);
        if (typeof login != 'undefined'){
          $('#login').modal('show');
        }
        else{
          $.post("repComment.php",{Repcomment: Repcomment},function(data){
              console.log(data);
              $("#comment").val('');
              $("#userComment"+id).after(data);
          })
        }
        return false;
     })

 })
</script>
<script lang="javascript">var _vc_data = {id : 6506746, secret : '3d13a6e0e891275cf2e9a612442075af'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//live.vnpgroup.net/client/tracking.js?id=6506746';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();
</script>           
</body>
</html>