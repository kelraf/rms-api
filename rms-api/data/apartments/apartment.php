<?php 

    require_once "../../database.php";
    
    class Apartment {

        public $id;

        public $apartment_name;
        public $apartment_location;
        public $landlord_id;
        public $number_houses;
        public $empty_houses;
        public $occupied_houses;
        public $rental_total;

        private $db;
        private $dbinst;

        public function __construct() {
            $this->dbinst = new Database;
            $this->db = $this->dbinst->getConn();
        }

        public function __destruct() {
            $this->dbinst->closeConn();
        }

        private function vInput() {
            if(empty($this->apartment_name)) {
                return ["bool" => false, "message" => "Apartment name is required"];
            } elseif (empty($this->apartment_location)) {
                return ["bool" => false, "message" => "Apartment location is required"];
            } else {
                $this->apartment_name = filter_var($this->apartment_name, FILTER_SANITIZE_STRING);
                $this->apartment_location = filter_var($this->apartment_location, FILTER_SANITIZE_STRING);

                return ["bool" => true];
            }
        }

        public function nameExists() {
            if(empty($this->apartment_name)) {
                return ["bool" => false, "message" => "Apartment name is required"];
            } else {
                $stmt = "SELECT * FROM apartments WHERE apartmentName=?";
                $sql = $this->db->prepare($stmt);
                $sql->execute([$this->apartment_name]);
                $data = $sql->fetch();
                if($data) {
                    return ["bool" => true];
                } else {
                    return ["bool" => false, "message" => "No Data"];
                }
            }
        }

        public function addApart() {
            if(empty($this->landlord_id)) {
                return ["bool" => false, "message" => "Landlord Id is required"];
            } else {
                $done = $this->vInput();
                $unique_name = $this->nameExists();
                if(!$done["bool"]) {
                    return $done;
                } elseif ($unique_name["bool"]) {
                    return ["bool" => false, "message" => "Apartment Name Already Exists"];
                } else {
                    try {
                        $stmt = "INSERT INTO apartments(apartmentName, apartmentLocation, landlordId) VALUES(?, ?, ?)";
                        $sql = $this->db->prepare($stmt);

                        if($sql->execute([$this->apartment_name, $this->apartment_location, $this->landlord_id])) {
                            return ["bool" => true, "message" => "Successfully Created an apartment"];
                        } else {
                            throw new Exception("Error Processing Request");
                        }
                    } catch(PDOExeption $ex) {
                        echo "Error {$ex->getMessage()}";
                    }

                }
            }
        }

        public function myApart($data=false) {
            if(empty($this->landlord_id)) {
                return ["bool" => false, "message" => "Landlord Id is required"];
            } else {
                $stmt = "SELECT * FROM apartments WHERE landlordId=?";
                $sql = $this->db->prepare($stmt);
                $sql->execute([$this->landlord_id]);
                $apart = $sql->fetchAll();
                if($apart) {
                    if($data) {
                        return ["bool" => true, "data" => $apart];
                    } else {
                        return ["bool" => true];
                    }
                    
                } else {
                    return ["bool" => false, "message" => "No Data"];
                }
            }
        }

        
    }

    $apart = new Apartment;
    $apart->apartment_name = "TicTak";
    $apart->apartment_location = "Kisumu";
    $apart->landlord_id = "2";

    print_r($apart->addApart());
    // print_r($apart->myApart(true));

    // print_r($apart->nameExists());
    // print_r($apart->idExists(true));
?>