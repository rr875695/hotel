<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <title>Hotel-About</title>
    <?php require('include/links.php');?>
    <style>
        .box:hover{
            border-top-color: var(--teal) !important ;
        }
    </style>
</head>

<body>

    <?php require('include/header.php') ?>
  
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Non repellendus quis sint sed <br> dolorum veniam beatae 
             commodi exercitationem numquam consequuntur!
        </p>
    </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
            <h3 class="mb-3">
                Lorem ipsum dolor sit.
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nobis quidem, at officiis ullam consequatur magni repellat.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nobis quidem, at officiis ullam consequatur magni repellat
            </p>
        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
            <img src="images/rooms/pexels-pixabay-164595.jpg" class="w-100">
        </div>
    </div>
  </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-light rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/rooms/pexels-pixabay-237371.jpg" width="70px">
                <h4 class="mt-3">100+ Rooms</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-light rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/rooms/pexels-pixabay-237371.jpg" width="70px">
                <h4 class="mt-3">200+ Customers</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-light rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/rooms/pexels-pixabay-237371.jpg" width="70px">
                <h4 class="mt-3">150+ Reviews</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-light rounded shadow p-4 border-top border-4 text-center box">
                <img src="images/rooms/pexels-pixabay-237371.jpg" width="70px">
                <h4 class="mt-3">200+ staff</h4>
            </div>
        </div>
    </div>

</div>

<h3 class="my-5 fw-bold h-font text-center">Management Team</h3>

        <div class="container px-4">
            <div class="swiper mySwipper">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                        <img src="images/rooms/pexels-pixabay-164595.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                        <img src="images/rooms/pexels-pixabay-164595.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                        <img src="images/rooms/pexels-pixabay-164595.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                        <img src="images/rooms/pexels-pixabay-164595.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                        <img src="images/rooms/pexels-pixabay-164595.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                    <div class="swiper-slide bg-light text-center overflow-hidden rounded">
                        <img src="images/rooms/pexels-pixabay-164595.jpg" class="w-100">
                        <h5 class="mt-2">Random Name</h5>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


    <!-- Footer -->
 <?php require('include/footer.php'); ?>


        <script src="https://unplug.com/swiper/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".muSwiper", {
                slidesPerView: 4,
                spaceBetween: 40,
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        </script>

</body>
</html>