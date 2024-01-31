<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dowedar Tech | About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Dowedar Tech has two years of experience in teaching Programming, in the addition to four years of experience in the Programming</p>
         <a href="courses.php" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>100%</h3>
            <span>Success</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>Full Marks</h3>
            <span>at Programming</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+2 years</h3>
            <span>Experience In Teaching Programming</span>
         </div>
      </div>

      

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>بجد شكرا لحضرتك جدا مكنتش عارفه حاجه في البرمجه خالص وكمت تايهه وخايفه أسقط بس بفضل ربنا وتعبك 
            وشرحك الماده بقت سهله وحليت فيها كويس كل إمتحان البرمجه كان من اللي قولته لنا سواء في الشرح أو في ال pdf أو الأسئلة بتاع ليلة الامتحان بجد شكرا جدا لحضرتك</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3> مجهول </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>حقيقي بجد. شكرا ليكوا كتر خيركوا بجد حضرتك قولت حجات اجا 
منها كتير وحضرتك قولت هيجي كتير من الأخطاء المحتمله في كل درس حقيقي بجد شكرا ليكوا🤍</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>مجهول </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>حابه اشكر أحمد و عبد الرحمن على تعبهم معانا هما ساعدونا كتير و بسطوا المادة علينا أنا واحدة كنت تايهه ف المادة ف الأول بس هما شجعونا و خلونى احب المادة واحاول فيها والملخصات والأسئلة نفعتنی و ساعدتنی

جامد ، ربنا يباركلهمم و يوفقهم يارب

ودا بجد مش مجرد كلام</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3> مجهول </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>حقيقي شكرا جدا على اللي بتعمله معانا وربنا يوفقك ويفرحك ودايما في نجاح يارب🤍</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3> مجهول </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>حابين نشكر
Dowedar Tech 
و عبد الرحمن دياب على مجهودهم الاكثر من رائع انبارح و من ساعه م عملوا الجروب .. بجد ناس تستحق الشكر .. تعبوا معانا مع انهم مش ملزمین بدا .. و ورونا افکار و بعتوا اساله و جت منها .. وشرحوا كمان سواء واتس اب او في الكلية .. وعملوا ورق كتيررر Word تلخيصات عشان نلم الدنيا و ال باور بوينت كمان اللي فيه تفاصيل لغه ال c من الصفر .. لا بجد تعبوا .. متعرفوش الورد و الباوربوينت دا بياخد وقت قد ايه .. كلنا بنشكر احمد و عبد الرحمن على مجهودهم .. جزاكم الله خيرا كثيرا على مجهودكم وشكرًا لمساعدتكم لينا .. ربنا

.. يوفقكم</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3> مجهول </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>@⁨Dowedar Tech⁩ @⁨عبدالرحمن دياب⁩ حابه أشرككوا بالنيابه عنى وعن كل الدفعه .أكتر اتنين حقيقى وقفوا جنبنا وشجعونا  ودائما محفزينا ومسبتوناش ف اى لحظه على مدار الترم .اى سؤال كان بيتسأل ع جروب الدفعه كان بيترد عليه على الفور .اى حاجه  كانت واقفه معانا  ف المنهج كانت بتتشرح .وملخصتكوا الجميله ال  ساعدت ناس كتيره حقيقى تلم الماده ليلة الامتحان .سعيده بجد بتعاملى معاكوا .ربنا يوفقكوا ي رب ويجبر بخاطركم وينجحكم بالتوفيق دائما .دمتم متألقين</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3> محهول </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>