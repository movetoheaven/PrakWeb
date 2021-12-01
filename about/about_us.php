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
    <link rel="stylesheet" href="aboutus.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <title>About</title>
</head>
<body>
<div class="nav-container">
  <div class="logo"><a href="../index.php">FPstudio</a></div>
    <ul class="nav-item">
        <li><a href="../homepage.php">home</a></li>
        <li><a href="about_us.php">about us</a></li>
        <li><a href="../contact/contact_us.php">contacts</a></li>
        <li><a href="../review/review.php">review</a></li>

        <li>
          <div class="dropdown">
            <a>Portofolio
              <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="../porto_photography/porto-photo.php">Photography</a>
              <a href="../porto_videography/porto-video.php">Videography</a>
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
                  echo "<a href='../admin/admin.php'>Admin</a>";
                }else{
                  echo "<a href='../setting/setting.php'>Setting</a>";
                }
              ?>
                <a href="../logout.php?message=about/about_us">Logout</a>
            </div>
            
          </div>
          
        <?php
      }else{
        echo "<a href='../login_register/login.php'><button class='sign-in'>Sign In</button></a>";
      }
    ?>
</div>


<div class="content-container">
    <div class="row justify-content-between">
        <div class="col-4">
            <img src="../images/53A159F4-7F04-47DE-BD3F-F2A1504C53C3-2.jpg" alt="bla" width="400" height="500" >
        </div>
        <div class="col-6">
            <div class="text">
                Akhmal Dimas Pratama is 20 year old developer, intrested in Android and Web development based in Yogyakarta.
            </div>
        </div>
    </div>
        <br>
    <div class="row justify-content-between">
        <div class="col-4">
            <img src="../images/12312312-2.jpg" alt="bla" width="400" height="500">
        </div>
        <div class="col-6">
            <div class="text">
            Ichvan Rachmawan is a 20 year old freelance photographer and videographer based in the Yogyakarta and South Tangerang area. His love for portrait and street photography has given him a unique look of style and pose.
            </div>
        </div>
    </div>
</div>
    
</body>
</html>