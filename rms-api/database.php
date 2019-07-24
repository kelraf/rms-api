<?php 

    // $conn = mysqli_connect("localhost", "root", "", "rental_managment_system");

    // if(mysqli_connect_errno()) {
    //     echo "Error: ".mysqli_connect_error();
    // } else {
    //     echo "Successfully Connected";
    // }

    class Database {
        private $host = "localhost";
        private $username = "root";
        private $dbname = "rental_managment_system";
        private $password;

        private $connection = null;

        public function __construct() {
            try {
                $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname;", $this->username);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Successfull Database Connection \n";
            } catch(PDOException $ex) {
                echo "Error: {$ex->getMessage()}";
            }
        }

        public function getConn() {

            // echo "Here is The Connection \n";
            return $this->connection;
        }

        public function closeConn() {
            $this->connection = null;
            // echo "Database Connection Closed \n";
        }

        public function createTables() {

            $users = "CREATE TABLE IF NOT EXISTS users(
                id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                firstName TEXT(20),
                lastName TEXT(20),
                gender TEXT(10),
                phoneNo VARCHAR(15),
                email VARCHAR(100),
                registrationData VARCHAR(15),
                status TEXT(10),
                passw VARCHAR(100) NOT NULL,
                confirmPassw VARCHAR(100) NOT NULL,
                admin BOOLEAN,
                landlord BOOLEAN
            )";

            $tenants = "CREATE TABLE IF NOT EXISTS tenants(
                id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                firstName TEXT(20),
                lastName TEXT(20),
                gender TEXT(10),
                phoneNo VARCHAR(15),
                email VARCHAR(100),
                registrationData VARCHAR(15),
                status TEXT(10),
                exitDate VARCHAR(15),
                landlordId INT(8) NOT NULL
            )";

            $apartments = "CREATE TABLE IF NOT EXISTS apartments(
                id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                apartmentName TEXT(20) NOT NULL,
                apartmentLocation VARCHAR(20) NOT NULL,
                landlordId INT(10) NOT NULL,
                numberHouses INT(10),
                emptyHouses INT(15),
                occupiedHouses TEXT(10),
                rentalTotal VARCHAR(15)
            )";

            $houses = "CREATE TABLE IF NOT EXISTS houses(
                id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                houseType VARCHAR(30) NOT NULL,
                apartmentId VARCHAR(20) NOT NULL,
                landlordId INT(10) NOT NULL,
                status TEXT(20) NOT NULL,
                rent INT(20),
                tenantId INT(10)
            )";

            $this->connection->exec($users);
            $this->connection->exec($tenants);
            $this->connection->exec($apartments);
            $this->connection->exec($houses);

            echo "Successfully Created The Tables";

        }
    }

    // $db = new Database;
    // $db->getConn();
    // $db->closeConn();
    // $db->createTables();

?>