<!DOCTYPE html>
<html>
    <body>
        <h2>Registration Form</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <h3>Age</h3>
            <label for="age">Enter your age:</label><br>
            <input type="text" id="age" name="age"><br>
            <h3>Gender</h3>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female"> 
            <label for="female">Female</label><br>
            
            <h3>Email</h3>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>
            <h3>Birthday</h3>
            <label for="birthday">Enter your date of birth:</label>
            <input type="date" id="birthday" name="birthday">
            <h3>Phone number</h3>
            <label for="phone">Enter your phone number:</label>
            <input type="number" id="phone" name="phone">
            <h3>Occupation</h3>
            <label for="occupation">Enter your occupation:</label>
            <input type="text" id="occupation" name="occupation">
            </label>
            <h3>Marital status</h3>
            
            <input type="checkbox" id="single" name="marital" value="single">
            <label for="single"> Single</label><br>
            <input type="checkbox" id="married" name="marital" value="married">
             <label for="married"> Married</label><br>
            <h3>Bio</h3>            
            <label for="address">Address</label><br>
            <textarea id="address" name="address"></textarea><br><br>
            <input type="submit" value="Submit">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname'];
            if (empty($name)) {
            echo "Name is empty";
            } else {
            echo $name;
            }
            
            $name = $_REQUEST['lname'];
            if (empty($name)) {
            echo "Last name is empty";
            } else {
            echo $name;
            }

            $name = $_REQUEST['age'];
            if (empty($name)) {
            echo "Age is empty";
            } else {
            echo $name;
            }
            if(isset($_REQUEST['gender'])){
                echo $_REQUEST['gender'];
                
            }else{
                echo "Please select your gender";
            }
        


            $name = $_REQUEST['email'];
            if (empty($name)) {
            echo "Email is empty";
            } else {
            echo $name;
            }
            $name = $_REQUEST['birthday'];
            if (empty($name)) {
            echo "Birthday is empty";
            } else {
            echo $name;
            }

            $name = $_REQUEST['phone'];
            if (empty($name)) {
            echo "Number is empty";
            } else {
            echo $name;
            }
            $name = $_REQUEST['occupation'];
            if (empty($name)) {
            echo "Occupation is empty";
            } else {
            echo $name;
            }
            if(isset($_REQUEST['marital'])){
                echo $_REQUEST['marital'];
                
            }else{
                echo "Please select your marital status";
            }
        
            $name = $_REQUEST['address'];
            if (empty($name)) {
            echo "Address is empty";
            } else {
            echo $name;
            }

    }
        
?>
    </body>
</html>
