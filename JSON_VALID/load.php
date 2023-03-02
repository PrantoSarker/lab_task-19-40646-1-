<!DOCTYPE html>  
 <html>  
      <head> 
          
          <style type="text/css">
               table, tr, td,th{
                    border: 1px solid black;
                    border-collapse: collapse;
               }
          </style>
      </head>  
      <body>  

      <div>
          <div>
         
                     <table>  
                          <tr>  
                              <th>User name</th>   
                              <th>Age</th>  
                              <th>Gender</th>
                              <th>email</th>
                              <th>Degree</th>    
                              <th>Date of birth</th>
                              <th>Phone Number</th>
                              <th>Occupation</th>
                              <th>Marital status</th> 
                              <th>Address</th>

                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);
                          if (isset($data)) {
                              foreach($data as $row)  
                               {  
                                   // if ($row['username']=="john") {
                                        echo '<tr>
                                         <td>'.$row["name"].'</td>
                                         <td>'.$row['age'].'</td>
                                         <td>'.$row["gender"].'</td>
                                         <td>'.$row["email"].'</td>
                                         <td>'.$row["degree"].'</td>
                                         <td>'.$row["birthday"].'</td>
                                         <td>'.$row["phone"].'</td>
                                         <td>'.$row["occupation"].'</td>
                                         <td>'.$row["marital"].'</td>
                                         <td>'.$row["address"].'</td>
                                         </tr>'; 
                                   // }
                                   
                                     
                               } 
                          }
                           
                          ?>  
                     </table>  
                     <a href="store.php">Store Data</a>

                         </div>
                         </div>
      </body>  
 </html>  