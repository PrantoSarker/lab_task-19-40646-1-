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
    <title>Customer Profile</title>
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

<body align="center">
    <div class="main">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">

        <fieldset>
            <?php 
    include('../model/customerprofileConnection.php');
    ?>
        </fieldset>
    

    
    

</form>
<a href="editProfile.php">Edit Profile</a>
<a href="customer.php">Back</a>
</div>
</body>
<?php

 include('footer.php');
?>
    