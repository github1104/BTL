<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
    <?php
        require_once("connection.php");
        if (isset($_POST["register"])){
            //lay thong tin tu form
            $username = $_POST["username"];
            $password = $_POST["password"];
            $cfpassword = $_POST["cfpassword"];
            $mail = $_POST["mail"];
            //kiem tra nhap chua
            if ($username =="" || $password =="" ||$cfpassword ==""){
                echo "vui long nhap du thong tin";
            }
            elseif ($password != $cfpassword){
                echo "comfirm khong chinh xac";
            }
             
            else{
            // kiem tra tai khoan ton tai chua
            $sql="select *from users where username='$username'";
     
     
            $check=mysqli_query($conn,$sql);                
            if(mysqli_num_rows($check)>0){
                echo "Tai khoan da ton tai!";
            }
            else{
                //luu vao db
                $pass = md5($password);
                $sql = "insert into users (username,password) values ('$username','$pass')";
                mysqli_query($conn,$sql);
                echo "ban da dang ky thang cong";  
            }
            $to = "$mail";  
            $subject = "Send Email from Localhost";
            $txt = "Hello Teacher!";
            $headers = "From: tuandda62@wru.vn" . "\r\n" .
            "CC: somebodyelse@example.com";
            mail($to,$subject,$txt,$headers);
            
        }}
    ?>
    <div>
        <div class="header">
            <h2>Regiseter form</h2>
        </div>
        <form method="post" action="register.php">
            <div class="input">
                <label >Username</label>
                <input type="text" name="username">
            </div>
            <div class="input">
                <label >Password</label>
                <input type="password" name="password">
            </div>
            <div class="input">
                <label >Comfirm password</label>
                <input type="password" name="cfpassword">
            </div>
            <div class="input">
                <label >Mail</label>
                <input type="text" name="mail">
            </div>
            <div class="input">
            <button type="submit" name="register" class="btn">Register</button>
            </div>
        </form>
    </div>
</body>
</html>