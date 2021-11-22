<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="porto-photo.css"> -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Porto-Photo</title>
</head>
<body>
<div class="nav-container">
    <div class="logo">
      FPstudio
    </div>

    <ul class="nav-item">
        <li><a href="../index.php">home</a></li>
        <li><a href="../about/about_us.php">about us</a></li>
        <li><a href="../contact/contact_us.php">contacts</a></li>
        <li><a href="../review/review.php">review</a></li>

        <li>
          <div class="dropdown">
            <a>Portofolio
              <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="porto-photo.php">Photography</a>
              <a href="#">Videography</a>
              <a href="#">UI</a>
              <a href="#">Web Development</a>
              <a href="#">Android Development</a>
          </div>
        </li>
    </ul>

    <a href="login_register/login.php"><button class="sign-in">Sign In</button></a>
</div>

<video controls>
    <source src="D:/Post/First Try/Hyper3DFinalPost.mp4" type="video/mp4">
</video>
    


</body>
</html>