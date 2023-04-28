<?php 
	include('Connection.php');


    $sql = "SELECT * FROM package";
        $result = mysqli_query($conn, $sql);
        $findresult = mysqli_num_rows($result);

        if($findresult!=0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                echo "<tr><td>".$row["packagename"]."</td><td>".$row["shopname"]."</td><td>".$row["location"]."</td><td>".$row["cost"]."</td><td>".$row["rating"]."</td><td><a href = 'packageConfirm.php?packagename=$row[packagename]&shopname=$row[shopname]&location=$row[location]&cost=$row[cost]&rating=$row[rating]'>Click here</td></tr>";

            }
            echo "</table>";
        }
        else
        {
            echo "No record";

        }
        $conn->close();

?>