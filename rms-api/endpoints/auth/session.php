<?php 

    class Session {

        public function __construct() {
            session_start();
            $this->session = $_SESSION;
        }

        public function session_set($data) {

            if($data["user_id"] or $data["user_role"] and $data["email"]) {
                $this->session["user_data"] = $data;
                return ["bool" => true];
            } else {
                return ["bool" => false, "message" => "Error During Login Please Login Again"];
            }
                 
        }

        public function auth_required() {

            if(empty($this->session)) {
                return ["bool" => false, "message" => "Authentication Required Please Login"];
            } elseif (empty($this->session["user_data"] or empty($this->session["user_data"]["user_id"]) or empty($this->session["user_data"]["user_role"]) or empty($this->session["user_data"]["email"]))) {
                return ["bool" => false, "message" => "Session is invalid"];
            } else {
                if($this->session["user_data"]["user_role"] == "landlord" or $this->session["user_data"]["user_role"] == "admin") {
                    return ["bool" => true];
                } else {
                    return ["bool" => false, "message" => "Unknown User"];
                }
            }
                
        }

        public function admin_required() {

            if(empty($this->session)) {
                return ["bool" => false, "message" => "Authentication Required Please Login"];
            } elseif (empty($this->session["user_data"] or empty($this->session["user_data"]["user_id"]) or empty($this->session["user_data"]["user_role"]) or empty($this->session["user_data"]["email"]))) {
                return ["bool" => false, "message" => "Session is invalid"];
            } else {
                if($this->session["user_data"]["user_role"] == "admin") {
                    return ["bool" => true];
                } else {
                    return ["bool" => false, "message" => "Admin Required"];
                }
            }

        }

        public function session_destroy() {
            // Pass
        }
    }

    // $auth = new Auth;
    // $data = ["id" => 2, "role" => "admin"];
    // $token = $auth->encode($data);
    // print_r($token);
    // print_r($auth->auth_required($token."yy")->data);


?>