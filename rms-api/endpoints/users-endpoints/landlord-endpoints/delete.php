<?php 

    require_once "../../../database.php";
    require_once "../../../data/user/Landlord.php";

    $dbinst = new Database;
    $conn = $dbinst->getConn();
    $user = new LandLord($conn);

    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $data = json_decode(file_get_contents("php://input"), true);

    $user->id = $data["id"];
    $done = $user->deleteUser();
    
    if($done["bool"]) {
        echo json_encode($done);
    } else {
        echo json_encode($done);
    }

?>