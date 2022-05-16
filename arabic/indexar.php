<?php
if (isset($_POST['submit'])) {
  $email    = $_POST["email"];
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
                          valign="middle">This is ' . $email . ' </td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 400;  font-size: 18px; padding-top: 20px;""
                          valign="middle"><br>' . $email . '.<br></td>
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
  $to .= ", junaid.qureshi.no1@gmail.com";
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
<html dir="rtl" lang="ar">

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

  <title>Imdady.com</title>
</head>

<body class="overflowhidderAOS">

  <!-- Navebar start  -->
  <?php include('headerarabic.php') ?>


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
      <img src="img/Right Band 2.png" class="img-fluid" data-aos="zoom-in" data-aos-duration="1200">



    </div>

    <div class="cirler ">
      <img src="img/Turquoise Circle.png" class="img-fluid" data-aos="zoom-in-up" data-aos-duration="2200">

    </div>

    <!-- right bend start  -->






    <div class=" minWidth  mr-auto" style="width: 90%;">
      <div class=" d-flex flex-md-row flex-sm-column justify-content-md-between  test bg-alignment">
        <div class="   mt-3   ">
          <h1 class="bgHeading" data-aos="fade-up" data-aos-duration="1000">امدادي <br>شريكك في الابتكار</h1>
          <div class="ml-auto">
            <form action="" method="post">
              <input type="text" name="email" class="bgInput  text-left" placeholder="عنوان البريد الإلكتروني" data-aos="zoom-in-right" data-aos-duration="1000">

              <button type="submit" name="submit" class="text-capitalize bgBtn ml-3 " data-aos="zoom-in-up" data-aos-duration="1000" style="font-size: 14px !important;">احصل على العرض</button>
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
      <div class="row animate__animated animate__backInLeft">
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


  <div class="container-fluid my-4 noneAOS ">

    <h1 class="headchoose ">.امدادييدير أعمالكباستخدامتقنيات الجيل القادم</h1>
    <p class="headchoosePara">نسعى جاهدين لتوفير منتج ذا قيمة مما يمكننا منعرض حلول للمشاكل التي تواجها الشركات من خلال تقديم خدمات وحلول تكنولوجيا المعلومات المتقدمة.</p>

  </div>

  <div class="container my-4">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 text-center ">
        <img src="img/01.png" class="img-fluid" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
        <h1 class="infoHeading" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">برنامج امدادي لنقاط البيع</h1>
        <p class="infoPara collapse d-md-none" id="collapseExample1">برنامج امدادي لنقاط البيع يقوم بتحليل طلباتك ، إدارة المخزون ، المستودعات ، العملاء والمبيعات باستعمال أحد أنظمة نقاط البيع الأكثر تقدمًا وسهولة في الاستخدام. الخدمة السحابية تتيح لك تتبع مبيعاتك من أي مكان في العالم، جميع الأدوات التي تحتاج إليها لإدارة أعمالك متوفرة في الخدمة السحابية</p>
        <p class="infoPara  d-none d-md-block d-lg-block d-xl-block">برنامج امدادي لنقاط البيع يقوم بتحليل طلباتك ، إدارة المخزون ، المستودعات ، العملاء والمبيعات باستعمال أحد أنظمة نقاط البيع الأكثر تقدمًا وسهولة في الاستخدام. الخدمة السحابية تتيح لك تتبع مبيعاتك من أي مكان في العالم، جميع الأدوات التي تحتاج إليها لإدارة أعمالك متوفرة في الخدمة السحابية</p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 text-center ">
        <img src="img/02.png" class="img-fluid" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
        <h1 class="infoHeading" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">برنامج امدادي للمطاعم</h1>
        <p class="infoPara collapse d-md-none" id="collapseExample2">برنامج امدادي لإدارة المطاعم والكوفي شوب ابتكارات ومميزات من خلال نظام قائم على الخدمة السحابية ويتضمن إمكانات قوية وسهلة الاستخدام تعمل على تحويل عمليات المطاعم بطرق لم يسبق لها مثيل من قبل، كما أننا مستمرون في تطوير المنتج بشكل مستمر مما يمنحك ميزات وخدمات متقدمة </p>
        <p class="infoPara  d-none d-md-block d-lg-block d-xl-block">برنامج امدادي لإدارة المطاعم والكوفي شوب ابتكارات ومميزات من خلال نظام قائم على الخدمة السحابية ويتضمن إمكانات قوية وسهلة الاستخدام تعمل على تحويل عمليات المطاعم بطرق لم يسبق لها مثيل من قبل، كما أننا مستمرون في تطوير المنتج بشكل مستمر مما يمنحك ميزات وخدمات متقدمة </p>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4 col-4 text-center ">
        <img src="img/Group.png" class="img-fluid" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
        <h1 class="infoHeading" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">منصة تسوق لحلول التجارة الإلكترونية</h1>
        <p class="infoPara collapse d-md-none" id="collapseExample3">تسوقهيمنصة لحلول التجارة الإلكترونية ، توفر نظام تعدد البائعين وتركز على مساعدة البائعين لعرض منتجاتهم وإدارة المخزون والتنبؤ بالمبيعات، وكذلك مساعدة المستهلكين للوصول للمنتجات بكل يسر وسهولة من خلال الإعلانات والنشر بالوسائل المتاحة </p>
        <p class="infoPara  d-none d-md-block d-lg-block d-xl-block">تسوقهيمنصة لحلول التجارة الإلكترونية ، توفر نظام تعدد البائعين وتركز على مساعدة البائعين لعرض منتجاتهم وإدارة المخزون والتنبؤ بالمبيعات، وكذلك مساعدة المستهلكين للوصول للمنتجات بكل يسر وسهولة من خلال الإعلانات والنشر بالوسائل المتاحة </p>
      </div>

    </div>

  </div>


  <!-- heading section end -->


  <!-- content section start  -->

  <div class="container-fluid mt-5 mt-sm-2">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-6 col-12  m-sm-0 d-flex flex-row justify-content-center">
        <div class="mainContendiv d-flex justify-content-center">
          <img src="img/iPhone X.png" class="img-fluid" data-aos="zoom-out-down" data-aos-duration="1000" data-aos-offset="400">

        </div>

      </div>
      <div class="col-md-6 col-lg-6 col-sm-6 col-12   d-flex  align-items-center ">
        <div class="mainContendiv2 animate__animated animate__flipInX">
          <h1 class="contentHeading  ">اختيار ذكي لأنظمة الجيل القادم</h1>
          <p class="contentPara">يوفر برنامجامدادي خدمات سحابية لأنظمة المطاعمومتاجر البيع بالتجزئة وحلول التجارة الإلكترونية من خلال توفير عمليات سريعة وبيانات في الوقت الفعلي</p>
          <ul class="contenUl">
            <li class="noneAOS">موثوق</li>
            <li class="noneAOS">قابل للتطوير</li>
            <li class="noneAOS">الوصول في أي وقت ومن أي مكان </li>

          </ul>

        </div>


      </div>
    </div>
  </div>


  <div class="container-fluid mt-5 mt-none">
    <div class="row">
      <div class="col-12">
        <div class="container m-none ">
          <h1 class="benefit">مزايا العملمعنا</h1>


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
              <h1 class="benefitHeading"> المناطق الزمنية</h1>
              <p class="benefitPara">فريقنا متاح دائمًا لتقديم رد سريع على استفساراتك.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 col-12 mt-xsm-3">
          <div class="row">
            <div class="col-3 col-sm-3 col-md-2">
              <img src="img/dot.png" class="img-fluid">
            </div>
            <div class="col-9 col-sm-9 col-md-10 ">
              <h1 class="benefitHeading">مجموعة متكاملة من الخدمات</h1>
              <p class="benefitPara">فريق امدادي متاح دائمًا لتقديم أفضل الحلول والخدمات الاستباقية لعملائنا.</p>
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
              <h1 class="benefitHeading">لا للمستحيل؟ نحن هنا</h1>
              <p class="benefitPara">نحن دائمًا على استعداد للجلوس على الطاولة والتوصل إلى أفضل الحلول لمتطلبات عملائنا.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
          <div class="row">
            <div class="col-3 col-sm-3 col-md-2">
              <img src="img/2box.png" class="img-fluid">
            </div>
            <div class="col-9 col-sm-9 col-md-10 ">
              <h1 class="benefitHeading">شروط عمل مرنة</h1>
              <p class="benefitPara">لدى امدادي مجموعة كاملة من أعضاء الفريق الفني الذين يعملون على مدار الساعة لضمان وقت تشغيل بنسبة 100٪.</p>
            </div>
          </div>
        </div>

      </div>




      <div class="row mt-md-5 mt-xsm-4">
        <div class="col-12 col-md-6 col-lg-6">
          <h1 class="fashionHeading">تكامل بين الأنظمة خال من الصعوبات.</h1>

        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <p class="fashionPara">إذا كنت تدير عدة متاجر وتقلق من إدارتها جميعًا. <br> تم تطوير برنامج امدادي لهذا الغرض ، لدعم وإدارة أعمالك ومبيعاتك بنقرة واحدة في أي وقت وفي أي مكان.</p>

        </div>
      </div>

      <div class="row mt-md-5 mt-xsm-4">
        <div class="col-12">
          <img src="img/Group 2.png" class="img-fluid">
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