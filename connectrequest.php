<?php

    //connection to database server
    $con = new mysqli('localhost','root','','bloodbank');
    if($con->connect_error){
        die('Connection Faild');
    }
    else{
        if(isset($_POST['submit'])){
            $user = $_REQUEST['email'];
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

        $stmt = $con->prepare("INSERT INTO requestblood(Register_ID,City,District,Division,Blood_Group,Quantity,Phone)
        values(?,?,?,?,?,?,?)");
        $stmt->bind_param("issssii",$id,$City,$District,$Division,$Blood_Group,$Quantity,$Phone);
        $stmt->execute();
        echo "Registered Succesfull";
        $stmt->close();
        $con->close();
         header("location:Requestblood.php");
            
        }
        
    }
   
?>
