<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include ('header.php');
    include('../model/Connection.php');
?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Package List</title>
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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">
<h1>Package List :</h1>

<table class="table">
     
    <tr>
        <th>Package Name</th>
        <th>Shop Name</th>
        <th>Location</th>
        <th>Cost</th>
        <th>Rating</th>

    </tr>
    <?php
    include('../model/packagelistConnection.php');
    ?>
</table>
</div>


            
            <a href="comparePackage.php">Compare</a>
            <a href="searchPackage.php">Search</a>
            <a href="customer.php">Back</a>
            <a href="packageconfirm.php">Order</a>
            <a href="../controller/logout.php">Logout</a>

            <br><br>




        </form>
    </body>
        <?php
    include('footer.php');
?>
    