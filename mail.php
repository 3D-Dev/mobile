<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$formcontent = "From:" . $name . " Message:" . $comment;
$recipient = "yr199111ry@outlook.com";
$subject = "Web Development";
$mailheader = "From:" . $email . "\r\n";

mail($recipient, $subject, $formcontent, $mailheader);

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <!--[if !mso]><!-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--<![endif]-->

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact response</title>
  <link rel="icon" href="images/A-icon.png">

  <!--[if (gte mso 9)|(IE)]>
  <style type="text/css">
    table {border-collapse: collapse !important;}
  </style>
  <![endif]-->

</head>

<body bgcolor="#1c1c1c" style="margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >

<center class="wrapper" style="width:100%!important;height:100%!important;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;" >
  <div class="webkit" style="max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;" >

    <!--[if (gte mso 9)|(IE)]>
    <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="600" align="center"
    style="border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;" >
      <tr>
        <td style="border-collapse:collapse;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
    <![endif]-->

    <table role="presentation" class="outer" align="center" bgcolor="#f5f5f5"
    style="border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;Margin:0 auto;width:100%;max-width:600px;" >
      <tr>
        <td class="header" bgcolor="#f5f5f5"
        style="border-collapse:collapse;border-bottom:thick solid #000000;padding-top:40px;padding-bottom:20px;padding-right:30px;padding-left:30px;" >

          <table role="presentation" width="70" align="left" cellpadding="0" cellspacing="0"
          style="border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;" >
            <tr>
              <td height="70" style="padding-top:0;padding-bottom:20px;padding-right:20px;padding-left:0;border-collapse:collapse;" >
                <img src="images/adam-logo.jpg" width="70" height="70" border="0" alt=""
                style="border-width:0;border-style:none;height:auto;line-height:100%;outline-style:none;text-decoration:none;" />
              </td>
            </tr>
          </table>

          <!--[if (gte mso 9)|(IE)]>
          <table role="presentation" width="425" align="left" cellpadding="0" cellspacing="0" border="0"
          style="border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;" >
            <tr>
              <td style="border-collapse:collapse;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
              <![endif]-->

          <table role="presentation" class="col425" align="left" border="0" cellpadding="0" cellspacing="0"
          style="width:100%;max-width:425px;border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;" >
            <tr>
              <td height="70" style="border-collapse:collapse;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >

                <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0"
                style="border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;" >
                  <tr>
                    <td class="subhead" style="border-collapse:collapse;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-size:53px;font-family:Helvetica,sans-serif;line-height:58px;font-weight:bold;" >
                      Adam Franks
                    </td>
                  </tr>
                  <tr>
                    <td class="titlehead"
                    style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:3px;border-collapse:collapse;font-size:15px;font-family:sans-serif;" >
                      Web Development
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
          </table>

              <!--[if (gte mso 9)|(IE)}>
              </td>
            </tr>
          </table>
          <![endif]-->

        </td>
      </tr>
      <tr>
        <td class="one-column" style="border-collapse:collapse;padding-top:25px;padding-bottom:25px;padding-right:25px;padding-left:25px;" >

          <table role="presentation" width="100%" style="border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;" >
            <tr>
              <td class="inner contents"
              style="border-collapse:collapse;padding-top:10px;padding-bottom:10px;padding-right:20px;padding-left:20px;width:100%;text-align:left;" >
                <p style="padding-top:0;padding-bottom:10px;padding-right:0;padding-left:0;Margin:0;font-size:44px;" >
                  <b class="h1" style="font-size:44px;" >
                    THANK YOU!
                  </b>
                </p>
                <p class="body-c"
                style="Margin:0;line-height:34px;font-size:24px;" >I appreciate
                your interest.  You may
                receive a reply shortly.</p>
              </td>
            </tr>
          </table>

        </td>
      </tr>
      <tr>
        <td class="footer" bgcolor="#000000" style="border-collapse:collapse;padding-top:20px;padding-bottom:80px;padding-right:30px;padding-left:30px;" >

          <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0"
          style="border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;" >
            <tr>
              <td align="center" class="footercopy" style="border-collapse:collapse;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:Calibri,Helvetica,Verdana,sans-serif;font-size:24px;line-height:34px;color:#ffffff;" >
                <a href="index.html" style="color:#ffffff;text-decoration:underline;" ><font color="#ffffff">Portfolio of Adam Franks</font></a><br />
                <a href="https://github.com/adfranks"  style="color:#ffffff;text-decoration:underline;" ><font color="#ffffff">GitHub</font></a>
              </td>
            </tr>
            <tr>
              <td align="center" style="padding-top:16px;padding-bottom:0;padding-right:0;padding-left:0;border-collapse:collapse;" >

                <table role="presentation" border="0" cellspacing="0" cellpadding="0"
                style="border-collapse:collapse;border-spacing:0;font-family:Calibri,Helvetica,Verdana,sans-serif;" >
                  <tr>
                    <td width="37" style="text-align:center;padding-top:0;padding-bottom:0;padding-right:10px;padding-left:10px;border-collapse:collapse;" >
                      <img src="images/adam-logo.jpg" width="70" height="70" border="0" alt=""
                      style="border-width:0;border-style:none;height:auto;line-height:100%;outline-style:none;text-decoration:none;" />
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
          </table>

        </td>
      </tr>
    </table>

    <!--[if (gte mso 9)|(IE)]>
        </td>
      </tr>
    </table>
    <![endif]-->

  </div>
</center>

</body>

</html>';
?>
