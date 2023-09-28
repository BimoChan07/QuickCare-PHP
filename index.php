<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <!-- Custom Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
        rel="stylesheet" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/logos/quickcarew.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logos/quickcarew.png" />
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
          * Reinstate scrolling for non-JS clients
          */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>
    <!-- Page Title -->
    <title>QuickCare | Home</title>
</head>

<body class="font">
    <?php
    include './includes/header.php';
    ?>

    <!-- Main Section-->
    <section class="mt-0 overflow-hidden">
        <!-- Page Content Goes Here -->

        <!-- / Top banner -->
        <section class="vh-50 container-fluid rounded overflow-hidden" data-aos="fade-in">
            <!-- Swiper Info -->
            <div class="swiper-container overflow-hidden rounded h-100 bg-light" data-swiper data-options='{
              "spaceBetween": 0,
              "slidesPerView": 1,
              "effect": "fade",
              "speed": 1000,
              "loop": true,
              "parallax": true,
              "observer": true,
              "observeParents": true,
              "lazy": {
                "loadPrevNext": true
                },
                "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
                }
              }'>
                <div class="swiper-wrapper">
                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div
                            class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden"
                                data-swiper-parallax="-100" style="
                    will-change: transform;
                    background-image: url(./assets/images/banners/1.jpg);"></div>
                        </div>
                        <div
                            class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">
                                All You Need Is A Little Tune
                            </p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white"
                                data-swiper-parallax="100">
                                <span class="text-outline-light"></span>MELODY
                            </h2>
                        </div>
                    </div>
                    <!-- /Slide-->

                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div
                            class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden"
                                data-swiper-parallax="-100" style="
                    will-change: transform;
                    background-image: url(./assets/images/banners/2.jpg);"></div>
                        </div>
                        <div
                            class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">
                                Music is the moonlight in the gloomy night of life </p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white"
                                data-swiper-parallax="100">
                                Enjoy&nbsp;<span class="text-outline-light">Life</span>
                            </h2>
                        </div>
                    </div>
                    <!--/Slide-->

                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div
                            class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden"
                                data-swiper-parallax="-100" style="
                    will-change: transform;
                    background-image: url(./assets/images/banners/3.jpg);
                  "></div>
                        </div>
                        <div
                            class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">
                                Good music. Good Friends. Good Vibes.</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white"
                                data-swiper-parallax="100">
                                Adds&nbsp;<span class="text-outline-light">Memories</span>
                            </h2>

                        </div>
                    </div>
                    <!-- /Slide-->

                    <!--Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div
                            class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden"
                                data-swiper-parallax="-100" style="
                    will-change: transform;
                    background-image: url(./assets/images/banners/4.jpg);
                  "></div>
                        </div>
                        <div
                            class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">
                                Behind every favorite song, there is an untold story </p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white"
                                data-swiper-parallax="100">
                                <span class="text-outline-light">Vibes&nbsp;</span>Matters
                            </h2>
                        </div>
                    </div>
                    <!--/Slide-->
                </div>

                <div class="swiper-pagination swiper-pagination-bullet-light"></div>
            </div>
            <!-- / Swiper Info-->
        </section>
        <!--/ Top Banner-->

        <!-- Featured Brands-->
        <!-- <div class="brand-section container-fluid" data-aos="fade-in">
            <div class="bg-overlay-sides-white-to-transparent bg-white py-5">
                <section class="marquee marquee-hover-pause">
                    <div class="marquee-body">

                        <div class="marquee-section animation-marquee-50">
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./enya.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/enya.jpg"
                                            alt="" />
                                    </picture>
                                </a>
                            </div>

                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./fender.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/fender.png"
                                            alt="" />
                                    </picture>
                                </a>
                            </div>

                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./hex.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/hex.jpg"
                                            alt="" />
                                    </picture>
                                </a>
                            </div>

                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./taylor.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/taylor.png"
                                            alt="" />
                                    </picture>
                                </a>
                            </div>

                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./mantra.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/mantra.jpg"
                                            alt="" />
                                    </picture>
                                </a>
                            </div>

                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./yamaha.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/yamaha.jpeg"
                                            alt="" />
                                    </picture>
                                </a>
                            </div>

                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./ibanez.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/ibanez.png"
                                            alt="" />
                                    </picture>
                                </a>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div> -->

        <!--/ Featured Brands-->

        <div class="container-fluid">

            <!-- Featured Categories-->
            <div class="m-0">
                <!-- Swiper Latest -->
                <div class="swiper-container overflow-hidden overflow-lg-visible" data-swiper data-options='{
                        "spaceBetween": 25,
                        "slidesPerView": 1,
                        "observer": true,
                        "observeParents": true,
                        "breakpoints": {     
                          "540": {
                            "slidesPerView": 1,
                            "spaceBetween": 0
                          },
                          "770": {
                            "slidesPerView": 2
                          },
                          "1024": {
                            "slidesPerView": 3
                          },
                          "1200": {
                            "slidesPerView": 4
                          },
                          "1500": {
                            "slidesPerView": 5
                          }
                        },   
                        "navigation": {
                          "nextEl": ".swiper-next",
                          "prevEl": ".swiper-prev"
                        }
                      }'>
                    <a href="#" class="nav-link text-dark">
                        <h1 class="d-flex justify-content-center m-auto font mb-4 mt-4">Our Services</h1>
                    </a>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="000">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/categories/1.jpg"
                                        alt="php Bootstrap Template by Pixel Rocket" />
                                </picture>
                                <p class="title-small mb-2 text-muted">You can select the desired doctor</p>
                                <h4 class="lead fw-bold">Doctor Selection</h4>
                                <a href="appointment.php" class="btn btn-dark d-flex m-auto justify-content-center">Book
                                    Appointment</a>
                            </div>
                        </div>

                        <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="100">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/categories/2.webp"
                                        alt="php Bootstrap Template by Pixel Rocket" />
                                </picture>
                                <p class="title-small mb-2 text-muted">Select your preferred Date and Time </p>
                                <h4 class="lead fw-bold">Date And Time Selection</h4>
                                <a href="appointment.php" class="btn btn-dark d-flex m-auto justify-content-center">Book
                                    Appointments</a>
                            </div>
                        </div>

                        <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="200">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/categories/3.avif"
                                        alt="php Bootstrap Template by Pixel Rocket" />
                                </picture>
                                <p class="title-small mb-2 text-muted">Check your booking status</p>
                                <h4 class="lead fw-bold">Booking Status</h4>
                                <a href="booking.php" class="btn btn-dark d-flex m-auto justify-content-center">Check
                                    Now</a>
                            </div>
                        </div>

                        <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="400">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/categories/4.webp"
                                        alt="php Bootstrap Template by Pixel Rocket" />
                                </picture>
                                <p class="title-small mb-2 text-muted">View our specialists</p>
                                <h4 class="lead fw-bold">Our Specialists </h4>
                                <p class="title-small mb-2 text-muted">Professionals
                                </p>
                                <a href="./viewDoctors.php"
                                    class="btn btn-dark d-flex m-auto justify-content-center">Show</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="swiper-btn swiper-prev swiper-disabled-hide swiper-btn-side btn-icon bg-white text-dark ms-3 shadow mt-n5">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>

                    <div
                        class="swiper-btn swiper-next swiper-disabled-hide swiper-btn-side swiper-btn-side-right btn-icon bg-white text-dark me-3 shadow mt-n5">
                        <i class="ri-arrow-right-s-line ri-lg"></i>
                    </div>
                </div>
                <!-- / Swiper Latest-->
                <!-- SVG Used for Clipath on featured images above-->
                <svg width="0" height="0">
                    <defs>
                        <clipPath id="svg-slanted-one" clipPathUnits="objectBoundingBox">
                            <path
                                d="M0.822,1 H0.016 a0.015,0.015,0,0,1,-0.016,-0.015 L0.158,0.015 A0.016,0.015,0,0,1,0.173,0 L0.984,0 a0.016,0.015,0,0,1,0.016,0.015 L0.837,0.985 A0.016,0.015,0,0,1,0.822,1">
                            </path>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <!-- /Featured Categories-->

            <!-- Homepage Intro-->
            <div class="position-relative row my-lg-7 pt-5 pt-lg-0 g-8" id="about">
                <div class="bg-text bottom-0 start-0 end-0" data-aos="fade-up">
                    <h2 class="bg-text-title opacity-10">
                        <span class="text-outline-dark">Quick</span>Care
                    </h2>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 mb-7 mb-lg-0" data-aos="fade-right">
                    <p class="text-muted title-small">Welcome to</p>
                    <h3 class="display-3 fw-bold mb-5">
                        <span class="text-outline-dark">QuickCare </span>- Your Health, Our Priority
                    </h3>
                    <p class="lead">
                        QuickCare, a leading doctor appoint booking website that lets you to view, select date,
                        time and the doctor accoriding to the treatment you need.</p>
                    <p class="lead">
                        QuickCare - Doctors in Hand
                    </p>

                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 pe-0" data-aos="fade-left">
                    <picture class="w-50 d-block position-relative z-index-10 border border-white border-4 shadow-lg">
                        <img class="img-fluid" src="./assets/images/banners/1.jpg" alt="" />
                    </picture>

                    <picture
                        class="w-50 d-block me-8 mt-n7 shadow-lg border border-white border-4 position-absolute top-0 end-0 z-index-0">
                        <img class="img-fluid" src="./assets/images/categories/2.webp" alt="" />
                    </picture>
                </div>
            </div>

            <div data-aos="fade-in">
                <h3 class="title-large text-muted text-center mb-3 mt-5">
                    <a href="./index.php" class="nav-link text-black">#QuickCare</a>
                </h3>
            </div>

        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
    <?php
    include './includes/footer.php';
    ?>
</body>

</php>