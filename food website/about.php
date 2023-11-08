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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Lí do bạn nên chọn quán tui!</h3>
         <p>Quán bún của tôi có vị ngon và đậm đà, được nấu từ nguyên liệu tươi ngon và sạch sẽ. Bạn có thể thưởng thức bún với nước mắm chua ngọt, rau sống và giò chả.Ngoài ra Quán bún của tôi còn có không gian thoáng mát và sạch sẽ, phục vụ nhanh nhẹn và chu đáo. Bạn có thể đến quán bất cứ lúc nào trong ngày, từ sáng sớm đến tối muộn.</p>
         <a href="menu.php" class="btn">thực đơn</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Chỉ với các bước đơn giản</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>chọn món</h3>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>chuyển phát nhanh</h3>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>thưởng thức</h3>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Các nhân viên của quán</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

      <div class="swiper-slide slide">
            <img src="images/avaviet.jpg" alt="">
            <p>Đây là một đầu bếp rất giỏi về nấu các loại bún. Anh ấy có nhiều năm kinh nghiệm trong ngành ẩm thực và đã tạo ra nhiều món bún độc đáo và hấp dẫn. Anh ấy luôn chú trọng đến chất lượng nguyên liệu và cách chế biến để mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Đầu bếp Việt</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/avahop.jpg" alt="">
            <p>Anh ấy đã làm việc tại đây hơn 10 năm và luôn mang đến cho khách hàng những trải nghiệm tuyệt vời. Anh ấy biết cách phục vụ các món ăn và thức uống một cách nhanh chóng và chuyên nghiệp. Anh ấy cũng có kỹ năng giao tiếp tốt và thân thiện với mọi người.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fa-regular fa-star"></i>
               <i class="fa-regular fa-star"></i>
               <i class="fa-regular fa-star"></i>
            </div>
            <h3>Bồi bàn Hợp</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/avaan.jpg" alt="">
            <p>Đây là một thủ quỹ giỏi. Cô ấy có kinh nghiệm quản lý tài chính cho nhiều công ty lớn. Cô ấy luôn tìm kiếm những cơ hội đầu tư mới và hiệu quả. Cô ấy cũng rất thân thiện và hòa đồng với mọi người. Cô ấy là một người bạn đáng tin cậy và một đồng nghiệp tuyệt vời.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Thủ Qũy An</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>