<?php
	include('header.php');
?>
<script>
	function callme(s)
	{
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("result").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "../model/searchConnection.php?in="+s, true);
		xmlhttp.send();
	}
</script>
<head>
	<link rel="stylesheet" href="css/style.css">
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
	Search Package: 
	<input type="text" onkeyup="return callme(this.value);">
	<div id = "result"></div>
</div>
	<h1>Order from here</h1><br>

	<label>
		<a href="comparePackage.php">Order</a>
		<a href="packageList.php">View package</a>
		<a href="customer.php">Back</a>
	</label> 

</body>

<?php
    include('footer.php');
?>