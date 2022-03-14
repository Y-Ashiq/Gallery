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
  <title>LogIn</title>
    <script defer src="loginjs.js"></script>
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
          <li><a href="login.php" class="glowButton">Login</a></li>
          <li><a href="signup.php">Signup</a></li>
          <li><a href="form.php" style=" color: white; background: #70db70;  padding:10px;  border-radius: 5px">Upload</a> </li>



        </ul>
      </div>

    </nav>
  </header>


  <div class="pagecontent">
    <h1 style="text-align: center; padding-bottom:10px;">Sign-in</h1>
    <form class="loginform" name="logform"  method="post" action="login_handler.php" >
      <label>Email </label>
      <input type="email" name="email" class="inputPlace" required>
      <br><br>
      <label>Password </label>
      <input type="password" name="password" class="inputPlace" required>
      <br><br>
      <button type="submit" name="button" class="bttn" onclick="login();" value="login">Sign in</button>
      <br><br>
      <a style="text-decoration: none ;color:#70db75  ; margin: auto;" href="signup.php">New In The Website? SignUp Here</a>
    </form>

  </div>

  <footer id="below">
    <footer id="below">
      <p> <br> <span id="copyright"> © copyright 2020</span> </p>
    </footer>
  </footer>



</body>

</html>
