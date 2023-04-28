<?php
    
    session_start();

    include('../model/loginConnection.php');
    
    $username="";
    $userErrMsg="";
    $password="";
    $passErrMsg="";
    
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

            function test_input($data) {
                $data = htmlspecialchars($data);
                return $data;
            }

            $username=test_input($_POST['username']);
            $password=test_input($_POST['password']);

            $message = "";
            if (empty($username)) {
                $userErrMsg = "Empty username";
            }
            if (empty($password)) {
                $passErrMsg = "Empty password";
            }
            else {
                echo $message;
            }
    }
    

    


?>
