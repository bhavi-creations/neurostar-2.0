

<?php include('./mini_header.php'); ?>


 

<main id="main">




        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Plastic & Cosmetic surgery

                        </h2>
                        <p class="poetsen_font1">
                            Plastic & Cosmetic Surgery at NeuroStar
                            At NeuroStar, we specialize in transformative Plastic and Cosmetic Surgery that prioritizes
                            both aesthetic enhancement and your overall health. Our board-certified surgeons are
                            dedicated to providing personalized care and innovative solutions to help you achieve your
                            beauty goals.Our Services: From facial rejuvenation and body contouring to breast
                            augmentation and reconstructive procedures, we offer a comprehensive range of services
                            tailored to your unique needs. Each treatment is designed with your individual vision in
                            mind, ensuring natural-looking results that enhance your features.

                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1">Your Journey: We believe that informed patients make the best
                                decisions. Our process begins with a thorough consultation where we listen to your
                                desires, discuss options, and develop a customized plan just for you. Throughout your
                                journey, our compassionate team is here to support you, addressing any questions or
                                concerns you may have.
                                Commitment to Safety: Your safety and comfort are our top priorities. We utilize the
                                latest technology and adhere to the highest standards of care to ensure a smooth and
                                successful experience.</p>
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
                                    <img src="assets/img/serv/plastic.png"
                                        class="img-fluid custom-img-padding" alt="Dental Braces" loading="lazy">
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


     