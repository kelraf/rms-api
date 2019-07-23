<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../css/custom/custome-libraries/datatables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free-5.9.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom/tables.css">
</head>

<body class="bg-primary text-white">

    <!-- Back Button -->
    <a href="./dashboard.php" class="back-arrow-btn">
        <i class="fa fa-arrow-left fa-2x"></i>
    </a>

    <div class="container-fluid">
        <div class="row pt-4 pb-4">
            <div class="col-md-6">
                <h4>My Apartments</h4>
            </div>
            <div class="col-md-6">
                <h1></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover text-white" id="users">

                    <thead>
                        <tr class="text-white">
                            <td>Apartment Name</td>
                            <td>Apartment Location</td>
                            <td>Number of Houses</td>
                            <td>Houses With Tenants</td>
                            <td>Houses Without Tenants</td>
                            <td>View</td>
                        </tr>
                    </thead>

                    <tbody class="bg-primary" id="table-body">

                        <?php 
                        
                            include "../../rms-api/database.php";

                            $results = mysqli_query($conn, "SELECT * FROM apartments");
                            
                            while($data = mysqli_fetch_array($results)) {
                                echo '
                                <tr id="table-row" class="table-row pt-3">
                                    <td>'.$data["apartmentName"].'</td>
                                    <td>'.$data["apartmentLocation"].'</td>
                                    <td>'.$data["numberHouses"].'</td>
                                    <td>'.$data["emptyHouses"].'</td>
                                    <td>'.$data["occupiedHouses"].'</td>
                                    <td class="p-0">
                                        <a href="./apartment_profile.php?id='.$data["id"].'" class="btn mt-1 mb-1" id="table-btn">More</a>
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




    <script src="../js/custom/custom-libraries/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>
    <script src="../js/custom/custom-libraries/datatables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="../js/custom/custom-libraries/popper.js"></script>
    <script src="../js/custom/custom-libraries/chart.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom/users_datatable.js"></script>
</body>

</html>