<?php
	session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";

        include "../controller/editAction.php" ;      
?>

<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Edit Profile</title>
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
	<fieldset>
		<legend>Customer Information</legend>
		<label for="firstname">First Name : </label>
		<input type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>">
		<span id ="firstErrMsg"></span>

		<span><?php echo $firstnameErr;?></span>
		<br><br>

		<label for="lastname">Last Name : </label>
		<input type="text" name="lastname" id="lastname" value="<?php echo $lastname ?>">
		<span id ="lastErrMsg"></span>
		<span><?php echo $lastnameErr;?></span>
		<br><br>

		<label for="mobileno">Mobile No : </label>
		<input type="text" name="mobileno" id="mobileno" value="<?php echo $mobileno ?>">
		<span id ="mobilerrMsg"></span>


		<span><?php echo $mobilenoErr;?></span>
		<br><br>

		<label for="email">Email : </label>
		<input type="text" name="email" id="email" value="<?php echo $email ?>">
		<span id ="emailErrMsg"></span>
		<span><?php echo $emailErr;?></span>
		
		<br><br>

		<label for="address1">Address : </label>
		<input type="text" name="address1" id="address1" value="<?php echo $address1 ?>">
		<span id ="address1ErrMsg"></span>
		<span><?php echo $addressErr;?></span>
		<br><br>
		<input type = "submit" name = "update" value = "Update">

		<span><?php echo $updateMsg; ?></span>
		<a href="customerProfile.php">Back</a>
		<span><?php echo $errorMsg; ?></span>
		<br><br>
		
	</fieldset>
	<br>
	
         
            

 </form>
 </div>

</body>

</html>
<?php

  include('footer.php');
?>