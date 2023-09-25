<?php
include "admin/includes/database.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="path/to/bootstrap.min.js"></script>

    <!-- Include Owl Carousel CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Quickrentz</title>
</head>

<body>

    <!--START OF NAVBAR -->
    <nav class="navbar navbarMain navbar-expand-lg navbar-light p-4">
        <div class="container-fluid">
            <a class="navbar-brand text-light quick" href="#">QuickRentz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar1 navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link ml-5 nav1 text-light" href="#"
                            style="color: grey; text-decoration: none; text-underline-offset: 1rem; text-decoration-color: rgba(181, 181, 181);"
                            onmouseover="this.style.textDecoration='underline'; this.style.textDecorationColor='rgba(181, 181, 181)';"
                            onmouseout="this.style.textDecoration='none';">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5 nav1 text-light" href="#"
                            style="color: grey; text-decoration: none; text-underline-offset: 1rem; text-decoration-color: rgba(181, 181, 181);"
                            onmouseover="this.style.textDecoration='underline'; this.style.textDecorationColor='rgba(181, 181, 181)';"
                            onmouseout="this.style.textDecoration='none';">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5 nav1 text-light" href="#"
                            style="color: grey; text-decoration: none; text-underline-offset: 1rem; text-decoration-color: rgba(181, 181, 181);"
                            onmouseover="this.style.textDecoration='underline'; this.style.textDecorationColor='rgba(181, 181, 181)';"
                            onmouseout="this.style.textDecoration='none';">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5 nav1 text-light" href="#"
                            style="color: grey; text-decoration: none; text-underline-offset: 1rem; text-decoration-color: rgba(181, 181, 181);"
                            onmouseover="this.style.textDecoration='underline'; this.style.textDecorationColor='rgba(181, 181, 181)';"
                            onmouseout="this.style.textDecoration='none';">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5 nav1 text-light" href="#"
                            style="color: grey; text-decoration: none; text-underline-offset: 1rem; text-decoration-color: rgba(181, 181, 181);"
                            onmouseover="this.style.textDecoration='underline'; this.style.textDecorationColor='rgba(181, 181, 181)';"
                            onmouseout="this.style.textDecoration='none';">Contact</a>
                    </li>

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="log-in.php"
                            style="color: grey; text-decoration: white; border: 1px solid transparent; border-radius: 5px; padding: 5px 10px;"
                            onmouseover="this.style.borderColor='white';"
                            onmouseout="this.style.borderColor='transparent';">Sign In
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="sign-up.php"
                            style="text-decoration-color: white; border: 1px solid white; border-radius: 5px; padding: 5px 10px; color: white;"
                            onmouseover="this.style.borderColor='white';"
                            onmouseout="this.style.borderColor='transparent';">
                            Sign Up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--END OF NAVBAR -->

    <!--START SECTION 1 (CAROUSEL) -->
    <div class="container" style="min-height: 80vh;">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="head1 text-light" style="font-size: 3rem;">THE EASY WAY TO TAKEOVER A LEASE</h2>
                <h6 class="head1 text-light">Get a 50% Off for every first rent</h6>
                <br>
                <div class="head-title2"
                    style="color: white; margin-top: 50px; display: grid; grid-template-columns: repeat(2, 1fr); grid-gap: 10px;">
                    <div>
                        <h6><img src="img/check.png" alt="" width="30" height="30"> Flexible Rentals</h6>
                    </div>
                    <div>
                        <h6><img src="img/check.png" alt="" width="30" height="30"> No Hidden Fees</h6>
                    </div>
                    <div>
                        <h6><img src="img/check.png" alt="" width="30" height="30"> Best Price Guarantee</h6>
                    </div>
                    <div>
                        <h6><img src="img/check.png" alt="" width="30" height="30"> 24/7 Road Assistance</h6>
                    </div>
                </div>


            </div>
            <div class="col-md-6">
                <img src="img/city.jpg" alt="" width="100%" style="border: 0.5px solid black; border-radius: 20px;">
            </div>
        </div>
    </div>






    <!-- <div class="container-fluid carousel1">
        <div id="carouselExample" class="carousel slide" carousel-fade data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="img/car1.jpg" class="d-block w-100" alt="...">
                    <div class="overlay">
                        <h2 class="h2Text">"Rent, Ride, Relax: We Make Road Trips Effortless!"</h2>
                    </div>
                </div>
                <div class="carousel-item pic2" data-bs-interval="5000">
                    <img src="img/car2.jpg" class="d-block w-100" alt="...">
                    <div class="overlay">
                        <h3>
                        "Affordable Family Tours for Unforgettable Moments!"</h3>
                    </div>
                </div>
                <div class="carousel-item pic2" data-bs-interval="5000">
                    <img src="img/car3.jpg" class="d-block w-100" alt="...">
                    <div class="overlay">
                        <h2>"Travel Beyond Boundaries with Our Exciting Tours!"</h2>
                    </div>
                </div>
            </div> -->
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon " aria-hidden="true"></span>

            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
            </button> -->
    </div>
    </div>

    <!--END SECTION 1 (CAROUSEL) -->

    <!-- START SECTION 2 -->
    <!-- <section>
        <div class="container container2 mt-5 text-light">
            <h1 class="text-center">Welcome to Quickrentz</h1>
            <div class="row">
                <div class="col-md-6 mt-5 about">
                    <p>
                        Quickrentz is your trusted partner for all your car rental needs.
                        With a wide range of cars to choose from and competitive prices, we make
                        it easy for you to find the perfect vehicle for your journey.
                    </p>
                    <p>
                        Our mission is to provide you with a seamless and hassle-free car rental
                        experience. Whether you're traveling for business or pleasure, our
                        dedicated team is here to ensure your satisfaction.
                    </p>
                    <div class="button-container btnAbout">
                        <button class="button">Book Now</button>
                        <button class="button">View More</button>
                    </div>
                </div>
                <div class="col-md-6 aboutPic">
                    <img src="img/image-removebg-preview.png" alt="" class="aboutPicImg">
                </div>
            </div>
        </div>
    </section> -->

    <!-- END SECTION 2 -->

    <!-- START SECTION 3 -->
    <div class="container-fluid mt-5">
        <div class="title_main">
            <h2 class="text-left text-light" style="text-align:center;">FEATURED LISTINGS</h2>
        </div>
        <div class="row">
            <?php
            $selectVehicle = "SELECT vehicle.*, brand.brandName FROM vehicle
                LEFT JOIN brand ON vehicle.BrandID = brand.BrandID LIMIT 4";
            $initiateSelectVehicle = mysqli_query($conn, $selectVehicle);
            while ($results = mysqli_fetch_assoc($initiateSelectVehicle)) {
                echo "<div class='col-md-3 mb-2'>
                        <div class='card text-light h-100'>
                            <div id='$results[Model]' class='carousel slide'>
                            <div class='carousel-indicators'>
                                <button type='button' data-bs-target='#$results[Model]' data-bs-slide-to='0' class='active'
                                    aria-current='true' aria-label='Slide 1'></button>
                                <button type='button' data-bs-target='#$results[Model]' data-bs-slide-to='1'
                                    aria-label='Slide 2'></button>
                                <button type='button' data-bs-target='#$results[Model]' data-bs-slide-to='2'
                                    aria-label='Slide 3'></button>
                                    <button type='button' data-bs-target='#$results[Model]' data-bs-slide-to='3'
                                    aria-label='Slide 4'></button>
                            </div>
                            <div class='carousel-inner'>
                                <div class='carousel-item active'>
                                    <img src='admin/img/vehicleuploads/$results[Image1]' class='d-block w-100' alt='...'>
                                </div>
                                <div class='carousel-item'>
                                    <img src='admin/img/vehicleuploads/$results[Image2]' class='d-block w-100' alt='...'>
                                </div>
                                <div class='carousel-item'>
                                    <img src='admin/img/vehicleuploads/$results[Image3]' class='d-block w-100' alt='...'>
                                </div>
                                <div class='carousel-item'>
                                    <img src='admin/img/vehicleuploads/$results[Image4]' class='d-block w-100' alt='...'>
                                </div>
                            </div>      
                        </div>
                        <div class='card-body'>
                        <div class='card-header' style='display: flex; flex-direction: row; justify-content: space-between; align-items: center;'>
                                <h5 class='card-title' style='text-align: left; font-size: 25px;'>$results[Model]</h5>
                                <h6 class='card-subTitle' style='text-align: right; border: 1px dashed white; padding: 7px; border-radius: 10px; border-color: #d1b3c4; max-width: 100px;'>$results[Year]</h6>
                        </div>
                            <div class='grid-container' style='display: flex; flex-direction: row;'>
                            <div style='text-align: left; flex: 1;'>
                                <p class='card-text'><i class='fa-regular fa-user' style='color: #d1b3c4;'></i> $results[SeatingCapacity] people</p>
                                <p class='card-text'><i class='fa-solid fa-gauge' style='color: #d1b3c4;'></i> 6.1 km/ 1-liter</p>
                            </div>
                            <div style='text-align: right; flex: 1;'>
                                <p class='card-text'><i class='fa-solid fa-gas-pump' style='color: #d1b3c4;'></i> $results[FuelType]</p>
                                <p class='card-text'><i class='fa-solid fa-car' style='color: #d1b3c4;'></i> $results[Transmision]</p>
                            </div>
                        </div>
                         <hr style='width: 100%;'>                        
                            <div class='grid-item2'>
                                <h5 class='card-title amountText'>₱$results[Rate] / day</h5>
                                <a href='log-in.php'><button class='btn' style='color: white; background-color: #806393;'>Sign-in to Rent</button></a>
                            </div>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
    <!-- END SECTION 3 -->

    <!-- START SECTION 4 -->

    <div class="container mainContainer">
        <div class="title_main2">
            <h2 class="text-left text-light ml-5">Get Started with 4 simple steps</h2>
        </div>
        <div class="row">
            <div class="step1 col-md-3">
                <div class="card cardSect4" style="height: 100%;">
                    <span class="span1">
                        <i class="fa-regular fa-circle-user iconSect4" id="icon1" style="color:#d1b3c4;"></i>
                    </span>
                    <h3 class="step1__title" style="font-size:20px;">Create a profile</h3>
                    <p class="step1__text"
                        style="font-size:15px; width:150px; text-align: center; margin: 0 auto; margin-top:10px;  margin-bottom:5px;">
                        Register on our platform to access a personalized car rental experience.</p>
                </div>

            </div>
            <div class="step1 col-md-3">
                <div class="card cardSect4" style="height: 100%;">
                    <span class="span3">
                        <i class="fa-solid fa-car-side iconSect4" id="icon1" style="color:#d1b3c4;"></i>
                    </span>
                    <h3 class="step1__title" style="font-size:20px;">Tell us what car you want</h3>
                    <p class="step1__text"
                        style="font-size:15px; width:170px; text-align: center; margin: 0 auto; margin-top:10px;  margin-bottom:5px;">
                        Specify your preferred car model, rental period, and pick-up location.</p>
                </div>

            </div>
            <div class="step1 col-md-3">
                <div class="card cardSect4" style="height: 100%;">
                    <span class="span3">
                        <i class="fa-solid fa-user-plus iconSect4" id="icon1" style="color:#d1b3c4;"></i>
                    </span>
                    <h3 class="step1__title" style="font-size:20px;">Match with seller</h3>
                    <p class="step1__text"
                        style="font-size:15px; width:170px; text-align: center; margin: 0 auto; margin-top:10px; margin-bottom:5px;">
                        Our algorithm will match you with the best available car rental options.</p>
                </div>

            </div>
            <div class="step1 col-md-3">
                <div class="card cardSect4" style="height: 100%;">
                    <span class="span4">
                        <i class="fa-regular fa-file iconSect4" id="icon1" style="color:#d1b3c4;"></i>
                    </span>
                    <h3 class="step1__title" style="font-size:20px;">Make a deal</h3>
                    <p class="step1__text"
                        style="font-size:15px; width:190px; text-align: center; margin: 0 auto; margin-top:10px;  margin-bottom:5px;">
                        Finalize the rental agreement with the car owner and enjoy your hassle-free
                        ride.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Section 4 -->

    <!-- START SECTION 5 (OWL CAROUSEL) -->
    <div class="container-fluid" style="height:55vh;">
        <h2 class="text-center text-light" style="margin-top: 50px; font-size: 40px; margin-bottom: 50px;">Our Blog</h2>
        <div class="owl-carousel owl-theme" style="width:100%; height:35vh;">
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh; width:100%;">
                <p style="text-align:center; margin-top:15px; color:white;">New rules for handling our cars.</p>
                <div class="blogMessage" style="display: flex; flex-direction: row; margin-top:40px;">
                    <p style=" color:white; font-size:15px"><i class="fa-regular fa-clock"></i> Jan 21,2023</p>
                    <p style="text-align: right; margin-left: auto; color:white; font-size:15px;"><i
                            class="fa-regular fa-comment-dots"></i> 9</p>
                </div>
            </div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh;"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh;"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh;"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh;"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh;"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh;"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh;"></div>
            <div class="item"><img src="img/car1.jpg" alt="Image 1" style="height:19vh;"></div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                    },
                    600: {
                        items: 3,
                        nav: false,
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false,
                    },
                },
            });
        });
    </script>

    <!-- END SECTION 5 (OWL CAROUSEL) -->

    <footer class="text-white" style="background-color: #06010C;">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-3" id="div1">
                    <h1></i> QUICKRENTZ</h1>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, laudantium.</p> -->
                    <!-- <button style="background-color: #806393; color: white; border-radius: 10px;">Submit Ad</button> -->
                </div>
                <div class="col-md-3" id="div2">
                    <h2 style="margin-bottom: 20px;">Explore</h2>
                    <p>About Us</p>
                    <p>My Account</p>
                    <p>How it works</p>
                    <p>Pricing Packages</p>

                </div>
                <div class="col-md-3" id="div3" style="display: flex; flex-direction: column; align-items: center;">
                    <h2 style="margin-bottom: 20px;">Contact</h2>
                    <span class="contact-item" style="display: flex; align-items: center;">
                        <i class="fa-solid fa-location-dot" style="color: #806393; margin-right: 25px;"></i>
                        <span>Lorem ipsum dolor sit amet </span>
                    </span>
                    <span class="contact-item" style="display: flex; align-items: center;">
                        <i class="fa-solid fa-clock" style="color: #806393; margin-right: 22px;"></i>
                        <span>Mon-Sat 8:00am to 11:00pm</span>
                    </span>
                    <span class="contact-item" style="display: flex; align-items: center;">
                        <i class="fa-solid fa-envelope" style="color: #806393; margin-right: 15px;"></i>
                        <span>quickrentz.main@gmail.com</span>
                    </span>
                    <span class="contact-item" style="display: flex; align-items: center;">
                        <i class="fa-solid fa-phone" style="color: #806393; margin-right: 10px;"></i>
                        <span>+63 9693568001 / 939-54-72</span>
                    </span>
                </div>


                <div class="col-md-3" id="div4">
                    <h2 style="margin-bottom: 20px;">Newsletter</h2>
                    <!-- <p>Subscribe for the new articles</p> -->
                    <input type="text" placeholder="Email Address" style="border-radius: 10px; text-align: center;">
                </div>
                <div class="col-md-12" id="div5">
                    <hr>
                    <div class="social-icon" style="background-color: #06010C;">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                    <div class="social-icon" style="background-color: #06010C;">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="social-icon" style="background-color: #06010C;">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <p style="margin-top: 20px;">&copy; 2023 QuickRentz. All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </footer>


</body>

</html>