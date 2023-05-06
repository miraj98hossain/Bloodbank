<?php
    $user = $_REQUEST['EMAIL_ADDRESS'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Requestblood.css">
    <title>Simple Reistration Form</title>
</head>
<body>
    <form action="" method="post" name="myform" >
      <img class="bodyimg"src="Blood donation-pana.png" alt="">
        <div class="container">
        <!-- <img src="patient_safety.gif" alt="header-image" class="cld-responsive"> -->
          <h1>Request For Blood</h1>
          <p>Please fill in this form to create a request.</p>
      
              <label for="City"><b>City</b></label>
            <input type="text" name="City" placeholder="Enter City" required>
            <label for="District"><b>District</b></label>
            <input type="text" name="District" placeholder="Enter District" required>
            <label for="Division"><b>Division</b></label>
            <input type="text" name="Division" placeholder="Enter Division" required>
      
                  <label for="Blood Group"><b>Blood Group</b></label>
            <br>
           <select name="Blood_Group" required>
            <option selected hidden value="" >Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
           </select>
           <br>
           
           <label for="Quantity"><b>Quantity</b></label>
            <br>
           <select name="Quantity" required>
            <option selected hidden value="">Quantity</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           </select>
           
           <br>
           <label for="Phone Number"><b>Phone Number</b></label>
           <input type="number" name="Phone" placeholder="0198565656" required>
      
          
      
          <div class="clearfix">
      
            <!-- <button type="submit" class="btn">Submit</button> -->
            <input class="button" type="submit" name="submit" value="Submit">
          </div>
        </div>
      </form>

 
</body>
</html>
<?php

    //connection to database server
    $con = new mysqli('localhost','root','','bloodbank');
    if($con->connect_error){
        die('Connection Faild');
    }
    else{
        if(isset($_POST['submit'])){
            
            $City = $_POST['City'];
            $District = $_POST['District'];
        
            $Division = $_POST['Division'];
            $Blood_Group = $_POST['Blood_Group'];
        
            $Quantity =$_POST['Quantity'];
            $Phone = $_POST['Phone'];
        
            
            $qu1 = "SELECT * FROM register WHERE EMAIL_ADDRESS = '$user'";
            $con = new mysqli('localhost','root','', 'bloodbank');
            $values = mysqli_query($con, $qu1);
            $id = "";
            while ($row = mysqli_fetch_assoc($values)) {
                $id = $row['Register_ID'];
                echo $id;
            }

        $stmt = $con->prepare("INSERT INTO requestblood(Register_ID,City_b,District_b,Division_b,Blood_Group,Quantity,Phone)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("issssii",$id,$City,$District,$Division,$Blood_Group,$Quantity,$Phone);
        $stmt->execute();
        echo "Registered Succesfull";
        $stmt->close();
        $con->close();
         //header("location:Requestblood.php");
            
        }
        
    }
   
?>
<!-- <style>
    

body {
	font-family: Montserrat,Arial, Helvetica, sans-serif;
	background-color:#f7f7f7;
}
* {box-sizing: border-box}
.bodyimg{
  width: 100%;
  height: 90%;
}

/* Add padding to container elements */
.container {
    padding: 20px;
      width:500px;
    position: absolute;
    left: 48%;
    top: 60%;
    transform: translate(-50%, -50%);
      border:1px solid #ccc;
      border-radius:10px;
      background:white;
  -webkit-box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  -moz-box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  box-shadow: 2px 1px 21px -9px rgba(0,0,0,0.38);
  }

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
	font-family: Montserrat,Arial, Helvetica, sans-serif;
}
select {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
	font-family: Montserrat,Arial, Helvetica, sans-serif;
}

input[type=number] {
  width: 81%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f7f7f7;
}

input[type=text]:focus, input[type=password]:focus, input[type=phone]:focus, select:focus {
  background-color: #ddd;
  outline: none;
}



/* Set a style for all buttons */
.button {
  background-color: #0eb7f4;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
	font-size:16px;
	font-family: Montserrat,Arial, Helvetica, sans-serif;
	border-radius:10px;
}

.button:hover {
  opacity:1;
}


/* Change styles for signup button on extra small screens
@media screen and (max-width: 300px) {
  .signupbtn {
     width: 100%;
  }
} */


</style> -->