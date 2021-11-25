<?php
    session_start();
    if(!empty($_SESSION['username'])){
        if($_SESSION['username']!="admin"){
            header("location:../index.php");
        }
    }else{
        header("location:../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="porto-web.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Porto-Web</title>
</head>
<body>
<div class="nav-container">
  <div class="logo"><a href="../index.php">FPstudio</a></div>
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
              <a href="porto_web.php">Web Development</a>
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
                <a href="../logout.php?message=porto_photography/porto-photo">Logout</a>
            </div>
            
          </div>
          
        <?php
      }else{
        echo "<a href='../login_register/login.php'><button class='sign-in'>Sign In</button></a>";
      }
    ?>
</div>


<div class="content-container">
  <div class="row">
  <?php
    include '../db/connect.php';

    $sql="SELECT * FROM web";
    $data = $connection->query($sql);
    while($row = $data->fetch_object()){
      $photoId = $row->webId;
      $image = $row->images;
  ?>
    <div class="col-sm-6 col-md-4 mb-3">
      <img src="../images/web/<?php echo $image ?>" alt="" class="fluid img-thumbnail">
    </div>
  <?php
    }
  ?>
  </div>
</div>
</body>
</html>