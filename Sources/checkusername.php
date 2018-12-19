     <?php
      include('connection.php');   
	  $rgusername=$_POST['rgusername'];
	  $query = $conn->prepare("SELECT username FROM users WHERE 
	  username=? ");
	  $query->execute(array($rgusername));
	  $nums = $query->rowCount();	
	  echo $nums;
    ?>
