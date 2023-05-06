<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="css/signup.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Sacramento&display=swap" rel="stylesheet">
  <link href="css/signup.css" rel="stylesheet">
  <title>Register</title>
</head>

<body>
<img class="bodyimg"src="Sign up-bro.png" alt="">
  <div class="container">
  
    <div class="content">
      <img src="Heart-Article-Hero-1200x500.gif" alt="header-image" class="cld-responsive">
      <h1 class="form-title">Register Here</h1>
      <form action="reg.php" method="post" name="myform" class="form-group">

        <div class="beside">
          <input name="FIRST_NAME" class="fname" type="text" placeholder="First NAME" required>
          <input name="LAST_NAME" class="lname" type="text" placeholder="Last NAME" required>
        </div>

        <div class="beside">
          <input name="PHONE_NUMBER" type="number" placeholder="PHONE NUMBER" required>
          <select name="GENDER" required>
            <option selected hidden value="">GENDER</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="beside">
          <input name="DATE_OF_BIRTH" class="dateofbirth" type="date" placeholder="DATE OF BIRTH" required>
          <select name="Bloodgroup" required>
            <option selected hidden value="">BLOOD GROUP</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
        </div>

        <div class="beside">
          <input name="CITY" class="City" type="text" placeholder="CITY" required>
          <input name="DISTRICT" class="district" type="text" placeholder="DISTRICT" required>
          
        </div>
        <div class="beside">
        <select name="DIVISION" required>
            <option selected hidden value="">DIVISION</option>
            <option value="Barishal">Barishal</option>
            <option value="Chattogram">Chattogram</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Khulna">Khulna</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Mymensingh">Mymensingh</option>
            <option value="Sylhet">Sylhet</option>
          </select>
        </div>
        <div class="beside">
          <input name="EMAIL_ADDRESS" type="email" placeholder="EMAIL ADDRESS"required>
          <input name="CODE" type="number" placeholder="CODE"required>
        </div>
        <div class="beside">
          <input name="PASSWORD" class="password" type="Password" placeholder="PASSWORD"required>
          <input name="CONFIRM_PASSWORD" class="cpassword" type="Password" placeholder="CONFIRM PASSWORD"required>
          
        </div>
        <input class="button" type="submit" value="Submit">
        <a href="login.php" class="dnthave">Already have an account? Login up</a>
        <!-- <button type="button">Submit</button> -->
        <!-- <a href="login.php"></a> -->

      </form>
    </div>
  </div>

</body>

</html>

