<?php
include "apps/database/conn.php";
require_once 'ParkingViolation.php';

class ParkingViolationService {
    public function captureViolation($licensePlate, $location) {
         $sql = "INSERT INTO `parkingvoilation`(`voilationId`, `licensePlate`, `location`, `voilationDesc`, `voilationPrice`) 
                VALUES (NULL, '$this->licensePlate', '$this->location', '$this->voilationDesc', '$this->voilationPrice')";
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute([$licensePlate, $location, $voilationDesc, $voilationPrice]);
    }

    public function getViolationHistory() {
        $sql = "SELECT * FROM parkingvoilation";
        $sql = "WHERE `licensePlate`= `licensePlate` || `captureVoilation` =`captureVoilation`;"
        $stmt = $this->conn()->query($sql);
        return $stmt->fetchAll();
    }
}
?>
