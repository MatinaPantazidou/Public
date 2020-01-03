 <?php

 require_once './db-connect.php';

$Position="";
$Description="";

echo $_POST['position'];

$Position=$_POST['position'];


$sql_delete = "DELETE FROM position WHERE id = '$Position'";

//the connection
    $connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($connect->connect_error) {
         die("Failed" . $connect->connect_error);
      }

      else {
      echo $_POST['position'];
      }

      $connect->query($sql_delete);
 header('Location: ./choose-dp.php');

$connect->close();




?>