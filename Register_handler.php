<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Upload a picture</title>
  <script defer src="script.js"></script>
</head>

<body>
  <header>
    <nav>

      <a href="index.php" id="logo">Website</a>
      <div id="menu">

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Signup</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="form.php" style=" color: white; background: #70db70;   padding:10px;  border-radius: 5px">Upload</a></li>


        </ul>
      </div>

    </nav>
  </header>


  <div class="pagecontent">
    <div class="loginform" id="formDiv">
			<?php

			$firstname = $_POST["Firstname"];
			$lastname = $_POST["Lastname"];
			$email = $_POST["email"];
			$password = $_POST["password"];

			include "config.php";

			$insertuser = "INSERT INTO user (firstname,lastname,email,password)
			values ('$firstname','$lastname','$email','$password')";

			$results = mysqli_query($con,$insertuser);

			if($results){
				echo "<h1>successful</h1>";
				echo "<a style='text-decoration: none;' href=login.php>go to login</a>";

			}
			else {
				echo"Error :" .mysqli_error($con);
			}
			 ?>


    </div>
  </div>

  <footer id="below">
    <footer id="below">
      <p> <br> <span id="copyright"> © copyright 2020</span> </p>
    </footer>
  </footer>


</body>

</html>
