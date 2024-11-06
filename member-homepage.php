<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Bronco</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a>
                    <ul class="dropdown">
                        <li><a href="#">Log In</a></li>
                        <li><a href="#">Sign Up</a></li>
                    </ul>
                </li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./classes.html">Classes</a></li>
                <li><a href="./services.html">Services</a></li>
                <li><a href="./team.html">Our Team</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./about-us.html">About us</a></li>
                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                        <li><a href="./team.html">Our team</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./blog.html">Our blog</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="member-homepage.php">
                            <img src="img/logo.png" alt="" width="225">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="member-homepage.php">Home</a>
                                <ul class="dropdown">
                                    <li><a href="Profile.html">Profile</a></li>
                                    <li><a href="bmi-calculator.php">Bmi calculate</a></li>
                                    <li><a href="Logout.php">Log Out</a></li>
                                </ul>
                            </li>
                            <li><a href="./class-details.html">Classes</a>
                                <ul class="dropdown">
                                    <li><a href="./class-timetable.html">Classes timetable</a></li>
                                </ul>
                            </li>
                            <li><a href="./services.html">Services</a></li>
                            <li><a href="./contact.html">Contact Us</a></li>
                            <li><a href="./about-us.html">About Us</a>
                                <ul class="dropdown">
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./blog.html">Our blog</a></li>
                                    <li><a href="./team.html">Our team</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href="#" class="primary-btn">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href="#" class="primary-btn">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern Equipment</h4>
                        <p>We provide cutting-edge equipment and up-to-date fitness 
                            programs to help you stay current with modern fitness trends and 
                            achieve your goals efficiently.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy Nutrition Plan</h4>
                        <p>Our expert nutritionists design personalized meal plans to complement 
                            your workouts, ensuring balanced nutrition that supports your health and fitness journey.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Professional Training Plan</h4>
                        <p>Our certified trainers create structured, goal-oriented workout plans tailored to your fitness level, 
                            helping you achieve maximum results with proper guidance.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique To Your Needs</h4>
                        <p>We offer customized fitness and nutrition plans that are specifically 
                            designed for your individual body type, goals, and lifestyle, ensuring a 
                            unique approach to your success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

