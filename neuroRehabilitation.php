

<?php include('./mini_header.php'); ?>


 

<main id="main">




        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Neuro rehabilitation

                        </h2>
                        <p class="poetsen_font1">
                            Neurorehabilitation at NeuroStar Hospital is a comprehensive and specialized program dedicated to helping individuals recover from neurological injuries, conditions, and diseases. Our approach to neurorehabilitation is deeply rooted in the understanding that the brain and nervous system are central to every aspect of life, and any disruption to these systems can significantly impact a person's physical, cognitive, and emotional well-being. At NeuroStar, we bring together a multidisciplinary team of neurologists, physiotherapists, occupational therapists, speech therapists, and psychologists, all working in concert to create customized rehabilitation programs tailored to each patient’s unique needs and recovery goals.


                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1">Our state-of-the-art facility is equipped with cutting-edge technology and the latest advancements in neurorehabilitative care, allowing us to address a wide range of conditions, including stroke, spinal cord injuries, traumatic brain injuries, multiple sclerosis, Parkinson’s disease, and other neurodegenerative disorders. We understand that recovery from neurological conditions can be a long and challenging journey, which is why we place an emphasis on holistic, patient-centered care. Each patient’s treatment plan is designed to promote functional recovery, enhance mobility, improve cognitive abilities, and restore independence. Our team is committed to addressing not only the physical challenges but also the psychological and emotional hurdles that often accompany neurological impairments, providing a nurturing and supportive environment that empowers patients to regain confidence and control over their lives.

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
                                    <img src="assets/img/serv/n-reh.png" class="img-fluid custom-img-padding"
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

     