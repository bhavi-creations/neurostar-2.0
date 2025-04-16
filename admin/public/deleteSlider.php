<?php
include '../../db.connection/db_connection.php';

// Check if ID is provided
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch the slider image to delete it from the folder
    $query = "SELECT image FROM slider WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $slider = mysqli_fetch_assoc($result);
        $imagePath = "../uploads/sliders/" . $slider['image'];

        // Delete the slider from the database
        $deleteQuery = "DELETE FROM slider WHERE id = '$id'";
        if (mysqli_query($conn, $deleteQuery)) {
            // If the query was successful, delete the image file from the server
            if (file_exists($imagePath)) {
                unlink($imagePath); // Deletes the file
            }

            $message = "Slider deleted successfully.";
        } else {
            $message = "Error deleting slider: " . mysqli_error($conn);
        }
    } else {
        $message = "Slider not found.";
    }
} else {
    $message = "Invalid request.";
}

header("Location: allSliders.php?message=" . urlencode($message)); // Redirect to the sliders page with a message
exit();
?>
