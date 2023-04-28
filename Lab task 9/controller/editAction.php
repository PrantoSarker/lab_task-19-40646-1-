<?php

	

	$flag=false;
	$username="";
	$userErr="";
	$password="";
	$passwordErr="";
	$firstname="";
	$firstnameErr="";
	$lastname="";
	$lastnameErr="";
	$gender="";
	$genderErr="";
	$mobileno="";
	$mobilenoErr="";
	$email="";
	$emailErr="";
	$address1="";
	$country="";
	$addressErr="";
	$updateMsg="";
	$errorMsg="";
	
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{

			if (empty($_POST['firstname'])) {
				$firstnameErr = "First Name is Empty";
				$flag=true;
			}
			
			if (empty($_POST['lastname'])) {
				$lastnameErr = "Last Name is Empty";
				$flag=true;
				
			}
			
			if (empty($_POST['email'])) 
			{
				$emailErr = "Email is Empty";
				$flag=true;
			}
			
			if (empty($_POST['mobileno'])) 
			{
				$mobilenoErr = "Mobileno is Empty";
				$flag=true;
			}
			
			if (empty($_POST['address1'])) 
			{
				$addressErr = "Street/House/Road is Empty";
				$flag=true;
			}

			function test_input($data)
        	{
            	$data=trim($data);
            	$data=stripcslashes($data);
        	    $data=htmlspecialchars($data);
        	    return $data;
        	}
        }

        include('../model/editConnection.php');

			
?>