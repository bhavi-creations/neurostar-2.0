<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Neurostar MultiSpeciality Hospital</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/neurostar-logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style1.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and dependencies -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

</head>


<body>



    <?php include('./mini_header.php'); ?>

    <header id="header1" class="main_images onlypad">
        <div class="container d-flex align-items-center">
            <div class="logo-text-container d-flex align-items-center" style="z-index: 999;">
                <a href="index.php">
                    <img src="assets/img/neurostar-logo.png" class="img-fluid logokaclass" alt="">
                </a>
            </div>

            <nav id="navbar" class="navbar order-lg-0">
                <i class="bi bi-list mobile-nav-toggle"></i>
                <ul>

                    <li><a class="nav-link scrollto " href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="about.php">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu services_drop_menu mt-3" aria-labelledby="servicesDropdown"
                            style="width:800px;">
                            <div class="row  ">
                                <div class="col-md-4">
                                    <li><a class="dropdown-item services_drop" href="neuroSurgery.php">Neuro Surgery</a>
                                    </li>
                                    <li><a class="dropdown-item services_drop" href="neurology.php">Neurology</a>
                                    </li>
                                    <li><a class="dropdown-item services_drop" href="accidentsTrauma.php">Accidents &
                                            Trauma Care</a></li>
                                    <li><a class="dropdown-item services_drop" href="orthopaedicSurgery.php">Orthopaedic
                                            Surgery</a></li>
                                    <li><a class="dropdown-item services_drop" href="generalMedicine.php">General
                                            Medicine</a></li>
                                </div>
                                <div class="col-md-4">
                                    <li><a class="dropdown-item services_drop" href="criticalCare.php">Critical Care</a>
                                    </li>
                                    <li><a class="dropdown-item services_drop" href="neuroPsychiatric.php">Neuro
                                            Psychiatric</a></li>
                                    <li><a class="dropdown-item services_drop" href="dental.php">Dental</a>
                                    </li>
                                    <li><a class="dropdown-item services_drop" href="maxilloFaciaSurgery.php">Maxillo facial
                                            Surgery</a></li>
                                    <li><a class="dropdown-item services_drop" href="plasticCosmetic.php">Plastic &
                                            Cosmetic surgery</a></li>
                                </div>
                                <div class="col-md-4">
                                    <li><a class="dropdown-item services_drop" href="pediatrics.php">Pediatrics</a>
                                    </li>
                                    <li><a class="dropdown-item services_drop"
                                            href="physiotherapy.php">Physiotherapy</a></li>
                                    <li><a class="dropdown-item services_drop"
                                            href="radiology.php">Radiology</a></li>
                                    <li><a class="dropdown-item services_drop" href="neuroRehabilitation.php">Neuro
                                            rehabilitation</a></li>
                                    <li><a class="dropdown-item services_drop" href="generalLaproscopic.php">General &
                                            Laproscopic Surgery</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="doctor.php">Doctors</a></li>
                    <li><a class="nav-link" href="blogs.php">Blogs</a></li>
                    <!-- <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li> -->
                    <li><a class="nav-link active" href="contact.php">Contact Us</a></li>
                    <!-- <li><a class="nav-link scrollto" href="testimonials.php">What Patients Say</a></li> -->
                    <li><a href="appointment.php" class="appointment-btn scrollto d-lg-none" style="z-index: 999;">
                            Appointment
                        </a></li>
                </ul>
            </nav>

            <a href="appointment.php" class="appointment-btn scrollto d-none d-lg-block" style="z-index: 999;">
                Appointment
            </a>
        </div>


        <script>
            // jQuery needed to manage hover and click behavior
            $(document).ready(function() {
                // Ensure that the dropdown opens on hover
                $('#servicesDropdown').hover(function() {
                    $(this).dropdown('toggle');
                });

                // Make sure the dropdown also works on click
                $('#servicesDropdown').click(function(e) {
                    e.stopPropagation(); // Prevents the click from closing the dropdown immediately
                    window.location.href = $(this).attr('href'); // Redirect to the link
                });
            });
        </script>
    </header>
    <marquee height="30" direction="left" class="markFull" loop="3" behavior="1">
        <ul class="markul">
            <li class="markLi">
                 Specialized Therapy & Support - supported by well-trained front line staff and Medicare facilities.
            </li>
            <li class="markLi">
                24/7 Emergency Care - emergency room doctors, nurses, and other support staff Available 24/7 </li>
            <li class="markLi">
                Medical Treatment & Surgical - Highly qualified panel of doctors, trained technical staff, best nursing
                care & well equipped diagnostic services </li>
        </ul>
    </marquee>




    <main id="main">

        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2 class="docHead">Contact</h2>
                </div>

            </div>



            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-6 order-1 order-lg-0">

                        <div class="row d-flex flex-row justify-content-center">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>
                                      

                                        67-19-1, opp. Ashram School, <br> Nagamalli Thota, <br> Kakinada, 533003
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3 style="font-family:Mulish;">Email Us</h3>
                                    <p style="font-family:Mulish;"> info@neurostarhospital.com </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3 style="font-family:Mulish;">Call Us</h3>
                                    <p style="font-family:Mulish;"> +91 9121476777</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 order-0 order-lg-1 need_space_dowm">
                        <form action="contactform.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="contactname" class="form-control" id="name" placeholder="Your Name" required="" style="font-family:Mulish;">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control just_font" name="contactemail" id="email" placeholder="Your Email" style="font-family:Mulish;" required="">
                                </div>

                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="contactsubject" id="subject" placeholder="Subject" style="font-family:Mulish;">
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="contactnumber" id="number" placeholder="Phone" required="" style="font-family:Mulish;">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="contactmessage" rows="7" placeholder="Message" required=" " style="font-family:Mulish;"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>



                </div>

            </div>
        </section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3815.756788432908!2d82.239668!3d16.9865095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDU5JzExLjQiTiA4MsKwMTQnMjIuOCJF!5e0!3m2!1sen!2sin!4v1727955954785!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>


    <!-- ======= Footer ======= -->

    <?php include('./footer.php'); ?>


    <!-- Scroll Up Button  -->
    <button id="scrollBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up "></i></button>

    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Optional, smooth scrolling animation
            });
        }

        // Show scroll button when scrolling down
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollBtn").style.display = "block";
            } else {
                document.getElementById("scrollBtn").style.display = "none";
            }
        }
    </script>

    <style>
        #scrollBtn {
            display: none;
            /* Initially hide the button */
            position: fixed;
            /* Fix the position of the button */
            bottom: 20px;
            /* Adjust the bottom distance */
            right: 20px;
            /* Adjust the right distance */
            z-index: 999;
            /* Set a high z-index to ensure the button is on top */
            padding: 10px 15px;
            background-color: #01539D;
            ;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>

    <a href="https://api.whatsapp.com/send?phone=919885943399" style="color: #fff;" class="whatsapp-link" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


    <div id="preloader"></div>
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>