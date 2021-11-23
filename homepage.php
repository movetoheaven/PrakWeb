<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="homepagecss.css">
</head>

<body>

<div class="nav-container">
  <div class="logo"><a href="index.php">FPstudio</a></div>
    <ul class="nav-item">
        <li><a href="homepage.php">home</a></li>
        <li><a href="about/about_us.php">about us</a></li>
        <li><a href="contact/contact_us.php">contacts</a></li>
        <li><a href="review/review.php">review</a></li>

        <li>
          <div class="dropdown">
            <a>Portofolio
              <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="porto_photography/porto-photo.php">Photography</a>
              <a href="porto_videography/porto-video.php">Videography</a>
              <a href="../porto_ui/porto_ui.php">UI</a>
              <a href="../porto_web/porto-web.php">Web Development</a>
              <a href="../porto-android/porto-android.php">Android Development</a>
          </div>
        </li>
    </ul>

    <?php
      if(!empty($_SESSION['username'])){
        ?>
          <div class="dropdown">
            <button class="sign-in">Profile <i class="fa fa-caret-down"></i> </button>
            <div class="dropdown-content">
              <?php
                if($_SESSION['username']=="admin"){
                  echo "<a href='admin/admin.php'>Admin</a>";
                }else{
                  echo "<a href='setting/setting.php'>Setting</a>";
                }
              ?>
                <a href="logout.php?message=homepage">Logout</a>
            </div>
            
          </div>
          
        <?php
      }else{
        echo "<a href='login_register/login.php'><button class='sign-in'>Sign In</button></a>";
      }
    ?>
    
</div>

<div class="content-container">
  <div class="content-left">
    <h1>Multimedia Service</h1>
    <h1>With Outstanding Quality</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

    <a href="contact/contact_us.php"><button class="contact">Contact Us</button></a>
  
  </div>

  <div class="image">
    <img src="#" alt="">
  </div>
</div>

</body>
</html>
