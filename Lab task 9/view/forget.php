<?php 
include("header.php");
        include "../controller/forgetAction.php" ;      
?>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
    <title>Recover Password</title>
    <script src="js/forgetValidation.js"></script>
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
  <div class="main">
      
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
        <form>
          <fieldset>
          <h1>Recover password</h1>
          <label for="username"><h3>Type your correct username : </h3></label>
          <input type="text" name="username" >
          <span id ="userErrMsg"></span>
          <span><?php echo $userErrMsg; ?></span>
          
          <br><br>
          <label for="password"><h3>Set new password : </h3></label>
          <input type="password" name="password">
          <span id ="passErrMsg"></span>
          <span><?php echo $passErrMsg; ?></span>
          
          <br><br>
          <input type="submit" name="submit" value="Recover">
          <br><br>

          </fieldset>
          <a href="login.php">Back</a>
      </form>
    </div>
  </form>

</body>
</html>
<?php
    include('footer.php');
?>
           
            
        
  