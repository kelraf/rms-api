<?php 

    require_once "../../database.php";

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phoneNo = $_POST["phoneNo"];
    $nationalId = $_POST["nationalId"];

    $sql = mysqli_query(
        $conn, "UPDATE users 
        SET firstName = '$firstName', lastName = '$lastName', gender = '$gender', nationalId = '$nationalId', phoneNo = '$phoneNo', email = '$email' 
        WHERE id= 5"
    );

    if($sql) {
        header("Location: ../../../rms-ui/pages/dashboard.php");
    } else {
        echo "Error".mysqli_error($conn);
    }



?>