
<?php 

    require_once "../../database.php";
    require_once "../../data/houses/houses.php";

    $dbinst = new Database;
    $house = new House($dbinst);

    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $house->id = $_GET["id"];

    $done = $house->getOne(true);

    echo json_encode($done);

?>