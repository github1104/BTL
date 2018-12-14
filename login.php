     <?php
        include('connection.php');
        if(isset($_POST['login_button'])){
          $username=$_POST['username'];
          $password=$_POST['password'];
          $sql="select * from users where username='$username'";
          $query=mysqli_query($conn,$sql);
          $nums=mysqli_num_rows($query);
          echo $nums;
          if($nums>0){
            $row=mysqli_fetch_array($query);
            $_SESSION['user']=$username;
            
          }
        }
    ?>
