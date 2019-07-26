<?php 

    require_once "../../database.php";
    require_once "base.php";

    class House extends Base {

        public function addHouse() {
            try {
                $stmt = "INSERT INTO $this->house_table(houseType, apartmentId, landlordId, status, rent) VALUES(?, ?, ?, ?, ?)";
            }
        }
    }
    $dbinst = new Database;
    $house = new House($dbinst)

?>