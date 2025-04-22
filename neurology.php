<?php include('./mini_header.php'); ?>




<main id="main">




    <section class="sectionForm">
        <div class="container">
            <div class="row servSect">
                <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                    <h2 class="dr_welcome_text1 mt-4 mb-4">Neurology
                    </h2>
                    <p class="poetsen_font1">
                        At NeuroStar Hospital, our Neurology department is dedicated to delivering world-class care for patients with a wide range of neurological disorders. Neurology, which focuses on the diagnosis and treatment of conditions affecting the brain, spinal cord, nerves, and muscles, is a critical specialty that impacts overall health and quality of life. Our team of highly skilled neurologists is committed to providing compassionate, individualized care, utilizing advanced diagnostic tools and innovative treatments to address complex neurological conditions.



                    </p>
                    <div class="showthisdiv " style="display:none ">
                        <p class="poetsen_font1">We specialize in treating a broad spectrum of neurological disorders, including but not limited to stroke, epilepsy, Parkinson's disease, multiple sclerosis, Alzheimer's disease, migraines, and peripheral neuropathies. With a patient-centered approach, our neurologists take the time to thoroughly evaluate each patient, utilizing cutting-edge imaging technologies such as MRI, CT scans, and EEGs to accurately diagnose the underlying issues. From there, we develop tailored treatment plans that may include medication management, therapeutic interventions, and advanced surgical options when necessary.

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
                                <img src="assets/img/serv/nuerology.png" class="img-fluid custom-img-padding"
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

 