<?php
class ParkingViolation {
    private $licensePlate;
    private $location;
    
    public function __construct($licensePlate, $location) {
        $this->licensePlate = $licensePlate;
        $this->location = $location;
    }

    // Getters and setters
    public function getLicensePlate() {
        return $this->licensePlate;
    }

    public function getLocation() {
        return $this->location;
    }
}
?>

