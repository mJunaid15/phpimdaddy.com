<?php
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $howcanwe = $_POST["howcanwe"];
    $howdidyou = $_POST["howdidyou"];
    $comment = $_POST["comment"];

    $emailmsg = '<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
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
  <title>Methologik</title>
</head>

<body style="margin: 0; padding: 0; font-weight: 300; font-stretch: normal; font-size: 14px; letter-spacing: .35px;  background: #bababa; color: #333333;">
  <table border="1" cellpadding="0" cellspacing="0" align="center" class="c-v84rpm" style="border: 0 none; border-collapse: separate; width: 720px;" width="720">
    <tbody>
      <tr class="c-1syf3pb" style="border: 0 none; border-collapse: separate; height: 114px;">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
          <table align="center" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate;">
            <tbody>
              <tr align="center" class="c-1p7a68j" style="border: 0 none; border-collapse: separate; padding: 16px 0 15px;">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle"><img alt="" src="https://imdady.com/img/logo-105x28 1.png" class="c-1shuxio" style="border: 0 none; line-height: 100%; outline: none; text-decoration: none; height: 100px; width: 300px;" width="120" height="33"></td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr class="c-7bgiy1" style="border: 0 none; border-collapse: separate; -webkit-box-shadow: 0 3px 5px rgba(0,0,0,0.04); -moz-box-shadow: 0 3px 5px rgba(0,0,0,0.04); box-shadow: 0 3px 5px rgba(0,0,0,0.04);">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
          <table align="center" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate; width: 100%;" width="100%">
            <tbody>
              <tr class="c-pekv9n" style="border: 0 none; border-collapse: separate; text-align: center;" align="center">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                  <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-1qv5bbj" style="border: 0 none; border-collapse: separate; border-color: #E3E3E3; border-style: solid; width: 100%; border-width: 1px 1px 0; background: #FBFCFC; padding: 40px 54px 42px;">
                    <tbody>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-1m9emfx c-zjwfhk" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeueLight&quot;,&quot;HelveticaNeue-Light&quot;,&quot;HelveticaNeueLight&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 300; color: #1D2531; font-size: 25.45455px;"
                          valign="middle">Methologik</td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                      <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                        valign="middle">This is ' . $name . ' </td>
                    </tr>
                    <tr style="border: 0 none; border-collapse: separate;">
                    <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                      valign="middle">This is ' . $email . ' </td>
                  </tr>
                  
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                          valign="middle">This is ' . $phone . ' </td>
                      </tr>

                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 400;  font-size: 18px; padding-top: 20px;""
                          valign="middle"><br>' . $street . '.<br></td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                      <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                        valign="middle">This is ' . $city . ' </td>
                    </tr>
                    <tr style="border: 0 none; border-collapse: separate;">
                  <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                    valign="middle">This is ' . $state . ' </td>
                </tr>
                    <tr style="border: 0 none; border-collapse: separate;">
                    <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                      valign="middle">This is ' . $howcanwe . ' </td>
                  </tr>
                  
                <tr style="border: 0 none; border-collapse: separate;">
                <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                  valign="middle">This is ' . $howdidyou . ' </td>
              </tr>
              
                <tr style="border: 0 none; border-collapse: separate;">
              <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                valign="middle">This is ' . $comment . ' </td>
            </tr>
                 
                      <tr style="border: 0 none; border-collapse: separate;">
                      <td class="c-eitm3s c-16v5f34" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 400;  font-size: 14px; padding-top: 20px;"" valign="middle"">
                      If you have any questions or doubts dont hesitate to contact our Support Team.<a href="mailto:admin@methologik.com">admin@methologik.com</a>
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
</body>';


    $to = $email;
    $to .= "junaid.qureshi.no1@gmail.com";
    $subject = 'New User Email';


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: Methologik <info@Methologik.com>' . "\r\n";


    if (mail($to, $subject, $emailmsg, $headers)) {

        $error = "<div class='alert alert-success col-md-6 col-md-offset-1 d-flex justify-content-center' role='alert'>"
            . "We will contact you shortly" . "</div>";
    }
}
?>
<!DOCTYPE html>
<html  dir="rtl" lang="ar">

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



    <link rel="stylesheet" href="css/style.css" />
    <title>Imdady | Contact Us</title>
