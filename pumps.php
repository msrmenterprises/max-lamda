<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Max Lambda - Pumps</title>
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="css/line-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css?v=3" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- jquery -->
    <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>

<!-- Header Area -->
<div class="header-area absolute-header">
    <div id="header-sticky">
        <div class="navigation">
            <div class="container">
                <div class="header-inner-box">
                    <div class="logo"><a class="navbar-brand" href="index.html">Max Lambda</a></div>
                    <div class="main-menu d-none d-lg-block">
                        <?php include('utils/menu.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Area -->
<div class="breadcrumb-area bread-bg">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="breadcrumb-title">
                    <h1>PUMPS</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<div id="about-2" class="about-page about-section section-padding pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about-img-wrap">
                    <div class="image-one">
                        <img src="images/pumps.jpg" alt="">
                    </div>                        
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-content-wrap">
                    <div class="section-title">
                        <h2>PUMPS</h2>
                    </div>
                    <p>Pumps are essential for moving liquids and gases in various industrial processes, ensuring proper flow and pressure control.</p>
                    <ul class="about-key mt-30">
                        <li><i class="las la-check-square"></i><p>Centrifugal</p></li>
                        <li><i class="las la-check-square"></i><p>Vacuum</p></li>
                        <li><i class="las la-check-square"></i><p>Metering</p></li>
                        <li><i class="las la-check-square"></i><p>Diaphragm</p></li>
                        <li><i class="las la-check-square"></i><p>Feed</p></li>
                        <li><i class="las la-check-square"></i><p>Gear</p></li>
                        <li><i class="las la-check-square"></i><p>Triplex</p></li>
                        <li><i class="las la-check-square"></i><p>Hydraulic</p></li>
                        <li><i class="las la-check-square"></i><p><?php include('utils/includ.php') ?>s</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients Section -->
<div class="client-section section-padding pt-0">
    <div class="container">
        <div class="row align-items-center mt-120">
            <div class="col-12">
                <div class="client-wrap owl-carousel">
                    <div class="single-client"><a href="#"><img src="images/shinko.png" alt="Shinko"></a></div>
                    <div class="single-client"><a href="#"><img src="images/weg.png" alt="WEG"></a></div>
                    <div class="single-client"><a href="#"><img src="images/milton.png" alt="Milton Roy"></a></div>
                    <div class="single-client"><a href="#"><img src="images/wilden.png" alt="Wilden Pumps"></a></div>
                    <div class="single-client"><a href="#"><img src="images/busch.png" alt="Busch Vacuum"></a></div>
                    <div class="single-client"><a href="#"><img src="images/netzsch.png" alt="NETZSCH Pumps"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="cta-section section-padding pt-50 pb-50 theme-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="cta-title">
                    <div class="section-title">
                        <h2 class="text-white">Providing Solutions .</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 text-md-end">
                <div class="cta-btn">
                    <a href="contact.html" class="white-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Area -->
<footer class="footer-area">
       <?php include('utils/footer.php') ?>
    </footer>

<!-- Footer Bottom Area -->
<div class="footer-bottom">
    <div class="container">
        <div class="row justify-content-center align-items-center justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="copyright-line">© 2024 Max Lambda. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts for Sticky Header and Carousel -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script>
    // Initialize Owl Carousel for the client section
    $(document).ready(function() {
        $('.client-wrap').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            responsive: {
                0: { items: 1 },
                600: { items: 3 },
                1000: { items: 5 }
            }
        });
    });
</script>
