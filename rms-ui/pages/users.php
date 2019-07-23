<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../css/custom/custome-libraries/datatables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free-5.9.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom/tables.css">
</head>
<body class="bg-primary text-white">
   
    <div class="container-fluid">
        <div class="row pt-4 pb-4">
            <div class="col-md-6"><h4>My Tenants</h4></div>
            <div class="col-md-6"><h1></h1></div>
        </div>

        <div class="row">
            <div class="col-12">
               <table class="table table-bordered table-hover " id="users">

                   <thead>
                       <tr>
                           <td>First Name</td>
                           <td>Last Name</td>
                           <td>Gender</td>
                           <td>National Id</td>
                           <td>Phone Number</td>
                           <td>Email</td>
                           <td>Registration Date</td>
                           <td>Status</td>
                           <td>Update</td>
                           <td>Delete</td>
                       </tr>
                   </thead>

                   <tbody class="bg-primary" id="table-body">

                        <?php 
                        
                            include "../../rms-api/database.php";

                            $result = mysqli_query($conn, "SELECT * FROM users");
                        
                                while($row = mysqli_fetch_array($result)) {
                                    echo '
                                        <tr id="table-row" class="g-primary">
                                            <td>'.$row["firstName"].'</td>
                                            <td>'.$row["lastName"].'</td>
                                            <td>'.$row["gender"].'</td>
                                            <td>'.$row["nationalId"].'</td>
                                            <td>'.$row["phoneNo"].'</td>
                                            <td>'.$row["email"].'</td>
                                            <td>'.$row["registrationData"].'</td>
                                            <td>'.$row["firstName"].'</td>
                                            <td class="p-0">
                                            <a href="#" id="table-btn">Update</a>
                                            </td>
                                            <td class="p-0">
                                            <a href="#" id="table-btn">Delete</a>
                                            </td>
                                        </tr>
                                        ';
                                }
                        
                        ?>                       
                   </tbody>
               </table>
            </div>
        </div>
    </div>
    
    

    
    <script src="../js/custom/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="../js/custom/custom-libraries/datatables.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom/users_datatable.js"></script>
</body>
</html>