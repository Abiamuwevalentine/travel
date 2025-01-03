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
    <title>book now</title>
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
<div class="heading" style="background:url(img/img_3.jpg) no-repeat">
<h1>Book Now</h1>
</div>


<!--booking section starts-->
<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
       <div class="flex">
        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required>
        </div>

        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required>
        </div>

        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your phone" name="phone" required>
        </div>

        <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required>
        </div>

        <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place of visitation" name="location" required>
        </div>

        <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" required>
        </div>

        <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required>
        </div>

        <div class="inputBox">
            <span>leaving:</span>
            <input type="date" name="leaving" required>
        </div>
       </div>

       <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>

<!--booking section ends-->
    





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