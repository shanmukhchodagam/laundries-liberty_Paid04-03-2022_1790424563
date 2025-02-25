<?php
// Include the database connection file
include 'connect.php';

// Now you can use the $conn variable to interact with the database


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        $success_message = "Thank you for contacting us! We'll get back to you soon.";
    } else {
        $error_message = "There was an error submitting your form. Please try again.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundries - Laundry Category Bootstrap Responsive Website Template - Contact Us </title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    <span>L</span>aundries<i class="fas fa-hands-wash"></i>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Blog <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="blog.html">Blog with right sidebar</a></li>
                                <li><a class="dropdown-item" href="blog2.html">Blog with left sidebar</a></li>
                                <li><a class="dropdown-item" href="blog3.html">Blog without sidebar</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Blog Single with right sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-single2.html">Blog Single with left sidebar</a>
                                </li>
                                <li><a class="dropdown-item" href="blog-single3.html">Blog Single without sidebar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pages <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="error.html">404 Page</a></li>
                                <li><a class="dropdown-item" href="email-template.html">Email Template</a></li>
                                <li><a class="dropdown-item" href="shortcodes.html">Shortcodes</a></li>
                                <li><a class="dropdown-item" href="landing-single.html">Landing Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form action="error.html" method="GET" class="d-flex search-header ms-lg-2">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-5 pb-sm-4 pb-2">
                <h4 class="inner-text-title font-weight-bold pt-5">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-w3l-contacts-12 py-5">
        <div class="contact-top py-lg-5 py-md-4 py-2">
            <div class="container">
                <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                    <h5 class="sub-title">Get In Touch</h5>
                    <h3 class="title-style">Contact Us</h3>
                </div>
                <div class="row">
                    <div class="col-md-8 contacts12-main">
                        <!-- Contact Form Section -->
    <section class="w3l-w3l-contacts-12 py-5">
        <div class="container">
            <h3 class="title-style">Contact Us</h3>

            <!-- Display success or error message -->
            <?php if (isset($success_message)): ?>
                <div class="alert alert-success"><?= $success_message; ?></div>
            <?php elseif (isset($error_message)): ?>
                <div class="alert alert-danger"><?= $error_message; ?></div>
            <?php endif; ?>

            <form action="contact.php" method="POST" class="main-input">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <textarea name="message" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-style">Send Now</button>
            </form>
        </div>
    </section>
                    </div>
                    <div class="col-md-4 ps-lg-5 mt-md-0 mt-4">
                        <h3 class="title-style mb-4">Contact Info</h3>
                        <div class="contact">
                            <a href="mailto:Bosmartwash@gmail.com">
                                <p class="contact-text-sub">Bosmartwash@gmail.com</p>
                            </a>
                            <a href="tel:+91 7997134445">
                                <p class="contact-text-sub">7997134445</p>
                            </a>
                            <p class="contact-text-sub"> Located beside Oils N Oils, Chaitanya College Road, Chinna Amiram, Bhimavaram, West Godavari,534204. <br> Andhra Pradesh</p>
                            <div class="buttons-teams">
                                <a href="#team"><span class="fab fa-facebook-square" aria-hidden="true"></span></a>
                                <a href="#team"><span class="fab fa-twitter-square" aria-hidden="true"></span></a>
                                <a href="#team"><span class="fab fa-google-plus-square" aria-hidden="true"></span></a>
                                <a href="https://www.instagram.com/bo_smartwash/" target="_blank" style="color: #E1306C;">
                                 <span class="fab fa-instagram" aria-hidden="true"></span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact map -->
    <section class="w3l-contacts-1">
        <div class="contacts">
            <div class="contacts-content">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47340002653!2d-0.24168120642536509!3d51.52855824164916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1562822037850!5m2!1sen!2sin"
                    width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
                <address>
                    <h4>London</h4>
                    <a href="mailto:hello@w3layouts.com">Email: hello@w3layouts.com</a>
                    <a href="tel:8-800-999-800">Tel: 8-800-999-800</a>
                </address>
            </div>
        </div>
    </section>
    <!-- //contact -->

    <!-- footer -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container pt-md-5 pt-4">
                <div class="w3l-footer-text-style">
                    <div class="footer-list-cont d-flex align-items-center justify-content-between mb-5">
                        <h6 class="foot-sub-title">Contact Us</h6>
                        <div class="main-social-footer-29">
                            <a href="#facebook" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#twitter" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#instagram" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#linkedin" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row footer-top-29 pt-lg-5 pt-sm-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="address-grid">
                            <h5>10001 Alleghany st, 5th Avenue, 235 Terry, <br> London.</h5>
                            <h5 class="mt-sm-5 mt-4">Everyday: <span> 7 AM - 8 PM</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="address-grid">
                            <h5 class="top-bold">Phone</h5>
                            <h5 class="phone-number-text mt-2"><a href="tel:+1(21) 112 7368">+1(21) 112 7368</a></h5>
                        </div>
                        <div class="address-grid mt-sm-5 mt-4">
                            <h5 class="top-bold">E-mail</h5>
                            <h5 class="email-cont-text mt-1"> <a href="mailto:photogenic@mail.com"
                                    class="mail">photogenic@mail.com</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu ps-lg-0 mt-lg-0 mt-sm-5 mt-4">
                        <div class="address-grid">
                            <h5 class="mb-sm-4 mb-3 pb-lg-2 top-bold">Support Links</h5>
                            <ul>
                                <li><a href="#privacy">Privacy Policy</a></li>
                                <li><a href="#terms"> Terms of Service</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="#support"> Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="address-grid col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main">
                        <h5 class="top-bold">Subscribe Here</h5>
                        <form action="#" class="subscribe d-flex mt-sm-4 mt-3 pt-lg-2 mb-4" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
                <!-- copyright -->
                <div class="w3l-copyright text-center mt-lg-5 mt-4 pt-sm-4 pt-3">
                    <p class="copy-footer-29">© 2022 Laundries. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>