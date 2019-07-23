<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LandLord</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free-5.9.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom/dashboard.css">
</head>

<body class="bg-primary" onload="dashboard();">

    <!-- Mobile Version Responsive -->
    <div class="container-fluid pt-1 pb-1 bg-dange resp">
        <div class="row bg-succes pt-1 pb-1">

            <!-- Logo -->
            <div class="col-3">
                <p class="lead">rms</p>
            </div>

            <!-- Image -->
            <div class="col-3 profile-image-col">
                <a href="./user_profile.php" class="image-link">
                    <div class="image-cont">
                        <img class="img-fluid" src="../images/profile-image.jpg" alt="Profile Image">
                    </div>
                </a>
            </div>

            <!-- Notification -->
            <div class="col-3">
                <div class="notification pt-2 text-center">
                    <i class="fa fa-bell fa-2x"></i>
                    <p class="lead notification-content">2</p>
                </div>
            </div>
            <div class="col-3">
                <div class="lines-box" id="lines-box">
                    <hr class="line" id="line-one">
                    <hr class="line" id="line-two">
                    <hr class="line" id="line-three">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid main-cont">

        <div class="row" id="top-div">

            <!-- Top Bar -->
            <div class="col-md-9 offset-3 p-0 right-top-col" id="header">
                <div class="right-top">
                    <div class="container">
                        <div class="row pt-3 pb-3">
                            <div class="col-md-10 col-6">
                                <h3 class="text-center rms">Rental Managment System</h3>
                            </div>
                            <div class="col-md-2 col-6">
                                <div class="row">
                                    <div class="col-md-6 p-0 col-6 profile-image-col">
                                        <a href="./user_profile.php" class="image-link">
                                            <div class="image-cont">
                                                <img class="img-fluid" src="../images/profile-image.jpg" alt="Profile Image">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-6 g-danger">
                                        <div class="notification pt-2 text-center">
                                            <i class="fa fa-bell fa-2x"></i>
                                            <p class="lead notification-content">2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- bg-primary -->
            <div class="col-md-3 col-sm-3 p-0" id="menu">

                <div class="nav flex-column nav-pills btn-tabs-box" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <a class="nav-link active p-0" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">

                        <div class="container-fluid pt-2 pb-1 active-custom" id="dashboard">
                            <div class="row">
                                <div class="col-md-2 col-2 p-0 text-center">
                                    <i class="fa fa-dashboard pr-1 fa-2x"></i>
                                </div>
                                <div class="col-md-10 col-10 p-0">
                                    <span>Dashboard</span>
                                </div>
                            </div>
                        </div>

                    </a>

                    <a class="nav-link p-0" id="v-pills-apartments-tab" data-toggle="pill" href="#v-pills-apartments" role="tab" aria-controls="v-pills-apartments" aria-selected="false">

                        <div class="container-fluid pt-2 pb-1" id="apartments">
                            <div class="row">
                                <div class="col-md-2 col-2 p-0 text-center">
                                    <i class="fa fa-building pr-1 fa-2x"></i>
                                </div>
                                <div class="col-md-10 col-10 p-0">
                                    <span>Apartments</span>
                                </div>
                            </div>
                        </div>

                    </a>

                    <a class="nav-link p-0" id="v-pills-houses-tab" data-toggle="pill" href="#v-pills-houses" role="tab" aria-controls="v-pills-houses" aria-selected="false">

                        <div class="container-fluid pt-2 pb-1" id="houses">
                            <div class="row">
                                <div class="col-md-2 col-2 p-0 text-center">
                                    <i class="fa fa-home pr-1 fa-2x"></i>
                                </div>
                                <div class="col-md-10 col-10 p-0">
                                    <span>Houses</span>
                                </div>
                            </div>
                        </div>

                    </a>

                    <a class="nav-link p-0" id="v-pills-tenants-tab" data-toggle="pill" href="#v-pills-tenants" role="tab" aria-controls="v-pills-tenants" aria-selected="false">

                        <div class="container-fluid pt-2 pb-1" id="tenants">
                            <div class="row">
                                <div class="col-md-2 col-2 p-0 text-center">
                                    <i class="fa fa-users pr-1 fa-2x"></i>
                                </div>
                                <div class="col-md-10 col-10 p-0">
                                    <span>Tenants</span>
                                </div>
                            </div>
                        </div>

                    </a>


                    <a class="nav-link p-0" id="v-pills-payments-tab" data-toggle="pill" href="#v-pills-payments"
                        role="tab" aria-controls="v-pills-payments" aria-selected="false">
                        
                        <div class="container-fluid pt-2 pb-1" id="payment">
                            <div class="row">
                                <div class="col-md-2 col-2 p-0 text-center">
                                    <i class="fa fa-money fa-2x pr-1"></i>
                                </div>
                                <div class="col-md-10 col-10 p-0">
                                    <span>Payment</span>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- <a class="nav-link" id="v-pills-outs-payments-tab" data-toggle="pill" href="#v-pills-outs-payments" role="tab" aria-controls="v-pills-outs-payments" aria-selected="false">
                        <i class="fa fa-money fa-2x pr-1"> </i><span>Outstanding Payments</spa>
                    </a> -->

                    <a class="nav-link p-0" id="v-pills-outs-payments-tab" href="./user_profile.php" role="tab" aria-controls="v-pills-outs-payments">

                        <div class="container-fluid pt-2 pb-1">
                            <div class="row">
                                <div class="col-md-2 col-2 p-0 text-center">
                                    <i class="fa fa-user fa-2x pr-1"></i>
                                </div>
                                <div class="col-md-10 col-10 p-0">
                                    <span>My Profile</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="nav-link p-0" id="v-pills-outs-payments-tab" href="../../" role="tab" aria-controls="v-pills-outs-payments" aria-selected="false">

                        <div class="container-fluid pt-2 pb-3">
                            <div class="row">
                                <div class="col-md-2 col-2 p-0 text-center">
                                    <i class="fa fa-sign-out pr-1 fa-2x"> </i>
                                </div>
                                <div class="col-md-10 col-10 p-0">
                                    <span>Logout</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="col-md-9 col-sm-9 dash-content bg-primary p-0">

                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active p-0 tab-content-custom bg-primary p-1" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">

                        <p class="lead">At A Glance</p>
                        <div class="container-fluid">

                            <!-- Apartments houses occupied Total -->
                            <div class="row pt-1 pb-1">

                                <!-- Apartments -->
                                <div class="col-md-4 content-cols p-0">
                                    <a href="./apartments.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-building pt-1 pb-1 fa-4x"></i>
                                        </div>
                                        <div class="name">Apartments</div>
                                        <div class="number">40</div>
                                    </a>
                                </div>

                                <!-- Houses -->
                                <div class="col-md-4 content-cols p-0">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-home pt-1 pb-1 fa-4x"></i>
                                        </div>
                                        <div class="name">Houses</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                                <!-- Occupied -->
                                <div class="col-md-4 content-cols p-0">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-home pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-users pt-1 pb-1 fa-5x with-pple"></i>
                                        </div>
                                        <div class="name">Occupied Houses</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>
                            </div>

                            <!-- Unoccupied Payments and Not Payed Total -->
                            <div class="row">

                                <!-- Not Occupied -->
                                <div class="col-md-4 content-cols p-0">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-home pt-1 pb-1 fa-5x"></i>
                                            <i class="fa fa-users text-danger pt-1 pb-1 fa-4x with-pple"></i>
                                        </div>
                                        <div class="name">Unoccupied Houses</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                                <!-- Payed -->
                                <div class="col-md-4 content-cols p-0">
                                    <a href="#" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                        </div>
                                        <div class="name">Payed</div>
                                        <div class="number">Kshs 100000</div>
                                    </a>
                                </div>

                                <!-- Not Payed -->
                                <div class="col-md-4 content-cols p-0">
                                    <a href="#" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-times text-danger pt-1 pb-1 fa-5x with-pple"></i>
                                        </div>
                                        <div class="name">Not Payed</div>
                                        <div class="number">Kshs 100000</div>
                                    </a>
                                </div>
                            </div>

                            <!-- Charts -->
                            <div class="row">

                                <!-- Houses Occupied vs UnOccupied Chart -->
                                <div class="col-md-6">

                                    <!-- Chart Header -->
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <p class="lead">Occupied Vs Unoccupied</p>
                                        </div>
                                    </div>

                                    <!-- Chart -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="chart-box pt-2 pb-2">
                                                <canvas id="chart-one"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Payment Vs Not Payed Chart -->
                                <div class="col-md-6">

                                    <!-- Chart Header -->
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <p class="lead">Payed Vs Not Payed</p>
                                        </div>
                                    </div>

                                    <!-- Chart -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="chart-box pt-2 pb-2">
                                                <canvas id="chart-two"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="tab-pane fade tab-content-custom bg-primary p-1" id="v-pills-apartments" role="tabpanel" aria-labelledby="v-pills-apartments-tab">

                        <div class="container-fluid">

                            <!-- Header -->
                            <div class="row">

                                <div class="col-md-4 p-0">
                                    <p class="lead">Apartments</p>
                                </div>

                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-6">Total Apartments</div>
                                        <div class="col-3">7</div>
                                        <div class="col-md-3 pt-1 pb-1">
                                            <a href="./apartments.php" class="btn btn-custom">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 pt-1 pb-1">
                                    <a href="./apartment_form.php" class="btn btn-custom">Add Apartment</a>
                                </div>

                            </div>

                            <!-- Items -->
                            <div class="row">

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="./apartments.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-building pt-1 pb-1 fa-4x"></i>
                                            <!-- <i class="fa fa-building pt-1 pb-1 fa-5x with-pple"></i> -->
                                        </div>
                                        <div class="name">Number of Apartments</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                                <!-- <div class="col-3 p-0 content-cols">
                                    <a href="./houses.html" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-home pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-users pt-1 pb-1 fa-5x with-pple text-danger"></i>
                                        </div>
                                        <div class="name">Unoccupied Houses</div>
                                        <div class="number">30</div>
                                    </a>
                                </div> -->

                                <!-- <div class="col-3 p-0 content-cols">
                                    <a href="#" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                        </div>
                                        <div class="name">Payed</div>
                                        <div class="number">Kshs 100000</div>
                                    </a>
                                </div> -->

                                <!-- <div class="col-3 p-0 content-cols">
                                    <a href="#" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-times text-danger pt-1 pb-1 fa-5x with-pple"></i>
                                        </div>
                                        <div class="name">Not Payed</div>
                                        <div class="number">Kshs 100000</div>
                                    </a>
                                </div> -->

                            </div>

                        </div>


                    </div>

                    <div class="tab-pane fade tab-content-custom bg-primary p-1" id="v-pills-houses" role="tabpanel" aria-labelledby="v-pills-houses-tab">

                        <div class="container-fluid">

                            <!-- Header -->
                            <div class="row">

                                <div class="col-md-4 p-0">
                                    <p class="lead">Houses</p>
                                </div>

                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-6">Total Houses</div>
                                        <div class="col-3">677</div>
                                        <div class="col-3 p-0">
                                            <a href="#" class="btn btn-custom">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 pb-1">
                                    <a href="./house_form.php" class="btn btn-custom" id="to-house-form">Add House</a>
                                </div>

                            </div>

                            <!-- Items -->
                            <div class="row">

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-home pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-users pt-1 pb-1 fa-5x with-pple"></i>
                                        </div>
                                        <div class="name">Occupied Houses</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-home pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-users pt-1 pb-1 fa-5x with-pple text-danger"></i>
                                        </div>
                                        <div class="name">Unoccupied Houses</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="#" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                        </div>
                                        <div class="name">Payed</div>
                                        <div class="number">Kshs 100000</div>
                                    </a>
                                </div>

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="#" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-times text-danger pt-1 pb-1 fa-5x with-pple"></i>
                                        </div>
                                        <div class="name">Not Payed</div>
                                        <div class="number">Kshs 100000</div>
                                    </a>
                                </div>

                            </div>

                            <!-- Charts -->
                            <div class="row">

                                <!-- Houses Occupied vs UnOccupied Chart -->
                                <div class="col-md-6">

                                    <!-- Chart Header -->
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <p class="lead">Occupied Vs Unoccupied</p>
                                        </div>
                                    </div>

                                    <!-- Chart -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="chart-box pt-2 pb-2">
                                                <canvas id="chart-three"></canvas>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Payment Vs Not Payed Chart -->
                                <div class="col-md-6">

                                    <!-- Chart Header -->
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <p class="lead">Payed Vs Not Payed</p>
                                        </div>
                                    </div>

                                    <!-- Chart -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="chart-box pt-2 pb-2">
                                                <canvas id="chart-four"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade tab-content-custom bg-primary p-1" id="v-pills-tenants" role="tabpanel" aria-labelledby="v-pills-tenants-tab">

                        <div class="container-fluid">

                            <!-- Header -->
                            <div class="row">
                                <div class="col-4 p-0">
                                    <p class="lead">Tenants</p>
                                </div>

                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-6">Total Tenants</div>
                                        <div class="col-3">677</div>
                                        <div class="col-3">
                                            <a href="./users.php" class="btn btn-custom ">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="./register.php" class="btn btn-custom ">Add Tenant</a>
                                </div>

                            </div>

                            <!-- Items -->
                            <div class="row">

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="./users.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-home pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-users pt-1 pb-1 fa-5x with-pple"></i>
                                        </div>
                                        <div class="name">Total Tenants</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                                <div class="col-md-3 p-0 content-cols">
                                    <div class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-home pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-users pt-1 pb-1 fa-5x text-danger with-pple"></i>
                                        </div>
                                        <div class="name">Expected Tenants</div>
                                        <div class="number">30</div>
                                    </div>
                                </div>

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                            <!-- <i class="fa fa-cross pt-1 pb-1 fa-5x text-danger with-pple"></i> -->
                                        </div>
                                        <div class="name">Payed Tenants</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-times pt-1 pb-1 fa-5x text-danger with-pple"></i>
                                        </div>
                                        <div class="name">Not Payed</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                            </div>

                            <div class="row">

                                <!-- Total Vs Expected Tenants -->
                                <div class="col-md-6">

                                    <!-- Chart Header -->
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <p class="lead">Total Vs Expected Tenants</p>
                                        </div>
                                    </div>

                                    <!-- Chart -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="chart-box pt-2 pb-2">
                                                <canvas id="chart-five"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Payed Vs Not Payed Tenants -->
                                <div class="col-md-6">

                                    <!-- Chart Header -->
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <p class="lead">Payed Vs Not Payed Tenants</p>
                                        </div>
                                    </div>

                                    <!-- Chart -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="chart-box pt-2 pb-2">
                                                <canvas id="chart-six"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade tab-content-custom bg-primary p-1" id="v-pills-payments" role="tabpanel" aria-labelledby="v-pills-payments-tab">

                        <div class="container-fluid">

                            <!-- Header -->
                            <div class="row">
                                <div class="col-md-4 p-0">
                                    <p class="lead">Payments</p>
                                </div>

                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-6">Total Amount Expected</div>
                                        <div class="col-3">677</div>
                                        <div class="col-3">
                                            <a href="#" class="btn btn-custom ">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="./house_form.php" class="btn btn-custom ">Add Payment</a>
                                </div>

                            </div>

                            <!-- Items -->
                            <div class="row">

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                            <!-- <i class="fa fa-cross pt-1 pb-1 fa-5x text-danger with-pple"></i> -->
                                        </div>
                                        <div class="name">Amount Received</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                                <div class="col-md-3 p-0 content-cols">
                                    <a href="./houses.php" class="content-hold p-1">
                                        <div class="icon">
                                            <i class="fa fa-money pt-1 pb-1 fa-4x"></i>
                                            <i class="fa fa-times pt-1 pb-1 fa-5x text-danger with-pple"></i>
                                        </div>
                                        <div class="name">Outstanding Amount</div>
                                        <div class="number">30</div>
                                    </a>
                                </div>

                            </div>

                            <div class="row">
                                <!-- Payed Vs Not Payed Tenants -->
                                <div class="col-md-6">

                                    <!-- Chart Header -->
                                    <div class="row">
                                        <div class="col-12 p-0">
                                            <p class="lead">Amount Received Vs Not Received</p>
                                        </div>
                                    </div>

                                    <!-- Chart -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="chart-box pt-2 pb-2">
                                                <canvas id="chart-seven"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>

                    <div class="tab-pane fade tab-content-custom bg-primary p-1" id="v-pills-outs-payments" role="tabpanel" aria-labelledby="v-pills-outs-payments-tab">
                        <p class="lead">Outstanding Payments</p>
                    </div>

                </div>

            </div>

        </div>
    </div>




    <script src="../js/custom/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <!-- <script src="../js/custom/custom-libraries/popper.js"></script> -->
    <script src="../js/custom/custom-libraries/chart.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom/dashboard.js"></script>

</body>

</html>