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
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/amit.jpg" alt="" height="400px"  style="border-radius:50%">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm Amit Kumar. A Student of MCA in Computer Science Department from SPU University [Batch : 2022 to 2024] . I love designing websites and exploring new things. Learning new things is my hobby.</p>

         <p>I would like to thank <a href="https://www.instagram.com/ruchithakur7474?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"> Mrs.Ruchi Thakur </a> Mam for guiding me through the session and making me able to develop projects like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>
      <div class="image">
         <img src="images/nitish.jpg" alt="" height="400px" style="border-radius:50%" >
      </div>
      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm Nitish Kumar. A Student of MCA in Computer Science Department from SPU University [Batch : 2022 to 2024] . I love designing websites and exploring new things. Learning new things is my hobby.</p>

         <p>I would like to thank <a href="https://www.instagram.com/ravichandel.007.143?igsh=cGMzbm44bHUzNzQy" target="_blank"> Mr.Ravinder Singh </a> Sir  for guiding me through the session and making me able to develop projects like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>


   </div>

</section>










<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>