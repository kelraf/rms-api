<?php 

    require_once "../../../database.php";
    require_once "../../../data/user/Landlord.php";

    $dbinst = new Database;
    $conn = $dbinst->getConn();
    $user = new LandLord($conn);

    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: PUT");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $data = json_decode(file_get_contents("php://input"), true);

    $user->id = $data["id"];


    $user->firstName = $data["firstName"];
    $user->lastName = $data["lastName"];
    $user->gender = $data["gender"];
    $user->phoneNo = $data["phoneNo"];
    $user->email = $data["email"];
  

    $done = $user->updateInfor();
    if($done["bool"]) {
        echo json_encode($done);
    } else {
        echo json_encode($done);
    }


?>