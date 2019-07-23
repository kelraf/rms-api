<?php 

    require_once "../../database.php";
    
    class Base {

        public $id;

        public $currentPassw;

        public $firstName;
        public $lastName;
        public $gender;
        public $nationalId;
        public $phoneNo;
        public $email;
        public $registrationDate;
        public $status;
        public $exitDate;
        public $passw;
        public $confirmPassw;

        public $admin;
        public $landLord;
        public $tenant;

        protected $dbinst;
        protected $db;

        public function __construct() {
            $this->dbinst = new Database;
            $this->db = $this->dbinst->getConn();
        }

        public function __destruct() {
            $this->db = $this->dbinst->closeConn();
        }

        protected function idExists($data=false) {
            if(empty($this->id)) {
                return ["bool" => false, "message" => "Please Provide the user Id"];
            } else {
                try {

                    $stmt = "SELECT * FROM users WHERE id=?";
                    $sql = $this->db->prepare($stmt);
                    $sql->execute([$this->id]);
                    $user = $sql->fetch();

                    if(!$user) {
                        return ["bool" => false, "message" => "No User With Such Id"];
                    } else {
                        if($data) {
                            return ["bool" => true, "user" => $user];
                        } else {
                            return ["bool" => true];
                        }
                    }

                } catch(PDOExeption $ex) {
                    echo "Error: {$ex->getMessage()}";
                }
            }
        }

        protected function vEmail($checkExists=false) {

            // Sanitize email
            $this->email = filter_var($this->email, FILTER_SANITIZE_EMAIL);
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                return ["bool" => false, "message" => "Invalid Email"];
            } else {
                if($checkExists) {
                    try {

                        $sql = $this->db->prepare("SELECT * FROM users WHERE email=?");
                        $sql->execute([$this->email]);
                        $user = $sql->fetch();

                        if ($user) {
                            return ["bool" => false, "message" => "Email Exists"];
                        } else {
                            return ["bool" => true, "message" => "Email Not Available"];
                        }
                    } catch(PDOExeption $ex) {
                        echo "Error: {$ex->getMessage()}";
                    }
                } else {
                    return ["bool" => true];
                }
            }

        }
        
        protected function vPassword($compareExisting=false) {
            if(empty($this->passw)) {
                return ["bool" => false, "message" => "Password Field Required"];
            } elseif(empty($this->confirmPassw)) {
                return ["bool" => false, "message" => "Confirm Password Field Required"];
            } elseif(strlen($this->passw) < 6) {
                return ["bool" => false, "message" => "Your Password should not be less than six Characters"];
            } elseif($this->passw != $this->confirmPassw) {
                return ["bool" => false, "message" => "Your Passwords Must Match"];
            } else {
                if($compareExisting) {

                    $data = $this->idExists(true);
                    if($data["bool"]) {
                        $user = $data["user"];
                        
                        if(!password_verify($this->currentPassw, $user["passw"])) {
                            return ["bool" => false, "message" => "Current Password is Invalid"];
                        } else {
                            $this->passw = password_hash($this->passw, PASSWORD_DEFAULT);
                            $this->confirmPassw = password_hash($this->confirmPassw, PASSWORD_DEFAULT);
                            return ["bool" => true];
                        }
                    } else {
                        return $data;
                    }

                } else {
                    $this->passw = password_hash($this->passw, PASSWORD_DEFAULT);
                    $this->confirmPassw = password_hash($this->confirmPassw, PASSWORD_DEFAULT);
                    return ["bool" => true];
                }
            }
        }

        protected function vNames() {
            // Sanitize The Names
            $this->firstName = filter_var($this->firstName, FILTER_SANITIZE_STRING);
            $this->lastName = filter_var($this->lastName, FILTER_SANITIZE_STRING);

            if(empty($this->firstName)) {
                return ["bool" => false, "message" => "First Name Field is required"];
            } elseif(empty($this->lastName)) {
                return ["bool" => false, "message" => "Last Name Field is required"];
            } elseif(strlen($this->firstName) < 2 or strlen($this->lastName) < 2) {
                return ["bool" => false, "message" => "Names Should Not Be Too Short"];
            } else {
                return ["bool" => true];
            }
        }

        protected function vUserInfor() {}

        /**
         * ----------------------------------------------------------------------------------------------------
         * The Methods From These Point Downwords are 
          */

        public function updateInfor() {

            /**
             * --------------------------------------------------------------------------------------------------------------------------------------------------
             * This method is used to edit user additional information 
             * Parameters are user id, email, first and last Names, gender, phone Number, National Id
             * This Method Depends on:
             *  -vNames() To validate names and returns assoc array with a bool as true or false depending on either validation was successfull and message
             *  -vEmail(true) To validate Email
             *  -idExists() To Check if The provided id exists in the database
             * 
             * ---------------------------------------------------------------------------------------------------------------------------------------------------
             *   Note 
             *  -------------------------------------------------------------------------------------------------------------------------
             *   These Method Should Be Available and ready to use as it is in any child Class

             *   -------------------------------------------------------------------------------------------------------------------------
             * 
             */

            $names = $this->vNames();
            $email = $this->vEmail();
            $idexists = $this->idExists();

            if(!$names["bool"]) {
                return $names;
            } elseif(!$email["bool"]) {
                return $email;
            } elseif(!$idexists["bool"]) {
                return $idexists;
            } else {

                try {

                    $stmt = "UPDATE users SET firstName=?, lastName=?, gender=?, nationalId=?, phoneNo=?, email=? WHERE id=?";
                    $sql = $this->db->prepare($stmt);
    
                    $data = [$this->firstName, $this->lastName, $this->gender, $this->nationalId, $this->phoneNo, $this->email, $this->id];
    
                    if($sql->execute($data)) {
                        return ["bool" => true, "message" => "Updated Successfully"];
                    } else {
                        throw new Exception("Error Occurred When Updating A User");
                    }
    
                } catch(PDOExeption $ex) {
                    echo "Error: {$ex->getMessage()}";
                }

            }
        }

        public function getUser() {

            /* 
                -------------------------------------------------------------------------------------------------------------------------

                This method  gets User of The given Id
                The Method Depends on The idExists() method Which returns an assoc with bool of true and success message if user exists
                If The User Does not exist the it returns an assoc with a bool of false and a message 

                -------------------------------------------------------------------------------------------------------------------------

                Note 
                -------------------------------------------------------------------------------------------------------------------------
                These Method Should Be Available and ready to use as it is in any child Class

                -------------------------------------------------------------------------------------------------------------------------
            */

            $done = $this->idExists(true);

            if(!$done["bool"]) {
                return $done;
            } else {
                return $done;
            }
            
        }


        public function deleteUser() {

            /**
             *  -----------------------------------------------------------------------------------------------------
             * This Method Is used to delete a user of the Given Id for the database
             * This method depends of idExistes() method which Checks if The id given exists in the database
             *
             *  -----------------------------------------------------------------------------------------------------
             *  NOTE 
             *  -----------------------------------------------------------------------------------------------------
              *  These Method Should Be Available and ready to use as it is in any child Class
              *
              * -----------------------------------------------------------------------------------------------------
             */

            $idexists = $this->idExists();

            if(!$idexists["bool"]) {
                return $idexists;
            } else {
                $stmt = "DELETE FROM users WHERE id = ?";
                $sql = $this->db->prepare($stmt);
                if ($sql->execute([$this->id])) {
                    return ["bool" => true, "message" => "User Successfully Deleted"];
                } else {
                    return ["bool" => false, "message" => "Unable To Delete The user"];
                }
            }
        }
    } 

    // $base = new Base;

    // $base->id = 4;
    // $base->email = "kelraf11746@gmail.co";
    // print_r($base->idExists(true));
    // print_r($base->vEmail(true));

?>