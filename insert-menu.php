<?php

 require_once './db-connect.php';

$Position="";

//the connection
 $connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($connect->connect_error) {
 die("Connection failed: " . $connect->connect_error);
    }

$sql = mysqli_query( $connect, "SELECT Position FROM position");
echo "<select>";
while ($row = mysqli_fetch_array($sql)) {

echo "<option value=\"Position1\">" . $row['Position'] . "</option>";



}

echo "</select>";

$connect->close();

?>
