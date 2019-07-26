<?php 

    class Base {

        public $id;
        public $house_type;
        public $apartment_id;
        public $landlord_id;
        public $status;
        public $rent;
        public $tenant_id;

        private $dbinst;
        private $db;
        private $house_table;

        public function __construct($dbinst) {
            $this->dbinst = $dbinst;
            $this->db = $this->dbinst->getConn();
        }

        public function __destruct() {
            $this->dbinst->closeConn();
        }

    }

    // $dbinst = new Database;
    // $house = new House($dbinst)

?>