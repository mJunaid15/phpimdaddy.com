
<?php

if(isset($_POST['submit']))
  {
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $email    = $_POST["email"];
    $phone    = $_POST["phone"];
    $address    = $_POST["address"];
    $city    = $_POST["city"];
    $state    = $_POST["state"];
    $zip    = $_POST["zip"];
    $message =  $_POST["message"];
    
   $emailmsg ='<head>

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
  <title>Hello To stellarremodelsllc</title>
</head>

<body style="margin: 0; padding: 0; font-weight: 300; font-stretch: normal; font-size: 14px; letter-spacing: .35px;  background: #343a40; color: #333333;">
  <table border="1" cellpadding="0" cellspacing="0" align="center" class="c-v84rpm" style="border: 0 none; border-collapse: separate; width: 720px;" width="720">
    <tbody>
      <tr class="c-1syf3pb" style="border: 0 none; border-collapse: separate; height: 114px;">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
          <table align="center" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate;">
            <tbody>
              <tr align="center" class="c-1p7a68j" style="border: 0 none; border-collapse: separate; padding: 16px 0 15px;">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle"><img alt="" src="https://stellarremodelsllc.com/img/stellaremail.png" class="c-1shuxio" style="border: 0 none; line-height: 100%; outline: none; text-decoration: none; height: 100px; width: 300px;" width="120" height="33"></td>
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
                          valign="middle">Text</td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                          valign="middle">Name: '.$first_name.' '.$last_name.' </td>
                      </tr>
                        <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                          valign="middle">Email: '.$email .' </td>
                      </tr>
                        <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                          valign="middle">Phone: '.$phone .' </td>
                      </tr>
                         <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                          valign="middle">Address: '.$address .' </td>
                      </tr>
                        <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                          valign="middle">City: '.$city .' </td>
                      </tr>
                        <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                          valign="middle">State: '.$state .' </td>
                      </tr>
                       <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 600;  font-size: 25px; padding-top: 20px;"
                          valign="middle">Zip code: '.$zip .' </td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 400;  font-size: 18px; padding-top: 20px;""
                          valign="middle"><br>Comment: '.$message.'.<br></td>
                      </tr>
                 
                      <tr style="border: 0 none; border-collapse: separate;">
                      <td class="c-eitm3s c-16v5f34" style="border: 0 none; color:black; border-collapse: separate; vertical-align: middle; font-family: Roboto;font-weight: 400;  font-size: 14px; padding-top: 20px;"" valign="middle"">
                      If you have any questions or doubts dont hesitate to contact our Support Team.<a href="mailto:contact@stellarremodelsllc.com">contact@stellarremodelsllc.com</a>
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
 $to .= ", contact@stellarremodelsllc.com";
          $subject = 'Contact';


           $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: Stellarremodelsllc <contact@stellarremodelsllc.com>' . "\r\n";


          if(mail($to, $subject, $emailmsg, $headers))
          {

             $error = "<div class='alert alert-success text-center' role='alert'>"
            ."Thanks for submitting your request. We will be in touch soon to discuss your inquiry."."</div>";
}

  }
?>