<?php
// Include the database connection file
include 'connect.php';

// Now you can use the $conn variable to interact with the database


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
   
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO message (email, message) VALUES ('$email', '$message')";
    
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
    <title>Laundries - Laundry Category Bootstrap Responsive Website Template - Home </title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
    <style>
        .subscribe {
    width: 100%; /* Ensure form takes full width of the container */
    max-width: 600px; /* Add a max width for better readability */
    margin: 0 auto; /* Center align the form */
}

.form-label {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
}

.form-input, .form-textarea {
    width: 100%; /* Full width */
    padding: 12px 15px; /* Padding for a better user experience */
    border: 1px solid #ccc; /* Border styling */
    border-radius: 5px; /* Rounded corners */
    font-size: 1rem; /* Font size */
    color: #333; /* Text color */
    box-sizing: border-box; /* Include padding in width */
}

.form-textarea {
    height: 150px; /* Increase height for larger message box */
    resize: vertical; /* Allow users to resize only vertically */
}

.form-input:focus, .form-textarea:focus {
    border-color: #2a52be; /* Highlight border on focus */
    outline: none; /* Remove default outline */
    box-shadow: 0 0 5px rgba(42, 82, 190, 0.5); /* Add subtle glow */
}

.form-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #2a52be; /* Button color */
    color: #fff; /* Text color */
    padding: 10px 20px; /* Padding */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    font-size: 1rem; /* Font size */
    cursor: pointer; /* Pointer cursor */
    transition: background-color 0.3s ease;
}

.form-button:hover {
    background-color: #1c3a8d; /* Darker shade on hover */
}

