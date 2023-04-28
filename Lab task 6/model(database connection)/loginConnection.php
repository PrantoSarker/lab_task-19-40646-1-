<?php


    include('Connection.php'); 
    if(isset($_POST['submit']))
    {
        $remember="";
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        if($remember==1)
        {
            setcookie('username', $username, time()+3600*24+10,"/");
            setcookie('password', $password, time()+3600*24+10,"/");

        }

        $sql = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
        require_once('../model/Connection.php');

        $qry = mysqli_query($conn, $sql) or die ("Login failed");
        $count = mysqli_num_rows($qry);
        if($count==1)
        {
            $_SESSION['username'] = $username;
            setcookie('username', $username, time()+3600*24+10,"/");
            header("Location:../view/customer.php");
            
        }
        else
        {
            echo "Login failed";
        }
         

    }

 ?>