<!-- Classes Section Begin -->
<section class="classes-section spad">
    <div class="container" id="our-classes">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span>Our Classes</span>
                    <h2>WHAT WE CAN OFFER</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Class Item 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="img/classes/class-1.jpg" alt="Weightlifting Class">
                    </div>
                    <div class="ci-text">
                        <span>STRENGTH</span>
                        <h5>Weightlifting</h5>
                        <form action="workout-plan.php" method="POST">
                            <input type="hidden" name="workout_name" value="Weightlifting">
                            <div class="button-container" style="display: flex; justify-content: right;">
                                <input type="date" name="booking_date" required>
                                <button type="submit" class="primary-btn pricing-btn" style="padding: 5px 10px; font-size: 12px;">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Class Item 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="img/classes/class-2.jpg" alt="Indoor Cycling Class">
                    </div>
                    <div class="ci-text">
                        <span>Cardio</span>
                        <h5>Indoor Cycling</h5>
                        <form action="workout-plan.php" method="POST">
                            <input type="hidden" name="workout_name" value="Indoor Cycling">
                            <div class="button-container" style="display: flex; justify-content: right;">
                            <input type="date" name="booking_date" required>
                                <button type="submit" class="primary-btn pricing-btn" style="padding: 5px 10px; font-size: 12px;">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Class Item 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="img/classes/class-3.jpg" alt="Kettlebell Power Class">
                    </div>
                    <div class="ci-text">
                        <span>STRENGTH</span>
                        <h5>Kettlebell Power</h5>
                        <form action="workout-plan.php" method="POST">
                            <input type="hidden" name="workout_name" value="Kettlebell Power">
                            <div class="button-container" style="display: flex; justify-content: right;">
                            <input type="date" name="booking_date" required>
                                <button type="submit" class="primary-btn pricing-btn" style="padding: 5px 10px; font-size: 12px;">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Class Item 4 -->
            <div class="col-lg-6 col-md-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="img/classes/class-4.jpg" alt="Dumbbell Exercise Class">
                    </div>
                    <div class="ci-text">
                        <span>STRENGTH</span>
                        <h5>Dumbbell Exercise</h5>
                        <form action="workout-plan.php" method="POST">
                            <input type="hidden" name="workout_name" value="Dumbbell Exercise">
                            <div class="button-container" style="display: flex; justify-content: right;">
                            <input type="date" name="booking_date" required>
                                <button type="submit" class="primary-btn pricing-btn" style="padding: 5px 10px; font-size: 12px;">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Class Item 5 -->
            <div class="col-lg-6">
                <div class="class-item">
                    <div class="ci-pic">
                        <img src="img/classes/class-5.jpg" alt="Yoga Class">
                    </div>
                    <div class="ci-text">
                        <span>Flexibility and Balance</span>
                        <h5>Yoga</h5>
                        <form action="workout-plan.php" method="POST">
                            <input type="hidden" name="workout_name" value="Yoga">
                            <div class="button-container" style="display: flex; justify-content: right;">
                            <input type="date" name="booking_date" required>
                                <button type="submit" class="primary-btn pricing-btn" style="padding: 5px 10px; font-size: 12px;">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Classes Section End -->






    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>Exercise until the body obeys.</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
            <div class="row justify-content-center" id="pricing">
                <div class="col-lg-4 col-md-8">
                    <form action="update-membership.php" method="POST">
                        <div class="ps-item">
                            <h3>BASIC</h3>
                            <div class="pi-price">
                                <h2>RM 60.0</h2>
                                <span>1 Month</span>
                            </div>
                            <ul>
                                <li>✔Access to gym anytime</li>
                                <li>✔Access website features</li>
                                <li>✘10% discount on any purchase</li>
                                <li>✘First priority to any personal trainer</li>
                            </ul>
                            <input type="hidden" name="plan" value="Basic Plan">
                            <input type="hidden" name="price" value="60.0">
                            <div class="button-container" style="display: flex; justify-content: center;">
                                <button type="submit" class="primary-btn pricing-btn">Enroll Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-8">
                    <form action="update-membership.php" method="POST">
                        <div class="ps-item">
                            <h3>PRO</h3>
                            <div class="pi-price">
                                <h2>RM 75.0</h2>
                                <span>3 Months</span>
                            </div>
                            <ul>
                                <li>✔ Access to gym anytime</li>
                                <li>✔ Access to all website features</li>
                                <li>✔ 10% discount on any purchase products</li>
                                <li>✘ First priority to any personal trainer</li>
                            </ul>
                            <input type="hidden" name="plan" value="Pro Plan">
                            <input type="hidden" name="price" value="75.0">
                            <div class="button-container" style="display: flex; justify-content: center;">
                                <button type="submit" class="primary-btn pricing-btn">Enroll Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-8">
                    <form action="update-membership.php" method="POST">
                        <div class="ps-item">
                            <h3>PREMIUM</h3>
                            <div class="pi-price">
                                <h2>RM 90.00</h2>
                                <span>6 Month</span>
                            </div>
                            <ul>
                                <li>✔ Access to gym anytime</li>
                                <li>✔ Access to all website features</li>
                                <li>✔ 15% discount on any purchase products</li>
                                <li>✔ First priority to any personal trainer</li>
                            </ul>
                            <input type="hidden" name="plan" value="Premium Plan">
                            <input type="hidden" name="price" value="90.0">
                            <div class="button-container" style="display: flex; justify-content: center;">
                                <button type="submit" class="primary-btn pricing-btn">Enroll Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section End -->
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Product Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Product</span>
                            <h2>BUY WITH US</h2> 
                        </div>                        
                        <a href="product-page.php" class="primary-btn btn-normal appoinment-btn">MORE DETAILS</a>                         
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/product/creatine.jpg">
                            <div class="ts_text">
                                <h4>Creatine</h4>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/product/protein.jpg">
                            <div class="ts_text">
                                <h4>Protein Powder</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/product/energyDrink.png" >
                            <div class="ts_text">
                                <h4>Energy Drink</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/product/belt.jpg">
                            <div class="ts_text">
                                <h4>Gym Belt</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/product/shaker.jpg">
                            <div class="ts_text">
                                <h4>Shaker</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/product/straps.jpg">
                            <div class="ts_text">
                                <h4>Straps</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>                            
                        </div>
                        <a href="#" class="primary-btn btn-normal appoinment-btn">MORE DETAILS </a>   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
                            <div class="ts_text">
                                <h4>Jane Smith</h4>
                                <span>Yoga Instructor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
                            <div class="ts_text">
                                <h4>Ethan Miller</h4>
                                <span>Strength & Conditioning Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
                            <div class="ts_text">
                                <h4>John Doe</h4>
                                <span>Personal Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
                            <div class="ts_text">
                                <h4>Jordan Hayes</h4>
                                <span>Functional Movement & Flexibility Expert</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-5.jpg">
                            <div class="ts_text">
                                <h4>Emily Davis</h4>
                                <span>Cardio Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-6.jpg">
                            <div class="ts_text">
                                <h4>Samantha Blake</h4>
                                <span>Certified Nutritionist & Weight Loss Coach</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>UTM KUALA LUMPUR<br/> 54100, Wilayah Persekutuan Kuala Lumpur</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>011-5163 5587</li>
                            <li>010-775 2389</li>
                            <li>+(123) 456-7890</li>
                            <li>+(123) 668-886</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>broncogymutmkl@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Bronco Gym Fitness is committed to helping you achieve your fitness goals. 
                            Join us today for a healthier lifestyle.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="blog-details.html">Blog</a></li>
                            <li><a href="class-details.html">Classes</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Subscribe</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            © 2024 Bronco Gym Fitness. All rights reserved. <br>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>