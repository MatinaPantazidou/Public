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

        <h2 style="margin-top: 50px; margin-left: 500px;">Insert an open Position</h2><br>

        <div class="elegant-aero">
            <form action="./insert-position.php" method="post">
                <h3>Position</h3>
                <input type="text" required name="Position"><br><br>
                <label for="descr">Description</label><br><br>
                <textarea required name="Description" rows="5" cols="40" placeholder="Description"></textarea><br>


                <input type="image" value="submit" src="favicon.png" alt="submit Button" onMouseOver="this.src = 'favicon.png'">

                <a class="mybutton" href="./choose-action.php">Return</a>
<?php
//session_destroy();
?>

            </form>



        </div>
    </body>
</html