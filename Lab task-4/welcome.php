<?php 

	session_start();

	if (isset($_SESSION['uname'])) {
		echo "<h2>Welcome ". $_SESSION['uname']. "</h2>";
		echo "<a href='product.php'>View Profile</a><br>";
		echo "<a href='store.php'>Registration</a><br>";
		echo "<a href='logout.php'>Logout</a><br>";
		
	}else{
		header("location:login.php");
	}

 ?>


<?php
echo "<p>Copyright &copy; 1999-" . date("Y");
?>
