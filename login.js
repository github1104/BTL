$(document).ready(function(){
    /* 
    $("#username").blur(function(){
         var u =$(this).val();
         $.post("checkusername.php",{username:u},function(data){
             if(data==1){   
                $("#checku").html("k hop le");
                $("#checku").css("color","red");
             }
             else{
                $("#checku").html("hop le");
             }
         });
     });
     */
    
     $("#login_button").click(()=>{
         
          var username =$("#username").val();
          var password =$("#password").val();
          $.post("login.php",{username,password},function(data){
            
             if(username !="" && password !="" ){
             if(data==0){   
                $("#checku").html("ssSai tên đăng nhập hoặc mật khẩu");
                $("#checku").css("color","red");
             }
             else{
                 location.reload();
             }
            }
             
         });
     })
 })