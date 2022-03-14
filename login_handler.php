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
          <li><a href="form.php" style=" color: white; background: #70db70;   padding:10px;  border-radius: 5px">Upload</a></li>
        </ul>
      </div>

    </nav>
  </header>


  <div class="pagecontent">
    <div class="loginform" id="formDiv">
      <?php

      $Email = $_POST["email"];
      $Password = $_POST["password"];

      include "config.php";

      $loguser = "SELECT email , password ,firstname FROM user WHERE email = '$Email' and password = '$Password'";

      $results = mysqli_query($con,$loguser);

      $count = mysqli_num_rows($results);

      if($count == 1){
        session_start();
        $_SESSION["loggedin"] = $Email;
        header('Location: profile.php');
      }
      else{

      echo "<div  style='color : red;'> invalid email and password</div>";

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
