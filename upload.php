<!DOCTYPE html>
<html>
<body>

</body>
</html>

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

    header('Location: ./insert-course.php');
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



<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header('Location: ./choose-ic.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>