



    <?php include('./mini_header.php'); ?>


 

    <main id="main">



        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Gynecology

                        </h2>
                        <p class="poetsen_font1">
                        At NeuroStar Multispeciality Hospital, our Department of Gynecology is dedicated to offering comprehensive, compassionate, and advanced healthcare services for women of all age groups. We understand that each woman’s health journey is unique, and our expert team of gynecologists provides personalized care for a wide spectrum of conditions. From routine gynecological check-ups to the management of complex reproductive health disorders, we ensure a patient-centric approach backed by modern technology and clinical expertise.
                        We provide expert diagnosis and treatment for menstrual irregularities, hormonal imbalances, polycystic ovary syndrome (PCOS), uterine fibroids, endometriosis, and pelvic inflammatory disease. Our team is skilled in both medical and surgical management, including minimally invasive procedures such as laparoscopy and hysteroscopy, which ensure faster recovery and minimal discomfort. Preventive care is a core part of our services, with regular screenings for cervical cancer through Pap smears and HPV testing, along with breast examinations and counseling for overall women’s wellness.



                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1">Our maternity care services cover the entire spectrum from pre-conception counseling to postnatal support. Expectant mothers receive attentive antenatal care, nutritional guidance, and routine scans to ensure the healthy development of the baby. Our dedicated obstetrics team is trained to handle both normal and high-risk pregnancies with utmost care. After childbirth, our postnatal support services help mothers recover physically and emotionally, while also guiding them in newborn care and breastfeeding.

                            </p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                            <p class="get_in_touch" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore()">
                                Read More <i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                    </div>

                    <div class="col-md-5 order-3  order-md-2 mt-5 text-center">
                        <div class="custom-swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <img src="assets/img/serv/gynic.png" class="img-fluid custom-img-padding"
                                        alt="Dental Braces" loading="lazy">
                                </div>


                            </div>
                            <!-- Add Pagination -->
                            <!-- <div class="swiper-pagination"></div> -->

                            <!-- Add Navigation -->
                            <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const swiper = new Swiper('.custom-swiper-container', {
                                    loop: true,
                                    effect: 'fade',
                                    autoplay: {
                                        delay: 2000, // 2 seconds interval
                                        disableOnInteraction: false, // Continue autoplay after user interactions
                                    },
                                    pagination: {
                                        el: '.swiper-pagination',
                                        clickable: true,
                                    },
                                    navigation: {
                                        nextEl: '.swiper-button-next',
                                        prevEl: '.swiper-button-prev',
                                    },
                                });
                            });
                        </script>

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

    