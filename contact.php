<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Contact</title>
</head>

<body>
  <header>
    <nav>
      <a href="index.php" id="logo">Website</a>
      <div  id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php" class="glowButton">Contact us</a></li>
          <?php
           if( isset($_SESSION["loggedin"])){
             echo " <li><a style='color :#48bfe3; background:white; padding: 10px; border-radius: 5px' href='profile.php'>Profile</a></li>";
             echo "<li><a style=' color: white; background:#ff3333;   padding:10px;  border-radius: 5px' href='logout.php'>LogOut</a></li>";
           }else {
             echo "   <li><a href='login.php'>Login</a></li>";
             echo "<li><a href='signup.php'>Signup</a></li>";
           }


           ?>
           <li><a href="form.php" style=" color: white; background: #70db70;   padding:10px;  border-radius: 5px">Upload</a> </li>

        </ul>
      </div>
    </nav>
  </header>



  <div class="pagecontent">
    <h1 style="text-align:center;"> CONTACT US <br> </h1>


    <div class="gridThreeColumns">
      <div class="card">
        <div class="imageArea">
          <img src="images/nassef.jpg">
          <h2 style="color: white;">Ahmed Nassef</h2>
        </div>
        <h3><br> The founder of the website <br> ID : 18103236 </h3>
      </div>
      <div class="card">
        <div class="imageArea">
          <img src="images/ashiq.png">
          <h2 style="color: white;">Youssef Alashiq</h2>
        </div>
        <h3><br> CEO of the website <br>ID : 18103210 </h3>
      </div>
      <div class="card">
        <div class="imageArea">
          <img src="images/ali.png">
          <h2 style="color: white;">Ali Youssef</h2>
        </div>
        <h3><br> Assistant <br>ID : 18101591</h3>
      </div>
    </div>
  </div>

  <footer id="below"> <span id="copyright">
      <p>© copyright 2020
    </span> </p>
  </footer>
</body>

</html>
