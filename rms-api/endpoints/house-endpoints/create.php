<?php

    require_once "../../database.php";
    require_once "../../data/houses/houses.php";
    
    $dbinst = new Database;
    $house = new House($dbinst);

?>