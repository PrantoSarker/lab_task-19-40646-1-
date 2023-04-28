<?php

    include('Connection.php');

    if (isset($_POST['submit'])){
        $packagename = $_POST['packagename'];
        $shopname = $_POST['shopname'];
        $location = $_POST['location'];
        $cost = $POST['cost'];
        $rating = $POST['rating'];

    }
    
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }

        $sql = "SELECT * FROM package";
        $result = $conn->query($sql);

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["packagename"]."</td><td>".$row["shopname"]."</td><td>".$row["location"]."</td><td>".$row["cost"]."</td><td>".$row["rating"]."</td></tr>";

            }
            echo "</table>";
        }
        else
        {
            echo "No record";

        }
        $conn->close();

    ?>