<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Max Lambda - Actuators</title>
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
                    <h1>ACTUATORS</h1>
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
                        <img src="images/actuators.png" alt="">
                    </div>                        
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-content-wrap">
                    <div class="section-title">
                        <h2>ACTUATORS</h2>
                    </div>
                    <p>Actuators convert energy into mechanical motion, enabling precise control in various industrial processes.</p>
                    <ul class="about-key mt-30">
                        <li><i class="las la-check-square"></i><p>Linear Actuators</p></li>
                        <li><i class="las la-check-square"></i><p>Rotary Actuators</p></li>
                        <li><i class="las la-check-square"></i><p>Hydraulic Actuators</p></li>
                        <li><i class="las la-check-square"></i><p>Electric Actuators</p></li>
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
                    <div class="single-client"><a href="#"><img src="images/morin.png" alt="morin"></a></div>
                    <div class="single-client"><a href="#"><img src="images/schischek.png" alt="schischek"></a></div>
                    <div class="single-client"><a href="#"><img src="images/biffi.png" alt="biffi"></a></div>
                    <div class="single-client"><a href="#"><img src="images/koso.png" alt="koso"></a></div>
                    <div class="single-client"><a href="#"><img src="images/rotork.png" alt="rotork"></a></div>
                    <div class="single-client"><a href="#"><img src="images/velan.png" alt="velan"></a></div>
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
</body>
</html>