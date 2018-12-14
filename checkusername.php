     <?php
      include('connection.php');   
	  $username=$_POST['username'];
	  //$password=$_POST['password'];
	  $sql="select * from user where username='$username'";
	  $query=mysqli_query($conn,$sql);
	  $nums=mysqli_num_rows($query);
	  echo $nums;
	 
    ?>
