<?php 

    require_once "../../database.php";
    require_once "../../data/apartments/apartment.php";

    $dbinst = new Database;
    $apartment = new Apartment($dbinst);

    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $apartment->landlord_id = $_GET["id"];

    $done = $apartment->myApart(true);

    echo json_encode($done);



?>