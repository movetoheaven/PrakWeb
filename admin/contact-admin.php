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
    <li><a href="#">Photography</a></li>
    <li><a href="#">Videography</a></li>
    <li><a href="#">UI</a></li>
    <li><a href="#">Web Developer</a></li>
    <li><a href="#">Android Developer</a></li>
    <li><a href="contact-admin.php">Contact</a></li>
</ul>  

<div id="main" class="content-container">
    <button class="openbtn" onclick="openNav()">☰ ADMIN MENU</button> 
    <table>
        <tr>
            <th class="col-1">Name</th>
            <th class="col-2">Email</th>
            <th class="col-2">Subject</th>
            <th class="col-4">Message</th>
            <th class="col-2">Work</th>
            <th class="col-1">Progress</th>
            <th>Edit</th>
        </tr>
        <?php
            if(!empty($_SESSION['username'])){
                include '../db/connect.php';

                $sql = "SELECT * FROM contact";
                $select = $connection->query($sql);

                while($row = $select->fetch_object()){
                    $contactId = $row->contactId;
                    $contactUser = $row->username;
                    $name = $row->firstName;
                    $email = $row->email;
                    $subject = $row->subject;
                    $message = $row->message;
                    $work = $row->work;
                    $progress = $row->progress;
        ?>
                    <!-- php -->
        <tr>
            <td class="col-1"><?php echo $name?></td>
            <td class="col-2"><?php echo $email?></td>
            <td class="col-2"><?php echo $subject?></td>
            <td class="col-4"><?php echo $message?></td>
            <td class="col-2"><?php echo $work?></td>
            <td class="col-1"><?php echo $progress?></td>
            <td style="text-align: center;">
            <?php
                if($progress=="Submitted"){
                    echo "<a href='#?id=<?php echo $contactId ?>'><button class='process-btn'>Process</button></a>";
                    echo "<a href='#?id=<?php echo $contactId ?>'><button class='done-btn'>Done</button></a>";
                }else if($progress=="On Process"){
                    echo "<a href='#?id=<?php echo $contactId ?>'><button class='done-btn'>Done</button></a>";
                }
            ?>
            </td>
        </tr>
                    <!-- php -->
        <?php
                }
            }
        ?>
    </table> 
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
