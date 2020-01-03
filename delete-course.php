<?php

 require_once './db-connect.php';

$Course="";
$pdf="";

echo $_POST['Course'];

$Course=$_POST['Course'];


$sql_delete = "DELETE FROM Course WHERE id = '$Course'";

//the connection
    $connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($connect->connect_error) {
         die("Failed" . $connect->connect_error);
      }

      $connect->query($sql_delete);
 header('Location: ./choose-dc.php');

$connect->close();




?>