<?php
	session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
    include('../model/Connection.php');
		
	include("../controller/orderConfirmController.php");
		
     
?>



<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Package Details</title>
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
	<div class="main">
	<h1 align="center">Order Package</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
	<fieldset>
		<legend>Package Information</legend>
		<label for="packagename">Package name : </label>
		<input type="text" name="packagename" value="<?php echo $packagename;?>">
		<span id="packageErrMsg"></span>

		
		<br><br>

		<label for="shopname">Shop Name : </label>
		<input type="text" name="shopname" value="<?php echo $shopname;?>">
		<span id="shopErrMsg"></span>
		
		<br><br>

		<label for="location">Location : </label>
		<input type="text" name="location" value="<?php echo $location;?>">
		<span id="locationErrMsg"></span>

		<label for="cost">Cost : </label>
		<input type="text" name="cost" value="<?php echo $cost;?>">
		<span id="costErrMsg"></span>
		<br><br>


		<label for="rating">Rating : </label>
		<input type="text" name="rating" value="<?php echo $rating;?>">
		<span id="ratingErrMsg"></span>
		<br><br>

		<a href="packageList.php">Cancel</a>
		<a href="packageList.php">Back</a>
		<input type="submit" name="submit" value="Order">
		<br><br>
	</fieldset>
	<br>
	
         
            

 </form>
</div>
</body>
</html>
