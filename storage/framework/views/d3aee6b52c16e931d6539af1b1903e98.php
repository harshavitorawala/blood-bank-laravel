<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/animate.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" />

    <title>Blood Bank</title>
</head>

<body>

    <!-- Navbar 1 Start -->
    <section id="Nav1">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <i class="fas fa-phone-volume" style="border-right: 1px solid gray;"> +91 9312633729
                                &nbsp; &nbsp; </i>
                        </li>
                        <li class="nav-item">
                            <i class="far fa-envelope" style="padding-left: 15px;"> InfoBloodBank@gmail.com</i>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0 navbar-brand mx-auto">
                    <a href=""><i
                            class="fab fa-instagram github">&nbsp;&nbsp;</i></a>
                    <a href=""><i
                            class="fab fa-facebook-f facebook">&nbsp;&nbsp;</i></a>
                    <a href=""><i class="fab fa-twitter twitter">&nbsp;&nbsp;</i></a>
                    <a href=""><i
                            class="fab fa-whatsapp whats">&nbsp;&nbsp;</i></a>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item" style="padding-left: 35px;">
                            <a class="nav-link selected" >EN &nbsp;</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar 1 End -->

    <!-- Navbar 2 Start -->
    <section id="Nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="<?php echo e(asset('imgs/logo.png')); ?>" width="18%"></img>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link selected" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Received Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Your Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Sent requests</a>
                    </li>
                </ul>
                
                <button class="btn signup" onclick="window.location='<?php echo e(url('/account/register')); ?>'">New Account</button>
                <button class="btn login" onclick="window.location='<?php echo e(url('/account/login')); ?>'">Login</button>
                
            </div>
        </nav>
    </section>
    <!-- Navbar 2 End -->

    <!-- Header Start -->
    <section id="header">
        <div class="container">
            <!-- <h1>We are seeking for a better community health.</h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat inventore nemo repudiandae
                ipsum quos.</h4>
            <button class="btn more" onclick= "window.location.href = 'About-us.html';">More</button> -->
        </div>
    </section>
    <!-- Header End -->

    <!-- Sub Header Start -->
    <section id="sub-header">
        <div class="container">
            <h3>A SINGLE PINT CAN SAVE THREE LIVES, A SINGLE GESTURE CAN CREATE A MILLION SMILES.</h3>
        </div>
    </section>
    <!-- Sub Header End -->

    <!-- Articles Start -->
    <section id="articles">
        <div class="container">
            <h2 style="display: inline-block;">Articles</h2>
            <div class="swiper-container">
            <div class="button-area" style="display: inline-block; margin-left: 850px;">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </button>
            </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="<?php echo e(asset('imgs/p3.jpg')); ?>" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Blood Types</h4>
                                <p class="card-text">Blood types such as A, B, AB, and O, along with Rh factors 
                                    (positive or negative), determine compatibility for transfusions and are 
                                    crucial in medical emergencies and transfusion procedures.</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = '';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="<?php echo e(asset('imgs/p4.jpg')); ?>" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Donations Benefits</h4>
                                <p class="card-text">Blood donation benefits include saving lives in emergencies, 
                                    supporting surgeries and cancer treatments, reducing the risk of heart 
                                    disease, and providing a sense of fulfillment by helping those in need.
                                </p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = '';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card-img-top" style="position: relative;">
                                <img src="<?php echo e(asset('imgs/p1.jpg')); ?>" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Disease Protection</h4>
                                <p class="card-text">Blood donation may reduce the risk of certain diseases by 
                                    lowering iron levels in donors, potentially decreasing the risk of heart 
                                    disease, stroke, and some cancers, contributing 
                                    to overall health benefits.</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = '';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="<?php echo e(asset('imgs/p5.jpg')); ?>" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">How To Donate?</h4>
                                <p class="card-text">To donate blood, find a local blood drive or donation 
                                    center, complete a health screening, donate blood, and rest afterward. 
                                    Hydrate, eat well, and follow post-donation guidelines 
                                    for optimal recovery.</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = '';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Articles End -->

    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Donations</h2>
            <hr class="line">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <select name="Type" id="">
                        <option value="" disabled selected>Select Blood Type</option>
                        <option value="AB+">AB+</option>
                        <option value="O">O</option>
                        <option value="B">B</option>
                    </select>
                </div>
                <div class="col-lg-5">
                    <select name="City" id="">
                        <option value="" disabled selected>Select City</option>
                        <option value="Alexandria">Alexandria</option>
                        <option value="Cairo">Cairo</option>
                        <option value="Giza">Giza</option>
                    </select>
                </div>
                <div class="search">
                    <button><i class="col-lg-2 fas fa-search"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>AB+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: Ahmed Mohamed</h4>
                            <h4>Hospital: Andalusia Hospitals</h4>
                            <h4>City: Cairo</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = '';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>AB+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: Ahmed Mohamed</h4>
                            <h4>Hospital: Andalusia Hospitals</h4>
                            <h4>City: Cairo</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = 'donator.html';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>AB+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: Ahmed Mohamed</h4>
                            <h4>Hospital: Andalusia Hospitals</h4>
                            <h4>City: Cairo</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = 'donator.html';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-req">
                <button onclick= "window.location.href = '';">More</button>
            </div>
        </div>
    </section>
    <!-- Requests End -->

    <!-- Call us Start -->
    <section id="call-us">
        <div class="layer">
            <div class="container">
                <h1>Call Us</h1>
                <h4>You can call us for your inquiries about any information.</h4>
                <div class="whats">
                    <img src="<?php echo e(asset('imgs/whats.png')); ?>" alt="">
                    <h3>+91 9312633729</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Call us End -->

    <!-- App Start -->
    <section id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h1>Blood Bank Application</h1>
                        <h3>A comprehensive blood bank app for managing donations, matching donors 
                            with recipients efficiently.</h3>
                        <h4>Available On</h4>
                        <img src="<?php echo e(asset('imgs/ios.png')); ?>" alt="">
                        <img src="<?php echo e(asset('imgs/google.png')); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="app-screen" src="<?php echo e(asset('imgs/App.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- App End -->

    <!-- Footer Start -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="foot-info">
                        <img src="<?php echo e(asset('imgs/logo.png')); ?>" alt="">
                        <p>Donate blood today—save lives, spread hope, and be a 
                            hero in someone's story. Your single act of kindness can 
                            make an extraordinary difference. Give the gift of life.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="menu">
                        <a href="index.html">
                            <li>Home</li>
                        </a>
                        <a href="About-us.html">
                            <li>About Us</li>
                        </a>
                        <a href="#articles">
                            <li>Articles</li>
                        </a>
                        <a href="requests.html">
                            <li>Donations</li>
                        </a>
                        <a href="who-we-are.html">
                            <li>Who We Are?</li>
                        </a>
                        <a href="contact-us.html">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="options">
                        <li>
                            <h5>Available On</h5>
                        </li>
                        <li><img src="<?php echo e(asset('imgs/ios1.png')); ?>" alt=""></li>
                        <li><img src="<?php echo e(asset('imgs/google1.png')); ?>" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/swiper.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\blood-donation\resources\views/home/index.blade.php ENDPATH**/ ?>