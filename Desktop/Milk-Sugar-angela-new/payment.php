<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Milk & Sugar - Payment</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="index.php">Milk & Sugar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="menu.php">Our Menu</a>
                        </li>
                        <li class="nav-item active"><a class="nav-link" href="orderstatus.php">Track Your Cake</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!------------------Header Menu Area End---------------------->

<!--================Hero Banner Section start =================-->
<section class="hero-banner hero-banner-sm">
    <div class="hero-wrapper">
        <div class="hero-left">
            <h1 class="hero-title">Pay your bill</h1>
            <ul class="hero-info d-none d-md-block">
                <li>
                    <img src="img/banner/fas-service-icon.png" alt="">
                    <h4>Fast Service</h4>
                </li>
                <li>
                    <img src="img/banner/fresh-cake-icon.png" alt="">
                    <h4>Fresh Cake</h4>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--================Hero Banner Section end =================-->

<!--=================Payment Section Start=====================-->
<section class="section-margin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Payment Details</h2>
                <h4>
                    total price:
                    <?php
                    include 'connect.php';
                    $conn = OpenCon();
                    if ($result3->num_rows > 0) {
                        $row2 = $result3->fetch_assoc();
                        if ($result3->num_rows > 0) {
                            $temp = $quantity * $row2['price'];
                            echo "$temp";
                        }
                        else echo "Failed";
                    }
                    else echo "Failed";
                    ?>
                </h4>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="confirm#" id="confirm#" type="text" placeholder="Enter Confirmation #">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm">Submit</button>
                    </div>
                </form>
<?php





CloseCon($conn);
?>