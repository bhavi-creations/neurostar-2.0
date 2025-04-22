

<?php include('./mini_header.php'); ?>


 

<main id="main">




        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Neuro Surgery
                        </h2>
                        <p class="poetsen_font1">
                            At NeuroStar Hospital, our Neurosurgery Department stands at the forefront of neurological care, offering cutting-edge surgical interventions for a wide range of complex brain and spinal conditions. With a team of highly experienced neurosurgeons, we are equipped to handle intricate procedures involving brain tumors, aneurysms, epilepsy, spinal cord injuries, and degenerative spinal conditions. Our hospital is renowned for its state-of-the-art facilities, including advanced imaging technologies such as MRI, CT, and neuronavigation systems, which allow for precise diagnosis and treatment planning.

                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1"> We specialize in minimally invasive techniques, including endoscopic and robotic-assisted neurosurgery, which significantly reduce recovery times and enhance patient outcomes. In addition to surgical expertise, we emphasize a collaborative, multidisciplinary approach, partnering with neurologists, oncologists, pain management specialists, and rehabilitation therapists to provide comprehensive care tailored to each patient's unique needs. Patient safety, comfort, and long-term recovery are at the heart of everything we do. Whether it is treating life-threatening conditions or performing delicate surgeries to improve quality of life, our team is dedicated to delivering compassionate care and utilizing the latest advancements in neurosurgery to achieve the best possible outcomes for our patients.</p>
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
                                    <img src="assets/img/serv/n-surgery.png" class="img-fluid custom-img-padding"
                                        alt="Dental Braces" loading="lazy">
                                </div>


                            </div>

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


 