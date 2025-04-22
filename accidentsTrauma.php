<?php include('./mini_header.php'); ?>




<main id="main">




    <section class="sectionForm">
        <div class="container">
            <div class="row servSect">
                <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                    <h2 class="dr_welcome_text1 mt-4 mb-4">Accidents & Trauma Care

                    </h2>
                    <p class="poetsen_font1">
                        At NeuroStar Hospital, our Accidents and Trauma Care department is dedicated to providing immediate, comprehensive, and expert medical attention to individuals affected by traumatic injuries and emergencies. We understand that accidents can occur unexpectedly, leading to critical situations that require swift action and specialized care. Our trauma team, comprising highly trained emergency physicians, trauma surgeons, and support staff, is available 24/7 to respond to a wide range of traumatic injuries, including those resulting from motor vehicle accidents, falls, sports injuries, and other emergencies.



                    </p>
                    <div class="showthisdiv " style="display:none ">
                        <p class="poetsen_font1"> Our state-of-the-art facilities are equipped with advanced diagnostic tools and technology to ensure rapid assessment and treatment of trauma patients. Upon arrival, our team conducts thorough evaluations, utilizing imaging studies such as X-rays, CT scans, and ultrasounds to determine the extent of injuries. This comprehensive approach allows us to create tailored treatment plans that prioritize the stabilization and recovery of our patients. Whether surgical intervention is required or conservative management is more appropriate, our skilled surgeons and medical professionals work diligently to provide the best possible outcomes.

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
                                <img src="assets/img/serv/acc.png" class="img-fluid custom-img-padding"
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


 