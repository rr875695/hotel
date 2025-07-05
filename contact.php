<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-Contact</title>
    <?php require('include/links.php'); ?>
</head>

<body>

    <?php require('include/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Non repellendus quis sint sed <br> dolorum veniam beatae
            commodi exercitationem numquam consequuntur!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">

                <div class="bg-light rounded shadow p-4 ">
                    <iframe class="w-100 rounded mb-4" height="320"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.528777365046!2d85.8623546747605!3d26.179471891217585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edb75b85cc6827%3A0x6323aca3b97a9fe1!2sDarbhanga%20College%20of%20Engineering%2C%20Darbhanga!5e0!3m2!1sen!2sus!4v1712638703342!5m2!1sen!2sus"
                        loading="lazy"></iframe>

                    <h5>Address</h5>
                    <a href="#" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> Hotel Darbhanga
                    </a>

                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +919876543210" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +919876543210</a>
                    <br>
                    <a href="tel: +919876543210" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +919876543210</a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: rr875695@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> rr875695@mail.com</a>

                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2 ">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-light rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

        <!-- Footer -->
        <?php require('include/footer.php'); ?>


</body>

</html>