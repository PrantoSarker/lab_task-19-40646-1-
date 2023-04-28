<?php
    
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
      
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Customer</title>
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
<div class="main">

<h1>Welcome</h1>
<body align = "center">

    

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <br>

            <a href="customerProfile.php">View profile</a>
            <br><br>
            <a href="packageList.php">View package</a>
            
            <br><br>
            <a href="searchPackage.php">Search package</a>
            <br><br>
            <a href="changePass.php">Change password</a>
            <br><br>
            <a href="../controller/logout.php">Logout</a>     
        
            
        </form>
        </div>
    </body>

</html>
<?php
    include('footer.php');
?>