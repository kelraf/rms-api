<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom/forms.css">
</head>

<body class="bg-primary">

    <div class="container">
        <div class="row">
            <div class="col-12 bg-primary">
                <form action="../../rms-api/api/users-api/update.php" method="post" class="register">

                    <div class="reg-header">
                        <h4>Update</h4>
                    </div>

                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your First Name" name="firstName">
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Enter Your Last Name">
                    </div>

                    <div class="form-check form-check-inline pt-2 pb-2">
                        <input type="radio" class="form-check-input" value="male" name="gender" checked>
                        <label for="male" class="form-check-label">Male</label>
                    </div>

                    <div class="form-check form-check-inline pt-2 pb-2">
                        <input type="radio" class="form-check-input" value="female" name="gender">
                        <label for="female" class="form-check-label">Female</label>
                    </div>

                    <div class="form-check form-check-inline pt-2 pb-2">
                        <input type="radio" class="form-check-input" value="other" name="gender">
                        <label for="other" class="form-check-label">Other</label>
                    </div>

                    <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="number" class="form-control" placeholder="Enter Your Phone Number" name="phoneNo">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="nationalId">National Id</label>
                        <input type="number" class="form-control" placeholder="Enter Your National Id" name="nationalId">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-custom btn-50">Register</button>
                        <!-- <a class="btn btn-primary btn-custom btn-50 text-white" href="./dashboard.php">Register</a> -->
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script src="../js/custom/custom-libraries/jquery.js"></script>

    <!-- <script src="../js/custom/custom-libraries/popper.js"></script> -->

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/custom/landlord.js"></script>
</body>

</html>