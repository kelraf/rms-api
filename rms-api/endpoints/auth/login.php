<?php

    require_once "session.php";
    require_once "../../database.php";
    require_once "../../data/user/Landlord.php";

    class Login extends Session {

        private $landlord;
        private $email;
        private $password;

        public function __construct($landlord = null, $email=null, $password=null) {

            parent::__construct();
            $this->landlord = $landlord;
            $this->email = $email;
            $this->password = $password;

        }

        public function login() {

            $this->landlord->email = $this->email;
            $user = $this->landlord->vEmail(true);

            if(!$user["bool"]) {
                return $user;
            } else {

                $this->password = filter_var($this->password, FILTER_SANITIZE_STRING);

                if(password_verify($this->password, $user["data"]["passw"])) {
                    
                    $data = [];
                    $data["user_id"] = $user["data"]["id"];
                    $data["user_role"] = $user["data"]["role"];
                    $data["email"] = $user["data"]["email"];

                    $set_session = $this->session_set($data);

                    if($set_session["bool"]) {
                        return ["bool" => true, "message" => "Successfull Login"];
                    } else {
                        return $set_session;
                    }
                    

                } else {

                    return ["bool" => false, "message" => "Invalid Password"];
                    
                }
            }
        }

        public function logout() {

        }
    }

    $db = new Database;
    $conn = $db->getConn();
    $landlord = new LandLord($conn);

    $login = new Login($landlord, "wangui@gmail.com", "wangui");

    print_r($login->login());