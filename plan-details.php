<?php
if (isset($_POST['submit'])) {
  $f_name = $_POST["f_name"];
  $l_name = $_POST["l_name"];
  $email = $_POST["email"];
  $b_name = $_POST["b_name"];
  $bc_name = $_POST["bc_name"];
  $list = $_POST["list"];
  $customRadioInline1 = $_POST["customRadioInline1"];
  $phone = $_POST["phone"];
  $state = $_POST["state"];
  $city = $_POST["city"];
  $zip = $_POST["zip"];
  $address = $_POST["address"];

  $emailmsg = '<head>

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
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> First name : ' . $f_name . ' </td>
                                           </tr>
                                           <tr style="border: 0 none; border-collapse: separate;">
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> last name : ' . $l_name . ' </td>
                                           </tr>

                                           <tr style="border: 0 none; border-collapse: separate;">
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Email : ' . $email . ' </td>
                                           </tr>

                                           <tr style="border: 0 none; border-collapse: separate;">
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign=" middle"> Brand name : ' . $b_name . '</td>
                                           </tr>
                                           <tr style="border: 0 none; border-collapse: separate;">
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Branch name : ' . $bc_name . ' </td>
                                           </tr>
                                           <tr style="border: 0 none; border-collapse: separate;">
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Package : ' . $list . ' </td>
                                           </tr>
                                           <tr style="border: 0 none; border-collapse: separate;">
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle">Package type : ' . $customRadioInline1 . ' </td>
                                           </tr>

                                           <tr style="border: 0 none; border-collapse: separate;">
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Phone : ' . $phone . ' </td>
                                           </tr>
                                           <tr style="border: 0 none; border-collapse: separate;">
                                           <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> State : ' . $state . ' </td>
                                       </tr>

                                           <tr style="border: 0 none; border-collapse: separate;">
                                               <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> City :' . $city . ' </td>
                                           </tr>
                                           <tr style="border: 0 none; border-collapse: separate;">
                                           <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Zip :' . $zip . ' </td>
                                       </tr>

                                       <tr style="border: 0 none; border-collapse: separate;">
                                       <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-weight: 600;  font-size: 22px; padding-top: 20px;" valign="middle"> Address :' . $address . ' </td>
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


  if (mail($to, $subject, $emailmsg, $headers)) {

    $error = "<div class='alert alert-success col-md-6 col-md-offset-1 d-flex justify-content-center' role='alert'>"
      . "We will contact you shortly" . "</div>";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/stepper.css" />



  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    .iti-flag {
      background-image: url("teleJs/flags.png");
    }

    @media (-webkit-min-device-pixel-ratio:2),
    (min-resolution:192dpi) {
      .iti-flag {
        background-image: url("teleJs/flags@2x.png");
      }
    }

    .error {
      color: red !important;
      font-weight: normal;
      font-size: 12px !important;
      margin: 0px 0;
      transition: .5s;
    }

    #submitbtn {
      cursor: not-allowed;
    }
  </style>

  <title>Imdady - Pricing</title>
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

            <li class="">Trial Created</li>
          </ul>
        </form>
      </div>
    </div>
  </div>

  <div class="container">
    <!--Section: Contact v.2-->

    <section class="my-4">
      <form id="contact-form"  action="trial.php" method="post">
        <?php
        echo $error;
        ?>
        <div class="row">
          <!--Grid column-->
          <div class="col-md-6 col-12 mb-md-0 mb-5">

            <!--Grid row-->
            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0">
                  <input type="text" id="f_name" name="f_name" class="form-control" value="" placeholder="First Name" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0">
                  <input type="text" id="l_name" name="l_name" class="form-control" placeholder="Last Name" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0">
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email " />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0">
                <input type="text" id="name"  name="b_name" class="form-control" placeholder="Brand Name *" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0">
                <input type="text" id="name" name="bc_name" class="form-control" placeholder="Branch name *" />
                </div>
              </div>
            </div>




            <div class="row">
              <div class="col-md-6 align-self-center my-1 ">
                <div class="form-group d-flex  align-items-center ">
                  <select class="form-control country" id="list" onchange="getSelectValue();">
                    <option selected>Easy Go</option>
                    <option>Easy Go</option>
                    <option>Plug n Play</option>
                    <option>Advance Setup</option>
                    <option>Imdady R3 - RMS </option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 d-flex  align-items-center ">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" onchange=" getSelectValue() " name="customRadioInline1" value="month" class="custom-control-input" checked>
                  <label class="custom-control-label" for="customRadioInline1">Month</label>
                </div>
              </div>
              <div class="col-md-3 d-flex  align-items-center ">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" onchange=" getSelectValue() " name="customRadioInline1" value="year" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline2">Year</label>
                </div>
              </div>
            </div>
            <div class="row">

              <div class="col-md-6 col-6 py-1">
                <div class="form-group">
                  <input id="phone" maxlength="13" minlength="10" name="phone" type="tel" class="form-control" placeholder="Phone *" />
                </div>
              </div>
              <div class="col-md-6 col-6 py-1">
                <div class="md-form mb-0">
                  <input type="text" id="state" name="state" class="form-control" placeholder="State *" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0">
                  <input type="text" id="city" name="city" class="form-control" placeholder="City *" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0">
                  <input type="text" id="address" name="address" class="form-control" placeholder="Street Address *" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0">
                  <input type="text" id="zip" name="zip" class="form-control" placeholder="Zip Code *" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 py-1">
                <div class="md-form mb-0 d-flex justify-content-center">
                  <div class="g-recaptcha" data-sitekey="6LcTDdEcAAAAAD_EB1kbXA-97A9xWsShntEhJ_oZ" data-callback="recaptcha_callback">
                  </div>

                </div>
              </div>
            </div>


          </div>
          <div class="col-md-6 col-12 mb-md-0 mb-5">
            <div class="card mt-4">
              <div class="card-body">
                <h5 class="mb-3 allheadingSizes">ORDER SUMMARY</h5>

                <ul class="list-group list-group-flush">
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

                    <span id="subTotal"> 2000.0$ </span>
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

                    <span style="color: blue; font-weight: bold" id="vat">25400.0$</span>
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

                    <span style="color: blue; font-weight: bold">000.0 sar</span>
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
                      <a href="#" id="gTotal"> </a>
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

              <button type="submit" name="submit" id="submitbtn" class="text-capitalize bgBtn" data-aos="fade-in" disabled>
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
  <!-- validate js  -->
  <script src="./js/jquery.min.js"></script>
  <script src="./js/validator.js"></script>
  <script src="./js/validationJs.js"></script>


  <!-- validate js end -->
  <script>
    function recaptcha_callback() {
      let submitbtn = document.getElementById('submitbtn')
      submitbtn.removeAttribute('disabled');
      submitbtn.style.cursor = 'pointer';
    }





    let month = document.getElementById('customRadioInline1');
    let year = document.getElementById('customRadioInline2');

    // alert(year)
    function getSelectValue() {
      var selectedValue = document.getElementById("list").value;
      // alert(selectedValue);
      if (selectedValue == "Plug n Play" && month.checked) {

        let number = 190;
        var percentToGet = 15;
        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number -28.5} sar`;





      } else if (selectedValue == "Plug n Play" && year.checked) {

        let number = 1900;

        var percentToGet = 15;

        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number-285} sar`;


      } else if (selectedValue == "Advance Setup" && month.checked) {

        let number = 240;

        var percentToGet = 15;

        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number-36} sar`;


      } else if (selectedValue == "Advance Setup" && year.checked) {

        let number = 2400;

        var percentToGet = 15;

        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number -360} sar`;


      } else if (selectedValue == "Easy Go" && month.checked) {

        let number = 120;

        var percentToGet = 15;

        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number-18} sar`;


      } else if (selectedValue == "Easy Go" && year.checked) {

        let number = 1190;

        var percentToGet = 15;

        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number-178.5} sar`;


      } else if (selectedValue == "Imdady R3 - RMS" && month.checked) {

        let number = 200;

        var percentToGet = 15;

        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number-29} sar`;


      } else if (selectedValue == "Imdady R3 - RMS" && year.checked) {

        let number = 1900;

        var percentToGet = 15;

        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number-285} sar`;


      } else {

        let number = 120;

        var percentToGet = 15;

        var percent = (percentToGet / 100) * number;
        let totals = document.getElementById('gTotal');
        totals.innerHTML = `${number} sar`;

        let vat = document.getElementById('vat').innerHTML = `${percent} sar`;
        let subtotal = document.getElementById("subTotal").innerHTML = `${number} sar`;
      }
    }
    getSelectValue();
  </script>








  <!-- data AOS Animation start  -->
  <script src="js/AOS.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- data AOS Animation start  -->

  <!-- tele lib  -->
  <script src="build/js/intlTelInput.js"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      initialCountry: "id",
      // localizedCountries: { 'de': 'Deutschland' },
      nationalMode: true,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
  </script>
  <!-- tele lib  -->






  <!-- bootstrap cdn start  -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- bootstrap cdn end  -->
</body>

</html>