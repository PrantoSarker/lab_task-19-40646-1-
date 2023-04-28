
 <?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    
    include "header.php";

    include("../controller/changeAction.php");

?>    

<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Change Password</title>
    <script src="js/changeValidation.js"></script>
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
    <body>

      
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
            <div class="main">
        <fieldset>
          <h1>Change password</h1>

          <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>">
            <span id ="userErrMsg"></span>
           
          <br><br>
          <label for="password">New Password</label>
            <input type="password" name="password" id="password">
            <span id ="passErrMsg"></span>
            
          <br><br>
          <input type="submit" name="submit" value="Update">
          <br><br>
          
          </fieldset>
      
          <a href="customer.php">Back</a>
          <a href="../controller/logout.php">Logout</a></label>
  </div>
  </form>
 
</body>


</html>
<?php
    include('footer.php');
?>


           
            
        
  