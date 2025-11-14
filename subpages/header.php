<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexraa Webiste</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- AOS Animation CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">


</head>

<body>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>


    <!-- Top Offer Bar -->
    <div id="topOffer" class="top-offer">
        <div class="left">Limited Time Offer: Black Friday Sale</div>
        <div class="right">
            <div id="countdown" class="countdown">
                <span><b id="days">00</b><small>Days : </small></span>
                <span><b id="hours">00</b><small>Hrs :</small></span>
                <span><b id="minutes">00</b><small>Mins :</small></span>
                <span><b id="seconds">00</b><small>Sec</small></span>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <nav id="mainHeader" class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo (2).png" alt="HEXRAA Logo">
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                   

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Domains</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Register Domain</a></li>
                            <li><a class="dropdown-item" href="#">Transfer Domain</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hosting</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Shared Hosting</a></li>
                            <li><a class="dropdown-item" href="#">WordPress Hosting</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Reseller</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Reseller Plans</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Private Servers</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">VPS Hosting</a></li>
                            <li><a class="dropdown-item" href="#">Dedicated Servers</a></li>
                        </ul>
                    </li>

                    <li class="nav-item ms-3">
                        <a href="#" class="btn-outline"><i class="bi bi-headset"></i> Support</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="#" class="btn-outline border_outline_ns"><i class="bi bi-person"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNav">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Domains</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Hosting</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Reseller</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Private Servers</a></li>
                <hr>
                <li><a href="#" class="btn-outline"><i class="bi bi-headset"></i> Support</a></li>
                <li><a href="#" class="btn-outline"><i class="bi bi-person"></i> Login</a></li>
            </ul>
        </div>
    </div>

