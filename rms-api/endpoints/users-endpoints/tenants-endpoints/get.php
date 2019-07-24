<?php 

    require_once "../../../database.php";
    require_once "../../../data/user/Tenant.php";

    $dbinst = new Database;
    $conn = $dbinst->getConn();
    $user = new Tenant($conn);

    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $user->id = $_GET["id"];

    $done = $user->myTenants();
    
    if($done["bool"]) {
        echo json_encode($done);
    } else {
        echo json_encode($done);
    }

?>