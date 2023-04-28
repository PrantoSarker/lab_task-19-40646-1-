<?php
$packagename = "";
$shopname = "";
$location = "";
$cost = "";
$rating = "";
if(isset($_POST['submit']))
	{
		$packagename = $_POST['packagename'];
		$shopname = $_POST['shopname'];
		$location = $_POST['location'];
		$cost = $_POST['cost'];
		$rating =$_POST['rating'];
		
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