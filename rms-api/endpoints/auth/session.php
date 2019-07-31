<?php 

    class Session {

        public function __construct() {
            session_start();
        }

        public function session_set($data) {

            if($data["user_id"] and $data["user_role"] and $data["email"]) {
                $_SESSION["user_data"] = $data;
                return ["bool" => true];
            } else {
                return ["bool" => false, "message" => "Error During Login Please Login Again"];
            }
                 
        }

        public function auth_required() {

            $session = $_SESSION;

            if(empty($session)) {
                return ["bool" => false, "message" => "Authentication Required Please Login"];
            } elseif (empty($session["user_data"] or empty($session["user_data"]["user_id"]) or empty($session["user_data"]["user_role"]) or empty($session["user_data"]["email"]))) {
                return ["bool" => false, "message" => "Session is invalid"];
            } else {
                if($session["user_data"]["user_role"] == "landlord" or $session["user_data"]["user_role"] == "admin") {
                    return ["bool" => true];
                } else {
                    return ["bool" => false, "message" => "Unknown User"];
                }
            }
                
        }

        public function admin_required() {

            $session = $_SESSION;

            if(empty($session)) {
                return ["bool" => false, "message" => "Authentication Required Please Login"];
            } elseif (empty($session["user_data"] or empty($session["user_data"]["user_id"]) or empty($session["user_data"]["user_role"]) or empty($session["user_data"]["email"]))) {
                return ["bool" => false, "message" => "Session is invalid"];
            } else {
                if($session["user_data"]["user_role"] == "admin") {
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