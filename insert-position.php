 <?php

 require_once './db-connect.php';

$Position="";
$Description="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Position']) && isset ($_POST['Description'])) {

    $Position=$_POST['Position'];
    $Description=$_POST['Description'];

    $sql_insert = "INSERT INTO position (position, description) VALUES ('$Position', '$Description')";

    //the connection
    $connect = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if ($connect->query($sql_insert) == TRUE ) {
   
        header('Location: ./choose-ip.php');
    }
    else {
    echo "ERROR.." . $connect->error;
    }


$connect->close();

}
}
else {
echo "error!!!!!!!!!!!!!!!";
}
?>