<?php
 session_start();
 if( !isset($_SESSION["loggedin"])){
     echo "<script>
     alert('PLEASE LOGIN FIRST'); window.location.href='login.php';
     </script>";
 }

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
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li><a style="color :#48bfe3; background:white; padding: 10px; border-radius: 5px "href="profile.php">Profile</a></li>
          <li><a href="form.php" style=" color: white; background: #70db70;   padding:10px;  border-radius: 5px">Upload</a></li>
          <li><a style=" color: white; background:#ff3333;   padding:10px;  border-radius: 5px" href="logout.php">LogOut</a></li>
        </ul>
      </div>

    </nav>
  </header>


  <div class="pagecontent">
    <div class="loginform" >
      <?php
    include "config.php";
    $email = $_SESSION["loggedin"];
    $viewuser = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($con,$viewuser);
    if(!$result){
    echo "Error :" .mysqli_error($con);

    }
    $row = mysqli_fetch_array($result);
    $firstname =$row["firstname"];
    $lastname = $row["lastname"];
    $email =$row["email"];

        ?>

    <h1>First Name:</h1>
    <p style="color:black"><?php echo "$firstname"; ?></p>
    <br><br>
    <h1>Last Name:</h1>
    <p style="color:black"><?php echo "$lastname"; ?></p>
    <br><br>
    <h1>Email:</h1>
    <p style="color:black"><?php echo "$email"; ?></p>
    </div>
  </div>

  <footer id="below">
    <footer id="below">
      <p> <br> <span id="copyright"> © copyright 2020</span> </p>
    </footer>
  </footer>


</body>

</html>