.fa-paper-plane {
    margin-right: 8px; /* Space between icon and text */
}

    </style>
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
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
                            <a class="nav-link" href="contact.php">Contact</a>
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

    <!-- banner section -->
    <section class="banner-19">
        <div class="banner-layer">
            <video autoplay muted loop id="myVideo">
                <source src="assets/videos/video.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <h4>Laundry & Dry Cleaning Services</h4>
                        <p class="mt-3">Irferendis repudandae fugia rchitecto beatae rederit svitae recusa ndae
                            debitifacere uiimi placeat maxienui </p>
                        <a href="about.html" class="btn btn-style mt-md-5 mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- banner bottom section -->
    <section class="w3l-bottom-grids-6 py-5">
        <div class="container pt-lg-5 pt-md-4 pt-2">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="area-box">
                        <i class="fas fa-stopwatch-20"></i>
                        <h4><a href="about.html" class="title-head">Save Time and Money</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed et dolor amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-comments-dollar"></i>
                        <h4><a href="about.html" class="title-head">Pay Online in Seconds</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed dolor et amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-thumbs-up"></i>
                        <h4><a href="about.html" class="title-head">Satisfaction Guarantee</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed dolor et amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom section -->

    <!-- about section -->
    <section class="w3l-about-2 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row justify-content-between align-items-center pb-lg-5">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-5">
                    <div class="image-box inverse position-relative">
                        <div class="image-box__static">
                            <img src="assets/images/about1.jpg" alt="" width="364" height="459">
                        </div>
                        <div class="image-box__float">
                            <img src="assets/images/about2.jpg" alt="" width="364" height="459">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-2-secs-left ps-lg-5 mt-lg-4 mt-5">
                    <h5 class="sub-title">More than 25 Years of Experience</h5>
                    <h3 class="title-style">We are passionate about Laundry</h3>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum
                        deleniti similique sunt in culpa qui officia</p>
                    <ul class="mt-4 list-style-lis">
                        <li><i class="fas fa-check-circle"></i>100% Customer Satisfaction</li>
                        <li><i class="fas fa-check-circle"></i>Free Collection & Delivery</li>
                        <li><i class="fas fa-check-circle"></i>Affordable Prices</li>
                    </ul>
                    <a href="about.html" class="btn btn-style mt-5">Discover More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    <!-- services section -->
    <div class="w3l-grids-block-5 pb-5 pt-md-2 pt-4">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h5 class="sub-title">What We Offer</h5>
                <h3 class="title-style">Our Services</h3>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="servicecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/service1.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="content-main-top">
                            <h4><a href="services.html">Laundry Services</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna.
                            </p>
                            <a class="btn btn-style mt-4" href="services.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="servicecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/service2.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="content-main-top">
                            <h4><a href="services.html">Dry Cleaning</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna.
                            </p>
                            <a class="btn btn-style mt-4" href="services.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="servicecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/service3.jpg" alt="" class="img-fluid" />
                        </div>
                        <div class="content-main-top">
                            <h4><a href="services.html">Steam Iron</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna.
                            </p>
                            <a class="btn btn-style mt-4" href="services.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services section -->

    <!-- image with content section -->
    <section class="home-block-3 py-xl-4 py-2">
        <div class="row m-0 align-items-center">
            <div class="col-lg-6 left-w3l-img p-0">
                <img src="assets/images/about3.jpg" alt="card-image" class="img-fluid">
            </div>
            <div class="col-lg-6 right-w3l-img mt-lg-0 mt-sm-4 mt-5">
                <div class="p-xl-5 p-sm-4 mx-xl-3">
                    <h5 class="sub-title">Get 30% Discount</h5>
                    <h3 class="title-style">Book Our Laundry Services</h3>
                    <p class="sub-title mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices inligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetures
                        adipisicing elit.</p>
                    <div class="row mt-5 pt-xl-4">
                        <div class="col-sm-6 icon-style">
                            <i class="fas fa-tshirt"></i>
                            <div class="ab-detail">
                                <h4 class="title-head mb-sm-3 mb-2"><a href="services.html">Clean Result</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 icon-style mt-sm-0 mt-4">
                            <i class="fas fa-shipping-fast"></i>
                            <div class="ab-detail">
                                <h4 class="title-head mb-sm-3 mb-2"><a href="services.html">Fast Delivery</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //image with content section -->

    <!-- works section -->
    <section class="w3l-feature-8 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h5 class="sub-title">Pickup & Deliver</h5>
                <h3 class="title-style">How We Works</h3>
            </div>
            <div class="row features text-center justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-body p-xl-4">
                        <div class="feature-images position-relative">
                            <i class="fas fa-tshirt"></i>
                            <span>1</span>
                        </div>
                        <div class="feature-info mt-4">
                            <h3 class="feature-title">
                                <a href="about.html">Pick Up Your Clothes</a>
                            </h3>
                            <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                eiusmod te incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="feature-body p-xl-4">
                        <div class="feature-images position-relative">
                            <i class="fas fa-biohazard"></i>
                            <span>2</span>
                        </div>
                        <div class="feature-info mt-4">
                            <h3 class="feature-title">
                                <a href="about.html">Laundry & Dry Clean</a>
                            </h3>
                            <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                eiusmod te incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="feature-body p-xl-4">
                        <div class="feature-images position-relative">
                            <i class="fas fa-truck"></i>
                            <span>3</span>
                        </div>
                        <div class="feature-info mt-4">
                            <h3 class="feature-title">
                                <a href="about.html">Fold Clothes & Deliver</a>
                            </h3>
                            <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                eiusmod te incididunt</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="services.html" class="btn btn-style mt-5">Book Our Services Now</a>
            </div>
        </div>
    </section>
    <!-- //works section -->

    <!-- blog section -->
    <div class="blog-bg-sec pb-5 pt-4">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h5 class="sub-title">News & Articles</h5>
                <h3 class="title-style">Latest Blog Posts</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 grids5-info">
                    <a href="blog-single.html"><img src="assets/images/blog1.jpg" alt=""
                            class="img-fluid radius-image" /></a>
                    <div class="blog-info-grid">
                        <div class="d-flex align-items-center">
                            <a href="admin" class="admin-blg"><i class="fas fa-user-circle"></i>By Admin</a>
                            <span class="mx-2">/</span>
                            <h5><i class="fas fa-calendar-alt"></i>Jan 13, 2022</h5>
                        </div>
                        <h4><a href="blog-single.html">Dry cleaning saves money in the long run</a></h4>
                        <div class="blog-info mt-4">
                            <a href="blog-single.html" class="btn-style btn-style-primary">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                            <a href="blog-single.html" class="comments-blog"><i class="fas fa-comments"></i>4
                                Comments</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids5-info mt-md-0 mt-4">
                    <a href="blog-single.html"><img src="assets/images/blog2.jpg" alt=""
                            class="img-fluid radius-image" /></a>
                    <div class="blog-info-grid">
                        <div class="d-flex align-items-center">
                            <a href="admin" class="admin-blg"><i class="fas fa-user-circle"></i>By Admin</a>
                            <span class="mx-2">/</span>
                            <h5><i class="fas fa-calendar-alt"></i>Jan 16, 2022</h5>
                        </div>
                        <h4><a href="blog-single.html">Power laundry service at it's best! </a></h4>
                        <div class="blog-info mt-4">
                            <a href="blog-single.html" class="btn-style btn-style-primary">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                            <a href="blog-single.html" class="comments-blog"><i class="fas fa-comments"></i>3
                                Comments</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids5-info mt-lg-0 mt-4">
                    <a href="blog-single.html"><img src="assets/images/blog3.jpg" alt=""
                            class="img-fluid radius-image" /></a>
                    <div class="blog-info-grid">
                        <div class="d-flex align-items-center">
                            <a href="admin" class="admin-blg"><i class="fas fa-user-circle"></i>By Admin</a>
                            <span class="mx-2">/</span>
                            <h5><i class="fas fa-calendar-alt"></i>Jan 22, 2022</h5>
                        </div>
                        <h4><a href="blog-single.html">Wedding suit deserves special treatment </a></h4>
                        <div class="blog-info mt-4">
                            <a href="blog-single.html" class="btn-style btn-style-primary">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                            <a href="blog-single.html" class="comments-blog"><i class="fas fa-comments"></i>6
                                Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog section -->

    <!-- call section -->
    <section class="w3l-call-to-action-6 py-4">
        <div class="container py-md-5 py-sm-4 py-4">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="col-lg-7 left-content-call pe-lg-2">
                    <h3 class="title-big">Quality Service with
                        Free Collection & Delivery</h3>
                </div>
                <div class="col-lg-5 right-content-call mt-lg-0 mt-4">
                    <ul class="buttons d-sm-flex align-items-center justify-content-end">
                        <li class="phone-sec me-xl-4 me-lg-0 me-sm-4"><i class="fas fa-phone-volume"></i>
                            <a class="call-style-w3" href="tel:+1(23) 456 789 0000">+1(23) 456 789 0000</a>
                        </li>
                        <li><a href="contact.php" class="btn btn-style mt-sm-0 mt-3">Order Now</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->

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
                            <h5>Located beside Oils N Oils, Chaitanya College Road, Chinna Amiram, Bhimavaram,534204.
                            </h5> <br> West Godavari, Andhra Pradesh</h5>
                            <h5 class="mt-sm-5 mt-4">Everyday: <span> 9 AM - 7 PM</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="address-grid">
                            <h5 class="top-bold">Phone</h5>
                            <h5 class="phone-number-text mt-2"><a href="tel:+1(21) 112 7368">7997134445</a></h5>
                        </div>
                        <div class="address-grid mt-sm-5 mt-4">
                            <h5 class="top-bold">E-mail</h5>
                            <h5 class="email-cont-text mt-1"> <a href="mailto:photogenic@mail.com"
                                    class="mail">Bosmartwash@gmail.com</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu ps-lg-0 mt-lg-0 mt-sm-5 mt-4">
                        <div class="address-grid">
                            <h5 class="mb-sm-4 mb-3 pb-lg-2 top-bold">Support Links</h5>
                            <ul>
                                <li><a href="#privacy">Privacy Policy</a></li>
                                <li><a href="#terms"> Terms of Service</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a href="#support"> Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="address-grid col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main">
                        <h5 class="top-bold">Message Here</h5>
                        <form action="index.php" class="subscribe d-flex flex-column align-items-start mt-sm-4 mt-3 pt-lg-2 mb-4" method="post">
    <label for="email" class="form-label mb-2">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-input mb-3" required>
    
    <label for="message" class="form-label mb-2">Message</label>
    <textarea id="message" name="message" placeholder="Type your message here" class="form-textarea mb-3" required></textarea>
    
    <button class="form-button">
        <span class="fa fa-paper-plane" aria-hidden="true"></span> Submit
    </button>
</form>

                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
                <!-- copyright -->
                <div class="w3l-copyright text-center mt-lg-5 mt-4 pt-sm-4 pt-3">
                    <p class="copy-footer-29"></p>
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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .whatsapp-block {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            z-index: 1000;
        }
        .whatsapp-block img {
            width: 30px;
            height: 30px;
        }
        .whatsapp-block:hover {
            background-color: #1ebe5c;
        }
    </style>
</head>
<body>

    <!-- WhatsApp Block -->
    <div class="whatsapp-block" onclick="redirectToWhatsApp()">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
    </div>

    <script>
        function redirectToWhatsApp() {
            // Replace with your WhatsApp number in the format: https://wa.me/<number>
            window.location.href = "https://wa.me/7997134445?text=Hello!%20I%20need%20assistance%20with%20your%20laundry%20services.";
        }
    </script>
</body>

</html>