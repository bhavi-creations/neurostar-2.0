

<?php include('./mini_header.php'); ?>


 

<main id="main">


 


        <section class="mt-2 Abouthome1">
            <div class="container">
                <h2 class="docHead">About Us</h2>
                <p class="docPara mb-3">"NEUROSTAR Hospital is dedicated to providing cutting-edge neurological care,
                    combining advanced technology with compassionate service to enhance the well-being of our
                    patients."
                </p>
                <div class="row splcrad mt-4">
                    <div class="col-md-6">
                        <img src="assets/img/srinivasa/about.png" alt="" class="img-fluid">
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
                        <p class="panel">They excel in specialties such as Orthopaedics, Neurology, Urology, Gynecology, Oncology, and more.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="abtop">
                            <img src="assets/img/gallery/3.png" alt="" class="abtopimg">
                        </div>
                        <h4 class="Intensive">Medical & Surgical

                        </h4>
                        <p class="panel">A highly qualified team of doctors, skilled staff, excellent nursing care, and advanced diagnostic services.
                        </p>
                    </div>


                </div>
            </div>
        </section>

        <script>
            function toggleReadMore() {
                var showThisDiv = document.querySelector('.showthisdiv');
                var readMoreText = document.querySelector('.get_in_touch');

                if (showThisDiv.style.display === "none") {
                    showThisDiv.style.display = "block";
                    readMoreText.innerHTML = 'Read Less <i class="fa-solid fa-arrow-up"></i>';
                } else {
                    showThisDiv.style.display = "none";
                    readMoreText.innerHTML = 'Read More <i class="fa-solid fa-arrow-right"></i>';
                }
            }
        </script>


    </main>

     <!-- ======= Footer ======= -->

    <?php include('./footer.php'); ?>
 