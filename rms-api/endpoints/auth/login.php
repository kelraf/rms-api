<?php

    class Login {

        private $landlord;
        private $email;
        private $password;

        public function __construct($landlord = null, $email=null, $password=null) {

            $this->landlord = $landlord;
            $this->email = $email;
            $this->password = $password;

        }

        // public function verify_password() {
        //     $this->password = filter_var($this->password, FILTER_SANITIZE_STRING);
        //     if(password_verify($this->password)) {

        //     }
        // }

        public function login() {
            $user = $this->landlord->vEmail(true);
            if(!$user["bool"]) {
                return $user;
            } else {
                $this->password = filter_var($this->password, FILTER_SANITIZE_STRING);
                if(password_verify($user["passw"], $this->password)) {

                    $data = [];
                    $data["user_id"] = $user["id"];
                    $data["user_role"] = $user["role"];
                    $data["email"] = $user["email"];

                    return ["bool" => true, "data" => $data];
                    
                } else {
                    return ["bool" => false, "message" => "Invalid Password"];
                }
            }
        }

        public function logout() {

        }
    }