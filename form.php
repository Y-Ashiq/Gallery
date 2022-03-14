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
          <li><a href="form.php" style=" color: white; background: #70db70;   padding:10px;  border-radius: 5px">Upload</a></li>
          <li><a style="color :#48bfe3; background:white; padding: 10px; border-radius: 5px "href="profile.php">Profile</a></li>
          <li><a style=" color: white; background:#ff3333;   padding:10px;  border-radius: 5px" href="logout.php">LogOut</a></li>

        </ul>
      </div>
    </nav>
  </header>


  <div class="pagecontent">

    <form class="loginform" action="uploadImg.php" method="post" enctype="multipart/form-data">
      <input type="file" id="fileId" name="image" accept="image/*">
      <button type="submit" name="submit" value="submit" class="bttn" style="margin-top: 10px;">Submit Image</button>
    </form>
  </div>

  <footer id="below">
    <footer id="below">
      <p> <br> <span id="copyright"> © copyright 2020</span> </p>
    </footer>
  </footer>


</body>

</html>
