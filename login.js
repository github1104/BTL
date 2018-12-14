$(document).ready(function(){
    $("#username").blur(function(){
        var u =$(this).val();
        $.get("login.php",{username:u},function(data){
            if(data==0){
               $("#checku").html("hop le");
            }
            else{
               $("#checku").html('.data.');
            }
        });
    });
})
