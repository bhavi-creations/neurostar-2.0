

<?php include('./mini_header.php'); ?>


 

<main id="main">


        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2 class="docHead">Contact</h2>
                </div>

            </div>



            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-6 order-1 order-lg-0">

                        <div class="row d-flex flex-row justify-content-center">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>
                                      

                                        67-19-1, opp. Ashram School, <br> Nagamalli Thota, <br> Kakinada, 533003
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3 style="font-family:Mulish;">Email Us</h3>
                                    <p style="font-family:Mulish;"> info@neurostarhospital.com </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3 style="font-family:Mulish;">Call Us</h3>
                                    <p style="font-family:Mulish;"> +91 9121476777</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 order-0 order-lg-1 need_space_dowm">
                        <form action="contactform.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="contactname" class="form-control" id="name" placeholder="Your Name" required="" style="font-family:Mulish;">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control just_font" name="contactemail" id="email" placeholder="Your Email" style="font-family:Mulish;" required="">
                                </div>

                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="contactsubject" id="subject" placeholder="Subject" style="font-family:Mulish;">
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="contactnumber" id="number" placeholder="Phone" required="" style="font-family:Mulish;">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="contactmessage" rows="7" placeholder="Message" required=" " style="font-family:Mulish;"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>



                </div>

            </div>
        </section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3815.756788432908!2d82.239668!3d16.9865095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDU5JzExLjQiTiA4MsKwMTQnMjIuOCJF!5e0!3m2!1sen!2sin!4v1727955954785!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>


    <!-- ======= Footer ======= -->

    <?php include('./footer.php'); ?>


   