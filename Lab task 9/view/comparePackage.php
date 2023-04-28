<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Package List</title>
</head>
<style>
    a:link, a:visited {
  background-color: #04AA6D;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
<body align = "center">

    <br><br>
    <div class="main">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">

<table class="table">
     
    <tr>
        <th>Package Name</th>
        <th>Shop Name</th>
        <th>Location</th>
        <th>Cost</th>
        <th>Rating</th>
        <th>Order</th>
    </tr>
    
    <?php
        
       include('../model/compareConnection.php'); 

    ?>
</table>


            <a href="packageList.php">Go back</a>
            <a href="../controller/logout.php">Logout</a>

            <br><br>




        </form>
    </div>
    </body>
        <?php


    include('footer.php');
?>


    