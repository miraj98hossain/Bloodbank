<?php
    
    $email = $_POST['EMAIL_ADDRESS'];
    $pass_word = $_POST['pass_word'];
    
    
    //connection to database server
    // echo "Passwords did not match";
    $con = new mysqli('localhost','root','','bloodbank');
    if($con->connect_error){
        die('Connection Faild');
        
    }
    else{
        
        if ($email == "admin@gmail" && $pass_word == "admin") {
           
            header("location:dashboard.php");
            
        } else if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM register WHERE EMAIL_ADDRESS = '$email' AND PASSWORD = '$pass_word'")) > 0) {

            //header("location:loginhome.php");
            
            ?>
            <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Sacramento&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/loginhome.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstraploginhome.css">




  <title>BloodBank</title>
</head>

<body class="homebody">

  <section>
    <div class="twp-video-background">
      <div class="twp-video-foreground">
        <video autoplay muted loop id="myVideo">
          <source src="bloodhome.mp4" type="video/mp4">
        </video>
        
      </div>
      <div class="twp-video-layer"></div>
    </div>
   
    <nav class="navbar navbar-expand-lg">
      <ul class="navbar-nav ">
        <li class="navbar-item ">
          <h2>BloodBank</h2>
          <!-- <button class="custom-btn btn-7">Home</button> -->
          
          <a href="Requestblood.php?EMAIL_ADDRESS=<?php echo $email?>"><button class="custom-btn btn-7">Request Blood</button></a>
          <a href="test.php?EMAIL_ADDRESS=<?php echo $email?>"><button class="custom-btn btn-7">Donate Blood</button></a>
          <a href="faq.php"><button class="custom-btn btn-7">Faqs</button></a>
          <a href="Contact.php"><button class="custom-btn btn-7">Contac Us</button></a>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-expand-lg">
      <ul class="rlnavbar-nav ">
        <li class="navbar-item ">
          <!-- <h2>Donate Blood For Betterment Of Our Society </h2> -->
           <a class="login" href="Home.php"><button class="custom-btn btn-7">Logout</button></a>
          <!-- <a class="login" href="login.php"><button class="custom-btn btn-7">login</button></a>  -->


        </li>
      </ul>

    </nav>

    <div class="social-menu">

      <ul>
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-instagram"></i></a></li>
        <li><a href=""><i class="fa fa-youtube"></i></a></li>
        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>



  </section>

</body>

</html>
<?php
        }

    }

