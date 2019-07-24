<?php 

    require_once "./base-user.php";

    class Tenant extends Base {

        protected $table = "tenants";

        /**
         * ---------------------------------------------------------------------------------------------------
         * Seens The Class Extends From The Base Class There are some methods That are required in these Class
         * 
         * ---------------------------------------------------------------------------------------------------
         * These are 
         *      -getUser() Which will get a tenant buy a given id
         *      -updateInfor() Which will update a tenant by a given id
         *      -deleteUser() Which will delete a tenant by a given id
         * 
         * ---------------------------------------------------------------------------------------------------
         */
        
        public function addTenant() {

            if(empty($this->id)) {
                return ["bool" => false, "message" => "Id is required"];
            } else {
                $vnames = $this->vNames();

                if(!$vnames["bool"]) {
                    return $vnames;
                } elseif(empty($this->gender)) {
                    return ["bool" => false, "message" => "Gender field is required"];
                } elseif(!$this->vEmail(true)["bool"]) {
                    return $this->vEmail(true);
                } else {
                    $this->phoneNo = filter_var($this->phoneNo, FILTER_SANITIZE_STRING);
                    $this->nationalId = filter_var($this->nationalId, FILTER_SANITIZE_STRING);

                    try {

                        $stmt = "INSERT INTO $this->table (firstName, lastName, gender, nationalId, phoneNo, email, landlordId) VALUES(?, ?, ?, ?, ?, ?, ?)";
                        $sql = $this->db->prepare($stmt);
        
                        $data = [$this->firstName, $this->lastName, $this->gender, $this->nationalId, $this->phoneNo, $this->email, $this->id];
        
                        if($sql->execute($data)) {
                            return ["bool" => true, "message" => "Tenant added Successfully"];
                        } else {
                            throw new Exception("Error Occurred When adding A Tenant");
                        }
        
                    } catch(PDOExeption $ex) {
                        echo "Error: {$ex->getMessage()}";
                    }

                }
            }

        }

        public function myTenants() {

            /**
             * The Method id user to get tenants that belong to the current landlord id       
             */

             if(empty($this->id)) {
                 return ["bool" => false, "message" => "Id is required"];
             } else {
                try {
                    $stmt = "SELECT * FROM $this->table WHERE landlordId=?";
                    $sql = $this->db->prepare($stmt);
                    $sql->execute([$this->id]);
                    $data =  $sql->fetchAll();
    
                    if($data) {
                        return ["bool" => true, "data" => $data];
                    } else {
                        return ["bool" => false, "message" => "You Do Not Have Tenants"];
                    }
                } catch(PDOExeption $ex) {
                    echo "Error: {$ex->getMessage()}";
                }
             }
        }
    }

    $tenant = new Tenant;

    // $tenant->id = 1;

    $tenant->firstName = "pambana";
    $tenant->lastName = "nahali";
    $tenant->gender = "female";
    $tenant->nationalId = 11455578;
    $tenant->phoneNo = "0756563488";
    $tenant->email = "pambana@gmail.com";

    // print_r($tenant->addTenant());
    // print_r($tenant->updateInfor());
    print_r($tenant->myTenants());
    // print_r($tenant->getUser());
    // print_r($tenant->deleteUser());

?>