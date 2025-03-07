<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Custom WordPress development,WooCommerce development,Web development services,Responsive website design" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Syed Salman Nadeem | UI/UX Designer and Web Developer | Web Design, Development, and User Experience Expert</title>
     <meta name="description" content="Syed Salman Nadeem is a UI/UX Designer and Web Developer with expertise in web design, development, and user experience. With skills in HTML, CSS, JavaScript, and design thinking, Salman creates visually stunning and user-friendly websites and web applications. Contact him today to bring your digital vision to life.">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    
    <style>
        #snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
.callNow{
    padding: 12px 40px;
    border: 1px solid #111;
    border-radius: 30px;
    background: #111;
    color: #fff;
    font-size: 13px;
    letter-spacing: 1px;
    -webkit-transition: all .5s;
    transition: all .5s;
}
.callNow:hover{
    background: #fff;
    color: #111;
}
    </style>
    
  <!-- Google tag (gtag.js) -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-9WEKVPYM8P"></script>-->
<script>
//   window.dataLayer = window.dataLayer || [];
//   function gtag(){dataLayer.push(arguments);}
//   gtag('js', new Date());

//   gtag('config', 'G-9WEKVPYM8P');
</script>  

</head>

<body>

    <!-- =====================================
    	==== Start Loading -->

    <!--<div class="loading">-->
    <!--    <div class="load-circle">-->
    <!--    </div>-->
    <!--</div>-->

    <!-- End Loading ====
    	======================================= -->


    <!-- =====================================
    	==== Start Navbar -->
    	

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <!-- <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo">
            </a> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/menu-icon.png" alt="">
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="4">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="6">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <?php
            if(isset($_GET['success'])){
        ?>
            <div id="snackbar">Email Sent Successfully.</div>
            <script>
                var x = document.getElementById("snackbar");
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            </script>
        <?php
            }
        ?>
        
        <?php
            if(isset($_GET['failed'])){
        ?>
            <div id="snackbar">Email Not Sent Successfully.</div>
            <script>
                var x = document.getElementById("snackbar");
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
            </script>
        <?php
            }
        ?>

    <!-- End Navbar ====
    	======================================= -->


    <!-- =====================================
    	==== Start Header -->

    <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="img/bg-hero.jpg"
        data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 text-center caption mt-50">
                    <h6>Welcome</h6>
                    <h1 class="cd-headline clip">
                        <span class="blc">I Am </span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Salman Nadeem</b>
                            <b>a Web Developer</b>
                            <b>a Web Designer</b>
                        </span>
                    </h1>
                    <p>As a UI/UX Designer and Web Developer, I am passionate about creating innovative and functional digital experiences that make a positive impact on people's lives.</p>
                    <div class="social mt-15">
                        <a href="https://facebook.com/syedsalmannadeem" target="_blank" class="icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://pk.linkedin.com/in/syedsalmannadeem" target="_blank" class="icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/syedsalmannadeem/" target="_blank" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@syedsalmannadeem" target="_blank" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    <a href="tel:+923350208441" class="butn mt-30">Contact Me</a>
                </div>
            </div>
        </div>
    </header>

    <!-- End Header ====
    	======================================= -->



    <!-- =====================================
        ==== Start Hero -->

    <section class="hero section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <div class="hero-img mb-md50">
                        <div class="img">
                            <img src="img/salman.jpeg" style="transform: scaleX(-1);" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="content">
                        <h3>About Me</h3>
                        <span>I am UI/UX Designer And Web Developer</span>
                        <p class="mb-10">
                            As a UI/UX Designer and Web Developer, I am passionate about creating digital experiences that are visually appealing, user-friendly, and functional. With my technical skills in web development and my design knowledge in UI/UX, I have the ability to bring creative ideas to life.
                        </p>
                        <p>
                            My job involves creating wireframes, designing user interfaces, and coding websites and web applications. I strive to create intuitive and engaging digital experiences that are accessible to all users. I am proficient in HTML, CSS3, JavaScript, Bootstrap, Tailwind, Php, Wordpress, Shopify, Angular, Typescript and other web development languages, and I stay up to date with the latest trends and technologies in the industry.
                        </p>

                        <div class="info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item mb-sm30 mb-15">
                                        <h6><span class="icon ti-user"></span> Full Name : </h6>
                                        <p>Syed Salman Nadeem</p>
                                    </div>
                                    <div class="item mb-sm30">
                                        <h6><span class="icon ti-email"></span> Email : </h6>
                                        <p>salmannadeem100@outlook.com</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item mb-sm30 mb-15">
                                        <h6><span class="icon ti-location-pin"></span> Address : </h6>
                                        <p>Karachi, Pakistan</p>
                                    </div>
                                    <div class="item">
                                        <h6><span class="icon ti-crown"></span> Date Of Birth : </h6>
                                        <p>7 December 1996</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="tel:+923350208441" class="butn mt-30">Contact Me</a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Hero ====
        ======================================= -->


    <!-- =====================================
        ==== Start Skills -->

    <div class="section-padding bg-gray">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="skills">
                        <div class="skill-item">
                            <h5>Web Design</h5>
                            <div class="skill-progress">
                                <div class="progres" data-value="90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h5>Branding</h5>
                            <div class="skill-progress">
                                <div class="progres" data-value="80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skills">
                        <div class="skill-item">
                            <h5>Development</h5>
                            <div class="skill-progress">
                                <div class="progres" data-value="95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h5>Marketing</h5>
                            <div class="skill-progress">
                                <div class="progres" data-value="82%"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Skills ====
        ======================================= -->


    <!-- =====================================
        ==== Start Services -->

    <section class="services section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-lg-12">
                    <h3>Services</h3>
                    <span><i></i><i></i><i></i></span>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-30">
                        <span class="icon ti-package"></span>
                        <h6>Creative Design</h6>
                        <p>
                            Our creative design showcases unique and innovative designs that are visually stunning and user-friendly.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-30">
                        <span class="icon ti-ruler-alt-2"></span>
                        <h6>User Experience</h6>
                        <p>
                            Our user experience is designed to create intuitive and engaging digital experiences that are accessible to all users.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-30">
                        <span class="icon ti-dashboard"></span>
                        <h6>Customizability</h6>
                        <p>
                            Our customizability offers flexible design options and features to allow users to personalize their digital experiences.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-md30">
                        <span class="icon ti-gallery"></span>
                        <h6>Retina Ready</h6>
                        <p>
                            Our retina-ready provides high-resolution graphics and images that are optimized for display on high-density screens.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item mb-sm30">
                        <span class="icon ti-tablet"></span>
                        <h6>Fully Responsive</h6>
                        <p>
                            Our fully responsive is designed to adapt to various screen sizes, ensuring optimal viewing experiences on all devices.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <span class="icon ti-comments-smiley"></span>
                        <h6>Custom Support</h6>
                        <p>
                            Our custom support provides personalized assistance and guidance to users, ensuring their needs are met and issues are resolved.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-12 text-center">
                    <a href="tel:+923350208441" class="callNow mt-30">Contact Me</a>
                </div>

            </div>
        </div>
    </section>

    <!-- End Services ====
        ======================================= -->


    <!-- =====================================
        ==== Start Numbers -->

    <div class="numbers bg-img bg-fixed" data-overlay-dark="5" data-background="img/code-with-salman.jpg">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="item text-center mb-md50">
                        <span class="icon ti-heart"></span>
                        <h4 class="count">127</h4>
                        <h6>Happy Clients</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="item text-center mb-md50">
                        <span class="icon ti-layers-alt"></span>
                        <h4 class="count">143</h4>
                        <h6>Projects Compleated</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="item text-center mb-sm50">
                        <span class="icon ti-import"></span>
                        <h4 class="count">10261</h4>
                        <h6>Files Downloaded</h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="item text-center">
                        <span class="icon ti-shield"></span>
                        <h4 class="count">65023</h4>
                        <h6>Lines Of Code</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Numbers ====
        ======================================= -->


    <!-- =====================================
        ==== Start Works -->

    <section class="works section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-lg-12">
                    <h3>Portfolio</h3>
                    <span><i></i><i></i><i></i></span>
                </div>

                <!-- filter links -->
                <!-- <div class="filtering text-center mb-20 col-sm-12">
                    <div class="filter">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.brand'>Brand</span>
                        <span data-filter='.web'>Design</span>
                        <span data-filter='.graphic'>Graphic</span>
                    </div>
                </div> -->

                <style>
                    .gallery .item-img{
                        min-height: 300px;
                        max-height: 300px;
                        object-fit: cover;
                    }
                </style>
                <!-- gallery -->
                <div class="gallery text-center full-width">
                    
                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/9.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/9.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/10.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/10.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/11.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/11.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/12.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/12.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/1.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/1.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/2.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/2.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/3.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/3.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/4.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/4.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/5.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width vertical-center">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/5.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/6.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/6.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/7.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/7.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/8.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/8.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/13.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/13.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/14.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/14.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/15.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/15.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/16.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/16.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/17.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/17.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/18.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/18.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/19.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/19.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="col-lg-3 col-md-6 items web">
                        <div class="item-img">
                            <img src="img/portfolio/17.png" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info full-width">
                                    <h6>Crearive Design</h6>
                                    <a href="img/portfolio/17.png" class="popimg">
                                        <span class="icon ti-zoom-in"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon ti-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    

                    <div class="clearfix"></div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                        <a href="https://wa.me/%2B923350208441?text=Hello%20Syed%20Salman%20Nadeem.%20Let's%20Chat!" class="callNow mt-30">WhatsApp Now</a>
                    </div>
            </div>
        </div>
    </section>

    <!-- End Works ====
        ======================================= -->


    <!-- =====================================
        ==== Start Testimonials -->

    <section class="testimonials carousel-single section-padding bg-img" data-scroll-index="4" data-overlay-dark="5"
        data-background="img/code-with-salman.jpg">
        <div class="container">
            <div class="row">

                <div class="text-center col-lg-12">
                    <span class="icon ti-quote-left"></span>
                </div>

                <div class="owl-carousel owl-theme offset-lg-1 col-lg-10 text-center">
                    <div class="item">
                        <p>
                            "I had the pleasure of working with Salman Nadeem on a web development project and was thoroughly impressed with their skills as both a web developer and UI/UX designer. They were able to take our vision and turn it into a visually stunning and user-friendly website. Their attention to detail and commitment to creating a seamless user experience was truly impressive."
                        </p>
                        <!-- <h6>Alex Smith</h6>
                        <h5>Envato customer</h5> -->
                    </div>
                    <div class="item">
                        <p>
                            "Salman Nadeem is an exceptional web developer and UI/UX designer who brings both technical expertise and design skills to their work. They were able to create a website that not only looked great but also functioned flawlessly. They were able to anticipate user needs and create a website that was easy to navigate, resulting in a positive user experience."
                        </p>
                        <!-- <h6>Alex Smith</h6>
                        <h5>Envato customer</h5> -->
                    </div>
                    <div class="item">
                        <p>
                            "I had the pleasure of working with Salman Nadeem on a website redesign project and was blown away by their creativity and technical skills. They were able to create a website that not only looked beautiful but was also optimized for performance and user experience. Their ability to balance design aesthetics with technical requirements is truly impressive."
                        </p>
                        <!-- <h6>Alex Smith</h6>
                        <h5>Envato customer</h5> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Testimonials ====
        ======================================= -->


    <!-- =====================================
        ==== Start Blog -->

    <section class="blog section-padding bg-gray d-none" data-scroll-index="5">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-lg-12">
                    <h3>Latest News</h3>
                    <span><i></i><i></i><i></i></span>
                </div>

                <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0">WordPress</a>
                            </div>
                            <h6><a href="#0">Master These Awesome New Skills in March 2018</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0">WordPress</a>
                            </div>
                            <h6><a href="#0">Best Design Items to Appeal to the Millennial Generation</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0">WordPress</a>
                            </div>
                            <h6><a href="#0">The 20 Best Lightroom Presets You Need to Know About</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Blog ====
        ======================================= -->


    <!-- =====================================
        ==== Start Contact -->

    <section class="contact section-padding" data-scroll-index="6">
        <div class="container">
            <div class="row">

                <div class="section-head text-center col-lg-12">
                    <h3>Get In Touch</h3>
                    <span><i></i><i></i><i></i></span>
                </div>

                <div class="offset-lg-1 col-lg-10">
                    <form class="form" id="contact-form" method="post" action="send.php">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_number" type="number" name="number" placeholder="Phone Number / WhatsApp">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                            required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit"><span>Send Message</span></button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- End Contact ====
        ======================================= -->


    <!-- =====================================
        ==== Start Footer -->

    <footer class="bg-img bg-fixed" data-overlay-dark="8" data-background="img/bg-hero.jpg">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon ti-mobile"></span>
                        <h6>Phone</h6>
                        <p><a href="tel:+923350208441">+92 335 020 8441</a></p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon ti-map"></span>
                        <h6>Address</h6>
                        <p>Karachi, Pakistan</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon ti-email"></span>
                        <h6>Email</h6>
                        <p><a href="mailto:salmannadeem100@outlook.com">salmannadeem100@outlook.com</a></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="sub-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="copy text-center">
                            <div class="social">
                                <a href="https://facebook.com/syedsalmannadeem" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://pk.linkedin.com/in/syedsalmannadeem" class="icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.instagram.com/syedsalmannadeem/" class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/@syedsalmannadeem" class="icon">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                
                            </div>
                            <p>&copy; 2024 SYED SALMAN NADEEM. All Rights Reserved.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer ====
        ======================================= -->





    <!-- jQuery -->
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>

    <!-- popper.min -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- animated.headline -->
    <script src="js/animated.headline.js"></script>

    <!-- scrollIt -->
    <script src="js/scrollIt.min.js"></script>

    <!-- jquery.waypoints.min -->
    <script src="js/jquery.waypoints.min.js"></script>

    <!-- jquery.counterup.min -->
    <script src="js/jquery.counterup.min.js"></script>

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- jquery.magnific-popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- stellar js -->
    <script src="js/jquery.stellar.min.js"></script>

    <!-- isotope.pkgd.min js -->
    <script src="js/isotope.pkgd.min.js"></script>

    <!-- validator js -->
    <script src="js/validator.js"></script>

    <!-- custom scripts -->
    <script src="js/scripts.js"></script>

</body>

</html>