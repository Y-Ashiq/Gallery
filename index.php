<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
  <title>Home</title>

</head>

<body>


  <header>
    <nav>
      <a href="index.php" id="logo">Website</a>
      <div id="menu">
        <ul>
          <li><a href="index.php" class="glowButton">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="contact.php">Contact us</a></li>
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

  <div class="pagecontent gridContainer">
      <?php
        $photos = glob('images/*');
        $number_of_photos = count($photos) - 4;

        for ($i = 1; $i < $number_of_photos + 1; $i++){
          $filename = $i . ".png";

          if (file_exists('images/' . $filename)){
            echo '<div class="gridItem"> <img src="images/' . $filename . '"></div>';
          }
          else{
            $filename = $i . ".jpg";
            echo '<div class="gridItem"> <img src="images/' . $filename . '"></div>';
          }
        }
      ?>
  </div>

  <footer id="below" style="width:100%">
    <p> <br> <span id="copyright"> © copyright 2020</span> </p>
  </footer>

</body>

</html>
