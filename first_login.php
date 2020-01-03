<?php session_start(); ?>

<html>

    <style>

        h1{
            margin-left: 500px;
            margin-top: 50px;
            colour: blue;
        }

        body  {
            background-image: url("favicon.png");
            background-repeat: no-repeat;
            background-position: 620px 45px;
        }

        .aclass {
            position:relative;
            bottom:35px;
            left: 630px;
        }


    </style>

    <body>

        <h1>PDM</h1>
        <?php
        if (isset($_SESSION["USER"])) {
            ?>Hello <?php echo $_SESSION["USER"]; ?>. Do you want to <a href="logout.php">logout</a>?<?php
        } else {

            echo "<br> <br>";
            ?><p style="margin-left: 450px;">Hello administrator. Please</p> <a class="aclass" href="login.php">login</a>
                <p style="margin-left: 665px; margin-top: -50px;">.</p>
                <?php
        }
        ?>
    </body>
</html>