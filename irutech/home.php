<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   


  



   <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">


      <div class="slide">
         
         <div class="content">
            <span>Everythings</span>
            <h3>You Need To </h3>
            <h3> Smart Your Life</h3>
            <a href="shop.php" class="btn" id=btn111>shop now</a>
         </div>
      </div>

   
   </div>

   

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Click to buy</h1>

   <div class="">

 

 

   <a href="category.php?category=phone" class="aa">
      <img src="images/mobile.png" alt=""id="cimg">

   </a>

   <a href="category.php?category=pendrive" class=" aa">
      <img src="images/usb.png" alt=""id="cimg">

   </a>

   <a href="category.php?category=keyboard" class="aa">
      <img src="images/key.png" alt=""id="cimg">
     
   </a>

   <a href="category.php?category=mouse" class="aa">
      <img src="images/mouse.png" alt=""id="cimg">

      <a href="category.php?category=laptop" class="aa">
      <img src="images/lap.png" alt="" id="cimg">
      
   </a>
      <br><br><br><br><br><br>
      
   </a>

   <a href="category.php?category=cable" class=" aa">
      <img src="images/cabl.png" alt=""id="cimg">
     
   </a>

   

   <a href="category.php?category=charger" class="aa">
      <img src="images/char.png" alt=""id="cimg">
     
   </a>

   <a href="category.php?category=handfree" class=" aa">
      <img src="images/hdset.png" alt=""id="cimg">

   </a>
   <a href="category.php?category=battery" class="aa ">
      <img src="images/bettery.png" alt=""id="cimg">

   </a>
   <a href="category.php?category=smart watch" class="aa ">
      <img src="images/watch.png" alt=""id="cimg">

   </a>
   </div>

   

   </div>

</section>










<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>