<?php 

	session_start();

	if (isset($_SESSION['uname'])) {
		echo "<h2>Welcome to your profile ". $_SESSION['uname']. "</h2>";
		echo "<a href='welcome.php'>Back to welcome</a><br>";
		echo "<a href='Upload.php'>Upload profile picture</a><br>";
		echo "<a href='changepassword.php'>Change Password</a><br>";
		echo "<a href='logout.php'>Logout</a><br>";
	}else{
		header("location:login.php");
	}

 ?>
 <?php
echo "<p>Copyright &copy; 1999-" . date("Y");
?>
