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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!--<script src="login.js"></script>-->    
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-branch" href="#">
                <img src="pic/logo.png" alt="logo" height="50" >
            </a>
         <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" date-target="#navbarResponsive">
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
                  <form action="" method="post">
                    
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
<!--slide -->
<div class="container-fluid"> 
    <div id="slides" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pic/dog1.jpg" >
                <div class="carousel-caption">
                    <h1 class="display-2">Dogo</h1>
                    <h3>Is a dog</h3>
                </div>
        </div>
        <div class="carousel-item">
            <img src="pic/dog2.jpg" >
            <div class="carousel-caption">
                <h1 class="display-2">Dogi</h1>
                <h3>Is a dog too</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img src="pic/dog3.jpeg" >
            <div class="carousel-caption">
                <h1 class="display-2">Doga</h1>
                <h3>Is doga</h3>
            </div>
        </div>
    </div>
</div>
<!-- jumbotron -->
<div class="container-fluid">
    <div class="jumbotron">
        <div class="">
            <h3>PetHH</h3>
            <p>PetHH là địa chỉ cung cấp các dịch vụ chăm sóc thú cưng uy tín hàng đầu tại Hà Nội. Pet Mart đã đưa ra giải pháp để giải quyết về nhu cầu vệ sinh, làm đẹp cho thú cưng của các khách hàng.
                Tại đây luôn sử dụng những sản phẩm chất lượng, các sản phẩm tắm, trị liệu cho thú cưng đều qua kiểm định gắt gao để đảm bảo an toàn cho mọi thú cưng của khách hàng. 
                Đặc biệt, với đội ngũ nhân viên dày dặn kinh nghiệm, yêu thú cưng và bằng phương pháp chăm sóc, trị liệu toàn diện, Pet Mart sẽ cung cấp cho thú cưng của bạn một dịch vụ tốt nhất.
                Sau khi đ   ược chăm sóc tại đây, các em thú cưng sẽ trở nên xinh xắn, sạch sẽ và khỏe mạnh hơn.
                Chăm sóc chó con hàng ngày là một việc rất quan trọng để giúp chú chó của bạn khỏe mạnh và hạnh phúc. 
                Việc đánh răng hằng ngày sẽ giúp chú chó của bạn không bị những bệnh về răng miệng. Việc tạo thói quen đánh răng cho chú cún từ sớm sẽ giúp giảm thiểu sự khó khăn khi bắt chúng quen với thói quen đó.
                Và điều đó cũng sẽ đảm bảo chú chó của bạn sẽ sống một cuộc sống dài và khỏe mạnh hơn.
                Tại Pet Mart, chúng tôi có đa dạng các sản phẩm về làm sạch răng miệng như bàn chải, kem đánh răng và loại khăn đặc biệt để lau răng miệng. Vậy tại sao bạn không ghé qua để mua chúng ngay?
            </p>
           
        </div>
    </div>
</div>
<hr class="hr">
<!--  dịch vụ -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Dịch vụ</h1>
        </div>
        
        <div class="col-12">
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="#"><img src="pic/iconVac.png" class="icon"></a>
            <h3>Khám chữa bệnh tại nhà</h3>
            <p>Phục vụ nhưng khách hàng ở xa, không có thời gian hoặc sức khỏe của thú cưng không cho phép đến bệnh viện</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="#"><img src="pic/iconEmergency.png" class="icon"></a>
            <h3>Cấp cứu 24/7</h3>
            <p>Phục vụ kể cả ngày lễ, ngày Tết nhằm đảm bảo tính liên tục trong quá trình điều trị cho thú cưng</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="#"><img src="pic/iconCut.png" class="icon"></a>
            <h3>Cắt tỉa, tạo kiểu</h3>
            <p>Bộ lông là thứ rất quan trọng và có ý nghĩa rất lớn đối với thú cưng. Việc chăm sóc lông của chó mèo nên được quan tâm như chăm sóc sức khỏe dinh dưỡng của chúng.</p>
        </div>
        <hr class="hr">
    </div>
</div>
<!-- tin tức -->
<div class="container-fluid padding" >
    <div class="row padding">
        <div class="col-md-12 col-lg-6" >
            <h2>PetHH - Chăm sóc bằng cả trái tim</h2>
            <p>Nếu bạn là một người yêu thú cưng, muốn đem đến những gì tốt nhất cho chúng thì PetHealth chính là nơi đáp ứng được tất cả các yêu cầu của bạn. Đội ngũ y bác sĩ của chúng tôi được đào tạo chuyên nghiệp, trang thiết bị hiện đại cùng hệ thống chi nhánh rộng khắp đã đem đến sự hài lòng cho rất nhiều khách hàng</p>
            <br>
        </div>
        <div class="col-lg-6">
            <img src="pic/cat1.jpg" class="img-fluid" >
        </div>
    </div>
</div>
<hr class="hr">
<!-- contact -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Liên hệ với chúng tôi</h2>
        </div>
        <div class="col-12 social padding">
            <a href="http://fb.com" target="_blank"><img src="pic/iconFb.png" alt=""></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="pic/iconInstagram.png" alt=""></a>
            <a href="https://twitter.com/login?lang=vi" target="_blank"><img src="pic/iconTwitter.png" alt=""></a>
            <a href="https://www.youtube.com/" target="_blank"><img src="pic/iconYoutube.png" alt=""></a>
        </div>
    </div>
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
         var rgcfpassword =$("#rgcfpassword").val();
         var rgpassword=$("#rgpassword").val();
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
          var username =$("#username").val();
          var password =$("#password").val();
          $.post("login.php",{username,password},function(data){           
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
     
 })
</script>
</body>
</html>