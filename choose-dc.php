<?php
session_start();


if (!isset($_SESSION['user'])) {      // if there is no valid session
    header("Location: login.php");
}

require_once './db-connect.php';

//the connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$sql = mysqli_query($connect, "SELECT * FROM course");

$connect->close();
?>

<style>

       .elegant-aero {
        margin-left:auto;
        margin-right:auto;

        max-width: 500px;
        background: #D2E9FF;
        padding: 20px 20px 20px 20px;
        font: 12px Arial, Helvetica, sans-serif;
        color: #666;

        input[type=image] {

            top: -15px;
            left: 410px;
        }
    }

    .elegant-aero input[type="text"], .elegant-aero input[type="email"], .elegant-aero textarea, .elegant-aero select {
        color: #888;
        width: 70%;
        padding: 0px 0px 0px 5px;
        border: 1px solid #C5E2FF;
        background: #FBFBFB;
        outline: 0;
        -webkit-box-shadow:inset 0px 1px 6px #ECF3F5;
        box-shadow: inset 0px 1px 6px #ECF3F5;
        font: 200 12px/25px Arial, Helvetica, sans-serif;
        height: 30px;
        line-height:15px;
        margin: 2px 6px 16px 0px;
    }
    .elegant-aero textarea{
        height:100px;
        padding: 5px 0px 0px 5px;
        width: 70%;
    }



    input[type=image] {
        background-color: #D2E9FF;
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
    
     a.mybutton {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;

                text-decoration: none;
                text-align: center;
                color: blue;
                width: 15%;
                margin-top: 50px;
                margin-left: -85px;
            }

</style>


</head>

<body>

    <h2 style="margin-top: 60px; margin-left: 540px;">Delete a subject</h2><br><br>

    <div class="elegant-aero">
        <form action="./delete-course.php" method="post">
            <h3>Delete a subject</h3> <br>
            <select id="Course" required name="Course">
                <option value=""></option>

<?php
while ($row = mysqli_fetch_array($sql)) {
    echo "<option value=" . $row['id'] . ">" . $row['Course'] . "</option>";
}
?>
            </select><br><br>


            <input type="image" value="submit" src="favicon.png" alt="submit Button" onMouseOver="this.src = 'favicon.png'">

            <a class="mybutton" href="./choose-action.php">Return</a>

<?php ?>

<?php
//session_destroy();
?>


        </form>


    </div>
</body>
</html