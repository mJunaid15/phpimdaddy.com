<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no" />

    <!-- bootstrap cdn start  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <!-- bootstrap cdn end  -->
    <!-- animation AOS start -->
    <link rel="stylesheet" href="css/aos.css" />
    <!-- animation AOS start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stepper.css" />

    <title>Imdady - Trial</title>
</head>

<body class="overflowhidderAOS">
    <!-- Navebar start  -->
    <?php include('header.php') ?>

    <div class="brder"></div>

    <!-- Navbar end  -->

    <div class="my-5 ">
        <div class="row">
            <div class="col-md-12 col-md-offset-3">
                <form id="form">
                    <ul id="progressbar">
                        <li class="active">Customer Details</li>
                        <li class="active">Brand Details</li>
                        <li class="active">Trial Created</li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>We will contact you shortly </h1>
                <p>Please, check your email to continue with the installation</p>

            </div>
        </div>
        
    </div>

    <!-- footer start  -->
    <?php include('footer.php') ?>


    <!-- footer end  -->

    <!-- data AOS Animation start  -->
    <script src="js/AOS.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- data AOS Animation start  -->

    <!-- bootstrap cdn start  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap cdn end  -->
</body>

</html>