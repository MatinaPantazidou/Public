<?php

session_start();


if(!isset($_SESSION['user']))      // if there is no valid session
{
    header("Location: login.php");
}


require_once './db-connect.php';


$Position="";

//the connection
 $connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($connect->connect_error) {
 die("Connection failed: " . $connect->connect_error);
    }

$sql = mysqli_query( $connect, "SELECT * FROM position");
$sqlc = mysqli_query( $connect, "SELECT * FROM Course");

$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
<title>PDM Backoffice</title>

<style>

.job-form-div {

 display: inline-block;
    width: 40%;
    border-style: double;
    border-color: grey;

}



.subject-form-div{

 display: inline-block;
    width: 40%;
      border-style: double;
      border-color: grey;

}


input[type=text], select {
    width:100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=image] {
    background-color: white;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
     position: relative;
     top: -15px;
     left: 410px;
}

button[type=submit] {
    background-color: white;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: blue;
    border-radius: 4px;
    cursor: pointer;
     position: relative;
     top: -10px;
     left: 410px;
}

input[type=submit]:hover {
    background-color: #e7e7e7;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=text]:focus {
    border: 3px solid #555;
}

h2{
margin-left: 400px;
}

select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}



</style>

</head>

<body>

<h2>PDM Backoffice Form</h2>

<!-- Position insert -->
<div class="job-form-div">



  <form action="./insert-position.php" method="post">
   <h3>Position</h3>
    <input type="text" required name="Position"><br><br>
    <label for="descr">Description</label><br><br>
    <textarea name="Description" rows="5" cols="40" placeholder="Description"></textarea><br>


    <input type="image" value="submit" src="favicon.png" alt="submit Button" onMouseOver="this.src='favicon.png'">

  </form>
</div>

<!-- Course insert -->
<div class="subject-form-div">
  <form action="./upload.php" method="post" enctype="multipart/form-data">
    <h3>Course</h3>
    <input type="text" required name="Course">
    <br>

    <label for="descr">Description</label><br><br>
        <textarea name="Description" rows="5" cols="40" placeholder="Description"></textarea><br> <br>

                 Select image to upload:
                                   <input type="file" name="fileToUpload" id="fileToUpload"><br><br>

                <br>

                <button type="submit"><img src="favicon.png" alt="Submit"></button>
</form>

</div>



<!-- Position delete -->
<div class="job-form-div">
  <form action="./delete-position.php" method="post">
  <h3>Delete a Position</h3>
  <select id="Position" name="position">
  <option value=""></option>

<?php

while ($row = mysqli_fetch_array($sql)) {
echo "<option value=".$row['id'].">" . $row['position'] . "</option>";

}

?>
  </select><br><br>


           <input type="image" value="submit" src="favicon.png" alt="submit Button" onMouseOver="this.src='favicon.png'">
            </form>
          </div>

<!-- Course delete -->
          <div class="subject-form-div">
            <form action="./delete-course.php" method="post"">
              <h3>Delete a Course</h3>
               <select id="Course" name="Course">
                <option value=""></option>

              <?php

              while ($row = mysqli_fetch_array($sqlc)) {
              echo "<option value=".$row['id'].">" . $row['Course'] . "</option>";

              }

              ?>
                </select><br><br>
             <input type="image" value="submit" src="favicon.png" alt="submit Button" onMouseOver="this.src='favicon.png'">

                    </form>
                  </div>


</body>
</html>