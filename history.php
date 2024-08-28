<?php
// history.php

// Check if the array keys exist before accessing them
if (isset($_POST['licensePlate']) && isset($_POST['location'])) {
    $licensePlate = $_POST['licensePlate'];
    $location = $_POST['location'];
    
    // Call the ParkingViolationService method
    $service = new ParkingViolationService();
    $service->captureViolation($licensePlate, $location);
} else {
    echo "License plate and location not provided.";
}

?>