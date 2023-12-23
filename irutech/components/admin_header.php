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

      <a href="../admin/products.php" class="logo">Admin Panel</a>
      
      

      <nav class="navbar">
   
         <a href="../admin/products.php">products</a>
         <a href="../admin/placed_orders.php">orders</a>

      </nav>

      <div class="icons">
      <div id="menu-btn" class="bars"><img src="../images/don.png"width="35px"></div>
         <div id="user-btn" class="user11"><img src="../images/usr.png"width="35px"></div>
      </div>

      <div class="profile">
         
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
      </div>

   </section>

</header>