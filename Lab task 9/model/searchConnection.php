
<body align = "center">
<br><h1>Available packages</h1><br>


<?php

include("Connection.php");

$input = $_GET['in'];
$sql = mysqli_query($conn, "SELECT * FROM package WHERE packagename LIKE '$input%'");
?>
<table class="table">
	<tr>
		<th>Package Name</th>
		<th>Shop Name</th>
		<th>Location</th>
		<th>Cost</th>
		<th>Rating</th>


		<?php

		while($row = mysqli_fetch_array($sql))
		{
		?>

		  <tr align="center">
		  	<td><?php echo $row['packagename'];?></td>
		  	<td><?php echo $row['shopname'];?></td>
		  	<td><?php echo $row['location'];?></td>
		  	<td><?php echo $row['cost'];?></td>
		  	<td><?php echo $row['rating'];?></td>
		  	<td ></td>
		  </tr>
		  <?php
		}
		?>


	</tr>
</table>


</body>