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
    <title>Admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="admincss.css">
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
                <a href="../logout.php?message=index">Logout</a>
            </div>
            
          </div>
          
        <?php
      }else{
        echo "<a href='../login_register/login.php'><button class='sign-in'>Sign In</button></a>";
      }
    ?>
</div>


<ul id="mySidebar" class="nav-side">
    <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a></li>
    <li><a href="upload-photography.php">Photography</a></li>
    <li><a href="upload-videography.php">Videography</a></li>
    <li><a href="upload-ui.php">UI</a></li>
    <li><a href="upload-web.php">Web Developer</a></li>
    <li><a href="upload-android.php">Android Developer</a></li>
    <li><a href="contact-admin.php">Contact</a></li>
</ul>  

<div id="main" class="content-container">
    <button class="openbtn" onclick="openNav()">☰ ADMIN MENU</button>  
    <div class="row">
        <div class="col-12">
            <form action="upload.php?porto=android" method="post" enctype="multipart/form-data">
                <label >Android Developer</label> <br>
                <input type="file"  name='upload'> <br>
                    <?php 
                    if(isset($_GET['message'])){
                        if($_GET['message']=="invalid"){
                            echo "<p>Wrong file extention!</p>";
                        }else if($_GET['message']=="same"){
                            echo "<p>Photo already exist!</p>";
                        }else if($_GET['message']=="empty"){
                            echo "<p>Cannot be empty!</p>";
                        }
                      }
                    ?>
                <input type="submit" class="btn-input" value="Upload" name="submit">
            </form>
        </div>
    </div>

    <div class="row">
        <?php
            include '../db/connect.php';

            $sql="SELECT * FROM android";
            $data = $connection->query($sql);
            while($row = $data->fetch_object()){
                $photoId = $row->androidId;
                $image = $row->images;
        ?>
        <div class="col-sm-6 col-md-4 mb-3">
        <img src="../images/android/<?php echo $image ?>" alt="" class="fluid img-thumbnail"><br><br>
        <a href="delete.php?porto=android&id=<?php echo $photoId ?>"><button>Delete</button></a>
        </div>

        <?php
            }
        ?>
    </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
}
</script>

</body>
</html>