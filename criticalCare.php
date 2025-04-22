

<?php include('./mini_header.php'); ?>


 

<main id="main">




        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Critical Care

                        </h2>
                        <p class="poetsen_font1">
                            At NeuroStar Hospital, our Critical Care department is dedicated to providing exceptional, specialized medical care for patients facing life-threatening conditions and requiring intensive monitoring and support. Our state-of-the-art intensive care unit (ICU) is equipped with advanced technology and staffed by a highly trained team of critical care physicians, nurses, and other healthcare professionals who work collaboratively to ensure the highest level of care for our patients.



                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1"> We understand that critical illness can arise from various medical emergencies, including severe infections, respiratory failure, cardiac events, trauma, and postoperative complications. Our team is equipped to handle a wide range of critical conditions, providing immediate and comprehensive assessment, stabilization, and treatment. With continuous monitoring and round-the-clock care, we ensure that patients receive timely interventions tailored to their specific medical needs.

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
                                    <img src="assets/img/serv/c-care.png" class="img-fluid custom-img-padding"
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

  