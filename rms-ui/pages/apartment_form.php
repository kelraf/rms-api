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
                <form action="../../rms-api/api/apart-api/create.php" method="post" class="register">

                    <div class="reg-header">
                        <h4>Add Apartment</h4>
                    </div>

                    <div class="form-group  pt-2 pb-2">
                        <label for="apartmentName">Apartment Name</label>
                        <input type="text" class="form-control" placeholder="Enter Apartment Name" name="apartmentName">
                    </div>

                    <div class="form-group pt-2 pb-2">
                        <label for="apartmentLocation">Apartment Location</label>
                        <input type="text" class="form-control" name="apartmentLocation" placeholder="Enter Your Apartment Location">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-custom btn-50">Add It</button>
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