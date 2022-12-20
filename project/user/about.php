<?php
$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias, reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat iusto facere id officia assumenda temporibus?</p>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/BAGGI.jpg" alt="">
         <p>Wonderful customer service, walked in with no appointment, they were more than happy to take a look at our computers and gave great advice on how to solve our problems. Definitely coming back when we have more problems.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Baggi</h3>
      </div>

      <div class="box">
         <img src="images/ADOK.jpg" alt="">
         <p>Wonderful customer service, walked in with no appointment, they were more than happy to take a look at our computers and gave great advice on how to solve our problems. Definitely coming back when we have more problems.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Adok</h3>
      </div>

      <div class="box">
         <img src="images/YEROHA.jpg" alt="">
         <p>Wonderful customer service, walked in with no appointment, they were more than happy to take a look at our computers and gave great advice on how to solve our problems. Definitely coming back when we have more problems.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yeroha</h3>
      </div>

      <div class="box">
         <img src="images/AIDOH.jpg" alt="">
         <p>Wonderful customer service, walked in with no appointment, they were more than happy to take a look at our computers and gave great advice on how to solve our problems. Definitely coming back when we have more problems.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aidoh</h3>
      </div>

      <div class="box">
         <img src="images/KUKA.jpg" alt="">
         <p>Wonderful customer service, walked in with no appointment, they were more than happy to take a look at our computers and gave great advice on how to solve our problems. Definitely coming back when we have more problems.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kuka</h3>
      </div>

      <div class="box">
         <img src="images/BIBOK.jpg" alt="">
         <p>Wonderful customer service, walked in with no appointment, they were more than happy to take a look at our computers and gave great advice on how to solve our problems. Definitely coming back when we have more problems.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Boshke</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>