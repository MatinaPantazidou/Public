<?php
session_start();
?>

<html>

    <head><title>PDM Backoffice</title>

        <style>

            h1{
                margin-left: 500px;
                colour: blue;
                margin-top: 50px;
            }

            body  {
                background-image: url("favicon.png");
                background-repeat: no-repeat;
                background-position: 620px 45px;

            }

            /* unvisited link */
            a:link {
                color: blue;
            }

            /* visited link */
            a:visited {
                color: blueviolet;
            }

            /* mouse over link */
            a:hover {
                color: hotpink;
            }

            /* selected link */
            a:active {
                color: lightskyblue;
            }

            .elegant-aero {
                margin-left:auto;
                margin-right:auto;

                max-width: 500px;
                background: #D2E9FF;
                padding: 20px 20px 20px 20px;
                font: 12px Arial, Helvetica, sans-serif;
                color: #666;
            }
            
           .mybutton {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;

                text-decoration: none;
                text-align: center;
                color: blue;
                width: 15%;
                margin-top: 50px;
                margin-left: 400px;
            }

        </style>
    </head>

    <body>

        <h1>PDM</h1>
        <?php
        echo "<br> <br>";
        ?>
        <div style="margin-left: 300px;" class="elegant-aero">
            <h2 style="margin-left: 70px; color: blue;"><b>Hello administrator. Please choose an action.</b></h2><br><br><br>
            <a style="margin-left: 30px;" href="./choose-ip.php">Insert an open Position.<br> <br></a>
            <a style="margin-left: 30px;" href="choose-dp.php"> Delete a recently occupied Position. <br> <br> </a>
            <a style="margin-left: 30px;" href="choose-ic.php"> Insert a Course to the academy. <br> <br> </a>
            <a style="margin-left: 30px;" href="choose-dc.php"> Delete a Course from the academy. <br> <br> </a>
        
            <a class="mybutton" href="./logout.php">Logout</a>
           
            
        </div>
        
        <?php //session_destroy();?>

    </body>
</html>