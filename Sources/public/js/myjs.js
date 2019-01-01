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
 })
 //ajax rep binh luan
  function repcmt(id){ 
        var login = $("#btnLogin").val(); 
        var Repcomment = $("#Repcomment"+id).val(); 
        var idComment = id;
        if (typeof login != 'undefined'){
          $('#login').modal('show');
        }
        else{
          $.post("repComment.php",{Repcomment,idComment},function(data){
              console.log(data);
              $("#Repcomment"+id).val('');
              $("#userComment"+id).after(data);
          })
        }
        return false;
     }
  function showRep(id){
        $(".formReply"+id).slideToggle();
        $("#Repcomment"+id).focus();
  }
  function showViewRep(id){
        $(".userReply"+id).slideToggle();
  }
