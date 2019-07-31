<?php 

    require_once "base-user.php";

    class LandLord extends Base {

        protected $table = "users";

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

            if($vmail["bool"]) {
                return $vmail;
            } elseif(!$vpassw["bool"]) {
                return $vpassw;
            } else {

                try {

                    $stmt = "INSERT INTO $this->table(email, passw, confirmPassw) VALUES(?, ?, ?)";
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
                    $sql = $this->db->prepare("UPDATE $this->table SET passw=?, confirmPassw=? WHERE id=?");
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

    } 

    // $user = new LandLord;

    // $user->id = 1;

    // $user->currentPassw = "kelvin";

    // $user->firstName = "Kelraf";
    // $user->lastName = "Wambugu";
    // $user->gender = "male";
    // $user->nationalId = 1122678;
    // $user->phoneNo = "0727456354";
    // $user->email = "kelraf@gmail.com";
    // $user->passw = "kelraf";
    // $user->confirmPassw = "kelraf";

    // print_r($user->register());
    // print_r($user->updatePasswords());
    // print_r($user->getUser());
    // print_r($user->updateInfor());
    // print_r($user->deleteUser());

?>