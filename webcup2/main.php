<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive Dream-Catcher website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-paper-plane"></i>Dream-Catcher </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">objectives</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
        
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form" class="btn">Register Here</a>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">follow us</span>
        <h3 data-aos="fade-up" data-aos-delay="300">by following your dream</h3>
        <p data-aos="fade-up" data-aos-delay="450">All our dreams can come true, if we have the courage to pursue them. A dream you dream alone is only a dream. A dream you dream together is reality. The future belongs to those who believe in the beauty of their dreams.</p>
    </div>

</section>

<!-- home section ends -->

<!-- booking form section starts  -->
<?php
require_once 'DBConnect.php';
require_once 'dbregisterform.php';

$dbconn = new DBhandler();

$user = new User();
//$listcustomer = $customer->getAllCustomer($dbconn);
?>

<?php
if (isset($_POST["btnPost"])) {
  $user->setUsername($_POST['txtname']);
  $user->setEmail($_POST['txtemail']);
  $user->setDate($_POST['txtdate']);
  $user->setdream($_POST['txtdream']);
  $user->setPassword($_POST['txtpwd']);

  $user->addUser();
}

?>

<section class="book-form" id="book-form">

    <form action="" method="POST">
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>Username</span>
            <input type="text" placeholder="name" value="" name="txtname">
        </div>
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>Password</span>
            <input type="text" placeholder="password" value="" name="txtpwd">
        </div>
        <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
            <span>Post your dream</span>
            <input type="text" placeholder="-------" value="" name="txtdream">
        </div>
        <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
            <span>Date</span>
            <input type="date" value="" name="txtdate">
        </div>
        <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
            <span>email</span>
            <input type="text" placeholder="email" value="" name="txtemail">
        </div>
        <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Post Now" class="btn" name="btnPost">
    </form>

</section>

<!-- booking form section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="images/video1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="images/video1.mp4"></span>
            <span class="control-btn" data-src="images/video1.mp4"></span>
            <span class="control-btn" data-src="images/video1.mp4"></span>
        </div>
    </div>

    <div class="content" data-aos="fade-left" data-aos-delay="600">
        <span>why choose us?</span>
        <h3>Dream-Catcher helps you turns your dream into reality</h3>
        <p>Dreams are the touchstones of our character. The biggest adventure you can ever take is to live the life of your dreams. Dreams are the seedlings of reality. The only limit to our realization of tomorrow will be our doubts of today.</p>
    </div>

</section>

<!-- about section ends -->

<!-- objective section starts  -->

<section class="destination" id="destination">

    <div class="heading">
        <span>our objective</span>
        <h1>turn your dream into reality</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/img2.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/img4.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/img6.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="images/img5.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="images/img1.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="images/img8.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="images/img7.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="images/img3.jpg" alt="">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                <a href="#">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>

    </div>

</section>

<!-- objective section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <div class="heading">
        <span>our services</span>
        <h1>countless expericences</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <i class="fas fa-globe"></i>
            <h3>worldwide</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <i class="fas fa-wallet"></i>
            <h3>completely free</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
        </div>

    </div>

</section>

<!-- services section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>Dream-Catcher </a>
            <p>Turns your dream into reality</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> objective </a>
            <a href="#services" class="links"> <i class="fas fa-arrow-right"></i> services </a>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" class="email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

</section>

<div class="credit">created by <span>Spy-Web Cynic</span></div>

<!-- footer section ends -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>

</body>
</html>