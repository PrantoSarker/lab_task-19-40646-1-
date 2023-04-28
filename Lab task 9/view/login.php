<?php
    include("header.php");
    include('../controller/loginAction.php');

?>
    <html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Login</title>
        <script src="js/loginValidation.js"></script>
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
    </head>
    <body>
    <div class="main">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
        <fieldset>
            <legend>Login Page</legend>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value= <?php echo (isset($_COOKIE['username'])) ? $_COOKIE['username'] : ""   ?>>
            <span id="userErrMsg"></span>
            <br>
            <span><?php echo $userErrMsg?></span> 
            
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <span id="passErrMsg"></span>
            <br>
            <span><?php echo $userErrMsg?></span>
            
            
            <br><br>
            <label for="remember">Remember me</label>
            <input type="checkbox" name="remember" id="remember" value="remember" <?php echo (isset($_COOKIE['username'])) ?  "checked" : "" ;  ?>>

            <br><br>
          <a href="forget.php">Forgotten password?</a></label>
        </fieldset>
        <input type="submit" name="submit" value="Login">
        </div>
        <br><br>
          <a href="registration.php">Sign Up</a></label>
    </form>

    
    </body>
</html>
<?php

    include('footer.php');
?>