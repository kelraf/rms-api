<?php 

    require_once "../../database.php";

    $email = $_POST["email"];
    $passw = $_POST["password"];
    $conf_passw = $_POST["confirm_password"];

    $landlord = true;

    $done = mysqli_query($conn, 
                        "INSERT INTO users (email, confirmPassw, passw, landlord)
                            VALUES('$email', '$passw', '$conf_passw', '$landlord')"
                        );

    if($done) {
        header("Location: ../../../rms-ui/pages/dashboard.php");
    } else {
        echo "Error";
    }


?>