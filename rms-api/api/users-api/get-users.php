<?php 

    require_once "../../database.php";

    $result = mysqli_query($conn, "SELECT * FROM users");
    
    $rows = array();

        while($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        echo json_encode($rows);
?>