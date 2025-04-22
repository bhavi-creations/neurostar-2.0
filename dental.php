

<?php include('./mini_header.php'); ?>


 

<main id="main">



        <section class="sectionForm">
            <div class="container">
                <div class="row servSect">
                    <div class="col-md-7 dr_content_padding  order-1 order-md-1">

                        <h2 class="dr_welcome_text1 mt-4 mb-4">Dental
                        </h2>
                        <p class="poetsen_font1">
                            At Neurostar Hospital, whether you require fillings, crowns, or bridges, our comprehensive restorative dental services are meticulously crafted to restore both the functionality and aesthetics of your teeth. We take pride in using only the highest quality materials, combined with state-of-the-art techniques, to deliver solutions that not only address your dental health but also enhance the natural beauty of your smile. Our team of skilled dental professionals is dedicated to ensuring that every treatment is tailored to your unique needs, providing durable and long-lasting results that you can rely on for years to come. From the moment you step into our clinic, your comfort, safety, and satisfaction are our top priorities, ensuring that your journey to a healthier, more confident smile is as seamless and stress-free as possible.
                        </p>
                        <div class="showthisdiv " style="display:none ">
                            <p class="poetsen_font1"> We believe that prevention is the key to maintaining good oral health. Our preventive services include routine check-ups, cleanings, and personalized oral hygiene education to help you maintain a healthy smile.Whether you need fillings, crowns, or bridges, our restorative services are designed to restore the function and aesthetics of your teeth. We use high-quality materials and advanced techniques to ensure long-lasting results.</p>
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
                                    <img src="assets/img/serv/dental.png" class="img-fluid custom-img-padding"
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

 