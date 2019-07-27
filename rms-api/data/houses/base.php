<?php 
    require_once "../../database.php";

    class Base {

        public $id;
        public $house_type;
        public $apartment_id;
        public $landlord_id;
        public $status;
        public $rent;
        public $tenant_id;

        protected $dbinst;
        protected $db; 
        protected $table = "houses";

        public function __construct($dbinst) {
            $this->dbinst = $dbinst;
            $this->db = $this->dbinst->getConn();
        }

        public function __destruct() {
            $this->dbinst->closeConn();
        }

        public function getOne($get_data = false) {

            if(empty($this->id)) {
                return ["bool" => false, "message" => "House Id is required"];
            } else {
                $stmt = "SELECT * FROM $this->table WHERE id=?";
                $sql = $this->db->prepare($stmt);
                $sql->execute([$this->id]);
                $data = $sql->fetch();
                
                if($data) {
                    if($get_data) {
                        return ["bool" => true, "data" => $data];
                    } else {
                        return ["bool" => true];
                    }
                    
                } else {
                    return ["bool" => false, "message" => "You Do Not Have House with such Id"];
                }
            }

        }

        public function vData() {
            if(empty($this->house_type)) {
                return ["bool" => false, "message" => "House Type Field is required"];
            } elseif (empty($this->status)) {
                return ["bool" => false, "message" => "House Status Field is required"];
            } elseif (empty($this->rent)) {
                return ["bool" => false, "message" => "Rent Field Required"];
            } elseif ($this->rent < 2000) {
                return ["bool" => false, "message" => "Rent Not Acceptable"];
            } else {
                return ["bool" => true];
            }
        }

        public function vLandlordId($checkExist=false) {
            if(empty($this->landlord_id)) {
                return ["bool" => false, "message" => "Landlord Id is required"];
            } elseif (!filter_var($this->landlord_id, FILTER_VALIDATE_INT)) {
                return ["bool" => false, "message" => "Invalid Landlord Id"];
            }   else {
                if($checkExist) {
                    return ["bool" => false, "message" => "Phase Not Implemented"];
                } else {
                    return ["bool" => true];
                }
            }
        }

        public function vApartmentId($checkExist=false) {
            if(empty($this->apartment_id)) {
                return ["bool" => false, "message" => "Apartment Id is required"];
            } elseif (!filter_var($this->apartment_id, FILTER_VALIDATE_INT)) {
                return ["bool" => false, "message" => "Invalid Apartment Id"];
            }  else {
                if($checkExist) {
                    return ["bool" => false, "message" => "Phase Not Implemented"];
                } else {
                    return ["bool" => true];
                }
            }
        }

        public function vTenantId($checkExist=false) {
            if(empty($this->tenant_id)) {
                return ["bool" => false, "message" => "Tenant Id is required"];
            } elseif (!filter_var($this->tenant_id, FILTER_VALIDATE_INT)) {
                return ["bool" => false, "message" => "Invalid Tenant Id"];
            } else {
                if($checkExist) {
                    return ["bool" => false, "message" => "Phase Not Implemented"];
                } else {
                    return ["bool" => true];
                }
            }
        }

    }

    // $dbinst = new Database;
    // $house = new Base($dbinst);

    // $house->tenant_id = "489";
    // print_r($house->vTenantId());

?>