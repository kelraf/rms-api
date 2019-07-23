<?php 

    require_once "./base-user.php";

    class Tenant extends Base {

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
        
        public function __construct() {
            parent::__construct();
        }

        public function myTenants() {

            /**
             * The Method id user to get tenants that belong to the        
             */

            try {
                $stmt = "SELECT * FROM users WHERE landlordId=?";
                $sql = $this->db->prepare($stmt);
                $data = $sql->fetchAll();

                if($data) {
                    return ["bool" => true, "data" => $data];
                } else {
                    return ["bool" => false, "message" => "Users Table Is empty"];
                }
            } catch(PDOExeption $ex) {
                echo "Error: {$ex->getMessage()}";
            }
        }
    }

    $tenant = new Tenant;

    $tenant->id = 8;

    // print_r($tenant->deleteUser());

?>