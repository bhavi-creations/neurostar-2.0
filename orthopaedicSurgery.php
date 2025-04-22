

<?php include('./mini_header.php'); ?>


 

<main id="main">




        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Orthopaedic Surgery

                        </h2>
                        <p class="poetsen_font1">
                            At NeuroStar Hospital, our Orthopaedic Surgery department is dedicated to providing comprehensive care for patients with musculoskeletal disorders and injuries. Our team of highly skilled orthopaedic surgeons specializes in diagnosing, treating, and rehabilitating a wide range of conditions affecting bones, joints, ligaments, and muscles. From sports injuries and fractures to degenerative diseases and congenital conditions, we offer a full spectrum of services designed to restore function, alleviate pain, and enhance the overall quality of life for our patients.



                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1">Utilizing the latest advancements in surgical techniques and technology, our orthopaedic surgeons perform both traditional open surgeries and minimally invasive procedures, such as arthroscopy, which allows for quicker recovery times and reduced scarring. We specialize in various subspecialties, including joint replacement surgery, spinal surgery, trauma surgery, and pediatric orthopaedics, ensuring that each patient receives expert care tailored to their specific needs. Our state-of-the-art facilities are equipped with advanced imaging and surgical tools, allowing for accurate diagnosis and precision during procedures.

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
                                    <img src="assets/img/serv/orthro.png" class="img-fluid custom-img-padding"
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

 