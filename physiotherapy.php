

<?php include('./mini_header.php'); ?>


 

<main id="main">




        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Physiotherapy

                        </h2>
                        <p class="poetsen_font1">
                            At Neurostar Hospital, we take pride in offering cutting-edge physiotherapy services that are tailored to enhance recovery and significantly improve the quality of life for individuals with neurological conditions. Our specialized team of highly skilled and experienced physiotherapists is dedicated to providing comprehensive care by integrating the latest in evidence-based techniques and advanced technology. We understand that no two patients are alike, which is why we emphasize the creation of personalized treatment plans. These plans are meticulously designed to address each patient’s specific needs, goals, and challenges, ensuring a treatment approach that is as unique as the individual.


                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1"> Our physiotherapy programs encompass a wide range of therapeutic techniques, including targeted exercises, functional training, and innovative therapies aimed at improving mobility, strength, balance, and coordination. Whether it's recovering from a stroke, managing a chronic condition such as multiple sclerosis or Parkinson's disease, or addressing injury-related impairments, our therapists work tirelessly to optimize each patient’s functional abilities. In addition to mobility enhancement, we place a strong focus on pain management, providing therapeutic interventions to reduce discomfort and improve the overall well-being of our patients.

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
                                    <img src="assets/img/serv/physco.png" class="img-fluid custom-img-padding"
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

    