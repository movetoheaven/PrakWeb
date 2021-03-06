<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="logincss.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <title>Sign in</title>
</head>
<body>
    <div class="nav-container">
        <div class="logo"><a href="../index.php">FPstudio</a></div>

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
                <a href="../porto_photography/porto-photo.php">Photography</a>
                <a href="../porto_videography/porto-video.php">Videography</a>
                <a href="../porto_ui/porto_ui.php">UI</a>
                <a href="../porto_web/porto-web.php">Web Development</a>
                <a href="../porto-android/porto-android.php">Android Development</a>
            </div>
            </li>
        </ul>

        <a href="login.php"><button class="sign-in">Sign In</button></a>
    </div>
    <div class="content">
        <div class="text">Sign Up</div>             
        <form action="register_check.php" method="post">
            <input class="input-form" type="text" name="user" placeholder="Username">
            <br>
            <input class="input-form" type="text" name="email" placeholder="Email">
            <br>
            <input class="input-form" type="password" name="pass" placeholder="Password">
            <?php
            if(isset($_GET['message'])){
                if($_GET['message'] == "invalid"){
                    echo "<p>Username already used!</p>";
                }else if($_GET['message'] == "empty"){
                    echo "<p>Field cannot be empty!</p>";
                }

                
            }else{
                echo "<br>";
            }
            ?>
            <button class="btn-input" type="submit" value="login">Sign Up</button>
            </form>

            
            <div class="p2">Have account?</div>
            <div class="p3"><a href="login.php">Sign In</a></div>
    </div>
</body>
</html>