<?php

 require_once './db-connect.php';

$Course="";
$Description="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Course']) && isset ($_POST['Description'])) {

    $Course=$_POST['Course'];
    $Description=$_POST['Description'];

    $sql_insert = "INSERT INTO Course (Course, Description) VALUES ('$Course', '$Description')";

    //the connection
    $connect = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    //the insertion

    if ($connect->query($sql_insert) == TRUE ) {
    echo "Inserted!!!";

    header('Location: ./choose-ic.php');
    }
    else {
    echo "ERROR.." . $connect->error;
    }


$connect->close();


}

}

else {
echo '<script type="text/javascript">alert("Your message");</script>';
}

?>

