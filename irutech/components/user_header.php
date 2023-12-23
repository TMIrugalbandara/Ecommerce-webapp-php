<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="home.php" class="logo"><img  id=aimg src="images/logo1.png" alt="" width="60px" ></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="service.php">Service</a>
         <a href="orders.php">My order</a>
         <a href="shop.php">Shop</a>
         <a href="contact.php">Contact</a>
      </nav>

      <div class="icons">
         <?php
          

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="bars"><img src="images/don.png"width="35px"></div>
         <a href="cart.php"><i class="shopping-cart11"></i><span><?= $total_cart_counts; ?></span><img src="images/crt.png"width="35px"></a>
        
         <a href="search_page.php"><i class="search"></i><img src="images/src.png"width="35px"></a>
         
         <div id="user-btn" class="user11"><img src="images/usr.png"width="35px"></div>
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         
        
         <a href="components/user_logout.php" class="delete-btn1" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>

</header>