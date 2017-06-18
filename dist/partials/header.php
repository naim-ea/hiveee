<?php 

if(isset($_POST['email'])){
$headers = array('Accept: application/json');
$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36';


          $mail = 'naimelayadi.com/hiveee';
          if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
          {
            $passage_ligne = "\r\n";
          }
          else
          {
            $passage_ligne = "\n";
          }

          // HEADER GENERIQUE ************************************************************************************
          $headers = 'From:'.$mail.$passage_ligne;
          $headers .= 'Reply-To: '.$_POST['mail'].'>'.$passage_ligne;
          $headers .= 'MIME-Version: 1.0' . $passage_ligne;
          $headers .= "X-Priority: 3" . $passage_ligne;
          $headers .= 'Content-Type: text/html; charset="utf-8"'. $passage_ligne;

          // CONSTRUCTION DU MESSAGE *****************************************************************************
          $message = '<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Hiveee</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      body, td { font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif; font-size:14px; }
      body { background-color: #0A131C; margin: 0; padding: 0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
      h2{ padding-top:12px; color:#10202C; font-size:22px; }
    </style>
</head>
<body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">
  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#FEFEFE;" >
    <tbody>
      <tr>
        <td align="center" bgcolor="#F0F3F7">
          <table  cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr><td class="w640"  width="640" height="10"></td></tr>
              <tr><td align="center" class="w640"  width="640" height="20"><a style="color:#ffffff; font-size:12px;" href="naimelayadi.com/hiveee"><span style="color:#ffffff; font-size:12px;">Voir le contenu de ce mail en ligne</span></a> </td></tr>
              <tr><td class="w640"  width="640" height="10"></td></tr>
              <tr class="pagetoplogo">
                <td class="w640"  width="640">
                  <table  class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#f3c40f">
                    <tbody>
                      <tr>
                        <td class="w30"  width="30"></td>
                        <td  class="w580"  width="580" valign="middle" align="left">
                          <div class="pagetoplogo-content">
                            <img class="w580" style="text-decoration: none; display: block; color:#fff; font-size:30px; margin-top:20px; margin-bottom:20px;" src="https://pbs.twimg.com/profile_images/847570332747796480/gexcI1_y_400x400.jpg" alt="Hiveee" width="60" title="Hiveee"/>
                          </div>
                        </td>
                        <td class="w30"  width="30"></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr><td  class="w640"  width="640" height="50" bgcolor="#ffffff"></td></tr>
              <tr class="content">
                <td class="w640" class="w640"  width="640" bgcolor="#ffffff">
                  <table class="w640"  width="640" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                      <tr>
                        <td  class="w30"  width="30"></td>
                        <td  class="w580"  width="580">
                          <table class="w580"  width="580" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                              <tr>
                                <td class="w580"  width="580">
                                  <h2 style="color:#10202C; font-size:22px; padding-top:12px;"> Bonjour '. $_POST['email']. ' !</h2>
                                  <div align="left" class="article-content">
                                    <p>
                                      Merci de vous être inscrit à la newsletter de Hiveee ! Nous vous tiendrons au courant de nos dernières nouveautés.
                                    </p>
                                  </div>
                                </td>
                              </tr>
                              <tr><td class="w580"  width="580" height="1" bgcolor="#c7c5c5"></td></tr>
                            </tbody>
                          </table>
                        </td>
                        <td class="w30" class="w30"  width="30"></td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr><td class="w640"  width="640" height="100" bgcolor="#ffffff"></td></tr>
              <tr class="pagebottom">
                <td class="w640"  width="640">
                  <table class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#f3c40f">
                    <tbody>
                      <tr><td colspan="5" height="10"></td></tr>
                      <tr>
                        <td class="w30"  width="30"></td>
                        <td class="w580"  width="580" valign="top">
                          <p align="right" class="pagebottom-content-left">
                            <a style="color:#FEFEFE;" href="http://naimelayadi.com/hiveee"><span style="color:#d0d233;">Hiveee</span></a>
                          </p>
                        </td>
                        <td class="w30"  width="30"></td>
                      </tr>
                      <tr><td colspan="5" height="10"></td></tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr><td class="w640"  width="640" height="60"></td></tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>';

          mail($_POST['email'], "Inscription à la newsletter Hiveee", $message, $headers);
}
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>
        <?= $title ?>
    </title>
    <meta name="description" content="<?= $description ?>" />

    <meta name="robots" content="noindex, nofollow">


    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image:src" content="" />

    <!-- Open Graph data -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="" />

    <!-- Links -->
    <link rel="icon" type="image/png" href="pages/assets/img/favicon.png" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="pages/assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body>


    <header>
        <div class="header-nav-from-hamburger">
            <ul>
                <li><a href="home">Accueil</a></li>
                <li><a href="about">À propos</a></li>
                <li><a href="f-a-q">FAQ</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="header-logo">
                <a href="home">
                    <img src="pages/assets/img/hiveee-logo.png" alt="Hiveee">
                </a>
            </div>
            <div class="header-nav">
                <ul>
                    <li><a href="home">Accueil</a></li>
                    <li><a href="about">À propos</a></li>
                    <li><a href="f-a-q">FAQ</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
            <div class="hamburger-menu">
                <div class="bar"></div>
            </div>
        </div>

    </header>
