<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
        </head>

        <?php

        $currentpasswordErr = $newpasswordErr = $retypepasswordErr = "";
        $currentpassword = $newpassword = $retypepassword = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["currentpassword"])) {
              $currentpasswordErr = "current password is required";
            } else {
              $currentpassoword = ($_POST["currentpassword"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[0-9' ]*.{8,12}$/",$currentpassword)) {
                $currentpasswordErr = "At least 8 digit needded";
              }
            }

        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["newpassword"])) {
              $newpasswordErr = "new password is required";
            } else {
              $newpassword = ($_POST["newpassword"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[0-9' ]*.{8,12}$/",$newpassword)) {
                $newpasswordErr = "At least 8 digit needded";
              }
            }

        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["retypepassword"])) {
              $retypepasswordErr = "retype new password ";
            } else {
              $retypepassword = ($_POST["retypepassword"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[0-9' ]*.{8,12}$/",$newpassword)) {
                $retypepasswordErr = "At least 8 digit needded";
              }
            }

        }
        
        ?>

            <body>
            <h2>Change Password</h2>
            <p><span class="error">* required field</span></p>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

                <label for="currentpassword">Current password:</label>
                <input type="text" id="currentpassword" name="currentpassword" value="<?php echo $currentpassword;?>">
                <span class="error">* <?php echo $currentpasswordErr;?></span>
                <br><br>
                <label for="newpassword">New password:</label>
                <input type="text" id="newpassword" name="newpassword" value="<?php echo $retypepassword;?>">
                <span class="error">* <?php echo $newpasswordErr;?></span>
                <br><br>  
                <label for="retypepassword">Retype new password:</label>
                <input type="text" id="retypepassword" name="retypepassword" value="<?php echo $retypepassword;?>">
                <span class="error">* <?php echo $retypepasswordErr;?></span>
                <br><br>  
                <input type="submit" value="Submit">
                <a href="login.php">Login</a>
                </form>
                
                <?php
                
                echo "<h2>Your Input:</h2>";
                echo $currentpassword;
                echo "<br>";
                echo $newpassword;
                echo"<br>";
                echo $retypepassword;
                echo"<br>";

                ?>

                </body>
                </html>





