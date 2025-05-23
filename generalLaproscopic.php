

<?php include('./mini_header.php'); ?>


 

<main id="main">



        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">General & Laproscopic Surgery
                        </h2>
                        <p class="poetsen_font1">
                            At NeuroStar Hospital, our General and Laparoscopic Surgery department is dedicated to providing high-quality surgical care with a focus on patient safety, precision, and faster recovery times. Our team of expert surgeons, well-trained in both traditional and minimally invasive techniques, is equipped to handle a wide variety of general surgical procedures. Laparoscopic surgery, also known as minimally invasive surgery, is one of our specialties, and it allows us to perform complex procedures with smaller incisions, leading to less post-operative pain, quicker recovery, and reduced scarring.



                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1">We employ advanced laparoscopic techniques to treat conditions such as gallbladder disease, appendicitis, hernias, gastrointestinal issues, and more. With state-of-the-art technology, our surgeons can navigate the body with precision, offering patients an effective alternative to conventional open surgery. Our approach is always patient-centered, meaning we take the time to assess each individual's condition, explain treatment options, and create a tailored surgical plan that aligns with their needs and health goals.

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
                                    <img src="assets/img/serv/l-surgery.png" class="img-fluid custom-img-padding"
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

   