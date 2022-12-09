<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Example</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/portfolio-2.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Swiper.js -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Link AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    
</head>

<!--Navbar-->
<body id="top-page" class="light">
    <header class="main-header main">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="img/loop5.png" alt="logo" class="img-fluid">
                </a>
                <button class="navbar-toggler custome px-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-top-main" aria-controls="navbar-top-main" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="navbar-toggler-icon-custome-1"></div>
                </button>

                <div class="navbar-collapse collapse" id="navbar-top-main">
                    <button class="navbar-toggler align-self-end mt-4 me-3 d-block d-lg-none" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbar-top-main" aria-controls="navbar-top-main"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <div class="navbar-toggler-close"></div>
                    </button>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll" href="#">Tema</a>
                        </li>
                      
                        <li class="nav-item">
                            
                            <?php
                                                        error_reporting(0);
                                                        session_start();
                            if ($_SESSION['level'] == "user") {
                            echo '<a href="./user/Undangan.php" class="btn btn-gr-light-outline js-scroll">New invitation+</a>';
                            }elseif ($_SESSION['level'] == "admin") {
                                echo '<a href="./admin/statusundangan.php" class="btn btn-gr-light-outline js-scroll">New invitation+</a>';
                                }else{
                            echo '<a href="./login.php" class="btn btn-gr-light-outline js-scroll">Login</a>';
                            }
                        ?> 
                        </li>
                        <div class="collapse navbar-collapse" id="navbar-list-4">
                      <ul class="navbar-nav ms-auto">
                         <li class="nav_item">
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <img src="img/profile.png" width="40" height="40" class="rounded-circle">
                            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php

                                if ($_SESSION['level'] == "user") {
                                   echo "<li><a class='dropdown-item' href='logout.php'>Log Out</a></li>";
                                   echo "<li><a class='dropdown-item' href='./user'>Setting</a></li>";
                                }elseif ($_SESSION['level'] == "admin") {
                                    echo "<li><a class='dropdown-item' href='logout.php'>Log Out</a></li>";
                                    echo "<li><a class='dropdown-item' href='./admin'>Admin Setting</a></li>";
                                 }else{
                                    echo "<li><a class='dropdown-item' href='login.php'>Sign In</a></li>";
                                    echo "<li><a class='dropdown-item' href='Register.php'>Sign Up</a></li>";
                                }
                            ?>

                        </li>
                        </ul>
                        </li>   
                        </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

       <!--Awal Carousel-->
         <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/car5.jpg" class="d-block img-fluid" alt="Gambar 1">
          </div>
          <div class="carousel-item">
            <img src="img/grad.PNG" class="d-block img-fluid" alt="Gambar 2">
          </div>
          <div class="carousel-item">
            <img src="https://marketplace.canva.com/EAE7T5qQks4/1/0/1600w/canva-pink-happy-birthday-greeting-holiday-banner-lQ5f_8zfn9I.jpg" class="d-block img-fluid" alt="Gambar 3">
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
   <!--Akhir Carousel-->

    </header>
    <!-- Section Ability -->
    <section class="section-head section-ability text-end">
        <div class="container">
            <div class="d-flex flex-row align-items-center" data-aos="fade-right">
             
            </div>
        </div>
    </section>
    <!-- Section About Me -->
    <section class="section-head section-aboutme text-center" id="aboutme" data-aos="fade-down" data-aos-delay="50">
        <div class="container">
            <h2>Pilihan Tema</h2>
            <p>Beberapa Macam Tema</p>
               <section class="section-service-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="card service-item">    
                            <img src="img/car5.jpg" alt="design-service" class="">
                        <hr>
                        <h2>Wedding</h2>
                        <p>Make your Wedding invitation this is especially for you
                        </p>
                        <br>
                    <div>
                    <a href=" " class="btn btn-secondary"
                    target="_blank">Read More ....</a>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card service-item">
                            <img src="img/birth.PNG" alt="creative-service" class="img-fluid">
                        <hr>
                        <h2>Birthday</h2>
                        <p>Make your Birthday invitation this is especially for you</p>
                        <br>
                    <div>
                    <a href=" " class="btn btn-secondary"
                    target="_blank">Read More ....</a>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card service-item">
                            <img src="img/grad.PNG" alt="webdev-service" class="img-fluid">
                        <hr>
                        <h2>Graduation</h2>
                        <p>Make your Graduation invitation this is especially for you</p>
                        <br>
                    <div>
                    <a href=" " class="btn btn-secondary"
                    target="_blank">Read More ....</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
