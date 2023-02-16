<!DOCTYPE html>
<html>
<head>
<style>
        .error {color: #FF0000;}
        </style>
        </head>

        <?php

        $nameErr = $passwordErr = "";
        $name = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = ($_POST["name"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z-' ]*.{2,30}$/",$name)) {
                $nameErr = "Only letters and white space allowed with at least 2 characters";
              }
            }

        }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["password"])) {
                  $passwordErr = "Password is required";
                } else {
                  $password = ($_POST["password"]);
                  // check if name only contains letters and whitespace
                  if (!preg_match("/^[0-9' ]*.{8,12}$/",$password)){
                    $passwordErr = "At least 8 digit needded";
                  }
                }
            }
            
            ?>

            <body>
            <h2>Login Form</h2>
            <p><span class="error">* required field</span></p>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span>
                <br><br>
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" value="<?php echo $password;?>">
                <span class="error">* <?php echo $passwordErr;?></span>
                <br><br>
                <input type="checkbox" id="remember" name="remember">
                <label for="remember"> Remember Me</label>
    
                <br><br>
                <input type="submit" value="Submit">
                </form>
                <?php
                
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $password;
                echo"<br>";

                ?>
                </body>
                </html>
