
<?php

	include('../model/packagelistConnection.php');
 	
	$packagename="";
	$packageErrMsg="";

	$shopname="";
	$shopErrMsg="";

	$location="";
	$locationErrMsg="";

	$cost="";
	$costErrMsg="";

	$rating="";
	$ratingErrMsg="";


	if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$packagename = test_input($_POST['packagename']);
			$shopname = test_input($_POST['shopname']);
			$location = test_input($_POST['location']);
			$cost = test_input($_POST['cost']);
			$rating = test_input($_POST['rating']);
			

			$message = "";
			if (empty($packagename)) {
				$packageErrMsg = "Package Name is Empty";
			}
			
			if (empty($hotelname)) {
				$shopErrMsg .= "Shop Name is Empty";
				$message .= "<br>";
			}

			if (empty($location)) {
				$locationErrMsg .= "location is Empty";
				$message .= "<br>";
			}
			if (empty($cost)) {
				$costErrMsg .= "Cost is Empty";
				$message .= "<br>";
			}
			if (empty($rating)) {
				$ratingErrMsg .= "Rating is Empty";
				$message .= "<br>";
			}
			
			
		}
	if(isset($_POST['submit']))
	{
		$packagename = $_POST['packagename'];
		$shopname = $_POST['shop'];
		$location = $_POST['location'];
		$cost = $_POST['cost'];
		$rating = $_POST['rating'];
		
		if ($packagename != '' && $shopname != '' && $location != ''&& $cost != '' && $rating !='')
		{
			$sql = "INSERT INTO package(packagename, shopname, location, cost, rating) VALUES('$packagename', '$shopname', '$location', '$cost', '$rating')";

		if($conn->query($sql)==true)
		{
			echo "Package Registration successful";
		}

		}
		else
		{
			echo "Fill up all forms";
		}

		$conn->close();

		

		
	}
?>