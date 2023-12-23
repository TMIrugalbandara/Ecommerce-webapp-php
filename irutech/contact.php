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
   <title>contact</title>
   

   


   <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="contact">

<div class="abtus">
        <h1 >Contact Us</h1><br>
        <address>
                 #346, Colombo Rd, Mawanella<br><br></address>

                 <p >035 3352299- Shop<br>
                 077 9774936 - Mobile<br><br>

                 irutech@gmail.com<br>
                 admin@irutech.lk</p>
               
</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>