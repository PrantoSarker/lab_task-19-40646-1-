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
   

    $rating="";
    $rateErrMsg="";
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

            function test_input($data) {
                $data = htmlspecialchars($data);
                return $data;
            }

            $rating=test_input($_POST['rating']);

            $message = "";
            if (empty($rating)) {
                $rateErrMsg = "Please fill the form";
            }
            
            else {
                echo $message;
            }
        }

        if($_GET['update'])
        {
            $rating = $_GET['rating'];
            $query = "UPDATE package SET rating='$rating' WHERE packagename = '$packagename'";
            $data = mysqli_query($conn, $query);

            if($data)
            {
                echo "You have rated the package";
            }
            else
            {
                echo "Failed";
            }
        }

?>
<html>
<head>
    <title align = "center">Rating package</title>
    <script src="js/ratingValidation.js"></script>
</head>

    <body align = "center">
      
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
          <form>
            <fieldset>
          <h1>Rate service</h1>
          <br><br>
          <label for="rating">Give rating :  </label>
          <input type="rate" name="rate" id="rating" value="<?php echo $rating;?>">
          <span id="rateErrMsg"></span>
          <span><?php echo $rateErrMsg; ?></span>
          
          
          <br><br>
          <button type = "submit" name = "update">Update</button>
          
          <br><br>
          <button type = "submit" formaction="packageList.php">Go Back</button>
          </fieldset>
      </form>
      
  </form>
</body>
</html>
<?php
    include('footer.php');
?>