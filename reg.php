<?php
    
    $FIRST_NAME = $_POST['FIRST_NAME'];
    $LAST_NAME = $_POST['LAST_NAME'];

    $PHONE_NUMBER = $_POST['PHONE_NUMBER'];
    $GENDER = $_POST['GENDER'];

    $DATE_OF_BIRTH =$_POST['DATE_OF_BIRTH'];
    
    $currentDate = date("m/d/Y");
    $calc = date_diff(date_create($DATE_OF_BIRTH),date_create($currentDate));
    $AGE = (int)$calc ->format("%y");

    $BLOOD_GROUP = $_POST['Bloodgroup'];

    $DISTRICT = $_POST['DISTRICT'];
    $CITY = $_POST['CITY'];

    $DIVISION = $_POST['DIVISION'];

    $EMAIL_ADDRESS = $_POST['EMAIL_ADDRESS'];
    $CODE = $_POST['CODE'];


    $PASS_WORD = $_POST['PASSWORD'];
    $y = $_POST['CONFIRM_PASSWORD'];

    if($PASS_WORD == $y){
        $PASS_WORD = $_POST['PASSWORD'];
    }
    else{
        echo "Passwords did not match";
    }


    //connection to database server
    $con = new mysqli('localhost','root','','bloodbank');
    if($con->connect_error){
        die('Connection Faild');
    }
    else{
        
        $stmt = $con->prepare("INSERT INTO register(FIRST_NAME,LAST_NAME,PHONE_NUMBER,GENDER,DATE_OF_BIRTH,Bloodgroup,CITY,DISTRICT,EMAIL_ADDRESS,CODE,PASSWORD,DIVISION,AGE)
        values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssissssssissi",$FIRST_NAME,$LAST_NAME,$PHONE_NUMBER,$GENDER,$DATE_OF_BIRTH,$BLOOD_GROUP,$CITY,$DISTRICT,$EMAIL_ADDRESS,$CODE,$PASS_WORD,$DIVISION,$AGE);
        $stmt->execute();
        echo "Registered Succesfull";
        $stmt->close();
        $con->close();
        header("location:login.php");
    }
?>
