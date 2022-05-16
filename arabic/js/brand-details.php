
<?php 
$first_name = '';
if(isset($_POST['submit'])){
     $first_name = $GET['f_name'];
    
  

}
?>

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

    <title>Imdady - BrandDetails</title>
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
                        <li class="">Trial Created</li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <!--Section: Contact v.2-->
        <section class="my-4">
             <form  id="contact-form2" name="contact-form2" action="trial.php" method="POST">
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 col-12 mb-md-0 mb-5">
                   
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12 py-2">
                                <div class="md-form mb-0">
                                    <input type="text" required id="name"  maxlength="10" minlength="2" value="<?php echo $first_name; ?>" name="b_name" class="form-control"
                                        placeholder="Brand Name *" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 py-2">
                                <div class="md-form mb-0">
                                    <input type="text"  maxlength="10" minlength="2" required id="name" name="bc_name" class="form-control"
                                        placeholder="Branch name *" />
                                </div>
                            </div>
                        </div>
                       
                        
                        


                    
                </div>
                <div class="col-md-6 col-12 mb-md-0 mb-5">
                    <div class="card mt-4">
                        <div class="card-body ">
                            <h5 class="mb-3 allheadingSizes font-weight-bolder ">ORDER SUMMARY</h5>

                            <ul class="list-group list-group-flush ">
                                <li class=" 
                      list-group-item
                      d-flex
                      justify-content-between
                      align-items-center
                      border-0
                      px-0
                      pb-0
                      font-weight-bold
                      allheadingSizes
                    ">
                                    Subtotal

                                    <span> 2000.0$ </span>
                                </li>

                                <li class="
                      list-group-item
                      d-flex
                      justify-content-between
                      align-items-center
                      px-0
                      font-weight-bold
                      allheadingSizes
                    ">
                                    15% VAT

                                    <span style="color: blue; font-weight: bold">25400.0$</span>
                                </li>

                                <li class="
                      list-group-item
                      d-flex
                      justify-content-between
                      align-items-center
                      px-0
                      font-weight-bold
                      allheadingSizes
                    ">
                                    Promotion

                                    <span style="color: blue; font-weight: bold">2000.0$</span>
                                </li>

                                <li class="
                      list-group-item
                      d-flex
                      justify-content-between
                      align-items-center
                      px-0
                      font-weight-bold
                      allheadingSizes
                    ">
                                    Grand total
                                    <span style="color: blue; font-weight: bold">
                                        <a href="#"> 2000.0$ </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end mt-lg-4">
                       
                            <button type="submit" 
                            class="text-capitalize bgBtn"
                            data-aos="zoom-in-up"
                            data-aos-duration="1000"
                          >
                            Next
                          </button>
                        
                    </div>
                </div>
            </div>
            </form>
        </section>
        <!--Section: Contact v.2-->
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