</div>
</section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row list-first">
                <div class="col-1 col-md-2 col-lg-3 mt-0 mt-lg-0 item brand">
                    <div>
                        <div class="align-items-center mb-3 text-center">
                            <img src="img/loop5.png" class="img-fluid me-6" alt="logo">
                        </div>  
                         <h2 class="text-center">D2</h2>
                        <p>Web developer idola</p></br>    
                    </div>
                </div>
                <div class="col-2 col-md-2 col-lg-3 mt-0 mt-lg-0 item explore">
                    <div>
                        <h2 class="text-center">Polinema</h2>
                        <br><p>RASENDRIYA'22</p></br>
                    </div>
                </div>
                 <div class="col-3 col-md-2 col-lg-3 mt-0 mt-lg-0 item contact" >
                    <div>
                        <h2>Useful Links</h2>
                            <ul class="nav flex-column">
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">About us</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item text-center">
                                <a href="#" class="nav-link">Contact us</a>
                            </li>
                            </ul>
                    </div>
                    </div>
                    <div class="col-3 col-md-2 col-lg-3 mt-0 mt-lg-0 item contact" >
                        <div>
                            <h2>Support By</h2>
                                <ul class="nav flex-column">
                                <li class="nav-item text-center">
                                    <a href="https://www.indofood.com/" class="nav-link">PT.Indofood</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a href="https://www.instagram.com/komunitas_cb_army_indonesia/?hl=id" class="nav-link">CB Army Indonesia</a>
                                </li>
                                <li class="nav-item text-center">
                                    <a href="https://www.instagram.com/badas_garage/?hl=id" class="nav-link">Badas Garage</a>
                                </li>
                                </ul>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row list-secound">
                <div class="col-12 text-center">
                    <small>2021 © Copyright Boostrap • All rights reserved • Local Repositories</small>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll To Top Button -->
    <button class="scroll-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- Pre Loader -->
    <div class="pre-loader">
        <div class="shape">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <div class="shadow">
            <div class="shape-shadow"></div>
            <div class="shape-shadow"></div>
            <div class="shape-shadow"></div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/portfolio-2.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"
        integrity="sha512-cyAbuGborsD25bhT/uz++wPqrh5cqPh1ULJz4NSpN9ktWcA6Hnh9g+CWKeNx2R0fgQt+ybRXdabSBgYXkQTTmA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <!-- Initialize Swiper -->
    <script>
        let swiper = new Swiper(".macbook-img", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".section-works-content .swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".section-works-content .swiper-button-next",
                prevEl: ".section-works-content .swiper-button-prev",
            },
            loop: true,
        });

        let swiperPortfolio;

        const sizeMinLg = window.matchMedia('(min-width:992px)');
        if (sizeMinLg.matches) {

            swiperPortfolio = new Swiper(".swiper-portfolio", {
                slidesPerView: 5,
                spaceBetween: 30,
                slidesPerGroup: 5,
                pagination: {
                    el: ".swiper-portfolio .swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-portfolio .swiper-button-next",
                    prevEl: ".swiper-portfolio .swiper-button-prev",
                },
                loop: true,
            });
        }
        const sizeMaxLg = window.matchMedia('(max-width:992px)');
        if (sizeMaxLg.matches) {

            swiperPortfolio = new Swiper(".swiper-portfolio", {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerGroup: 1,
                pagination: {
                    el: ".swiper-portfolio .swiper-pagination",
                    clickable: true,
                },
                loop: true,
            });
        }
    </script>
    <!-- Vanilla tilt.js -->
    <script src="js/vanilla-tilt.min.js"></script>
    <script>
        const sizeMd = window.matchMedia('(min-width: 992px)');
        if (sizeMd.matches) {
            // Tooltip
            let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            //It also supports NodeList
            VanillaTilt.init(document.querySelectorAll(".recent-project-item"), {
                reverse: false,
                max: 25,
                startX: 0,
                startY: 0,
                perspective: 1000,
                scale: 1,
                speed: 2000,
                transition: true,
                axis: null,
                reset: true,
                easing: "cubic-bezier(.03,.98,.52,.99)",
                glare: false,
                "max-glare": 0.3,
                "glare-prerender": false,
                "mouse-event-element": null,
                gyroscope: true,
                gyroscopeMinAngleX: -60,
                gyroscopeMaxAngleX: 60,
                gyroscopeMinAngleY: -60,
                gyroscopeMaxAngleY: 60,
            });
        }
    </script>
</body>

</html>