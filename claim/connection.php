<?php 

    $conn = mysqli_connect("localhost", "root", "", "form");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?>