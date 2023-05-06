<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
</head>
<body>
<div class='back-action'>
  <div class='item'>
    <i class="fa fa-arrow-left"></i>
  </div>
</div>
<div class="profile-wrapper">
  <div class="profile-picture">
    <img id="profile-picture" src="Contact.jpg">
  </div>
  <div class="profile-details">
    <div>
      <div class="profile-title">
        <h1 id="profile-name" class="profile-name">Blood Bank</h1>
      </div>
      <ul>
        <li class="profile-number">
          <div>First Number</div>
          <div id="profile-first-number">01984356643</div>
        </li>
        <li class="profile-number">
          <div>Second Number</div>
          <div id="profile-second-number">9845654775</div>
        </li>
        <li class="profile-email">
          <div>Admin Email</div>
          <div id="profile-primary-email">admin@gmail.com</div>
        </li>
        <li class="profile-email">
          <div>Secondary Email</div>
          <div id="profile-secondary-email">bloodbank@gmail.com</div>
        </li>
        <li class="profile-notes">
          <div>Notes</div>
          <div id="profile-notes">I hope you will like our page</div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class='contact-action'>
  <div class='item'>
    <i class="fa fa-wrench"></i>
  </div>
</div>
</body>
</html>

<style>
  @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,600,800");
* {
  box-sizing: border-box;
  padding-inline-start: 0;
}

body {
  /* background-color: black; */
  font-family: "Open Sans";
  font-weight: 300;
  margin: 0;
  padding: 0;
}

.profile-picture,
.profile-details {
  flex: 1;
  font-size: 16px;
  font-size: 2.5vw;
}

.profile-wrapper {
  background: #013864;
  color: white;
  height: 100vh;
  display: flex;
}

img#profile-picture {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

div.profile-details > div {
  padding: 0em 1em 1em 1em;
}

div.profile-details > div > ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

div.profile-details > div > ul li {
  margin: 8px 0;
  display: block;
}

div.profile-details > div > ul > li > div:nth-child(1) {
  font-weight: 600;
  font-size: 16px;
  font-size: 2vw;
  width: 30%;
  display: inline-block;
}

div.profile-details > div > ul > li > div:nth-child(2) {
  font-size: 16px;
  font-size: 2vw;
  text-align: left;
  width: 68%;
  display: inline-block;
}

.contact-action {
  position: fixed;
  bottom: 25px;
  right: 15px;
  width: 5em;
  height: 5em;
  cursor: pointer;
}

.back-action {
  position: fixed;
  top: 20px;
  left: 15px;
  width: 5em;
  height: 5em;
  cursor: pointer;
}

.contact-action .item,
.back-action .item {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2em;
  font-weight: bold;
  border-radius: 50%;
  transition: 0.5s;
  color: white;
  background: transparent;
  box-shadow: 1px 1px 5px #000;
}

.back-action .item {
  font-size: 2em;
}

@media (max-width: 800px) {
  body {
    background: red;
  }

  .profile-wrapper {
    flex-direction: column;
  }

  .back-action,
  .contact-action {
    width: 10em;
    height: 10em;
  }

  .back-action .item {
    font-size: 4em;
  }

  .contact-action .item {
    font-size: 7em;
  }

  .profile-details {
    font-size: 5vw;
    min-height: 60vh;
  }

  div.profile-details > div > ul > li > div:nth-child(1),
  div.profile-details > div > ul > li > div:nth-child(2) {
    font-size: 5vw;
  }

  img#profile-picture {
    max-height: 40vh;
  }
}

.item:hover {
  color: #013864;
  background: #fff;
  box-shadow: 1px 1px 5px #000;
}

</style>