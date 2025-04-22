<?php include('./mini_header.php'); ?>




<main id="main">




    <section class="sectionForm">
        <div class="container">
            <div class="row servSect">
                <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                    <h2 class="dr_welcome_text1 mt-4 mb-4">Neuro Psychiatric

                    </h2>
                    <p class="poetsen_font1">
                        At NeuroStar Hospital, our Neuro Psychiatric department is dedicated to providing comprehensive and specialized care for individuals dealing with complex mental health issues and neurological disorders. We recognize that mental health and neurological health are deeply interconnected, and our integrated approach aims to address both aspects to promote overall well-being. Our multidisciplinary team, which includes psychiatrists, neurologists, psychologists, and psychiatric nurses, works collaboratively to develop tailored treatment plans that cater to the unique needs of each patient.



                    </p>
                    <div class="showthisdiv " style="display:none ">
                        <p class="poetsen_font1"> We specialize in diagnosing and treating a wide range of conditions, including mood disorders, anxiety disorders, schizophrenia, bipolar disorder, cognitive impairments, and neurodegenerative diseases such as Alzheimer’s and Parkinson’s. Our team employs advanced diagnostic tools and evidence-based therapies to accurately assess and manage these conditions, ensuring that patients receive comprehensive care that addresses both their mental and physical health.

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
                                <img src="assets/img/serv/n-phys.png" class="img-fluid custom-img-padding"
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

 