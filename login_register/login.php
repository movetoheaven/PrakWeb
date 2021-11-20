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
        <div class="logo">
        FPstudio
        </div>

        <ul class="nav-item">
            <li><a href="../index.php">home</a></li>
            <li><a href="portofilio.php">about us</a></li>
            <li><a href="#">contacts</a></li>
            <li><a href="#">review</a></li>

            <li>
            <div class="dropdown">
                <a>Portofolio
                <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-content">
                <a href="#">Photography</a>
                <a href="#">Videography</a>
                <a href="#">UI</a>
                <a href="#">Web Development</a>
                <a href="#">Android Development</a>
            </div>
            </li>
        </ul>

        <a href="login_register/register.php"><button class="sign-in">Sign Up</button></a>
    </div>
    <div class="content">
        <div class="text">Sign Up</div>             
        <form action="#" method="post">
            <input class="input-form" type="text" name="user" placeholder="Username">
            <br>
            <input class="input-form" type="password" name="pass" placeholder="Password">
            <br>
            <button class="btn-input" type="submit" value="login">Sign In</button>
            </form>

            <div class="p1"><a href="#">Forgot password?</a></div>
            <div class="p2">Don't have account?</div>
            <div class="p3"><a href="#">Sign Up</a></div>
    </div>
</body>
</html>