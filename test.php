<?php
    $user = $_REQUEST['EMAIL_ADDRESS'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/test.css">
    <title>requestblood</title>
</head>
<body>
<!-- <img class="bodyimg"src="Blood donation-pana.png" alt=""> -->

  <div class="allo-width-50">

  <?php

            $qu1 = "SELECT * FROM register WHERE EMAIL_ADDRESS = '$user'";
            $con = new mysqli('localhost', 'root', '', 'bloodbank');
            $values = mysqli_query($con, $qu1);
            $bg = "";
            $gender = "";
            while ($row = mysqli_fetch_assoc($values)) {
                $Bloodgroup = $row['Bloodgroup'];
                $gender = $row['GENDER'];
                
            }
?>

    <table>

      <thead>
        <th colspan="50" class="special">Blood Requests</th>
      <thead>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone Number</th>
      <th>City</th>
      <th>District</th>
      <th>Division</th>
      <th>Blood Group</th>
      <th>Quatity</th>
      <th>Action</th>
      </thead>
      <?php
                $qu2 = "SELECT Reqid,FIRST_NAME,LAST_NAME,City_b,District_b,Division_b,Blood_Group,Quantity,Phone
                FROM requestblood
                JOIN register
                ON requestblood.Register_ID = register.Register_ID
                WHERE Blood_Group = '$Bloodgroup';";
            $val2 = mysqli_query($con, $qu2);
            while ($row = mysqli_fetch_assoc($val2)) {
                $req_id = $row['Reqid'];
                $firstname = $row['FIRST_NAME'];
                $lastname = $row['LAST_NAME'];
                $City = $row['City_b'];
                $District = $row['District_b'];
                $Division = $row['Division_b'];
                $bloodGroup = $row['Blood_Group'];
                $quantity = $row['Quantity'];
                $Phone = $row['Phone'];
                
                ?>
      <tbody>
        <tr>
          
          <td><?php echo $firstname; ?></td>
          <td><?php echo $lastname; ?></td>
          <td><?php echo $Phone; ?></td>
          <td><?php echo $City; ?></td>
          <td><?php echo $District; ?></td>
          <td><?php echo $Division; ?></td>
          <td><?php echo $bloodGroup; ?></td>
          <td><?php echo $quantity; ?></td>
          <td><a href="donate.php?EMAIL_ADDRESS=<?php echo $user?>&ggid=<?php echo $req_id?>">Donate</a></td>
          
        </tr>
        </tbody>
        <?php
         }
        ?>
    </table>
  </div>
</section>
  
</body>
</html>

