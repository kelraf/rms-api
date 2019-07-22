<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>House</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free-5.9.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom/house_profile.css">
</head>

<body class="bg-primary" style="background: blue;">

    <!-- Back Button -->
    <a href="./houses.php" class="back-arrow-btn">
        <i class="fa fa-arrow-left fa-2x"></i>
    </a>

    <div class="container main-cont pt-2 pb-2">
        <div class="row">

            <!-- About House Col -->
            <div class="col-md-4">

                <!-- Header -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>House Information</h4>
                    </div>
                </div>

                <!-- House Information -->
                <div class="row">
                    <div class="col-5 pt-2 pb-2">No Of BedRooms</div>
                    <div class="col-7 pt-2 pb-2">3</div>
                </div>

                <div class="row">
                    <div class="col-5 pt-2 pb-2">House Type</div>
                    <div class="col-7 pt-2 pb-2">House</div>
                </div>

                <div class="row">
                    <div class="col-5 pt-2 pb-2">Rent</div>
                    <div class="col-7 pt-2 pb-2">Kshs 30000</div>
                </div>

                <div class="row">
                    <div class="col-5 pt-2 pb-2">Tenant Name</div>
                    <div class="col-7 pt-2 pb-2">Kshs 30000</div>
                </div>

                <div class="row">
                    <div class="col-5 pt-2 pb-2">Occupied</div>
                    <div class="col-7 pt-2 pb-2">yes</div>
                </div>

                <!-- Edit User Details row -->
                <div class="row pt-2 pb-2">
                    <div class="col-12  p-0">
                        <div class="edit-btn">
                            <a href="./house_form.php" class="btn">Add House</a>
                        </div>
                    </div>
                </div>

                <!-- Edit User Details row -->
                <div class="row pt-2 pb-2">
                    <div class="col-12  p-0">
                        <div class="edit-btn">
                            <a href="./houses.php" class="btn">Edit</a>
                        </div>
                    </div>
                </div>

                <!-- Edit User Details row -->
                <div class="row pt-2 pb-2">
                    <div class="col-12  p-0">
                        <div class="edit-btn">
                            <a href="./houses.php" class="btn">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- House Icon and images -->
            <div class="col-md-4 p-0">

                <!-- House Images -->
                <!-- <div class="row">
                    <div class="col-md-12 p-0">
                        ejwsndjkn
                    </div>
                </div> -->



                <div class="container-fluid">

                    <!-- House Image -->
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="house-image">
                                House Image
                            </div>
                        </div>
                    </div>

                    <!-- House Icon -->
                    <div class="row">
                        <div class="col-12 p-0">

                            <!-- House Icon -->
                            <div class="house-icon bg-primary pb-2">
                                <i class="fa fa-home pt-1 pb-1 fa-5x"></i>

                                <!-- Edit User Details row -->
                                <div class="edit-btn">
                                    <a href="./houses.php" class="btn">More</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <!-- About The Apartment The House Belongs To -->
            <div class="col-md-4">

                <!-- Header -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Apartment Information</h4>
                    </div>
                </div>

                <!-- House Information -->
                <div class="row">
                    <div class="col-5 pt-2 pb-2">Apartment Name</div>
                    <div class="col-7 pt-2 pb-2">The Name</div>
                </div>

                <div class="row">
                    <div class="col-5 pt-2 pb-2">Apartment Location</div>
                    <div class="col-7 pt-2 pb-2">The Location</div>
                </div>

                <div class="row">
                    <div class="col-5 pt-2 pb-2">No of Houses</div>
                    <div class="col-7 pt-2 pb-2">30</div>
                </div>

                <div class="row">
                    <div class="col-5 pt-2 pb-2">Occupied Houses</div>
                    <div class="col-7 pt-2 pb-2">25</div>
                </div>

                <div class="row">
                    <div class="col-5 pt-2 pb-2">Unoccupied</div>
                    <div class="col-7 pt-2 pb-2">5</div>
                </div>

                <!-- Edit User Details row -->
                <div class="row pt-2 pb-2">
                    <div class="col-12  p-0">
                        <div class="edit-btn">
                            <a href="./apartment_profile.php" class="btn">View</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>