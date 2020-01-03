<?php
session_start();


if (!isset($_SESSION['user'])) {      // if there is no valid session
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>


        <style>

            .elegant-aero {
                margin-left:auto;
                margin-right:auto;

                max-width: 500px;
                background: #D2E9FF;
                padding: 20px 20px 20px 20px;
                font: 12px Arial, Helvetica, sans-serif;
                color: #666;
            }
            .elegant-aero h1 {
                font: 24px "Trebuchet MS", Arial, Helvetica, sans-serif;
                padding: 10px 10px 10px 20px;
                display: block;
                background: #C0E1FF;
                border-bottom: 1px solid #B8DDFF;
                margin: -20px -20px 15px;
            }
            .elegant-aero h1>span {
                display: block;
                font-size: 11px;
            }

            .elegant-aero label>span {
                float: left;
                margin-top: 10px;
                color: #5E5E5E;
            }
            .elegant-aero label {
                display: block;
                margin: 0px 0px 5px;
            }
            .elegant-aero label>span {
                float: left;
                width: 20%;
                text-align: right;
                padding-right: 15px;
                margin-top: 10px;
                font-weight: bold;
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
            .elegant-aero select {
                background: #fbfbfb url('down-arrow.png') no-repeat right;
                background: #fbfbfb url('down-arrow.png') no-repeat right;
                appearance:none;
                -webkit-appearance:none;
                -moz-appearance: none;
                text-indent: 0.01px;
                text-overflow: '';
                width: 70%;
            }
            .elegant-aero .button{
                padding: 10px 30px 10px 30px;
                background: #66C1E4;
                border: none;
                color: #FFF;
                box-shadow: 1px 1px 1px #4C6E91;
                -webkit-box-shadow: 1px 1px 1px #4C6E91;
                -moz-box-shadow: 1px 1px 1px #4C6E91;
                text-shadow: 1px 1px 1px #5079A3;
            }
            .elegant-aero .button:hover{
                background: #3EB1DD;
            }

            button[type=submit] {
                background-color: #D2E9FF;
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
            
            a.mybutton {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;

                text-decoration: none;
                text-align: center;
                color: blue;
                width: 15%;
                margin-top: 70px;
                margin-left: -85px;
            }

        </style>

    </head>

    <body>

        <h2 style="margin-top: 40px; margin-left: 470px;">Insert a Course to the Academy</h2>

        <div class="elegant-aero">

            <form action="./upload.php" method="post" enctype="multipart/form-data">
                <h3>Course</h3>
                <input type="text" required name="Course">
                <br>

                <label for="descr">Description</label><br><br>
                <textarea required name="Description" rows="5" cols="40" placeholder="Description"></textarea><br> <br>

                Select image to upload:
                <input type="file" required name="fileToUpload" id="fileToUpload"><br><br>

                <br>

                <button type="submit"><img src="favicon.png" alt="Submit"></button>


<?php
//$link_address = 'choose-action.php';
//echo "<a href='".$link_address."'>Return</a>";
?>

                <a class="mybutton" href="./choose-action.php">Return</a>

<?php
//session_destroy();
?>


            </form>

        </div>
    </body>
</html