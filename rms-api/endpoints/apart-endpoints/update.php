<?php 

    require_once "../../database.php";
    require_once "../../data/apartments/apartment.php";

    $dbinst = new Database;
    $apartment = new Apartment($dbinst);
    
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: PUT");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $data = json_decode(file_get_contents("php://input"), true);

    $apartment->apartment_name = $data["apartment_name"];
    $apartment->apartment_location = $data["apartment_location"];
    $apartment->id = $data["id"];

    $done = $apartment->update();

    echo json_encode($done);
?>