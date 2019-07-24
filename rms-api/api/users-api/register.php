<?php 

    require_once "../../database.php";
    require_once "../../data/user/Landlord.php";

    $dbinst = new Database;
    $conn = $dbinst->getConn();
    $user = new LandLord($conn);

    $user->id = 1;

    // $user->currentPassw = "kelvin";

    // $user->firstName = "Kelraf";
    // $user->lastName = "Wambugu";
    // $user->gender = "male";
    // $user->nationalId = 1122678;
    // $user->phoneNo = "0727456354";
    // $user->email = "kelraf@gmail.com";
    // $user->passw = "kelraf";
    // $user->confirmPassw = "kelraf";

    // print_r($user->register());
    print_r($user->updatePasswords());
    // print_r($user->getUser());
    // print_r($user->updateInfor());
    // print_r($user->deleteUser());



?>