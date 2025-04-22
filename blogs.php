    <?php
    include './db.connection/db_connection.php'; // Include your database connection file

    // Retrieve service filter from GET request
    $service = isset($_GET['service']) ? $_GET['service'] : '';

    // Prepare SQL query with optional service filter
    $sql = "SELECT id, title, main_content, main_image, created_at FROM blogs";
    if (!empty($service)) {
        $sql .= " WHERE service = ?";
    }
    $sql .= " ORDER BY created_at DESC";

    // Initialize statement
    $stmt = $conn->prepare($sql);

    // Bind parameters if service is set
    if (!empty($service)) {
        $stmt->bind_param("s", $service);
    }

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    ?>







<?php include('./mini_header.php'); ?>


 

<main id="main">

            <!-- Filter Buttons -->
            <div class="container">
                <div class="filter_buttons redirect_section mt-4">
                    <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
                    <a href="blogs.php?service=Neuro Surgery"><button class="redirect_blog_srivice">Neuro Surgery</button></a>
                    <a href="blogs.php?service=Neurology"><button class="redirect_blog_srivice">Neurology</button></a>
                    <a href="blogs.php?service=Accidents Trauma Care"><button class="redirect_blog_srivice">Accidents & Trauma Care</button></a>
                    <a href="blogs.php?service=Orthopaedic"><button class="redirect_blog_srivice">Orthopaedic</button></a>
                    <a href="blogs.php?service=General  Medicine"><button class="redirect_blog_srivice">General  Medicine</button></a>
                    <a href="blogs.php?service=Critical Care"><button class="redirect_blog_srivice">Critical Care</button></a>
                    <a href="blogs.php?service=Neuro Psychiatric"><button class="redirect_blog_srivice">Neuro Psychiatric</button></a>
                    <a href="blogs.php?service=Dental"><button class="redirect_blog_srivice">Dental</button></a>
                    <a href="blogs.php?service=Maxillo facial Surgery"><button class="redirect_blog_srivice">Maxillo facial Surgery</button></a>
                    <a href="blogs.php?service=Plastic  Cosmetic surgery"><button class="redirect_blog_srivice">Plastic &  Cosmetic surgery</button></a>
                    <a href="blogs.php?service=Pediatrics"><button class="redirect_blog_srivice">Pediatrics</button></a>
                    <a href="blogs.php?service=Physiotherapy"><button class="redirect_blog_srivice">Physiotherapy</button></a>
                    <a href="blogs.php?service=Radiology"><button class="redirect_blog_srivice">Radiology</button></a>
                    <a href="blogs.php?service=Neuro rehabilitation"><button class="redirect_blog_srivice">Neuro rehabilitation</button></a>
                    <a href="blogs.php?service=General Laproscopic Surgery"><button class="redirect_blog_srivice">General & Laproscopic Surgery</button></a>


                </div>
            </div>

            <!-- Blogs Section -->
            <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="grid row">
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";
                                    echo "
                                        <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                            <div class='post-box card_bg_div_box'>
                                                <figure>
                                                    <a href='fullblog.php?id={$row['id']}'>
                                                        <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                    </a>
                                                </figure>
                                                <div class='box-content'>
                                                    <h5 class='box-title'><a  class='box-title' href='fullblog.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                    <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                    <a href='fullblog.php?id={$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                                </div>
                                            </div>
                                        </div>";
                                }
                            } else {
                                echo "<p>No blog posts found.</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- ======= Footer ======= -->

        <?php include('./footer.php'); ?>

     
    <?php
    // Close the statement and connection
    $stmt->close();
    $conn->close();
    ?>