<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--swiper css link -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
   <!--font awesome cdn link-->
   <!-- Font Awesome 6 CDN -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!--my css styles-->
    <link rel="stylesheet" href="styles.css">
    <title>home</title>
</head>
<body>

<!--header section starts-->
<section class="header">
   <a href="home.php" class="logo">Travel</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="pakage.php">pakage</a>
        <a href="book.php">book</a>
    </nav>


    <div id="menu-btn" class="fa-solid fa-bars"></i></div>

</section>



<!--header section end-->

<!--home section starts-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(img/img_bk.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world </h3>
                    <a href="pakage.php" class="btn">discover more</a>

                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(img/img_3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover new places </h3>
                    <a href="pakage.php" class="btn">discover more</a>

                </div>
            </div>

            
            <div class="swiper-slide slide" style="background:url(img/paris3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="pakage.php" class="btn">discover more</a>

                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!--home section ends-->

<!--services section start-->
<seciton class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="img/icon_1.png" alt="">
            <h3>Adventure</h3>
        </div>

        <div class="box">
            <img src="img/icon_2.png" alt="">
            <h3>Tour guide</h3>
        </div>

        <div class="box">
            <img src="img/icon_3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="img/icon_4.png" alt="">
            <h3>Camp fire</h3>
        </div>

        <div class="box">
            <img src="img/icon_6.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="img/icon_5.png" alt="">
            <h3>Camping</h3>
        </div>
    </div>
</seciton>
<!--services section ends-->

<!--home about section starts-->


<section class="home-about">
    <div class="image">
        <img src="img/img_1.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>At TRAVEL, we believe that travel is more than just a trip – it's an experience.
             Whether you're embarking on a tropical getaway, exploring cultural landmarks,
             or seeking adventure in the great outdoors, we are here to make your dream vacations come to life<p>
           <a href="about.php" class="btn">read more</a>    
        </div>
</section>

<!--home about section ends-->

<!--home pakage section starts-->
<section class="home-pakages">
    <h1 class="heading-title">our pakages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="img/travel.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & tour</h3>
                <p> Romantic packages designed for couples,
                     often including luxurious resorts, private tours, or honeymoon<p>
                     <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/washington.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & tour</h3>
                <p>Tailored for individuals traveling alone, focusing on safe, social, and immersive experiences</p>
                     <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/travel-world.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventure & tour</h3>
                <p>Packages for groups of friends, colleagues, or like-minded travelers, 
                    often including guided tours, group activities, and shared transportation.<p>
                     <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="pakage.php" class="btn">load more</a></div>
</section>
<!--home pakage section ends-->

<!--home offer section starts-->
<section class="home-offer">
    <div class="content">
        <h3>upto 30% off</h3>
        <p>Are you ready to explore new destinations? 
            Whether it’s a tropical getaway, an adventurous safari, or a relaxing beach 
            resort, we’ve got the perfect vacation waiting for you. As a special welcome gift, we’re offering you 30% off your first booking!</p>
    <a href="book.php" class="btn">book now</a>
        </div>
</section>

<!--home offer section ends-->


<!--footer-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fa-solid fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fa-solid fa-angle-right"></i>about</a>
            <a href="pakage.php"><i class="fa-solid fa-angle-right"></i>pakage</a>
            <a href="book.php"><i class="fa-solid fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fa-solid fa-angle-right"></i>ask question</a>
            <a href="#"><i class="fa-solid fa-angle-right"></i>about us</a>
            <a href="#"><i class="fa-solid fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fa-solid fa-angle-right"></i>terms of use</a>
        </div>

        
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fa-solid fa-phone"></i>+2348133342648</a>
            <a href="#"><i class="fa-solid fa-phone"></i>+2348052533877</a>
            <a href="#"><i class="fa-solid fa-envelope"></i>mistervaldboss@gmail.com</a>
            <a href="#"><i class="fa-sharp fa-solid fa-map-location-dot"></i>lagos island, Nigeria</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fa-brands fa-facebook"></i>facebook</a>
            <a href="#"><i class="fa-brands fa-twitter"></i>twitter</a>
            <a href="#"><i class="fa-brands fa-instagram"></i>instagram</a>
            <a href="#"><i class="fa-brands fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit">created by <span>mr.web desiger</span>| all righ reservd!</div>
</section>


<!--footer ends -->



<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--my script link-->
<script src="scripts.js"></script>
</body>

</html>