<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: #FF0000;}
            </style>
            </head>

            <?php
            //define variable and empty values
            $nameErr = $ageErr =  $genderErr = $emailErr = $degreeErr = $bloodErr = $birthdayErr = $phoneErr = $occupationErr = $maritalErr = $addressErr = "";
            $name = $age =  $gender = $email = $degree = $blood = $birthday = $phone = $occupation = $marital = $address = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                  $nameErr = "Name is required";
                } else {
                  $name = ($_POST["name"]);
                  // check if name only contains letters and whitespace
                  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";

                  }
                }
            

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["age"])){
                    $ageErr = "Age is required";
                }else{
                    $age = ($_POST["age"]);
                    //check if name contains letter and whitespace
                    if (!preg_match("/^[0-9' ]*$/",$age))
                    $ageErr = "Only number is allowed";
                }
            }

            
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = ($_POST["gender"]);
              }

              if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {
                $email = ($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }

              if (empty($_POST["degree"])) {
                $degreeErr = "Degree is required";
              } else {
                $degree = ($_POST["degree"]);
                // 
               
                }
              }

              if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["birthday"])){
                    $birthdayErr = "Birthday is required";
                }else{
                    $birthday = ($_POST["birthday"]);
                    
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["phone"])){
                    $phoneErr = "Phone number is required";
                }else{
                    $phone = ($_POST["phone"]);
                    //check if name contains letter and whitespace
                    if (!preg_match("/^[0-9' ]*$/",$phone))
                    $phoneErr = "Only letters and white space allowed";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["occupation"])){
                    $occupationErr = "Occupation is required";
                }else{
                    $occupation = ($_POST["occupation"]);
                   
                   
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["marital"])){
                    $maritalErr = "Marital status is required";
                }else{
                    $marital = ($_POST["marital"]);
                   
                   
                }
            }


              if ($_SERVER["REQUEST_METHOD"] == "POST"){
                if (empty($_POST["address"])){
                    $addressErr = "Address is required";
                }else{
                    $address = ($_POST["address"]);
                   
                   
                }
            }
            

              if(file_exists('data.json'))
              {
                $current_data = file_get_contents('data.json');
                $array_data = json_decode($current_data, true);
                $new_data = array(
                    'name'                               =>        $_POST['name'],
                    'age'                             =>           $_POST['age'],
                    'gender'                       =>              $_POST['gender'],
                    'email'                     =>                 $_POST['email'],
                    'degree'                 =>                    $_POST['degree'],
                    'blood'               =>                       $_POST['blood'],
                    'birthday'         =>                          $_POST['birthday'],
                    'phone'          =>                            $_POST['phone'],
                    'occupation'  =>                               $_POST['occupation'],
                    'marital'  =>                                  $_POST['marital'],
                    'address'=>                                    $_POST['address']
                );

                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
            
                
        
            
            ?>


    <body>
        <h2>Registration Form</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="name">User name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            <h3>Age</h3>
            <label for="age">Enter your age:</label>
            <input type="text" id="age" name="age"  value="<?php echo $age;?>">
            <span class="error">* <?php echo $ageErr;?></span>
            <br><br>
            <h3>Gender</h3>
            <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
            <label for="other">Other</label>
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>

            <h3>Email</h3>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email"value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            <h3>Degree</h3>   
            <input type="checkbox" id="SSC" name="degree" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC">
            <label for="SSC"> SSC</label>
            <input type="checkbox" id="HSC" name="degree" <?php if (isset($degree) && $degree=="HSC") echo "checked";?> value="HSC">
            <label for="HSC"> HSC</label>
            <input type="checkbox" id="BSC" name="degree" <?php if (isset($degree) && $degree=="BSC") echo "checked";?> value="BSC">
            <label for="BSC"> BSC</label>
            <input type="checkbox" id="MSC" name="degree" <?php if (isset($degree) && $degree=="MSC") echo "checked";?> value="MSC">
            <label for="MSC"> MSC</label>
            <span class="error">* <?php echo $degreeErr;?></span>
            <br><br>
            <h3>Birthday</h3>
            <label for="birthday">Enter your date of birth:</label>
            <input type="date" id="birthday" name="birthday" value="<?php echo $birthday;?>">
            <span class="error">* <?php echo $birthdayErr;?></span>
            <br><br>
            <h3>Phone number</h3>
            <label for="phone">Enter your phone number:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone;?>">
            <span class="error">* <?php echo $phoneErr;?></span>
            <br><br>
            <h3>Occupation</h3>
            <label for="occupation">Enter your occupation:</label>
            <input type="text" id="occupation" name="occupation" value="<?php echo $occupation;?>">
            <span class="error">* <?php echo $occupationErr;?></span>
            <br><br>
            <h3>Marital status</h3>   
            <input type="radio" id="single" name="marital" <?php if (isset($marital) && $marital=="single") echo "checked";?> value="single">
            <label for="single"> Single</label>
            <input type="radio" id="married" name="marital" <?php if (isset($marital) && $marital=="married") echo "checked";?> value="married">
            <label for="married"> Married</label>
            <span class="error">* <?php echo $maritalErr;?></span>
            <br><br>
            <h3>Address</h3>            
            <label for="address">Address</label><br>
            <textarea name="address" rows="5" cols="40"><?php echo $address;?></textarea>
            <span class="error">* </span>
            <br><br>
            <input type="submit" value="Submit">
            </form>
            
            

          <?php 
          echo "<h2>Your Input:</h2>";
          echo $name;
          echo "<br>";
          echo $age;
          echo"<br>";
          echo $gender;
          echo"<br>";
          echo $email;
          echo"<br>";
          echo $degree;
          echo"<br>";
          echo $birthday;
          echo"<br>";
          echo $phone;
          echo"<br>";
          echo $occupation;
          echo"<br>";
          echo $marital;
          echo"<br>";
          echo $address;
          echo"<br>";



?>

<a href="load.php">Show Data</a>
    </body>
</html>
