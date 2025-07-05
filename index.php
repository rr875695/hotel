<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Hotel-Home</title>
    <?php require('include/links.php');?>
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }

        }
    </style>


    
</head>

<body>

    <?php require('include/header.php') ?>
  
    <!-- carousel -->

    <div class="container-fluid ">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.jpg" class="w-100 d-block ">
                </div>
                <!-- <div class="swiper-slide">
                    <img src="images/carousel/2.jpg" class="w-100 d-block ">
                </div> -->
                <div class="swiper-slide">
                    <img src="images/carousel/3.jpg" class="w-100 d-block ">
                </div>
                <!-- <div class="swiper-slide">
                    <img src="images/carousel/4.jpg" class="w-100 d-block ">
                </div> -->
                <!-- <div class="swiper-slide">
                    <img src="images/carousel/5.jpg" class="w-100 d-block ">
                </div> -->
                <div class="swiper-slide">
                    <img src="images/carousel/6.jpg" class="w-100 d-block ">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/7.jpg" class="w-100 d-block ">
                </div>

            </div>

        </div>
    </div>

    <!-- carousel ends -->


    <!-- check availability -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">check booking availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adults</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Childern</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- check availability ends -->


    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb=4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/pexels-pixabay-164595.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Ac
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/pexels-pixabay-164595.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Ac
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/pexels-pixabay-164595.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">facilities</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Ac
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sn text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sn btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Our Rooms end -->


    <!-- Our facilities -->
    <h2 class="mt-5 pt-4 mb=4 text-center fw-bold h-font">Our facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/star-fill.svg" alt="" width="80px">
                <h5 class="mt-3">Star</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sn btn-outline-dark rounded-0 fw-bold shadow-none">More facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Our facilities ends -->

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb=4 text-center fw-bold h-font">Testimonials</h2>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-light p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star-fill.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatibus earum dolore
                        nisi minima dolorum beatae, ab eos incidunt modi!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-light p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star-fill.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatibus earum dolore
                        nisi minima dolorum beatae, ab eos incidunt modi!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-light p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/features/star-fill.svg" alt="" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatibus earum dolore
                        nisi minima dolorum beatae, ab eos incidunt modi!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sn btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>

    <!-- Testimonials ends  -->

    <!-- Reach us -->

    <h2 class="mt-5 pt-4 mb=4 text-center fw-bold h-font">Reach Us</h2>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-light rounded">
                <iframe class="w-100 rounded" height="320"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.528777365046!2d85.8623546747605!3d26.179471891217585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edb75b85cc6827%3A0x6323aca3b97a9fe1!2sDarbhanga%20College%20of%20Engineering%2C%20Darbhanga!5e0!3m2!1sen!2sus!4v1712638703342!5m2!1sen!2sus"
                    loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-light p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +919876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +919876543210</a>
                    <br>
                    <a href="tel: +919876543210" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +919876543210</a>
                </div>
                <div class="bg-light p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter-x me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- Reach us ends  -->

    <!-- Footer -->

 <?php require('include/footer.php'); ?>
    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>


</body>

</html>