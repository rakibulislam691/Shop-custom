<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $pn = mysqli_real_escape_string($conn, $_POST['pn']);
   $fabric= mysqli_real_escape_string($conn, $_POST['fabric']);
   $color=mysqli_real_escape_string($conn, $_POST['color']);
   $cm=mysqli_real_escape_string($conn, $_POST['cm']);
   $ct=mysqli_real_escape_string($conn, $_POST['ct']);
   $df=mysqli_real_escape_string($conn, $_POST['df']);
   $si=mysqli_real_escape_string($conn, $_POST['si']);

   $select_message = mysqli_query($conn, "SELECT * FROM `customize` WHERE name = '$name' AND email = '$email' AND number = '$number'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `customize`(user_id, name, email, number, pn,fabric,color,cm,ct,df,si) VALUES('$user_id', '$name', '$email', '$number', '$pn' ,'$fabric','$color','$cm','$ct','$df','$si')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Customize</h3>
   <p> <a href="home.php">home</a> / Customize </p>
</div>

<section class="contact">

   <form action="" method="post">
      <h3>How do you want us to customize for you?</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <input type="text" name="pn" required placeholder="name of the product which you want to customize" class="box">
      <input type="text" name="fabric" required placeholder="fabric Selection" class="box">
      <input type="text" name="color" required placeholder="Color Selection" class="box">
      <input type="text" name="cm" required placeholder="Enter your cloth measurements" class="box">
      <input type="text" name="ct" required placeholder="Customized Text(Colour,font,location)" class="box">
      <textarea name="df" class="box" placeholder="Design Features (anything you have in mind)" id="" cols="30" rows="10"></textarea>
      <textarea name="si" class="box" placeholder="Special Instructions for us (if you have any)" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="Send Request" name="send" class="btn">
   </form>

</section>








<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>