<?php

        
            

    $username="";
    $userErrMsg="";

    $password="";
    $passErrMsg="";

           if ($_SERVER['REQUEST_METHOD'] === "POST") {

            function test_input($data) {
                $data = htmlspecialchars($data);
                return $data;
            }

            $username = test_input($_POST['username']);
            $password = test_input($_POST['password']);
            

            $message = "";
            
            if (empty($username)) {
                $userErrMsg .= "Username is Empty";
                $message .= "<br>";
            }
            if (empty($password)) {
                $passErrMsg .= "Password is Empty";
                $message .= "<br>";
            }
            
            else {
                echo $message;
            }
        }

        include('../model/forgetConnection.php'); 

       



?>
