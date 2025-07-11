<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-Rooms</title>
    <?php require('include/links.php'); ?>
</head>

<body>

    <?php require('include/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 " id="filterDropdown">
                            <div class="border bg-white p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">check availability</h5>
                                <label class="form-label">check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-white p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">facility 1</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">facility 2</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">facility 3</label>
                                </div>
                            </div>
                            <div class="border bg-white p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Childern</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/pexels-pixabay-164595.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                        <h6 class="mb-4">₹200 per night</h6>
                        <a href="#" class="btn btn-sn w-100 text-white custom-bg shadow-none mb-2 ">Book Now</a>
                        <a href="#" class="btn btn-sn w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/pexels-pixabay-164595.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                        <h6 class="mb-4">₹200 per night</h6>
                        <a href="#" class="btn btn-sn w-100 text-white custom-bg shadow-none mb-2 ">Book Now</a>
                        <a href="#" class="btn btn-sn w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/pexels-pixabay-164595.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                    4 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                        <h6 class="mb-4">₹200 per night</h6>
                        <a href="#" class="btn btn-sn w-100 text-white custom-bg shadow-none mb-2 ">Book Now</a>
                        <a href="#" class="btn btn-sn w-100 btn-outline-dark shadow-none">More details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Footer -->
    <?php require('include/footer.php'); ?>


</body>

</html>