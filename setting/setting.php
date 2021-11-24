<?php
    session_start();
    if(empty($_SESSION['username'])){
      header("location:../homepage.php");
    }else{
      $user = $_SESSION['username'];

      include '../db/connect.php';
      $sql = "SELECT * FROM users WHERE username = '$user';";
      $query = $connection->query($sql);
      $row = $query->fetch_object();

      $name = $row->username;
      $image = $row->images;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="user-setting.css">
    <title>Setting</title>
</head>
<body>
<div class="nav-container">
  <div class="logo"><a href="index.php">FPstudio</a></div>
    <ul class="nav-item">
        <li><a href="../homepage.php">home</a></li>
        <li><a href="../about/about_us.php">about us</a></li>
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
                <a href="../logout.php?message=homepage">Logout</a>
            </div>
            
          </div>
          
        <?php
      }else{
        echo "<a href='login_register/login.php'><button class='sign-in'>Sign In</button></a>";
      }
    ?>
</div>

<div class="content-container">
        <div class="row">
            <div class="col-4">
              <?php
                if($image == "default"){
                  echo "<img src='../images/users/default.png' alt=''>";
                }
              ?>
                <div class="side">
                    <a href="#"></a>
                    <button >UPLOAD</button>
                    <br>
                    <a href="../setting/history.php" name="history">
                        <button>
                            HISTORY
                        </button>
                    </a>
                    <br>
                    <a href="#">
                        <button>
                            CHANGE PASSWORD
                        </button>
                    </a>
                </div>
            </div>
                
                
            <div class="col-8">
                <form action="change-username.php" method="post">
                    <label >Username</label> <br>
                    <input type="text"  name='user' placeholder="<?php echo $user?>"> <br>
                    <?php 
                      if(isset($_GET['message'])){
                        if($_GET['message']=="invalid"){
                          echo "<p>Username already used!</p>";
                        }else if($_GET['message']=="same"){
                          echo "<p>Username is same!</p>";
                        }else if($_GET['message']=="empty"){
                          echo "<p>Cannot be empty!</p>";
                        }
                      }
                    ?>
                    <input type="submit" class="btn-input" value="Change Username">

                </form>
            </div>
        </div>
    </div>
</body>
</html>