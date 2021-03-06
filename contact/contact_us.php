<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="contactcss.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>
<body>
<div class="nav-container">
  <div class="logo"><a href="../index.php">FPstudio</a></div>
    <ul class="nav-item">
        <li><a href="../homepage.php">home</a></li>
        <li><a href="../about/about_us.php">about us</a></li>
        <li><a href="contact_us.php">contacts</a></li>
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
                <a href="../logout.php?message=contact/contact_us">Logout</a>
            </div>
            
          </div>
          
        <?php
      }else{
        echo "<a href='../login_register/login.php'><button class='sign-in'>Sign In</button></a>";
      }
    ?>
</div>
    <div class="content-container">

    <?php
      if(!empty($_SESSION['username'])){
      ?>
        <h2>Contact Us!</h2>
    <h4>Lets work together!</h4>
    <form action="contact_process.php"  method="post">
        <div class="contact-form">Name</div>
        <div class="row">
            <div class="col-6">
                <input class="contact-input" type="text" name="first_name" placeholder="">
                <div class="contact-name">First name</div>
            </div>

            <div class="col-6">
                <input class="contact-input" type="text" name="last_name" placeholder="">
                <div class="contact-name">Last name</div>
            </div>
        </div>
        


        <div class="contact-form">Email Address</div>
        <input class="contact-input" type="email" id="Email" name="email" placeholder="">

        <br>

        <div  class="contact-form">Subject</div>
        <input class="contact-input" type="text" id="Subject" name="subject" placeholder="">

        <br>

        <div class="contact-form">Message</div>
        <textarea name="Message" id="" cols="30" rows="10"></textarea>

        <br>

        <div class="contact-form">Work</div>

        <input type="checkbox" id="Photographer" name="Work[]" value="Photographer">
        <label for="Photographer">Photographer</label>
        
        <br>

        <input type="checkbox" id="Videographer" name="Work[]" value="Videographer">
        <label for="Videographer">Videographer</label>
        
        <br>

        <input type="checkbox" id="UI" name="Work[]" value="UI">
        <label for="UI">UI</label>
        
        <br>

        <input type="checkbox" id="Web Developer" name="Work[]" value="Web Developer">
        <label for="Web Developer">Web Developer</label>

        <br>

        <input type="checkbox" id="Android Developer" name="Work[]" value="Android Developer">
        <label for="Android Developer">Android Developer</label>

        <br>

        <button type="submit" value="Submit">Send</button>

    </form>
    </div>
      <?php
      }else{
          echo "<center><h2 style='margin:300px 0 auto;'>Sorry you're not sign up!</h2></center>";
      }
    ?>
    
    
</body> 
</html>