</head>

<body class="overflowhidderAOS">

    <!-- Navebar start  -->
    <?php include('headerarabic.php') ?>


    <div class="brder ">

    </div>


    <!-- Navbar end  -->

    <!-- banner section start  -->


    <div class="w-100 bg-white bgContactUS position-relative">
        <!-- animation shapes start  -->
        <div class="anim1">

            <img src="img/anim1.png" alt="" class="img-fluid anim11 ">


        </div>
        <div class="anim2">

            <img src="img/anim2.png" alt="" class="img-fluid anim22">

        </div>


        <div class="anim3">
            <img src="img/anim3.png" class="img-fluid anim33">



        </div>

        <div class="anim4 ">
            <img src="img/anim4.png" class="img-fluid anim44">

        </div>
        <div class="animLine ">
            <img src="img/animLine.png" class="img-fluid animLine1">

        </div>

        <!-- right bend start  -->







        <div class=" bgWidth mr-auto minWidth">

            <div class="d-flex flex-md-row flex-sm-column justify-content-md-between">
                <div class=" contactUsContent   bg-alignment  bg-alignmentContactUS">
                    <div class=" ">

                        <h1 class="bgHeading">
                            اتصل بنا

                        </h1>

                        <p class="whoWeRPara">لا تتردد في الاتصال بنا.
                            الرجاء تعبئة النموذج أدناه وسيتواصل معك فريقنا قريبًا.
                            <br>
                        </p>


                    </div>

                </div>
                <div class=" creativeBlock p-0   d-flex justify-content-end ">
                    <!-- <img src="img/Creative Block.png" alt="" class="img-fluid bglaptop bgstartup" data-aos="fade-left" data-aos-duration="1000"> -->

                </div>

            </div>



        </div>
    </div>



    <!-- banner section end  -->


    <div class="brder">

    </div>



    <!-- our story start  -->
    <div class="container mt-5">
        <div class=" ourstoryRes d-flex flex-md-row flex-sm-column justify-content-between align-content-center align-items-center">
            <div class=" contactUSdiv mockupParent ">


                <div class="whatsappDiv">
                </div>
                <div class="whatsappDiv2">

                </div>
                <img src="img/whtsappImage.png" class="whatsappImg">
                <div class="  " data-aos="zoom-in">


                </div>



            </div>
            <div class="ourstoryContent mt-sm-2">
                <h1 class="foamHeading font-weight-bolder">Request For Consultation</h1>
                <form id="contact-form" name="contact-form" method="POST">
                    <?php
                    echo $error;
                    ?>
                    <div class="form-group">
                        <label class="formSize" for="">Name</label>
                        <input name="name" type="text" class="form-control shadow-none" id="name" placeholder="Enter your full name">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="formSize" for="">Email</label>
                            <input type="email" name="email" class="form-control shadow-none" id="email" placeholder="Enter your full email address">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="formSize" for="">Phone no</label>
                            <input type="tel" maxlength="13" minlength="10" name="phone" class="form-control shadow-none" id="phone" placeholder="Enter your phone no">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="formSize" for="">Street</label>
                            <input type="text" name="street" class="form-control shadow-none" id="street" placeholder="Enter your street no">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="formSize" for="">City</label>
                            <input name="city" type="text" class="form-control shadow-none" id="city" placeholder="Enter your city">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">

                            <label class="formSize" for="inputState">State</label>
                            <select id="state" name="state" class="form-control shadow-none">
                                <option selected value="RMS">RMS</option>
                                <option value="POS">POS</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Application Development">Application Development</option>
                                <option value="UI/UX">UI/UX</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Animation">Animation</option>
                                <option value="Domain & Hosting">Domain & Hosting</option>



                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="formSize" for="">How can we help you?</label>
                        <input type="text" id="howcanwe" name="howcanwe" class="form-control shadow-none" placeholder="Type your choice">
                    </div>
                    <div class="form-group">
                        <label class="formSize" for="">How did you hear about us?</label>
                        <input type="text" name="howdidyou" class="form-control shadow-none" id="howdidyou" placeholder="Enter your answer">
                    </div>
                    <div class="form-group">
                        <label class="formSize" for="">Comments</label>
                        <textarea name="comment" class="form-control shadow-none" id="comment" rows="3" placeholder="Enter your comment"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LcTDdEcAAAAAD_EB1kbXA-97A9xWsShntEhJ_oZ" data-callback="recaptcha_callback">
                        </div>
                    </div>
                    <button type="submit" name="submit" id="submitbtn" class="text-capitalize bgBtn" data-aos="fade-in" disabled>
                        Submit
                    </button>
                    <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                </form>
            </div>
        </div>

    </div>










    <!-- our story end  -->



     <!-- heading our services section start -->

     <div class="container-fluid mt-4 ">
        <div class="container">
            <h1 class="headServices pl-md-4">خدمات عند الطلب</h1>
            <div class="ourserviceBox">

                <div class="container-fluid ourserviceboxInner"></div>
                <div class="container">

                    <div class="row  text-center ">
                        <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-md-5 " data-aos="zoom-in-down" data-aos-duration="1200">
                            <div class=" d-flex flex-lg-row justify-content-center">
                                <div class="infoBox text-left">
                                    <h1 class="infoHeadingservice">Website
                                        Development</h1>
                                    <br>
                                    <img src="./img/01.png" alt="">

                                </div>


                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-md-5 " data-aos="zoom-in-up" data-aos-duration="1100">
                            <div class=" d-flex flex-lg-row justify-content-center">
                                <div class="infoBox text-left">
                                    <h1 class="infoHeadingservice">Application
                                        Development</h1>
                                    <br>
                                    <img src="img/02.png" alt="">

                                </div>


                            </div>
                        </div>


                        <div class="col-md-4 col-lg-4 col-12 col-sm-12 my-md-5 " data-aos="zoom-in-down" data-aos-duration="1000">
                            <div class=" d-flex flex-lg-row justify-content-center">
                                <div class="infoBox text-left">
                                    <h1 class="infoHeadingservice">UI/UX</h1>
                                    <br>
                                    <br>
                                    <img src="img/Group.png" alt="">

                                </div>


                            </div>
                        </div>


                    </div>

                    <div class="row  text-center ">
                        <div class="col-md-4 col-lg-4 col-12 col-sm-12 mb-md-5 " data-aos="zoom-in-up" data-aos-duration="9000">
                            <div class=" d-flex flex-lg-row justify-content-center">
                                <div class="infoBox text-left">
                                    <h1 class="infoHeadingservice">Digital
                                        Market</h1>
                                    <br>
                                    <br>
                                    <img src="img/roadtype.png" alt="">

                                </div>


                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 col-12 col-sm-12 mb-md-5 " data-aos="zoom-in-down" data-aos-duration="8000">
                            <div class=" d-flex flex-lg-row justify-content-center">
                                <div class="infoBox text-left">
                                    <h1 class="infoHeadingservice">Animation
                                    </h1>
                                    <br>
                                    <br>

                                    <img src="img/3withoutb.png" alt="">

                                </div>


                            </div>
                        </div>


                        <div class="col-md-4 col-lg-4 col-12 col-sm-12 mb-md-5 " data-aos="zoom-in-up" data-aos-duration="7000">
                            <div class=" d-flex flex-lg-row justify-content-center">
                                <div class="infoBox text-left">
                                    <h1 class="infoHeadingservice">Domain &
                                        Hosting</h1>
                                    <br>
                                    <br>
                                    <img src="img/Groupwithoub.png" alt="">

                                </div>


                            </div>
                        </div>


                    </div>

                </div>





            </div>


        </div>

    </div>



    <!-- heading  our services section end -->



    <!-- content section start  -->



    <div class="container-fluid mt-5 mt-none">

        <div class="container mt-md-5 mt-xsm-4">

            
      <div class="row mt-md-5">
        <div class="col-12">
          <img src="img/Group 2.png" class="img-fluid" />
        </div>
      </div>

      <div class="row mt-md-5 ">
        <div class="col-12 mt-xsm-3">
          <h1 class="getinHeading">خلكمتواصل معنا</h1>
        </div>
      </div>

      <div class="row mt-md-5 mt-sm-3  text-xsm-center">
        <div class="col-6 col-md-3 col-lg-3">
          <img src="img/Feature Icon with circle.png" class="img-fluid ">
          <h1 class="getInTochHeading"> أين نحن</h1>
          <p class="getInTochPara">المملكة العربية السعودية
            الرياض
            سوق الكمبيوتر
            شارع العليا العام
          </p>

        </div>

        <div class="col-6 col-md-3 col-lg-3">
          <img src="img/2box.png" class="img-fluid">
          <h1 class="getInTochHeading"> خدمة العميل</h1>
          <p class="getInTochPara">اتصل بنا: <a href="tel:+966535090666">+966535090666</a></p>

        </div>

        <div class="col-6 col-md-3 col-lg-3">
          <img src="img/3line.png" class="img-fluid">
          <h1 class="getInTochHeading"> البريد الإلكتروني </h1>
          <p class="getInTochPara">أرسل لنا على <a href="mailto:info@futuregates.sa">info@futuregates.sa</a></p>

        </div>

        <div class="col-6 col-md-3 col-lg-3">
          <img src="img/dot.png" class="img-fluid">
          <h1 class="getInTochHeading"> ساعات العمل </h1>
          <p class="getInTochPara">من الأحد حتى الخميس
            من الساعة 9:00 ص
            حتى الساعة 8:00 م
          </p>

        </div>

      </div>


        </div>
    </div>

    <!-- content section end  -->



    <!-- footer start  -->
    <?php include('footerarabic.php') ?>







    <!-- footer end  -->



    <!-- validate js  -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/validator.js"></script>
    <!-- <script src="./js/validationJs.js"></script> -->

    <script src="build/js/intlTelInput.js"></script>

    <script>
        $(function() {
            let $signForm = $("#contact-form");
            $.validator.addMethod(
                "noSpace",
                function(value, element) {
                    return value == "" || value.trim().length != 0;
                },
                "Spaces not allowed"
            );

            $.validator.addMethod(
                "test",
                function(Email, element) {
                    var pattern =
                        /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

                    return $.trim(Email).match(pattern) ? true : false;
                },
                "invalid email pattern"
            );

            $.validator.addMethod(
                "phone",
                function(phone, element) {
                    var pattern =
                        /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;

                    return $.trim(phone).match(pattern) ? true : false;
                },
                "invalid phone number"
            );


            if ($signForm.length) {
                $signForm.validate({
                    rules: {
                        email: {
                            required: true,
                            test: true,
                            noSpace: true,
                        },

                        name: {
                            required: true,
                            noSpace: true,
                        },
                        street: {
                            required: true,
                            noSpace: true,
                        },
                        comment: {
                            required: true,
                            noSpace: true,
                        },

                        state: {
                            required: true,
                            noSpace: true,

                        },
                        city: {
                            required: true,
                            noSpace: true,

                        },
                        howdidyou: {
                            required: true,
                            noSpace: true,

                        },
                        howcanwe: {
                            required: true,
                            noSpace: true,

                        },
                        phone: {
                            phone: true,
                            noSpace: true,

                        },
                        comment: {
                            required: true,
                            noSpace: true,

                        },



                    },
                    messages: {
                        email: {
                            required: "Invalid",
                        },

                    },
                });
            }
        });


        function recaptcha_callback() {
            let submitbtn = document.getElementById('submitbtn')
            submitbtn.removeAttribute('disabled');
            submitbtn.style.cursor = 'pointer';
        }
    </script>



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


    <!-- validation  -->
    <script>

    </script>







    <script src="js/anime.js"></script>
    <script src="js/app.js"></script>


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