<?php
  session_start();
  if(!empty($_SESSION['username'])){
      $user = $_SESSION['username'];
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
    <link rel="stylesheet" href="review.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>



    <title>Review</title>
    
</head>
<body>
<div class="nav-container">
    <div class="logo">
      FPstudio
    </div>

    <ul class="nav-item">
        <li><a href="../index.php">home</a></li>
        <li><a href="../about/about_us.php">about us</a></li>
        <li><a href="../contact/contact_us.php">contacts</a></li>
        <li><a href="review.php">review</a></li>

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
                <a href="#">Setting</a>
                <a href="../logout.php?message=review/review">Logout</a>
            </div>
            
          </div>
          
        <?php
      }else{
        echo "<a href='../login_register/login.php'><button class='sign-in'>Sign In</button></a>";
      }
    ?>
</div>

<?php
  include '../db/connect.php';

  $sql = "SELECT *, users.images FROM review INNER JOIN users ON review.username=users.username";
  $review = $connection->query($sql);

  while($row = $review->fetch_object()){
    $reviewId = $row->reviewId;
    $reviewUser = $row->username;
    $reviewMessage = $row->message;
    $reviewRating = $row->rating;
    $reviewImage = $row->images;
?>

<div class="content-container">
  <div class="row">
    <div class="col-2">
      <?php
        if($reviewImage == "default"){
          echo "<img src='../images/users/default.png' alt='' class='profile'>";
        }

        echo "<p>$reviewUser</p>";
      ?>
      
    </div>
    <div class="col-9">
      <div class="border">
        <?php
          echo "<p>$reviewMessage</p>";
        ?>
      </div>
      <!-- looping php -->
      <?php
        for($i=0; $i<$reviewRating; $i++){
          echo "<img src='../images/star.png' alt=''>";
        }
      ?>
    </div>
  </div>
</div>

<?php
  }
?>

<!-- php -->
<?php
  if(!empty($_SESSION['username'])){
?>
<form action="review_process.php?" method="post">
  <div class="action">
    <span onclick="actionTogle();">+</span>
    <div class="review-container">
      <div class="row">
        <div class="col-12">
          <p>Rating Us!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <?php echo "<p>$user</p>"?>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <textarea name="review" id="review"></textarea>
        </div>  
      </div>
      <div class="row">
          <div class="col-6">
            <fieldset class="rating">
              <input type="radio" name="rating" id="star5" value="5"><label for="star5"></label>
              <input type="radio" name="rating" id="star4" value="4"><label for="star4"></label>
              <input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
              <input type="radio" name="rating" id="star2" value="2"><label for="star2"></label>
              <input type="radio" name="rating" id="star1" value="1"><label for="star1"></label>
            </fieldset>
          </div>
          <div class="col-6">
              <button type="submit" value="submit">Submit</button>
          </div>
      </div>
    </div>
  </div>
</form>

<?php
  }
  ?>

<script type="text/javascript">
  function actionTogle(){
    var action = document.querySelector('.action');
    action.classList.toggle('active');
  }
</script>
</body>
</html>