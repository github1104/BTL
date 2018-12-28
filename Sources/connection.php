    <?php
    $server_username = "root";
    $server_password = "";
    $dsn = 'mysql:host=localhost;dbname=login';
    //set option
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

            );
    //create a new pdo
    $conn = new PDO($dsn,$server_username,$server_password,$options);
?>