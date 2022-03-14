<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>About</title>
</head>

<body>
  <header>
    <nav>

      <a href="index.php" id="logo">Website</a>
      <div id="menu">

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" class="glowButton">About</a></li>
          <li><a href="contact.php">Contact us</a></li>

          <?php
           if( isset($_SESSION["loggedin"])){
             echo " <li><a style='color :#48bfe3; background:white; padding: 10px;border-radius: 5px'href='profile.php'>Profile</a></li>";
             echo "<li><a style=' color: white; background:#ff3333;   padding:10px;  border-radius: 5px' href='logout.php'>LogOut</a></li>";
           } else {
             echo "   <li><a href='login.php'>Login</a></li>";
             echo "<li><a href='signup.php'>Signup</a></li>";
           }

           ?>
           <li><a href="form.php" style=" color: white; background: #70db70;   padding:10px;  border-radius: 5px">Upload</a> </li>

        </ul>
      </div>

    </nav>
  </header>


  <div class="pagecontent gridTwoColumns gridItem" >
    <p> <span style="font-weight: bold; font-size:30px; color :#48bfe3;">Created by and for people who LOVE PHOTOS.</span>
      <br> <br> We offer thousands of high quality, bright and beautiful photos. Whatever theme or topic you are into, we have a photos for you. You can easily navigate through our categories (holidays, nature, music, abstract…) to find the perfect
      image to customize your device or you can directly search for it.
      <br><br>A photos will make your computer or phone more personal, more like you. Custom photos reinforce empathy with the device and reflect your personality, taste and what makes you feel good.
      <br><br>If you are thinking of changing your photos, if you are bored with your old photos or your PC and would like to give it to personal touch, at photosacces we show you our best photos with amazing and original designs that will surely
      accompany you.
      <br><br>Please, feel free to suggest new photos for our collection and we will happily add them. We value and welcome any suggestion and contribution, just contact us!.
    </p>
    <div>
      <img  src="images/portrait_eyes_23.jpg" style="width:80%; min-width:80%; margin-left:40px;" alt="portrait">
    </div>

  </div>

  <footer id="below">
    <footer id="below">
      <p> <br> <span id="copyright"> © copyright 2020</span> </p>
    </footer>
  </footer>


</body>

</html>
