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
            

            $message = "";
            
            if (empty($username)) {
                $userErrMsg .= "Username is Empty";
               
            }
            if (empty($password)) {
                $passErrMsg .= "Password is Empty";
            }
                
            
            else {
                echo $message;
            }
        }

        include('../model/changeConnection.php');






?>
