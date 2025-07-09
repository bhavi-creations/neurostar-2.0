 <?php
    include './db.connection/db_connection.php';

    // Fetch sliders from the database with latest first
    $query = "SELECT * FROM slider ORDER BY id DESC";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error fetching sliders: " . mysqli_error($conn));
    }

    $sliderImages = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $sliderImages[] = $row;
    }
    ?>




 <?php include('./mini_header.php'); ?>







 <!-- <div class="bannerer">
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
                             <a href="#" target=""><img src='assets/img/festivel sliders/christmas.png' alt='Buns' /> </a>
                         </li>
                         <li class='num0 img'>
                             <a href="#" target=""><img src='assets/img/sliders/1.png' alt='Buns' /> </a>
                         </li>
                         <li class='num1 img'>
                             <a href="#" target=""><img src='assets/img/sliders/2.png ' alt='Lemon pie' /> </a>
                         </li>
                         <li class='num2 img'>
                             <a href="#" target=""><img src='assets/img/sliders/3.png' alt='Croissant' /> </a>
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
     </div> -->

 <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="3000">
        <div class="carousel-indicators">
            <?php foreach ($sliderImages as $index => $slider): ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo ($index == 0) ? 'active' : ''; ?>" aria-current="true" aria-label="Slide <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner"> 
            <?php foreach ($sliderImages as $index => $slider): ?>
                <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                    <img src="./admin/uploads/sliders/<?php echo htmlspecialchars($slider['image']); ?>" class="d-block w-100" alt="Slider Image">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->

 <div id="customAutoSlider" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner .">

         <!-- <div class="carousel-item   ">
                 <a href="#" target=""><img src='assets/img/festivel sliders/neurostar.jpg' alt='newyear' class="img-fluid w-100" />
             </div> -->

         <div class="carousel-item  active  ">
             <a href="#" target=""><img src='assets/img/sliders/c2.png' alt='Buns' class="img-fluid w-100" />
         </div>

         <div class="carousel-item">
             <a href="#" target=""><img src='assets/img/sliders/c3.png ' alt='Lemon pie' class="img-fluid w-100" /> </a>
         </div>
         <div class="carousel-item">
             <a href="#" target=""><img src='assets/img/sliders/c4.png ' alt='Lemon pie' class="img-fluid w-100" /> </a>
         </div>
     </div>


     <button class="carousel-control-prev" type="button" data-bs-target="#customAutoSlider" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#customAutoSlider" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
     </button>
 </div>

 <!-- Bootstrap 5.1 and dependencies (Popper.js and Bootstrap JS) -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

 <!-- Optional: Custom JavaScript to Initialize the Carousel -->
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         // Bootstrap carousel initialization for auto sliding
         var carouselElement = document.getElementById('customAutoSlider');
         var carousel = new bootstrap.Carousel(carouselElement, {
             interval: 3000 // Set interval to 3 seconds (3000 milliseconds)
         });
     });
 </script>



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
                     <p class="nuero">"We provide comprehensive treatment for a wide spectrum of neurological health issues through our dedicated multidisciplinary team of expert surgeons and physicians, meticulously selected from India’s leading neuroscience institutions. Our team includes highly skilled neurologists, neurosurgeons, and other specialized medical professionals who collaborate to deliver personalized care tailored to each patient's unique needs. Equipped with the latest advancements in medical technology and supported by state-of-the-art diagnostic and surgical facilities, we are committed to ensuring not only prompt and effective recovery but also a compassionate and patient-centered approach. "
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
                     <p class="panel">They excel in specialties such as Orthopedics, Neurology, Urology, Gynecology, Oncology, and more.
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
                         <p class="doc_name_card">Dr.G.V.N.B.R. Sasthrulu</p>
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
                         <p class="doc_name_card">Dr. Ratna Bhushan </p>
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

                 <!-- <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                        <img src="assets/img/docotrs/kirankumar.png" alt="" class="img-fluid">
                        <div class="doc_card_box_equp py-2 text-center">
                            <p class="doc_name_card">Dr. Kiran Kumar vale</p>
                            <p class="doc_card_small_text">M.B.B.S., M.S, General </p>
                            <p class="doc_card_small_text">Surgery PDCC in Surgical </p>
                            <p class="doc_card_small_text">Gastroenterology SVIMS </p>
                            <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                            <div class="dropdown-content" style="display: none;">
                                <p class="doc_card_small_text">in Tirupathi</p>
                                <p class="doc_card_small_text">All type of gall </p>
                                <p class="doc_card_small_text"> bladder & stomach</p>
                                <p class="doc_card_small_text">related & digestive </p>
                                <p class="doc_card_small_text">related surgeries </p>
                                <p class="doc_card_small_text">done by </p>
                                <p class="doc_card_small_text">laparoscopic method </p>



                                <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                            </div>
                        </div>
                    </div> -->

                 <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                     <img src="assets/img/docotrs/ramakrishna.png" alt="" class="img-fluid">
                     <div class="doc_card_box_equp py-2 text-center">
                         <p class="doc_name_card">Dr. Rama Krishna</p>
                         <p class="doc_card_small_text"> M.S. (Ortho),</p>
                         <p class="doc_card_small_text"> Consultant Orthopedic </p>
                         <p class="doc_card_small_text">Surgeon Fellowship</p>
                         <p class="doc_card_small_text"> in Joint Replacement, </p>

                         <p class="doc_card_small_text"> Surgery & Rheumatology </p>



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

                 <!-- <div class="col-6 col-md-4  col-lg-3 col-xl-2">
                        <img src="assets/img/docotrs/athilisuryakanth.png" alt="" class="img-fluid">
                        <div class="doc_card_box_equp py-2 text-center">
                            <p class="doc_name_card">Dr. Athili Surya Kanth </p>

                            <p class="doc_card_small_text">MD., General Medicine </p>
                            <p class="doc_card_small_text">Fellowship in 2D Echo & </p>
                            <p class="doc_card_small_text"> Infectious Diseases </p>

                            <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                            <div class="dropdown-content" style="display: none;">
                                <p class="doc_card_small_text">Heart related tests </p>
                                <p class="doc_card_small_text"> & scans, all type of </p>
                                <p class="doc_card_small_text"> fevers & BP,sugar</p>
                                <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                            </div>
                        </div>
                    </div> -->



                 <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                     <img src="assets/img/docotrs/SHIVA.jpg" alt="" class="img-fluid">
                     <div class="doc_card_box_equp py-2 text-center">
                         <p class="doc_name_card">Dr. Siva Sai Kumar Malla </p>

                         <p class="doc_card_small_text d-none d-md-block">MBBS (AMC Vizag), MS (Gen. </p>
                         <p class="doc_card_small_text  d-none d-md-block"> Surgery, LHMC New Delhi) </p>

                         <p class="doc_card_small_text  d-none d-md-block d-xl-none d-xxl-block">Consultant General, </p>
                         <p class="doc_card_small_text  d-none d-md-block"> Minimally invasive</p>
                         <p class="doc_card_small_text  d-none d-md-block d-xl-none d-xxl-block"> & Baraitric Surgeon</p>




                         <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none">Consultant General, </p>
                         <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none"> Minimally invasive</p>
                         <p class="doc_card_small_text  d-none   d-xl-block d-xxl-none">& Baraitric Surgeon</p>






                         <p class="doc_card_small_text    d-md-none">MBBS (AMC Vizag)</p>
                         <p class="doc_card_small_text    d-md-none">MS (Gen. Surgery, </p>
                         <p class="doc_card_small_text    d-md-none">LHMC New Delhi) </p>

                         <p class="doc_card_small_text    d-md-none"> Consultant General,</p>
                         <p class="doc_card_small_text    d-md-none"> Minimally invasive</p>
                         <p class="doc_card_small_text    d-md-none"> & Baraitric Surgeon</p>



                         <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                         <div class="dropdown-content" style="display: none;">

                             <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                         </div>
                     </div>
                 </div>





                 <div class="col-6 col-md-4  col-lg-3 col-xl-2">
                     <img src="assets/img/docotrs/pavan_kumar.png" alt="" class="img-fluid">
                     <div class="doc_card_box_equp py-2 text-center">
                         <p class="doc_name_card">Dr. PJR Pavan Kumar
                         </p>

                         <p class="doc_card_small_text">MBBS, M.S (GEN), </p>
                         <p class="doc_card_small_text">M.Ch (NEUROSURGERY) </p>
                         <p class="doc_card_small_text">Gold Medalist.</p>

                         <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                         <div class="dropdown-content" style="display: none;">
                             <!-- <p class="doc_card_small_text">Heart related tests </p>
                                <p class="doc_card_small_text"> & scans, all type of </p>
                                <p class="doc_card_small_text"> fevers & BP,sugar</p> -->
                             <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                         </div>
                     </div>
                 </div>


                 <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                     <img src="assets/img/docotrs/VIJAY.jpg" alt="" class="img-fluid">
                     <div class="doc_card_box_equp py-2 text-center">
                         <p class="doc_name_card">Dr.Vijay Babu </p>

                         <p class="doc_card_small_text d-none d-md-block  d-xl-none d-xxl-block">MBBS, MD (General Medicine) </p>


                         <p class="doc_card_small_text   d-md-none  d-xl-block d-xxl-none">MBBS, MD (General </p>
                         <p class="doc_card_small_text   d-md-none  d-xl-block d-xxl-none"> Medicine) </p>

                         <p class="doc_card_small_text  d-none d-md-block">Consultant Physician </p>

                         <p class="doc_card_small_text d-md-none">Consultant </p>
                         <p class="doc_card_small_text d-md-none"> Physician </p>


                         <p class="doc_card_small_text"> Diabetologist</p>





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
                     <img src="assets/img/docotrs/SABHEERA.jpg" alt="" class="img-fluid">
                     <div class="doc_card_box_equp py-2 text-center">
                         <p class="doc_name_card">Dr. Sabbera</p>
                         <p class="doc_card_small_text">MBBS, DGO, DNB. </p>
                         <p class="doc_card_small_text">Gold Medalist</p>

                         <p class="toggle-view view_bt_under_line" onclick="toggleDropdown(this)">View More</p>
                         <div class="dropdown-content" style="display: none;">

                             <p class="doc_card_small_text">Gynecologist </p>

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
                             <p class="doc_card_small_text">emergency air </p>
                             <p class="doc_card_small_text"> way specialist </p>

                             <p class="toggle-view" onclick="toggleDropdown(this.parentElement.previousElementSibling)">View Less</p>
                         </div>
                     </div>
                 </div>

                 <!-- <div class="col-6 col-md-4 col-lg-3 col-xl-2">
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
                    </div> -->

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
                             <p class="doc_card_small_text">Bronchial asthama </p>
                             <p class="doc_card_small_text"> pulmonary asthama (PH) </p>
                             <p class="doc_card_small_text"> lung cancer </p>
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

                             <p class="doc_card_small_text"> Sinus surgery</p>
                             <p class="doc_card_small_text"> Ear Surgery </p>
                             <p class="doc_card_small_text"> Thyroid</p>
                             <p class="doc_card_small_text">All problems of </p>
                             <p class="doc_card_small_text"> EAR, NOSE, THROAT</p>

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
                             <p class="doc_card_small_text">kidney failure </p>
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
                             <p class="doc_card_small_text">All type of</p>
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
                             <p class="doc_card_small_text">Spine surgery </p>
                             <p class="doc_card_small_text">Endoscopic spine surgery </p>

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



     <!-- <section class="">
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
         </section> -->


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
                 box-shadow: 4px 4px 8px 8px rgba(0, 0, 0, 0.1);


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



         <!-- <div class="sec6">
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

                                   
                                     <div class="swiper-pagination"></div>
                                 
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> -->



         <section>
             <div class="container">
                 <h2 class="docHead ">Testimonials</h2>
                 <div class="custom-slide-container swiper">
                     <div class="custom-slide-content   ">
                         <div class="custom-card-wrapper swiper-wrapper py-5">

                             <div class="custom-card custom_card_bg_three swiper-slide">
                                 <div class="swiper-slide">

                                     <div class="testimonial-box ">
                                         <p class="description">
                                             "The medical team here is highly professional and caring, making me
                                             feel comfortable and well-supported throughout my treatment. The
                                             quality of care exceeded my expectations."
                                         </p>
                                         <h3 class="title">-Lakshmi</h3>
                                     </div>

                                 </div>


                             </div>
                             <div class="custom-card custom_card_bg_three swiper-slide">
                                 <div class="swiper-slide">
                                     <div class="testimonial-box ">
                                         <p class="description">
                                             "The team at Neurostar Hospital provided exceptional care with
                                             professionalism and empathy. My experience was seamless, and I highly
                                             recommend their services."
                                         </p>

                                         <h3 class="title">-Ramesh </h3>
                                     </div>
                                 </div>


                             </div>
                             <div class="custom-card custom_card_bg_three swiper-slide">
                                 <div class="swiper-slide">
                                     <div class="testimonial-box ">
                                         <p class="description">
                                             "Neurostar Hospital provided top-notch care with a professional and
                                             caring team. I felt well looked after, and my experience was positive
                                             from start to finish."
                                         </p>
                                         <h3 class="title">-Bhoomika</h3>

                                     </div>
                                 </div>


                             </div>

                             <div class="swiper-slide">
                                 <div class="testimonial-box ">
                                     <p class="description">
                                         "The care I received was exceptional, with a compassionate and skilled
                                         team that made me feel at ease. I highly recommend their services for
                                         anyone seeking quality treatment."
                                     </p>
                                     <h3 class="title">-Hema Latha</h3>
                                 </div>
                             </div>

                         </div>


                     </div>
                 </div>
             </div>

             </div>

         </section>

         <script>
             var swiper = new Swiper(".custom-slide-content", {
                 slidesPerView: 3,
                 spaceBetween: 25,
                 loop: true,
                 centerslide: 'true',
                 fade: 'true',
                 grabCursor: 'true',
                 pagination: {
                     el: ".custom-swiper-pagination",
                     clickable: true,
                     dynamicBullets: true,
                 },
                 autoplay: {
                     delay: 3000,
                     disableOnInteraction: false,
                 },
                 navigation: {
                     nextEl: ".swiper-button-next.custom-swiper-navBtn",
                     prevEl: ".swiper-button-prev.custom-swiper-navBtn",
                 },

                 breakpoints: {
                     0: {
                         slidesPerView: 1,
                     },
                     520: {
                         slidesPerView: 2,
                     },
                     950: {
                         slidesPerView: 3,
                     },
                 },
             });
         </script>

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




             <div class="container my-4">
                 <div class="row gx-4 gy-4"> <!-- Horizontal and vertical gap between cards -->
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/1.png" alt="" class="img-fluid">
                             <h4 class="SCAN">CT SCAN</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/2.png" alt="" class="img-fluid">
                             <h4 class="SCAN">Ultrasound 2D ECHO</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/3.png" alt="" class="img-fluid">
                             <h4 class="SCAN">EEG & NCS</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/4.png" alt="" class="img-fluid">
                             <h4 class="SCAN">Endoscopy</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/5.png" alt="" class="img-fluid">
                             <h4 class="SCAN">X-ray</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/6.png" alt="" class="img-fluid">
                             <h4 class="SCAN">Neuro microscope</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/7.png" alt="" class="img-fluid">
                             <h4 class="SCAN">Ventilators</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/8.png" alt="" class="img-fluid">
                             <h4 class="SCAN">Physiotherapy</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/9.png" alt="" class="img-fluid">
                             <h4 class="SCAN">Lab</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/10.png" alt="" class="img-fluid">
                             <h4 class="SCAN">Electronic dental chair with RVG</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/11.png" alt="" class="img-fluid">
                             <h4 class="SCAN">Bronchoscopy</h4>
                         </div>
                     </div>
                     <div class="col-12 col-md-4 col-lg-3">
                         <div class="card_box_equp py-4 text-center">
                             <img src="assets/img/scan/12.png" alt="" class="img-fluid">
                             <h4 class="SCAN">24/7 Pharmacy</h4>
                         </div>
                     </div>

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