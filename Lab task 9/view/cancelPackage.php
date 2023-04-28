<?php
	session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
    include('../model/Connection.php');

    $packagename = $_GET['packagename'];
    $hotelname = $_GET['hotelname'];
    $location = $_GET['location'];
    $cost = $_GET['cost'];
    $rating = $_GET['rating'];

    
     
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
	<h1 align="center">You have ordered a package</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
	<fieldset>
		<legend>Package Information</legend>
		<label for="packagename">Package name : <?php echo $packagename;?></label>
		
		<br><br>

		<label for="hotelname">Hotel Name : <?php echo $hotelname ?>
		
		<br><br>

		<label for="location">Location : <?php echo $location ?><br><br>

		<label for="cost">Cost : <?php echo $cost ?>
		<br><br>


		<label for="rating">Give your rating here :</label>
		<br>
		<input type="text" id="amount" size="1"name="rating" value ="<?php echo $rating ;?>">
		<br><br>

		<button type = "submit" formaction="cancelPackage.php">Cancel</button>
		<br><br>
	</fieldset>
	<br>
	
         
            

 </form>
</body>
</html>
<?php

		$query = "SELECT * FROM package WHERE packagename = '$packagename'";
        $findresult = mysqli_query($conn, $query);

        if($res = mysqli_fetch_array($findresult))
        {
        	$packagename = $res['packagename'];
        	$rating = $res['rating'];
        }

        if(isset($_POST['update']))
        {
        	$rating = $_POST['rating'];
        	$sql = "SELECT * FROM package WHERE packagename = '$packagename'";
        	$res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)>0)
        {
        	$row = mysqli_fetch_assoc($res);


        }
        $result = mysqli_query($conn, "UPDATE package SET rating = '$rating' WHERE packagename = '$packagename'");
        if($result)
        {
        	header("Location: packageList.php");
        }
        else
        {
        	echo "Failed";
        }
        }

	

  include('footer.php');
?>