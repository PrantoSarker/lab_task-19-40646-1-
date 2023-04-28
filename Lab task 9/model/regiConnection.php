<?php 
	include('Connection.php');

	if(isset($_POST['submit']))
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$mobileno = $_POST['mobileno'];
		$address1 = $_POST['address1'];
		$country = $_POST['country'];

		if ($firstname != '' && $lastname != '' && $username != ''&& $password != '' && $gender != '' && $email != '' && $mobileno !='' && $address1 != '' && $country != '')
		{
			$sql = "INSERT INTO users(firstname, lastname, username, password, gender, email, mobileno, address1, country) VALUES('$firstname', '$lastname', '$username', '$password', '$gender', '$email', '$mobileno', '$address1', '$country')";

		if($conn->query($sql)==true)
		{
			echo "Registration successful<br>";
		}

		}
		else
		{
			echo "Fill up all forms";
		}

		$conn->close();

		

		
	}

?>