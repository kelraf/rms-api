<?php

    require_once "../../database.php";
    require_once "../../data/houses/houses.php";
    
    $dbinst = new Database;
    $house = new House($dbinst);

    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: PATCH");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $data = json_decode(file_get_contents("php://input"), true);

    $house->house_type = $data["house_type"];
    $house->rent = $data["rent"];
    $house->id = $data["id"];

    $done = $house->update();

    echo json_encode($done);

?>