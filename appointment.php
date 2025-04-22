

<?php include('./mini_header.php'); ?>


 

<main id="main">


        <section class="sectionForm">
            <div class="container ">

                <div class="section-title">
                    <h2 class=" pt-5 mb-4 docHead">Make an Appointment</h2>
                </div>


                <div class="row apntRow">
                    <div class="col-md-6 d-none d-md-block">
                        <img src="assets/img/4.png" class="img-fluid apnt">
                    </div>


                    <div class="col-md-6 mt-5 apntForm ">
                        <form action="appointmentform.php" method="post" role="form" class="php-email-form"
                            data-aos-delay="100">
                            <div class="row">
                                <div class="col-md-6 form-group mt-4 mt-md-0 mb-4">
                                    <input type="text" name="name" class="form-control  " id="name"
                                        style="border-radius: 23px; " placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-4 mt-md-0">
                                    <input type="email" class="form-control  " name="email" id="email"
                                        style="border-radius: 23px;" placeholder="Your Email" required>
                                </div>
                                <div class="col-md-6 form-group mt-5 mt-md-0">
                                    <input type="tel" class="form-control  " name="phone" id="phone"
                                        style="border-radius: 23px;" placeholder="Your Phone" required>
                                </div>
                                <div class="col-md-6 form-group mt-4  mt-md-0">
                                    <input type="date" name="date" class="form-control datepicker  "
                                        style="border-radius: 23px;" id="date" placeholder="Appointment Date" required>
                                </div>
                            </div>
                            <div class="row">

                                <div class="  form-group mt-4">
                                    <select name="department" id="department" style="border-radius: 23px;"
                                        class="form-select" required>
                                        <option value="">Select Service</option>
                                        <option value="Neuro Surgery"> Neuro Surgery</option>
                                        <option value="Neurology"> Neurology</option>
                                        <option value="Accidents & Trauma Care"> Accidents & Trauma Care</option>
                                        <option value="Orthopaedic Surgery"> Orthopaedic  Surgery</option>
                                        <option value="General Medicine">General Medicine </option>
                                        <option value="Critical Care"> Critical Care</option>
                                        <option value="Neuro Psychiatric">Neuro Psychiatric </option>
                                        <option value="Dental">Dental </option>
                                        <option value="Maxillo facial Surgery"> Maxillo facial Surgery</option>
                                        <option value="Plastic & Cosmetic surgery"> Plastic & Cosmetic surgery</option>
                                        <option value="Pediatrics">Pediatrics </option>
                                        <option value="Physiotherapy"> Physiotherapy</option>
                                        <option value="Radiology"> Radiology</option>
                                        <option value="Neuro rehabilitation">Neuro rehabilitation </option>
                                        <option value="General &Laproscopic Surgery"> General &Laproscopic Surgery</option>



                                    </select>
                                </div>

                            </div>

                            <div class="form-group mt-4 mb-5">
                                <textarea class="form-control" name="message" style="border-radius: 23px;" rows="5"
                                    placeholder="Message (Optional)"></textarea>
                            </div>

                            <div class="text-center maker"><button type="submit" class="makee">Make an
                                    For Appointment</button></div>
                        </form>
                    </div>



                </div>
            </div>
        </section>


    </main>
    
      <!-- ======= Footer ======= -->

      <?php include('./footer.php'); ?>
     
   