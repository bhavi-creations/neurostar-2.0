

<?php include('./mini_header.php'); ?>


 

<main id="main">




        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Pediatrics
                        </h2>
                        <p class="poetsen_font1">
                            At NeuroStar, our Pediatrics division is dedicated to delivering specialized, compassionate care tailored to the unique neurological needs of children. We understand that pediatric neurological conditions can be challenging for both young patients and their families, which is why we focus on a holistic approach that addresses not only the medical aspects but also the emotional and developmental needs of our patients. Our team of experienced pediatric neurologists, nurses, and allied health professionals collaborates closely to provide comprehensive evaluations, accurate diagnoses, and innovative treatment options.

                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1"> Utilizing cutting-edge technology and evidence-based practices, we tackle a wide range of conditions, including epilepsy, cerebral palsy, migraines, and developmental disorders. We prioritize creating a welcoming and supportive environment, empowering families through education and involvement in the care process. At NeuroStar, our mission is to enhance the quality of life for our young patients, helping them thrive and reach their full potential, while also providing the resources and support families need during this journey. We are committed to advancing pediatric neurology and ensuring that every child receives the highest standard of care.</p>
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
                                    <img src="assets/img/serv/pediatric.png" class="img-fluid custom-img-padding"
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


    