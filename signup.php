<?php
 session_start();
 if( isset($_SESSION["loggedin"])){
     echo "<script>
     alert('PLEASE LOGOUT FIRST'); window.location.href='profile.php';
     </script>";
 }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>SignUp</title>
    <script defer src="script.js"></script>
    	<script src="script.js"></script>
</head>

<body>
  <header>
    <nav>

      <a href="index.php" id="logo">Website</a>
      <div id="menu">

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php" class="glowButton">Signup</a></li>
          <li><a href="form.php" style=" color: white; background: #70db70;   padding:10px;  border-radius: 5px">Upload</a> </li>



        </ul>
      </div>

    </nav>
  </header>


  <div class="pagecontent ">
    <h1 style="text-align: center; padding-bottom:10px;">Sign-up</h1>
    <form  onsubmit="return validation()"  class="loginform"  name="regform"  method="post" action="Register_handler.php">

      <label>First Name </label>
      <input type="text" name="Firstname" class="inputPlace">
      <br><br>
      <label>Last Name </label>
      <input type="text" name="Lastname" class="inputPlace">
      <br><br>
      <label >Email </label>
      <input type="text" name="email" class="inputPlace">
      <br><br>
      <label>password </label>
      <input type="password" name="password" class="inputPlace">
      <br><br>
      <button type="submit" name="button" class="bttn" onclick="validation()" value="Register">Sign up</button>
      <br><br>
      <a style="text-decoration: none ;color:#70db75  ; margin: auto;" href="login.php">Already Have an Account? Sign In Here</a>
    </form>


  </div>

  <footer id="below">
    <footer id="below">
      <p> <br> <span id="copyright"> © copyright 2020</span> </p>
    </footer>
  </footer>


</body>

</html>
