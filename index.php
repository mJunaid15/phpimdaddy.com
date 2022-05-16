<?php
  if(isset($_POST['submit']))
  { 
  
    $email = $_POST["email"]; 
    
 
   $emailmsg ='<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Manrope:wght@200;300&display=swap");

        * {
            font-family: "Manrope", sans-serif;
        }

        @media screen and (max-width: 720px) {
            body .c-v84rpm {
                width: 100% !important;
                max-width: 720px !important;
            }

            body .c-v84rpm .c-7bgiy1 .c-1c86scm {
                display: none !important;
            }

            body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-pekv9n .c-1qv5bbj,
            body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-1c9o9ex .c-1qv5bbj,
            body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-90qmnj .c-1qv5bbj {
                border-width: 1px 0 0 !important;
            }

            body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-183lp8j .c-1qv5bbj {
                border-width: 1px 0 !important;
            }

            body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-pekv9n .c-1qv5bbj {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }

            body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-1c9o9ex .c-1qv5bbj,
            body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-90qmnj .c-1qv5bbj {
                padding-left: 8px !important;
                padding-right: 8px !important;
            }

            body .c-v84rpm .c-ry4gth .c-1dhsbqv {
                display: none !important;
            }
        }


        @media screen and (max-width: 720px) {
            body .c-v84rpm .c-ry4gth .c-1vld4cz {
                padding-bottom: 10px !important;
            }
        }
    </style>
    <title>Imdady</title>
</head>

<body style="margin: 0; padding: 0; font-weight: 300; font-stretch: normal; font-size: 14px; letter-spacing: .35px;  color: #333333; 
    
 ">
 <div style="  ">
    <table border="1" cellpadding="0" cellspacing="0" align="center" class="c-v84rpm" style="border: 0 none; border-collapse: separate; width: 720px;  " width="720">
        <tbody>
            <tr class="c-1syf3pb" style="border: 0 none; border-collapse: separate; height: 114px;">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                    <table align="center" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate;">
                        <tbody>
                            <tr align="left" class="c-1p7a68j" style="border: 0 none; border-collapse: separate; padding: 16px 0 15px;">
                                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                                <img alt="" src="https://imdady.com/img/Imdady-Logo.png" class="c-1shuxio" style="border: 0 none; line-height: 100%; outline: none; text-decoration: none; height: 200px; width: 300px;" width="120" height="33"></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class="c-7bgiy1" style="border: 0 none; border-collapse: separate; -webkit-box-shadow: 0 3px 5px rgba(0,0,0,0.04); -moz-box-shadow: 0 3px 5px rgba(0,0,0,0.04); box-shadow: 0 3px 5px rgba(0,0,0,0.04);">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                    <table align="" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate; width: 100%;" width="100%">
                        <tbody>
                            <tr class="c-pekv9n" style="border: 0 none; border-collapse: separate;" align="center">
                                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                                    <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-1qv5bbj" style="border: 0 none; border-collapse: separate; border-radius:15px; width: 100%; border-width: 1px 1px 0; background: #FBFCFC; padding: 40px 54px 42px; box-shadow: 10px 11px 68px -12px rgba(140,92,186,0.82);
-webkit-box-shadow: 10px 11px 68px -12px rgba(140,92,186,0.82);
-moz-box-shadow: 10px 11px 68px -12px rgba(140,92,186,0.82);  background-image:url(https://imdady.com/img/EmailTemplate.png);  background-repeat: no-repeat; background-size: 100% 100%;">
                                        <tbody>
                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-1m9emfx c-zjwfhk" style="border: 0 none; border-collapse: separate; vertical-align: middle;font-weight: 700; color: #1D2531; font-size: 26.45455px;" valign="middle">Imdady</td>
                                            </tr>
                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Name : '.$name.' </td>
                                            </tr>
                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Email : '.$email.' </td>
                                            </tr>

                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Phone : '.$phone.' </td>
                                            </tr>

                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign=" middle"> Street : '.$street.'</td>
                                            </tr>
                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> City : '.$city.' </td>
                                            </tr>
                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> State : '.$state.' </td>
                                            </tr>
                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle">How can we help you : '.$howcanwe.' </td>
                                            </tr>

                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> How did you hear about us : '.$howdidyou.' </td>
                                            </tr>

                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Comments :'.$comment.' </td>
                                            </tr>

                                            <tr style="border: 0 none; border-collapse: separate;">
                                                <td class="c-eitm3s c-16v5f34" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 500;  font-size: 22px; padding-top: 20px;" valign=" middle">
                                                    If you have any questions or doubts dont hesitate to contact our Support Team.<a href="mailto:info@imdady.com">info@imdady.com</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    <tr class="c-ry4gth" style="border: 0 none; border-collapse: separate;">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
            <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-1vld4cz" style="border: 0 none; border-collapse: separate; padding-top: 26px; padding-bottom: 26px;">
                <tbody>
                    <tr style="border: 0 none; border-collapse: separate;">
                        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                        </td>
                    </tr>
                </tbody>
            </table>
            </a>
        </td>
    </tr>
    </tbody>
    </table>

    </td>
    </tr>
    </tbody>
    </table>
    </div>
</body>';


 $to = $email;
 $to .= ", info@imdady.com";
          $subject = 'New User Email';


           $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: Imdady <info@imdady.com>' . "\r\n";


          if(mail($to, $subject, $emailmsg, $headers))
          {

             $error = "<div class='alert alert-success col-md-6 col-md-offset-1 d-flex justify-content-center' role='alert'>"
            ."We will contact you shortly"."</div>";
}
  
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
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
 <link rel="stylesheet" href="css/style.css" />
 <style>
   .error {
    color: red !important;
    font-weight: normal;
    font-size: 12px !important;
    margin: 0px 0;
    transition: .5s;
}
 </style>
 
  <title>Imdady.com</title>
</head>

<body class="overflowhidderAOS">

  <!-- Navebar start  -->
  <?php include('header.php') ?>

  <div class="brder ">

  </div>


  <!-- Navbar end  -->

  <!-- banner section start  -->


  <div class="w-100 bg ">
    <!-- left bend  -->
    <div class="leftband">

      <img src="img/Left Band 1.png" alt="" class="img-fluid" data-aos="fade-down-left" data-aos-duration="1500">

      <br>

      <img src="img/Left Band 2.png" alt="" class="img-fluid" data-aos="fade-down-left" data-aos-duration="2200">

    </div>
    <!-- left bend end  -->
    <!-- right bend start  -->

    <div class="rightBand">
      <img src="img/Right Band 2.png" class="img-fluid"   data-aos="zoom-in" data-aos-duration="1200">
      


    </div>

    <div class="cirler ">
      <img src="img/Turquoise Circle.png" class="img-fluid"  data-aos="zoom-in-up" data-aos-duration="2200">

    </div>

    <!-- right bend start  -->






    <div class=" minWidth  ml-auto" style="width: 90%;" >
      <div class=" d-flex flex-md-row flex-sm-column justify-content-md-between  test bg-alignment">
        <div class="   mt-3   ">
          <h1 class="bgHeading" data-aos="fade-up" data-aos-duration="1000">Imdady <br> Your Innovation Partner</h1>
          <div class="ml-auto">
          <?php
        echo $error;
        ?>
            <form action="" method="post" id="contact-form" >
            <input type="email" name="email" id="email" class="bgInput  text-left" placeholder="Email address"
              data-aos="zoom-in-right" data-aos-duration="1000">

            <button type="submit" name="submit" class="text-capitalize bgBtn ml-3 " data-aos="zoom-in-up" data-aos-duration="1000">get demo</button>
            </form>
          </div>
        </div>
        <div class="  p-0   d-flex justify-content-end ">
          <img src="img/laptop.png" alt="" class="img-fluid bglaptop" data-aos="fade-left" data-aos-duration="1000">

        </div>
      </div>

     
    </div>
  </div>



  <!-- banner section end  -->

  <!-- tags section start -->
  <div class="brder">

  </div>
  <div class="container-fluid my-5">

    <div class="container text-center  ">
      <div class="row animate__animated animate__backInLeft" >
        <div class="col-md-2 col-lg-2 col-sm-4 col-4 mt-2">
          <a href="" class="text-decoration-none ">
            <img src="img/Airbnb Logo.png" class="img-fluid ">
          </a>

        </div>
        <div class="col-md-2 col-lg-2 col-sm-4 col-4 mt-2">
          <a href="" class="text-decoration-none ">
            <img src="img/Hubspot Logo.png" class="img-fluid">
          </a>

        </div>
        <div class="col-md-2 col-lg-2 col-sm-4 col-4 mt-2">
          <a href="" class="text-decoration-none ">
            <img src="img/Google Logo.png" class="img-fluid">
          </a>

        </div>
        <div class="col-md-2 col-lg-2 col-sm-4 col-4 mt-2">
          <a href="" class="text-decoration-none ">
            <img src="img/Microsoft Logo.png" class="img-fluid">
          </a>

        </div>
        <div class="col-md-2 col-lg-2 col-sm-4 col-4 mt-2">
          <a href="" class="text-decoration-none ">
            <img src="img/Walmart Logo.png" class="img-fluid">
          </a>

        </div>
        <div class="col-md-2 col-lg-2 col-sm-4 col-4 mt-2">

          <a href="" class="text-decoration-none ">
            <img src="img/g15.png" class="img-fluid">
          </a>

        </div>
      </div>











    </div>

  </div>
  <!-- tags section end -->

  <!-- heading section start -->


  <div class="container-fluid my-4 noneAOS " >

    <h1 class="headchoose ">Let Imdady manage your business with Nextgen products.</h1>
    <p class="headchoosePara">We strive to provide value and solve company problems by providing advanced IT services and solutions.</p>
    
  </div>

  <div class="container my-4">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 text-center ">
        <img src="img/01.png" class="img-fluid" data-toggle="collapse" href="#collapseExample1" role="button"
          aria-expanded="false" aria-controls="collapseExample">
        <h1 class="infoHeading" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
          aria-controls="collapseExample">Imdady POS</h1>
        <p class="infoPara collapse d-md-none" id="collapseExample1">Analyze your orders, warehouse inventory, customers, and sales using one of the most advanced and user-friendly POS systems available. Its cloud service allows you to keep track of your sales from anywhere. All of the tools you’ll need to run your business are included.</p>
        <p class="infoPara  d-none d-md-block d-lg-block d-xl-block">Analyze your orders, warehouse inventory, customers, and sales using one of the most advanced and user-friendly POS systems available. Its cloud service allows you to keep track of your sales from anywhere. All of the tools you’ll need to run your business are included.</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 text-center ">
        <img src="img/02.png" class="img-fluid" data-toggle="collapse" href="#collapseExample2" role="button"
          aria-expanded="false" aria-controls="collapseExample">
        <h1 class="infoHeading" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
          aria-controls="collapseExample">Imdady RMS</h1>
        <p class="infoPara collapse d-md-none" id="collapseExample2">RMS provides innovations and benefits to restaurants through a cloud-based system that includes strong and user-friendly capabilities that transform restaurant operations in ways that have never been seen before.</p>
        <p class="infoPara  d-none d-md-block d-lg-block d-xl-block">RMS provides innovations and benefits to restaurants through a cloud-based system that includes strong and user-friendly capabilities that transform restaurant operations in ways that have never been seen before.</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 text-center ">
        <img src="img/Group.png" class="img-fluid" data-toggle="collapse" href="#collapseExample3" role="button"
          aria-expanded="false" aria-controls="collapseExample">
        <h1 class="infoHeading" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
          aria-controls="collapseExample">Ecommerce Solution</h1>
        <p class="infoPara collapse d-md-none" id="collapseExample3">Taswog is an online e-commerce store with a multivendor system that focuses on assisting both consumers and sellers. The seller will be able to manage all of their inventory with the help of our application, which includes a sales forecasting system.</p>
        <p class="infoPara  d-none d-md-block d-lg-block d-xl-block">Taswog is an online e-commerce store with a multivendor system that focuses on assisting both consumers and sellers. The seller will be able to manage all of their inventory with the help of our application, which includes a sales forecasting system.</p>
      </div>

    </div>

  </div>
  

  <!-- heading section end -->


  <!-- content section start  -->

  <div class="container-fluid mt-5 mt-sm-2">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-6 col-12  m-sm-0 d-flex flex-row justify-content-center">
        <div class="mainContendiv d-flex justify-content-center">
          <img src="img/iPhone X.png" class="img-fluid" data-aos="zoom-out-down" data-aos-duration="1000"
            data-aos-offset="400">

        </div>

      </div>
      <div class="col-md-6 col-lg-6 col-sm-6 col-12   d-flex  align-items-center ">
        <div class="mainContendiv2 animate__animated animate__flipInX">
          <h1 class="contentHeading  ">A smart choice to the NextGen systems</h1>
          <p class="contentPara">Imdady is providing a cloud based on demand systems for your restaurant, retail stores & online ecommerce solution to increase your business by providing quick operations and Realtime data.</p>
          <ul class="contenUl">
            <li class="noneAOS" >Reliable</li>
            <li class="noneAOS" >Scalable</li>
            <li class="noneAOS" >Access anytime, anywhere</li>

          </ul>

        </div>


      </div>
    </div>
  </div>


  <div class="container-fluid mt-5 mt-none">
    <div class="row">
      <div class="col-12">
        <div class="container m-none ">
          <h1 class="benefit">Advantages of Working<br> with us</h1>


        </div>
      </div>
    </div>

    <div class="container mt-md-5 mt-xsm-4">
      <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
          <div class="row">
            <div class="col-3 col-sm-3 col-md-2  ">
              <img src="img/Feature Icon with circle.png" class="img-fluid ">
            </div>
            <div class="col-9 col-sm-9 col-md-10  ">
              <h1 class="benefitHeading">Time zones</h1>
              <p class="benefitPara">Our team always available to give prompt response for your queries.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 col-12 mt-xsm-3">
          <div class="row">
            <div class="col-3 col-sm-3 col-md-2">
              <img src="img/dot.png" class="img-fluid">
            </div>
            <div class="col-9 col-sm-9 col-md-10 ">
              <h1 class="benefitHeading">Full spectrum of services</h1>
              <p class="benefitPara">Team Imdady always available to provide best solution and proactive services to our customers.</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row mt-md-5 mt-xsm-3">
        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
          <div class="row">
            <div class="col-3 col-sm-3 col-md-2">
              <img src="img/3line.png" class="img-fluid">
            </div>
            <div class="col-9 col-sm-9 col-md-10 ">
              <h1 class="benefitHeading">Impossible? We’re on it</h1>
              <p class="benefitPara">We are always ready to sit across the table and comeup with the best solution for our customers requirement.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
          <div class="row">
            <div class="col-3 col-sm-3 col-md-2">
              <img src="img/2box.png" class="img-fluid">
            </div>
            <div class="col-9 col-sm-9 col-md-10 ">
              <h1 class="benefitHeading">Flexible work terms</h1>
              <p class="benefitPara">Imdady have complete package of technical team members who works round the clock to ensure 100% uptime.</p>
            </div>
          </div>
        </div>

      </div>




      <div class="row mt-md-5 mt-xsm-4">
        <div class="col-12 col-md-6 col-lg-6">
          <h1 class="fashionHeading">Hassle free integrations.</h1>

        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <p class="fashionPara">If you are running multiple stores and worry to manage all of them. <br> Imdady is developed for this to support and manage your business and sales just on single tap anytime, anywhere.</p>

        </div>
      </div>

      <div class="row mt-md-5 mt-xsm-4">
        <div class="col-12">
          <img src="img/Group 2.png" class="img-fluid">
        </div>
      </div>

      <div class="row mt-md-5 ">
        <div class="col-12 mt-xsm-3">
          <h1 class="getinHeading">Get In Touch With Us</h1>
        </div>
      </div>

      <div class="row mt-md-5 mt-sm-3  text-xsm-center">
        <div class="col-6 col-md-3 col-lg-3">
          <img src="img/Feature Icon with circle.png" class="img-fluid ">
          <h1 class="getInTochHeading">Where we are</h1>
          <p class="getInTochPara">Riyadh Olaya Dist, Computer Market, Olaya Street.</p>

        </div>

        <div class="col-6 col-md-3 col-lg-3">
          <img src="img/2box.png" class="img-fluid">
          <h1 class="getInTochHeading">Customer Care</h1>
          <p class="getInTochPara">Call us at: <a href="tel:+966535090666">+966535090666</a></p>

        </div>

        <div class="col-6 col-md-3 col-lg-3">
          <img src="img/3line.png" class="img-fluid">
          <h1 class="getInTochHeading">General Email</h1>
          <p class="getInTochPara">Write us at: <a href="mailto:info@futuregates.sa">info@futuregates.sa</a></p>

        </div>

        <div class="col-6 col-md-3 col-lg-3">
          <img src="img/dot.png" class="img-fluid">
          <h1 class="getInTochHeading">Work Hours</h1>
          <p class="getInTochPara">Mon. – Fri. 9AM – 2AM AST</p>

        </div>

      </div>



    </div>
  </div>

  <!-- content section end  -->



  <!-- footer start  -->
  <?php include('footer.php') ?>






  <!-- footer end  -->













  <script src="./js/jquery.min.js"></script>
      <script src="./js/validator.js"></script>
    <script src="./js/validationJs.js"></script>

  <!-- data AOS Animation start  -->
  <script src="js/AOS.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- data AOS Animation start  -->



  <!-- bootstrap cdn start  -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- bootstrap cdn end  -->
</body>

</html>