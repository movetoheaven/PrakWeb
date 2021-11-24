<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change-Username</title>
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
              <a href="porto_ui/porto_ui.php">UI</a>
              <a href="porto_web/porto-web.php">Web Development</a>
              <a href="porto-android/porto-android.php">Android Development</a>
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
<form action="change-password-check.php" method="">
  <input class="input-form" type="password" name="old-pass" placeholder="Old Password">
  <br>
  <input class="input-form" type="password" name="new-pass" placeholder="New Password">
  <br>
  <input class="input-form" type="password" name="confirm-new-pass" placeholder="Confirm New Password">
</form>


</body>
</html>