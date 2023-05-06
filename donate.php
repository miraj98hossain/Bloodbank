
<?php
    $user = $_REQUEST['EMAIL_ADDRESS'];
    
    $req = $_REQUEST['ggid'];
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/donate.css" rel="stylesheet">
    <title>Simple Reistration Form</title>
</head>
<body>
<img class="bodyimg"src="Donate.jpg" alt="">

    <form action="" method="post" name="myform">
        <div class="container">
          <h1>Fill These To Donate</h1>
      
              <label for="email"><b>Height</b></label>
            <input type="text" name="Feet" placeholder="Enter Feet" required>
            <input type="text" name="Inches" placeholder="Enter Inches" required>
          <label for="email"><b>Weight</b></label>
          <input type="text" placeholder="Enter Weight" name="Weight" required>
          
              <label for="email"><b>last Donation</b></label>
              <input type="date" name="lastDonation"  required>
      
          <br>
      
      
            <br>
           <select name="Accidents" required>
            <option selected hidden value="">Any Accidents?</option>
            <option value="None">None</option>
            <option value="Minor">Minor</option>
            <option value="Major">Major</option>
           </select>
           
           <select name="Disease" required>
            <option selected hidden value="">Any Disease?</option>
            <option value="None">None</option>
            <option value="Minor">Minor</option>
            <option value="Major">Major</option>
           </select>
           <select name="Operations" required>
            <option selected hidden value="">Any Operations?</option>
            <option value="None">None</option>
            <option value="Minor">Minor</option>
            <option value="Major">Major</option>
           </select>
           
          
      
          <div class="clearfix">
          <input  class="button" type="submit" value="submit">
            <!-- <button type="submit" class="btn">submit</button> -->
          </div>
        </div>
      </form>


</body>


<?php
                    
                    
                    $qu1 = "SELECT * FROM register WHERE EMAIL_ADDRESS = '$user'";
                    $qureq = "SELECT * FROM requestblood WHERE Reqid = $req";
                    $con = new mysqli('localhost', 'root', '', 'bloodbank');
                    $values = mysqli_query($con, $qu1);
                    $values2 = mysqli_query($con, $qureq);
                    $height = "";
                    $quantity = "";
                    while ($row = mysqli_fetch_assoc($values)) {
                        
                        $id = $row['Register_ID'];
                        $age = $row['AGE'];
                        //echo $age;
                    }
                    while ($row = mysqli_fetch_assoc($values2)) {
                        $quantity = $row['Quantity'];
                        //echo $quantity;
                    }



                      $feet = $_POST['Feet'];
                      $inches = $_POST['Inches'];
                      $o = ($feet*12) + $inches;
                      $calc = $o/39;
                      $height  = number_format($calc,1);

                        $weight = $_POST['Weight'];
                        $DATE =$_POST['lastDonation'];
                        $accident = $_POST['Accidents'];
                        $disease = $_POST['Disease'];
                        $operation = $_POST['Operations'];
                        $currentDate = date("m/d/Y");
                        $calc = date_diff(date_create($DATE),date_create($currentDate));
                        $months = (int)$calc ->format("%M");
                        $years = (int)$calc ->format("%Y");

                        $current = ($years) * 12 + ($months);

                        $bmi = $weight / ($height * $height);

                        if ($age > 17) {
                          if ($weight >= 50) {
                            if ($current >= 2) {
                              if ($accident != 'Major' && $disease != 'Major' && $operation != 'Major') {
                                $quantity = $quantity - 1;


                                $stmt = $con->prepare("INSERT INTO donor(Register_ID,	Weight,	BMI	,Accidents,	Diseases,	Operations)
                                values(?,?,?,?,?,?)");
                                $stmt->bind_param("iiisss", $id, $weight, $bmi, $accident,  $disease,  $operation);
                                $stmt->execute();
                                echo "Registered Succesfull";
                                $stmt->close();
                                


                                if ($quantity == 0) {
                                    $deletqu = "DELETE FROM requestblood WHERE Reqid = $req";
                                    mysqli_query($con, $deletqu);
                                    $con->close();
                                } else {
                                    $updatequ = "UPDATE requestblood SET Quantity = $quantity WHERE Reqid = $req";
                                    mysqli_query($con, $updatequ);
                                    $con->close();
                                }
                              }
                            }
                          }
                        }
                          
                              
                                 



                        


       ?>

</html>

