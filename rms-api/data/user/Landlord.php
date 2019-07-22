<?php 

    require_once "./base-user.php";

    class LandLord extends Base {

        public function __construct() {
            parent::__construct();
        }

        public function register() {

            /**
             * These Method id used to register a user to the system
             * it receives email password and confirm password as its parameters
             * returns and assoc array with true and a success message if successfull or false and error message if unsuccessfull
             * Dependacy methods
             *  -vEmail() with a true parameter to check if an email exists in the database
             *  -vPassword() with and optional false to tell the method not to verify against a stored password in the db which will require user id
             */

            $vmail = $this->vEmail(true);
            $vpassw = $this->vPassword();

            if(!$vmail["bool"]) {
                return $vmail;
            } elseif(!$vpassw["bool"]) {
                return $vpassw;
            } else {

                try {

                    $stmt = "INSERT INTO users(email, passw, confirmPassw) VALUES(?, ?, ?)";
                    $sql = $this->db->prepare($stmt);
    
                    if($sql->execute([$this->email, $this->passw, $this->confirmPassw])) {
                        return ["bool" => true, "message" => "Successfully Registered"];
                    } else {
                        throw new Exception("Error Occurred During Registration");  
                    }
    
                } catch(PDOExeption $ex) {
                    echo "Error: {$ex->getMessage()}";
                }

            }

        } 

        public function getUsers($getOne=false) {

            /* 
                This method creates gets User/s depending on the value of the getOne variable
                If true returns a user with a given id
                if false returns all the Users form the users table.
                if No id is provided and the value of getOne is true
                Then the method returns an assos array with a boolean of false and a message 
            */
            
            if($getOne) {
                $done = $this->idExists(true);

                if(!$done["bool"]) {
                    return $done;
                } else {
                    return $done;
                }

            } else {

               $done = $this->getAll();
               if($done["bool"]) {
                    return $done;
               } else {
                   return $done;
               }

            }

        }
        
        public function updateInfor() {
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

        public function updatePasswords() {
            /* 
                *This method is userd to update user passwords
                *It receives current, new and confirmed passwords and the user id to update.
                *It returns and assoc array with a true and a success message if success or false and error message if unsuccessfull
                *Dependant methods 
                    -vPassword(true) The true parameter tells The method to verify against a stored password in the database. These Requires user id set.
            */
            $result = $this->vPassword(true);
            if($result["bool"]) {

                try {
                    $sql = $this->db->prepare("UPDATE users SET passw=?, confirmPassw=? WHERE id=?");
                    if($sql->execute([$this->passw, $this->confirmPassw, $this->id])) {
                        return ["bool" => true, "Message" => "Successlly Updated Your Password"];
                    } else {
                        throw new Exception("Error Updating Passwords");
                        
                    }
                    
                } catch(PDOExeption $ex) {
                    echo "Error: {$ex->getMessage()}";
                }
              
            } else {
                return $result;
            }
        }

        public function deleteUser() {}

    } 

    $user = new LandLord;

    $user->id = 5;

    $user->currentPassw = "kelraf";

    $user->firstName = "Kelvin";
    $user->lastName = "Wambugu";
    $user->gender = "male";
    $user->nationalId = 1122678;
    $user->phoneNo = "0727456354";
    $user->email = "kelvin@gmail.com";
    $user->passw = "kelraf";
    $user->confirmPassw = "kelraf";

    // print_r($user->register());
    print_r($user->updatePasswords());
    // print_r($user->getUsers(true));
    // print_r($user->updateInfor());

?>