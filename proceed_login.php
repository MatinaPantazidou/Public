<?php



require_once './db-connect.php';

$user="";
$paswd="";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $user=$_POST['user'];
    $paswd=$_POST['paswd'];

$sql = "SELECT user, paswd FROM users";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<br> username: ". $row["user"]. " - Password: ". $row["paswd"]. "<br>";
        if ($row["user"]== $user) {
        if ($row["paswd"] == $paswd) {
                session_start();
                $_SESSION['user']= $user;
                echo $_SESSION['user'];
                header('Location: ./choose-action.php');
                }
                else {
                    echo "Not successful password...". "<br>";

                        }
}


}

$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "Something went wrong. Please   ";
  echo "<a href='$url'>try again</a>";


while($row = $result->fetch_assoc()) {


    }
} else {
    echo "0 results";
}

$connect->close();
?>
