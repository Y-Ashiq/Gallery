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
          <li><a style="color :#48bfe3; background:white; padding: 10px; border-radius: 5px"  href="profile.php">Profile</a></li>
          <li><a style=" color: white; background:#ff3333;   padding:10px;  border-radius: 5px" href="logout.php">LogOut</a></li>



        </ul>
      </div>
    </nav>
  </header>


  <div class="pagecontent">
    <div class="loginform" style="text-align:center">
      <?php
        if ($_FILES['image']['name']){
          if (!$_FILES['image']['error']){
            if ( substr($_FILES['image']['name'], -4) == ".jpg" || substr($_FILES['image']['name'], -4) == ".png"){
              echo "Image uploaded successfully! <br>";
              echo "Thank you!<br><br>";

              $photos = glob('images/*');
              $number_of_photos = count($photos) - 4 + 1;

              $target_dir = "images/";
              $target_file = $target_dir . $number_of_photos;
              $target_file = $target_file . substr(basename($_FILES["image"]["name"]), -4);

              move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

              echo "<img src='$target_file' style='max-width:100%; max-height:100%; margin: auto; display: block;'>";
            }
            else{
              echo "Sorry, we only accept .jpg and .png image formats.";
            }
          }
          else{
            echo "There was an error! " . $_FILES['image']['error'];
          }
        }
        else{
          echo "You didn't choose a file to upload!";
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
