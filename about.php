<?php

include 'config.php';

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
   <h3 >about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/dreamstime-s.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We understand the importance of quality when it comes to clothing. That's why we carefully curate our collection from trusted manufacturers and designers who prioritize craftsmanship and attention to detail. Our range includes the latest fashion trends, timeless classics, and everything in between, ensuring there's something for everyone.</p>
         <p>Customer satisfaction is at the heart of everything we do. We value our customers and strive to provide excellent service at every step of the shopping journey. Whether you have a question about sizing, need assistance with an order, or simply want fashion advice, our friendly and knowledgeable customer support team is always ready to help.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   

   <div class="box-container">

      
   </div>

</section>

<section class="authors">

   <h1 class="title">Website Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Items/rakib.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rakib islam</h3>
      </div>

      <div class="box">
         <img src="images/Items/munni.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Munni akter Ripa</h3>
      </div>

      

     

   </div>

</section>







<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>