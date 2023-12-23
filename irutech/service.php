<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>service</title>

 
   

   

   <link rel="stylesheet" type="text/css" href="style.css" />
   <style>
* {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; 
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

  

      <div class="content">
         <h3>Our services</h3>
         <img  id=aimgs src="images/aboutmain.png" alt="" width="400px" >
      </div>

   </div>

</section>


<div class="row">
  <div  class="column" style="background-color:#ddd; ">
    <h2 id=iwd>Island wide <br> delivery</h2>
    <img  id=aimg src="images/island.png" alt="" width="100px" >
  </div>
  <div class="column" style="background-color:#ccc;">
  <h2 id=iwd>Free <br> shipping</h2>
  <img  id=aimg src="images/free.png" alt="" width="100px" >

    
  </div>
  <div class="column" style="background-color:#ddd;">
  <h2 id=iwd>Cash on <br> delivery</h2>
  <img  id=aimg src="images/cashon.png" alt="" width="100px" >

    
  </div>
  <div class="column" style="background-color:#ccc;">
  <h2 id=iwd>24 <br>Hour</h2>
  <img  id=aimg src="images/24h.png" alt="" width="100px" >
 
  </div>
</div>








<?php include 'components/footer.php'; ?>


<script src="js/script.js"></script>



</script>

</body>
</html>