<?php 

    require_once "../../database.php";
    require_once "base.php";

    class House extends Base {

        public function addHouse() {
            $vdata = $this->vData(true);
            $vlandlord_id = $this->vLandlordId();
            $vapart = $this->vApartmentId();

            if(!$vdata["bool"]) {
                return $vdata;
            } elseif(!$vlandlord_id["bool"]) {
                return $vlandlord_id;
            } elseif(!$vapart["bool"]) {
                return $vapart;
            } else {
                try {

                    if(empty($this->tenant_id)){
                        $stmt = "INSERT INTO $this->table(houseType, apartmentId, landlordId, status, rent) VALUES(?, ?, ?, ?, ?)";
                        $sql = $this->db->prepare($stmt);
                        if ($sql->execute([$this->house_type, $this->apartment_id, $this->landlord_id, $this->status, $this->rent])) {
                            return ["bool" => true, "message" => "Successsfully added one House"];
                        } else {
                            throw new Exception("Error While Adding A House");  
                        }
                    } else {
                        $vtenant_id = $this->vTenantId();
                        if(!$vtenant_id["bool"]) {
                            return $vtenant_id;
                        } else {
                            $stmt = "INSERT INTO $this->table(houseType, apartmentId, landlordId, status, rent, tenantId) VALUES(?, ?, ?, ?, ?, ?)";
                            $sql = $this->db->prepare($stmt);
                            if ($sql->execute([$this->house_type, $this->apartment_id, $this->landlord_id, $this->status, $this->rent, $this->tenant_id])) {
                                return ["bool" => true, "message" => "Successsfully added one House"];
                            } else {
                                throw new Exception("Error While Adding A House");  
                            }
                        }
                    }
                
                } catch(PDOExeption $ex) {
                    echo "Error: {$ex->getMessage()}";
                }
            }
            
        } 

        public function getAll() {
            $vlandlord_id = $this->vLandlordId();
            if(!$vlandlord_id["bool"]) {
                return $vlandlord_id;
            } else {
                $stmt = "SELECT * FROM $this->table WHERE landlordId=?";
                $sql = $this->db->prepare($stmt);
                $sql->execute([$this->landlord_id]);
                $data = $sql->fetchAll();
                
                if($data) {
                    return ["bool" => true, "data" => $data];
                } else {
                    return ["bool" => false, "message" => "You Do Not Have Houses Yet"];
                }
            }
        }

        public function update() {
            $idexist = $this->getOne();

            if(!$idexist["bool"]) {
                return $idexist;
            } else {
                $vdata = $this->vData();
                if(!$vdata["bool"]) {
                    return $vdata;
                } else {
                    $stmt = "UPDATE $this->table SET houseType=?, rent=? WHERE id=?";
                    $sql = $this->db->prepare($stmt);
                    if($sql->execute([$this->house_type, $this->rent, $this->id])) {
                        return ["bool" => true, "message" => "Successfully Update House"];
                    } else {
                        return ["bool" => false, "message" => "Unable To Update"];
                    }
                }
            }
        }

        public function updateStatus() {
            $idexist = $this->getOne();

            if(!$idexist["bool"]) {
                return $idexist;
            } else {
                $vtenant_id = $this->vTenantId();
                if(!$vtenant_id["bool"]) {
                    $this->status = "notoccupied";
                    $this->tenant_id = "";
                } else {
                    $this->status = "occupied";
                }

                $stmt = "UPDATE $this->table SET status=?, tenantId=? WHERE id=?";
                $sql = $this->db->prepare($stmt);
                if($sql->execute([$this->status, $this->tenant_id, $this->id])) {
                    return ["bool" => true, "message" => "Successfully Update House"];
                } else {
                    return ["bool" => false, "message" => "Unable To Update"];
                }
            }
        }

        public function delHouse() {
            $idexist = $this->getOne();
            if(!$idexist["bool"]) {
                return $idexist;
            } else {
                $stmt = "DELETE FROM $this->table WHERE id=?";
                $sql = $this->db->prepare($stmt);
                if($sql->execute([$this->id])) {
                    return ["bool" => true, "message" => "Successfully Deleted One House"];
                } else {
                    return ["bool" => false, "message" => "Unable To Delete"];
                }
            }
        }
    }
    $dbinst = new Database;
    $house = new House($dbinst);

    $house->house_type = "4";
    // $house->status = "notoccupied";
    $house->rent = "20000";
    $house->landlord_id = "1";
    $house->apartment_id = "1";
    $house->tenant_id = "4";
    $house->id = "1";

    // print_r($house->addHouse());
    // print_r($house->getAll());
    // print_r($house->getOne(true));
    // print_r($house->update());
    // print_r($house->updateStatus());
    print_r($house->delHouse());

?>