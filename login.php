<!DOCTYPE html>
<html>
    <style>
        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 10%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }



        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 100px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
    <body>

        <h2 style="margin-left: 550px; margin-top: 60px;">Login Form</h2>

        <form action="./proceed_login.php" method="POST">


            <div class="container">
                <label style="margin-left: 350px;"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="user" required><br><br>

                <label style="margin-left: 350px;"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="paswd" required><br><br>

                <button style="margin-left: 530px;" type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </div>



    </body>
</html>
