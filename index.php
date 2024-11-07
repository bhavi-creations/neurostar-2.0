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
 
     -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 </head>


 <body>

     <!-- ======= Header ======= -->
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

                     <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
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
                     <li><a class="nav-link" href="contact.php">Contact Us</a></li>
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
                 Specialised Therapy & Support - supported by well trained front line staff and Medicare facilities.
             </li>
             <li class="markLi">
                 24/7 Emergency Care - emergency room doctors, nurses, and other support staff Available 24/7 </li>
             <li class="markLi">
                 Medical Treatment & Surgical - Highly qualified panel of doctors, trained technical staff, best nursing
                 care & well equipped diagnostic services </li>
         </ul>
     </marquee>

     <div class="bannerer">
         <div class="container-fluid">
             <div class="row">
                 <div class='csslider1 autoplay '>
                     <input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide'>
                     <input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide'>
                     <input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide'>
                     <input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
                     <input name="cs_anchor1" id='cs_pause1' type="radio" class='cs_anchor'>
                     <ul>
                         <div style="width: 100%; visibility: hidden;">
                             <img src="http://cssslider.com/sliders/pen/images/buns.jpg" style="width: 100%;">
                         </div>


                         <li class='num0 img'>
                             <a href="#" target=""><img src='assets/img/sliders/1.png' alt='Buns' /> </a>
                         </li>
                         <li class='num1 img'>
                             <a href="#" target=""><img src='assets/img/sliders/2.png ' alt='Lemon pie' /> </a>

                         </li>
                         <li class='num2 img'>
                             <a href="#" target=""><img src='assets/img/sliders/new.jpg' alt='Croissant' /> </a>

                         </li>

                     </ul>


                     <div class='cs_arrowprev'>
                         <label class='num0' for='cs_slide1_0'></label>
                         <label class='num1' for='cs_slide1_1'></label>
                         <label class='num2' for='cs_slide1_2'></label>
                     </div>
                     <div class='cs_arrownext'>
                         <label class='num0' for='cs_slide1_0'></label>
                         <label class='num1' for='cs_slide1_1'></label>
                         <label class='num2' for='cs_slide1_2'></label>
                     </div>

                 </div>

             </div>
         </div>
     </div>

     <main id="main">

         <section class="mt-2 Abouthome">
             <div class="container">
                 <h2 class="docHead">About Us</h2>
                 <p class="docPara mb-3">"NEUROSTAR Hospital is dedicated to providing cutting-edge neurological care,
                     combining advanced technology with compassionate service to enhance the well-being of our
                     patients."
                 </p>
                 <div class="row splcrad mt-4">
                     <div class="col-md-6">
                         <img src="assets/img/srinivasa/about.png" class="img-fluid" alt="">
                     </div>
                     <div class="col-md-6">
                         <p class="nuero">“At NEUROSTAR Hospital, our primary focus is patient-centered care, delivered
                             by a dedicated
                             team of professionals specializing in neuroscience. We strive to provide exceptional
                             treatment for brain and spine conditions through collaborative teamwork, ensuring
                             top-quality services at an affordable cost, all while upholding the highest standards of
                             medical practice for your optimal recovery.”
                         </p>
                         <p class="nuero">"We provide comprehensive treatment for a wide spectrum of neurological health
                             issues through our dedicated multidisciplinary team of expert surgeons and physicians,
                             meticulously selected from India’s leading neuroscience institutions. Our team includes
                             highly skilled neurologists, neurosurgeons, and other specialized medical professionals who
                             collaborate to deliver personalized care tailored to each patient's unique needs.Equipped
                             with the latest advancements in medical technology and supported by state-of-the-art
                             diagnostic and surgical facilities, we are committed to ensuring not only prompt and
                             effective recovery but also a compassionate and patient-centered approach. "
                         </p>
                     </div>


                 </div>
                 <div class="row splcrad">
                     <div class="col-md-4">
                         <div class="abtop">
                             <img src="assets/img/gallery/1.png" alt="" class="abtopimg">
                         </div>
                         <h4 class="Intensive">Intensive care
                         </h4>
                         <p class="panel">Neurostar Hospital boasts a panel of highly esteemed specialists across all
                             medical and
                             surgical disciplines.
                         </p>
                     </div>
                     <div class="col-md-4">
                         <div class="abtop">
                             <img src="assets/img/gallery/2.png" alt="" class="abtopimg">
                         </div>
                         <h4 class="Intensive">Specialised Support Service

                         </h4>
                         <p class="panel">They excel in specialties such as Orthopaedics, Neurology, Urology,
                             Gynecology, Oncology, and more.
                         </p>
                     </div>
                     <div class="col-md-4">
                         <div class="abtop">
                             <img src="assets/img/gallery/3.png" alt="" class="abtopimg">
                         </div>
                         <h4 class="Intensive">Medical & Surgical

                         </h4>
                         <p class="panel">A highly qualified team of doctors, skilled staff, excellent nursing care, and
                             advanced diagnostic services.
                         </p>
                     </div>


                 </div>
             </div>
         </section>





         <section class="">
             <div class="container">
                 <h2 class="docHead">Presenting Our Esteemed Specialists.</h2>
                 <p class="docPara mb-5">With their exceptional expertise and unwavering dedication, our specialists are
                     committed to
                     providing outstanding care and innovative treatments for all your neurological needs.
                 </p>
                 <div class="row splcrad mt-4">
                     <div class="card col-md-3 col-12">
                         <div class="first-content">
                             <img src="assets/img/srinivasa/1.png" alt="" class="splimg1 img-fluid">
                             <h6 class="drFace">Dr.M.Ashok <br> kumar</h6>
                         </div>
                         <div class="second-content">
                             <img src="assets/img/srinivasa/stethoscope.png" alt="" class="stethascope img-fluid">
                             <h5 class="drname">Dr.M.Ashok kumar</h5>
                             <p class="drstudy">M.B.B.S., D.A., M.S.(GEN),M.Ch.(Neuro Surgery) Consultant Brain & Spine
                                 Surgeon
                             </p>
                             <img src="assets/img/srinivasa/pulse.png" alt="" class="pulse img-fluid">
                         </div>


                     </div>
                     <div class="card col-md-3 col-12">
                         <div class="first-content">
                             <img src="assets/img/srinivasa/2.png" alt="" class="splimg2 img-fluid">
                             <h6 class="drFace"> DR. Kiran Kumar Vale</h6>

                         </div>
                         <div class="second-content">
                             <img src="assets/img/srinivasa/stethoscope.png" alt="" class="stethascope img-fluid">
                             <h5 class="drname">DR. Kiran Kumar Vale
                             </h5>
                             <p class="drstudy">MMBS, MS, GENERAL SURGERY, PDCC in surgical gastroenterology SVIMS
                                 tirupati
                             </p>
                             <img src="assets/img/srinivasa/pulse.png" alt="" class="pulse img-fluid">
                         </div>


                     </div>
                     <div class="card col-md-3 col-12">
                         <div class="first-content">
                             <img src="assets/img/srinivasa/3.png" alt="" class="splimg img-fluid">
                             <h6 class="drFace"> DR. G.V.N.B.R Sasthrulu</h6>

                         </div>
                         <div class="second-content">
                             <img src="assets/img/srinivasa/stethoscope.png" alt="" class="stethascope img-fluid">
                             <h5 class="drname">DR. G.V.N.B.R Sasthrulu</h5>
                             <p class="drstudy">B.D.S, M.D.S, GENERAL SURGERY, Consultant Oral & Maxillofacial Surgeon &
                                 Implantologist
                             </p>
                             <img src="assets/img/srinivasa/pulse.png" alt="" class="pulsee img-fluid">
                         </div>


                     </div>
                     <div class="card col-md-3 col-12">
                         <div class="first-content">
                             <img src="assets/img/srinivasa/4.png" alt="" class="splimg3 img-fluid">
                             <h6 class="drFace"> DR.Athili Suryakanth</h6>

                         </div>
                         <div class="second-content">
                             <img src="assets/img/srinivasa/stethoscope.png" alt="" class="stethascope img-fluid">
                             <h5 class="drname">DR.Athili Suryakanth</h5>
                             <p class="drstudy">MD. General Medicine
                             </p>
                             <img src="assets/img/srinivasa/pulse.png" alt="" class="pulse img-fluid">
                         </div>


                     </div>


                 </div>

                 <div class="row splcrad mt-5">
                     <div class="card col-md-3 col-12">
                         <div class="first-content">
                             <img src="assets/img/srinivasa/5.png" alt="" class="splimg4 img-fluid">
                             <h6 class="drFace"> DR. Ratna <br> Bhushan</h6>

                         </div>
                         <div class="second-content">
                             <img src="assets/img/srinivasa/stethoscope.png" alt="" class="stethascope img-fluid">
                             <h5 class="drname">DR. Ratna Bhushan</h5>
                             <p class="drstudy">Plastic & Cosmetic Surgeon M.B.B.S.,M.S.,M.CH.,
                             </p>
                             <img src="assets/img/srinivasa/pulse.png" alt="" class="pulse img-fluid">
                         </div>


                     </div>
                     <div class="card col-md-3 col-12">
                         <div class="first-content">
                             <img src="assets/img/srinivasa/6.png" alt="" class="splimg5 img-fluid">
                             <h6 class="drFace"> DR.Rama <br> Krishna</h6>

                         </div>
                         <div class="second-content">
                             <img src="assets/img/srinivasa/stethoscope.png" alt="" class="stethascope img-fluid">
                             <h5 class="drname">DR.Rama Krishna</h5>
                             <p class="drstudy">M.S (Ortho) Consultant Orthopaedic Surgeon
                             </p>
                             <img src="assets/img/srinivasa/pulse.png" alt="" class="pulse img-fluid">
                         </div>


                     </div>
                     <div class="card col-md-3 col-12">
                         <div class="first-content">
                             <img src="assets/img/srinivasa/7.png" alt="" class="splimgg img-fluid">
                             <h6 class="drFace"> DR.G Dani</h6>

                         </div>
                         <div class="second-content">
                             <img src="assets/img/srinivasa/stethoscope.png" alt="" class="stethascope img-fluid">
                             <h5 class="drname">DR.G Dani</h5>
                             <p class="drstudy">MBBS DA (FIICM) INTENSIVIST & ANESTHETIST
                             </p>
                             <img src="assets/img/srinivasa/pulse.png" alt="" class="pulse img-fluid">
                         </div>


                     </div>
                 </div>
             </div>
         </section>



         <section>


             <style>
                 .swiper-container {
                     width: 100%;
                     max-width: 1200px;
                     /* Maximum width for the slider */
                     margin: 0 auto;
                     /* Center the slider */
                 }

                 .testimonial-box {
                     background-color: #f7f7f7;
                     padding: 20px;
                     border-radius: 10px;
                     text-align: center;
                     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                 }

                 .testimonial-box p {
                     font-size: 18px;
                     line-height: 1.5;
                     margin-bottom: 10px;
                 }

                 .testimonial-box h5 {
                     font-size: 16px;
                     color: #333;
                     font-weight: bold;
                 }

                 .swiper-button-next,
                 .swiper-button-prev {
                     color: #333;
                 }

                 .swiper-pagination-bullet {
                     background-color: #333;
                 }
             </style>



             <div class="sec6">
                 <div class="testmonial">
                     <div class="container">
                         <h2 class="docHead mb-5">Testimonials</h2>
                         <div class="row testrow ">
                             <div class="col-md-12">
                                 <div class="swiper-container mySwiper">
                                     <div class="swiper-wrapper">
                                         <div class="swiper-slide">
                                             <div class="testimonial-box">
                                                 <p class="description">
                                                     "Neurostar Hospital provided top-notch care with a professional and
                                                     caring team. I felt well looked after, and my experience was positive
                                                     from start to finish."
                                                 </p>
                                                 <h3 class="title">-Bhoomika</h3>

                                             </div>
                                         </div>
                                         <div class="swiper-slide">
                                             <div class="testimonial-box">
                                                 <p class="description">
                                                     "The team at Neurostar Hospital provided exceptional care with
                                                     professionalism and empathy. My experience was seamless, and I highly
                                                     recommend their services."
                                                 </p>

                                                 <h3 class="title">-Ram </h3>
                                             </div>
                                         </div>
                                         <div class="swiper-slide">
                                             <div class="testimonial-box">
                                                 <p class="description">
                                                     "The medical team here is highly professional and caring, making me
                                                     feel comfortable and well-supported throughout my treatment. The
                                                     quality of care exceeded my expectations."
                                                 </p>
                                                 <h3 class="title">-Lakshmi</h3>
                                             </div>
                                         </div>
                                         <div class="swiper-slide">
                                             <div class="testimonial-box">
                                                 <p class="description">
                                                     "The care I received was exceptional, with a compassionate and skilled
                                                     team that made me feel at ease. I highly recommend their services for
                                                     anyone seeking quality treatment."
                                                 </p>
                                                 <h3 class="title">-Hema Latha</h3>
                                             </div>
                                         </div>


                                     </div>

                                     <!-- Pagination and Navigation Controls -->
                                     <div class="swiper-pagination"></div>
                                     <!-- <div class="swiper-button-next"></div>
                                     <div class="swiper-button-prev"></div> -->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>



             <script>
                 var swiper = new Swiper(".mySwiper", {
                     spaceBetween: 30,
                     loop: true, // Enables infinite loop
                     autoplay: {
                         delay: 3000, // Delay between slides in ms (5 seconds)
                         disableOnInteraction: false, // Keeps autoplay running even after user interaction
                     },
                     pagination: {
                         el: ".swiper-pagination",
                         clickable: true,
                     },
                     navigation: {
                         nextEl: ".swiper-button-next",
                         prevEl: ".swiper-button-prev",
                     },
                     breakpoints: {
                         // When the viewport is 0px or larger
                         0: {
                             slidesPerView: 1, // 1 slide for small devices
                         },
                         // When the viewport is 768px or larger (for medium devices)
                         768: {
                             slidesPerView: 2, // 2 slides for medium devices
                         },
                         // When the viewport is 1024px or larger (for large devices)
                         1024: {
                             slidesPerView: 3, // 3 slides for large devices
                         },
                     }
                 });
             </script>



         </section>



         <section>
             <div class="container">
                 <div class="section-title text-center">
                     <h2 class="docHead">Blogs & articles </h2>

                 </div>
             </div>
             <div class="container">
                 <div class="row">








                     <?php
                        include './db.connection/db_connection.php';

                        // Fetch latest 3 blogs with video
                        $sql = "SELECT id, title, main_content, main_image, video FROM blogs ORDER BY created_at DESC LIMIT 3";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<div class='row'>"; // Start row for card layout

                            while ($row = $result->fetch_assoc()) {
                                $blog_id = $row['id'];
                                $title = $row['title'];
                                $main_content = $row['main_content'];
                                $main_image = $row['main_image'];
                                $video = $row['video'];

                                echo "<div class='col-md-4   my-5'>"; // Create 3 equal-width columns for medium devices
                                echo "<div class='  card_blog h-100'>"; // Start card

                                // Display the blog title
                                echo "<div class='card-body'>";


                                // Display video if available
                                if (!empty($video)) {
                                    $video_path = "./admin/uploads/videos/{$video}";
                                    echo "<video class='main-video img-fluid' controls>
                    <source src='{$video_path}' type='video/mp4'>
                    Your browser does not support the video tag.
                  </video>";
                                }
                                // If no video, display main image
                                elseif (!empty($main_image)) {
                                    $main_image_path = "./admin/uploads/photos/{$main_image}";
                                    echo "<img class='card-img-top img-fluid' src='{$main_image_path}' alt='Blog Image'>";
                                }
                                echo "<h5 class='card-title my-3'>" . htmlspecialchars($title) . "</h5>";
                                // Display a short portion of the blog content
                                echo "<p class='card-text'>" . substr($main_content, 0, 90) . "...</p>";

                                // Link to full blog post
                                echo "<a href='fullblog.php?id={$blog_id}' class='btn btn-primary'>Read more</a>";

                                echo "</div>"; // End card body
                                echo "</div>"; // End card
                                echo "</div>"; // End column
                            }

                            echo "</div>"; // End row
                        } else {
                            echo "No blog posts found.";
                        }

                        $conn->close();
                        ?>


                     <div class="mt-5 d-none d-md-block">
                         <a href="blogs.php" style="text-decoration: none;">
                             <p class="view_more_btn mb-5 d-flex flex-row justify-content-start">View More<i
                                     class="fa-solid fa-arrow-right mt-1"></i></p>
                         </a>
                     </div>

                     <div class="d-flex flex-row justify-content-center mt-4">
                         <a href="blogs.php" style="text-decoration: none;">
                             <p class="view_more_btn d-md-none">View More<i class="fa-solid fa-arrow-right"></i></p>
                         </a>
                     </div>

                 </div>
             </div>
         </section>






         <section>
             <div class="container">
                 <h2 class="docHead">Top-Quality Machinery</h2>
                 <p class="docPara mb-5">Neurostar Hospital is equipped with top-quality machinery, ensuring precision and excellence in every medical procedure.
                 </p>
                 <div class="row">
                     <div class="col-md-3 scan1 py-4 text-center ">
                         <img src="assets/img/scan/1.png" alt="" class="img-fluid  ">
                         <h4 class="SCAN">CT SCAN</h4>
                     </div>
                     <div class="col-md-3 scan1 py-4  text-center "> <img src="assets/img/scan/2.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> Ultrasound 2D ECHO
                         </h4>

                     </div>
                     <div class="col-md-3 scan1 py-4 text-center "> <img src="assets/img/scan/3.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> EEG & NCS
                         </h4>
                     </div>
                     <div class="col-md-3 scan2 py-4 text-center "> <img src="assets/img/scan/4.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> Endoscopy
                         </h4>
                     </div>
                     <div class="col-md-3 scan1 py-4 text-center ">
                         <img src="assets/img/scan/5.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> X- ray
                         </h4>
                     </div>
                     <div class="col-md-3 scan1 py-4 text-center "> <img src="assets/img/scan/6.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> Neuro microscope
                         </h4>
                     </div>
                     <div class="col-md-3 scan1 py-4 text-center "> <img src="assets/img/scan/7.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> Ventilators</h4>
                     </div>
                     <div class="col-md-3 scan2 py-4 text-center "> <img src="assets/img/scan/8.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> Physiotheraphy</h4>
                     </div>
                     <div class="col-md-3 scan3 py-4 text-center ">
                         <img src="assets/img/scan/9.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> Lab</h4>
                     </div>
                     <div class="col-md-3 scan3 py-4 text-center "> <img src="assets/img/scan/10.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> electronic dental chair with rvg
                         </h4>
                     </div>
                     <div class="col-md-3 scan3 py-4 text-center "> <img src="assets/img/scan/11.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> Beonchoscopy
                         </h4>
                     </div>
                     <div class="col-md-3  py-4 text-center "> <img src="assets/img/scan/12.png" alt="" class="img-fluid">
                         <h4 class="SCAN"> 24/7 Pharmacy
                         </h4>
                     </div>
                 </div>
             </div>
         </section>






         <script>
             document.addEventListener('DOMContentLoaded', function() {
                 var swiper = new Swiper('.testimonials-slider', {
                     loop: true,
                     navigation: {
                         nextEl: '.swiper-button-next',
                         prevEl: '.swiper-button-prev',
                     },
                     pagination: {
                         el: '.swiper-pagination',
                         clickable: true,
                     },
                     autoplay: {
                         delay: 5000,
                     },
                     slidesPerView: 1, // Default slides per view (for screens < 768px)
                     breakpoints: {
                         // when window width is >= 768px
                         768: {
                             slidesPerView: 3,
                             spaceBetween: 30
                         }
                     }
                 });
             });
         </script>




     </main><!-- End #main -->

     <!-- ======= Footer ======= -->
     <?php include('./footer.php'); ?>

     <!-- End Footer -->



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
     <script>
         let currentSlide = 0;

         function moveSlide(step) {
             const slides = document.querySelectorAll('.carousel .slide');
             const totalSlides = slides.length;
             currentSlide = (currentSlide + step + totalSlides) % totalSlides;
             document.querySelector('.carousel').style.transform = `translateX(-${currentSlide * 100}%)`;
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

     <a href="https://api.whatsapp.com/send?phone=919885943399" style="color: #fff;" class="whatsapp-link"
         target="_blank">
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

     <!-- Template Main JS File -->
     <script src="assets/js/main.js"></script>



     <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
     </script>

     <script>
         $(document).ready(function() {
             $("#testimonial-slider").owlCarousel({
                 items: 3,
                 itemsDesktop: [1000, 3],
                 itemsDesktopSmall: [980, 2],
                 itemsTablet: [768, 2],
                 itemsMobile: [650, 1],
                 pagination: true,
                 navigation: false,
                 slideSpeed: 1000,
                 autoPlay: true
             });
         });
     </script>

 </body>

 </html>