<?php
include '../../db.connection/db_connection.php';

$message = '';

// Check if ID is provided
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch the slider details from the database
    $query = "SELECT * FROM slider WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $slider = mysqli_fetch_assoc($result);

        // Process the form when submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = mysqli_real_escape_string($conn, $_POST['title']);

            if (!empty($_FILES["image"]["name"])) {
                $targetDir = "../uploads/sliders/";
                $imageName = basename($_FILES["image"]["name"]);
                $targetFilePath = $targetDir . $imageName;

                $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

                if (in_array($imageFileType, $allowedTypes)) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                        // Delete the old image from the server
                        $oldImagePath = $targetDir . $slider['image'];
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }

                        // Update slider details in the database
                        $updateQuery = "UPDATE slider SET title = '$title', image = '$imageName' WHERE id = '$id'";
                        if (mysqli_query($conn, $updateQuery)) {
                            $message = "Slider updated successfully.";
                        } else {
                            $message = "Error updating slider: " . mysqli_error($conn);
                        }
                    } else {
                        $message = "Sorry, there was an error uploading the file.";
                    }
                } else {
                    $message = "Only JPG, JPEG, PNG & GIF files are allowed.";
                }
            } else {
                // Update only the title if no new image is uploaded
                $updateQuery = "UPDATE slider SET title = '$title' WHERE id = '$id'";
                if (mysqli_query($conn, $updateQuery)) {
                    $message = "Slider updated successfully.";
                    // Redirect to allSliders.php with the success message
                    header("Location: allSliders.php?message=" . urlencode($message));
                    exit(); // Ensure that the script stops executing after the redirect
                } else {
                    $message = "Error updating slider: " . mysqli_error($conn);
                }
            }
        }
    } else {
        $message = "Slider not found.";
    }
} else {
    $message = "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Neurostar - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'navbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Edit Slider</h1>

                    <?php if ($message): ?>
                        <div class="alert alert-info"><?php echo $message; ?></div>
                    <?php endif; ?>

                    <!-- Edit Slider Form -->
                    <form action="editSlider.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Slider Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($slider['title']); ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Slider Image</label>
                            <input type="file" name="image" class="form-control-file">
                            <br>
                            <img src="../uploads/sliders/<?php echo htmlspecialchars($slider['image']); ?>" width="100" alt="Current Image">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Slider</button>
                    </form>
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <div class="footer-widget__copyright">
                                <p class="mini_text" style="color:black"> ©2024 Neurostar . All Rights Reserved. Designed & Developed by <a href="https://bhavicreations.com/" target="_blank" style="text-decoration: none;color:black">Bhavi Creations</a></p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>

</html>