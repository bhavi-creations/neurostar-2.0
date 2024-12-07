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
                    <li><a class="nav-link scrollto " href="about.php">About Us</a></li>
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
                    <li><a class="nav-link scrollto active" href="doctor.php">Doctors</a></li>
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


    <main id="main">

    <section class="">

<div class="container">
    <h2 class="docHead">Presenting Our Esteemed Specialists.</h2>
    <p class="docPara mb-5">With their exceptional expertise and unwavering dedication, our specialists are
        committed to
        providing outstanding care and innovative treatments for all your neurological needs.
    </p>
</div>

<div class="container my-4">
    <div class="row gx-4 gy-4">

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/ashokkumar.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. M. Ashok Kumar</p>
                <p class="doc_card_small_text">M.B.B.S., D.A., M.S.(GEN)</p>
                <p class="doc_card_small_text">M.Ch. (Neuro Surgery)</p>
                <p class="doc_card_small_text">Brain & Spine Surgeon</p>
                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Neuro Surgery </p>
                    <p class="doc_card_small_text">Spinalcord Surgery </p>
                    <p class="doc_card_small_text">Neuro Microscope Surgery </p>
                    <p class="doc_card_small_text">Neuro Navigation Surgery</p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/sasthrulu.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">DR.G.V.B.R. Sasthurlu</p>
                <p class="doc_card_small_text">B.D.S, M.D.S. Oral &</p>
                <p class="doc_card_small_text">Maxillofacial Surgeon & </p>
                <p class="doc_card_small_text">Implanto logist</p>
                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Jawbone & Tumor Surgery </p>
                    <p class="doc_card_small_text">Advanced Dental Dentures </p>
                    <p class="doc_card_small_text">Implants </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4  col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/ratnabushan.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">DR. Ratna Bhushan </p>
                <p class="doc_card_small_text">B.D.S, M.D.S. Oral &</p>
                <p class="doc_card_small_text">M.B.B.S., M.S., M.Ch., </p>
                <p class="doc_card_small_text d-none d-md-block">(Plastic & Cosmetic Surgery)</p>
                <p class="doc_card_small_text d-md-none">(Plastic & </p>
                <p class="doc_card_small_text  d-md-none"> Cosmetic Surgery)</p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">All type of Plastic Surgeries </p>
                    <p class="doc_card_small_text">Liposuction </p>
                    <p class="doc_card_small_text"> Cosmoteic Surgery</p>
                    <p class="doc_card_small_text"> Face Lift</p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/kirankumar.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">DR. Kiran Kumar vale</p>
                <p class="doc_card_small_text">M.B.B.S., M.S, General </p>
                <p class="doc_card_small_text">Surgery PDCC in Surgical </p>
                <p class="doc_card_small_text">Gastroenterology SVIMS </p>
                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">in Tirupathi</p>
                    <p class="doc_card_small_text">All type of gall  </p>
                    <p class="doc_card_small_text"> bladder & stomach</p>
                    <p class="doc_card_small_text">related & digestive </p>
                    <p class="doc_card_small_text">related surgeries </p>
                    <p class="doc_card_small_text">done by  </p>
                    <p class="doc_card_small_text">laparoscopic method </p>
                     

                      
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/ramakrishna.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Rama Krishna</p>
                <p class="doc_card_small_text">  M.S. (Ortho),</p>
                <p class="doc_card_small_text"> Consultant Orthopedic </p>
                <p class="doc_card_small_text">Surgeon   Fellowship</p>
                <p class="doc_card_small_text"> in Joint Replacement,  </p>

                <p class="doc_card_small_text">  Surgery  & Rheumatology   </p>
                 


                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
               
                    <p class="doc_card_small_text"> knee &joint replacement
                    </p>
                    <p class="doc_card_small_text">keyhole surgeries </p>
                    <p class="doc_card_small_text">arthritis </p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>
                                 
        <div class="col-6 col-md-4  col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/athilisuryakanth.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Athili Surya Kanth </p>

                <p class="doc_card_small_text">MD., General Medicine </p>
                <p class="doc_card_small_text">Fellowship in 2D Echo & </p>
                <p class="doc_card_small_text"> Infectious Diseases </p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Heart related tests </p>
                    <p class="doc_card_small_text"> & scans, all type of  </p>
                    <p class="doc_card_small_text"> fevers & BP,sugar</p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>



        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/laxmikiran.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. M. lakshmi Kiran</p>
                <p class="doc_card_small_text">MS, DGO (Gynecologist)</p>
                <p class="doc_card_small_text"> </p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Normal delivery </p>
                    <p class="doc_card_small_text">cesarean  </p>
                    <p class="doc_card_small_text">uterus tumor surgery  </p>
                    <p class="doc_card_small_text">ovary tumour surgery   </p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/dani.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. G. Dani</p>
                <p class="doc_card_small_text">MBBS DA (FIICM)</p>
                <p class="doc_card_small_text">Intensivist & Anesthetist</p>
                <p class="doc_card_small_text"> </p>
                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text"> Ultrasound guided </p>
                    <p class="doc_card_small_text"> & pain management</p>
                    <p class="doc_card_small_text">emergency air   </p>
                    <p class="doc_card_small_text">  way specialist </p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/katan.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. V. Katan </p>
                <p class="doc_card_small_text">MBBS, DPM (Psychiatrist)</p>
                <p class="doc_card_small_text">M.B.B.S., M.S., M.Ch., </p>
                <p class="doc_card_small_text d-none d-md-block">(Plastic & Cosmetic Surgery)</p>
                <p class="doc_card_small_text   d-md-none">(Plastic & Cosmetic </p>
                <p class="doc_card_small_text d-md-none"> Surgery)</p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text"> Depression</p>
                    <p class="doc_card_small_text">Stress </p>
                    <p class="doc_card_small_text"> Insomnia</p>
                    <p class="doc_card_small_text">De-addiction </p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/akhila.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Akhila .S</p>
                <p class="doc_card_small_text">MD (Psychiatrist) </p>
                
                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    
                    <p class="doc_card_small_text">Skijofreniya </p>
                    <p class="doc_card_small_text">De-addiction </p>
                    <p class="doc_card_small_text">Autism </p>
                    <p class="doc_card_small_text">OCD </p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/praveenath.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. G. Praveennath </p>

                <p class="doc_card_small_text d-none d-md-block">M.B.B.S., DNB </p>
                <p class="doc_card_small_text d-none d-md-block">(NITRD, NEW DELHI), </p>
                <p class="doc_card_small_text d-none d-md-block  d-xl-none d-xxl-block">MNANS, FCCS Pulmonologist </p>

                <p class="doc_card_small_text d-md-none">M.B.B.S., DNB </p>
                <p class="doc_card_small_text d-md-none">(NITRD, NEW DELHI),</p>
                <p class="doc_card_small_text d-md-none  d-xl-block d-xxl-none">MNANS, </p>
                <p class="doc_card_small_text d-md-none d-xl-block d-xxl-none">FCCS Pulmonologist </p>


                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Tuberculosis(TB) </p>
                    <p class="doc_card_small_text">Bronchial asthama                               </p>
                    <p class="doc_card_small_text"> pulmonary asthama (PH)                                 </p>
                    <p class="doc_card_small_text"> lung cancer  </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/laxmanprasad.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. G. Laxman Prasad</p>
                <p class="doc_card_small_text">M.S.(E.N.T) </p>
            
                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                     
                    <p class="doc_card_small_text">  Sinus surgery</p>
                    <p class="doc_card_small_text"> Ear Surgery                                 </p>
                    <p class="doc_card_small_text"> Thyroid</p>
                    <p class="doc_card_small_text">All problems of  </p>
                    <p class="doc_card_small_text"> EAR, NOSE, THROAT</p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>



        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/harithasree.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Ch. Haritha Sree </p>

                <p class="doc_card_small_text d-none d-md-block  d-xl-none d-xxl-block">MBBS, MD (Pulmonary Medicine) </p>      

                
                <p class="doc_card_small_text   d-md-none  d-xl-block d-xxl-none">MBBS, MD (Pulmonary </p>
                <p class="doc_card_small_text   d-md-none  d-xl-block d-xxl-none"> Medicine) </p>

                <p class="doc_card_small_text  d-none d-md-block">Consultant & interventional </p>

                <p class="doc_card_small_text d-md-none">Consultant &  </p>
                <p class="doc_card_small_text d-md-none">  interventional </p>


                <p class="doc_card_small_text"> Pulmonologist</p>





                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">TB </p>
                    <p class="doc_card_small_text">Pulmonary embolism </p>
                    <p class="doc_card_small_text">lungs fungal infection </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/praveenrevu.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Praveen Revu </p>

                <p class="doc_card_small_text">MD (Gen medicine), </p>
                <p class="doc_card_small_text">DM (Nephrology)</p>
              

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Chronic kidney disease </p>
                    <p class="doc_card_small_text">hemodialysis </p>
                    <p class="doc_card_small_text">kidney failure                                 </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/sunilkumar.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. N. Sunil Kumar</p>

                <p class="doc_card_small_text">MBBS, MD(Radiodiagnosis) </p>
                <p class="doc_card_small_text">Consultant Radiologist</p>
                 

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text"> Ultra sound</p>
                    <p class="doc_card_small_text">Color Dlopper </p>
                    <p class="doc_card_small_text">C.T Guided Biopsy </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/sridhar.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Sridhar</p>

                <p class="doc_card_small_text d-none d-md-block d-xl-none d-xxl-block">M.B.B.S, DCH (Gold medalist) </p>
                <p class="doc_card_small_text   d-md-none d-xl-block d-xxl-none">M.B.B.S, DCH </p>
                <p class="doc_card_small_text   d-md-none  d-xl-block d-xxl-none"> (Gold medalist) </p>

                <p class="doc_card_small_text">consultant children &</p>
                <p class="doc_card_small_text"> Newborn specialist</p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">All type  of</p>
                    <p class="doc_card_small_text">pediatric problems </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/madhavreddy.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Madhav Reddy</p>

                <p class="doc_card_small_text">Spine Surgeon, </p>
                <p class="doc_card_small_text">MBBS MS (Ortho),</p>
                <p class="doc_card_small_text">DNB (ortho) FISS, FESS </p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Spine surgery                                 </p>
                    <p class="doc_card_small_text">Endoscopic spine surgery    </p>
                 
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/bezawadasathish.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Bezwada satish</p>

                <p class="doc_card_small_text">Urologist </p>
               

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text"> Kidney Stones</p>
                    <p class="doc_card_small_text">Bladder Disorders </p>
                    <p class="doc_card_small_text">Prostate Surgeries </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>



        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/harikarevu.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Harika Revu</p>

                
                <p class="doc_card_small_text">MBBS (Gold Medalist),  </p>
                    <p class="doc_card_small_text">MS (General Surgery) </p>
                    <p class="doc_card_small_text"> (AMC Vizag)</p>



                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                 

                    <p class="doc_card_small_text">TB</p>
                <p class="doc_card_small_text"> Pulmonary embolism</p>
                <p class="doc_card_small_text">lungs fungal infection </p>

                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/aravind.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Aravind </p>

                <p class="doc_card_small_text">MBBS, </p>
                <p class="doc_card_small_text">MD General Medicine</p>
                <p class="doc_card_small_text"> </p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Chronic kidney disease </p>
                    <p class="doc_card_small_text">hemodialysis </p>
                    <p class="doc_card_small_text">kidney failure </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/chandra.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Chandra Sekhar Reddy</p>

                

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                <p class="doc_card_small_text">Ultra sound </p>
                <p class="doc_card_small_text">Color Dlopper </p>
                <p class="doc_card_small_text">C.T Guided Biopsy </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/pavani.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Pavani </p>

                <p class="doc_card_small_text d-none d-md-block">B.D.S., “M.D.S., Pedodontist, </p>
                <p class="doc_card_small_text  d-none d-md-block">PGDCC (Facial Aesthetic) </p>
                <p class="doc_card_small_text  d-none d-md-block d-xl-none d-xxl-block">Masters in Permanent Makeup,</p>
                <p class="doc_card_small_text  d-none d-md-block"> FFA(Fellowship</p>
                <p class="doc_card_small_text  d-none d-md-block d-xl-none d-xxl-block"> in Facial Aesthetics) (IEB UK)</p>




                <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none">Masters in Permanent </p>
                <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none"> Makeup, in Facial</p>
                <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none"> Aesthetics) (IEB UK)</p>






                <p class="doc_card_small_text    d-md-none">B.D.S., “M.D.S.,</p>
                <p class="doc_card_small_text    d-md-none">Pedodontist, PGDCC </p>
                <p class="doc_card_small_text    d-md-none">(Facial Aesthetic)</p>
                <p class="doc_card_small_text    d-md-none"> Masters in Permanent</p>
                <p class="doc_card_small_text    d-md-none">Makeup, FFA</p>
                <p class="doc_card_small_text    d-md-none"> (Fellowship in Facial</p>
                <p class="doc_card_small_text    d-md-none">Aesthetics) (IEB UK)</p>


                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">All type of  </p>
                    <p class="doc_card_small_text">pediatric problems </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/navyajothula.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Navya Jyothula </p>

                <p class="doc_card_small_text">BDS, PGDCC, </p>
                <p class="doc_card_small_text"> Diploma in technology, </p>
                <p class="doc_card_small_text">Masters in permanent </p>
                <p class="doc_card_small_text">makeup FFA </p>

                <p class="doc_card_small_text d-none d-md-block d-xl-none d-xxl-block">(fellowship in facial cosmetology) </p>

                <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none">(fellowship in </p>
                <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none"> facial cosmetology) </p>



                <p class="doc_card_small_text   d-md-none">(fellowship in </p>
                <p class="doc_card_small_text   d-md-none"> facial cosmetology) </p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                    <p class="doc_card_small_text">Spine surgery </p>
                    <p class="doc_card_small_text">Endoscopic Spine Surgery </p>
                    
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-3 col-xl-2">
            <img src="assets/img/docotrs/sontoshi.png" alt="" class="img-fluid">
            <div class="doc_card_box_equp py-2 text-center">
                <p class="doc_name_card">Dr. Santoshi </p>

                <p class="doc_card_small_text">MBBS, DGO Fellowship in </p>
                <p class="doc_card_small_text">Reproductive medicine</p>
                <p class="doc_card_small_text d-none d-md-block">fellowship in Minimal access </p>
                <p class="doc_card_small_text  d-none d-md-block d-xl-none d-xxl-block">surgery, Cosmetic Gynecologist </p>

                <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none">surgery, Cosmetic </p>
                <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none"> Gynecologist </p>



                <p class="doc_card_small_text    d-md-none">fellowship in </p>
                <p class="doc_card_small_text    d-md-none"> Minimal access </p>
                <p class="doc_card_small_text    d-md-none">surgery, Cosmetic </p>
                <p class="doc_card_small_text   d-md-none"> Gynecologist </p>

                <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                <div class="dropdown-content" style="display: none;">
                <p class="doc_card_small_text"> Kidney Stones</p>
                    <p class="doc_card_small_text">Bladder Disorders </p>
                    <p class="doc_card_small_text">Prostate Surgeries </p>
                    <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                </div>
            </div>
        </div>



    </div>
</div>



<script>
    function toggleDropdown(element) {
        // Get the next sibling (dropdown content)
        const dropdownContent = element.nextElementSibling;

        if (dropdownContent && (dropdownContent.style.display === "none" || dropdownContent.style.display === "")) {
            dropdownContent.style.display = "block"; // Show the dropdown content
            element.style.display = "none"; // Hide the "View More" button
        } else if (dropdownContent) {
            dropdownContent.style.display = "none"; // Hide the dropdown content
            element.style.display = "block"; // Show the "View More" button
        }
    }
</script>
</section>

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

    <script src="assets/js/main.js"></script>

</body>

</html>