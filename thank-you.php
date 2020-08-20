<?php 
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ip = get_client_ip();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $url = $_SERVER['HTTP_REFERER'];
} else {
    $url = 'No available.';
}
// popup data store on xml and email send.

if(isset($_POST['uemail'])){
// mail send code start
// Admin email
$adminmessage = '<html>';
$adminmessage .= '<head>';
$adminmessage .= '<style type="text/css">.tableContent img{border:0!important;display:block!important;outline:0!important}a{color:#382f2e}h2,p{color:#382f2e}div,h2,p,ul{margin:0}a.link1{color:#e3523a;font-size:13px;font-weight:700;text-decoration:none}h2{color:#fff;font-size:21px;font-weight:400}.bgBody{background:#d9d8d8}.bgItem{background:#333}li,p{color:#aaa;font-size:13px;line-height:19px}.contentEditable h2{text-transform:uppercase;color:#000000;font-size:30px;padding-left:15px}.contentTextEditable p{color:#000000;text-align:left;margin-bottom:5px;font-size:15px;text-transform:capitalize;line-height:25px;text-align:justify}.contentEditable h3{line-height:30px}.movableContent-footer span{color:#fff;font-size:12px;opacity:.8;letter-spacing:.5px}ul.bottom-social{margin:0;padding:0;list-style-type:none}.bottom-social li{display:inline-block;padding-right:15px}.bottom-social li a{color:#fff;font-size:15px}@media only screen and (max-width:480px){table[class=MainContainer],td[class=cell]{width:100%!important;height:auto!important}td[class=specbundle]{width:100%!important;float:left!important;font-size:13px!important;line-height:17px!important;display:block!important;padding-bottom:20px!important}td[class=specbundle3]{width:20px!important;float:left!important;display:block!important;background-color:#f2f2f2!important}td[class=spechide]{display:none!important}img[class=banner]{width:100%!important;height:auto!important}td[class=left_pad]{padding-left:15px!important;padding-right:15px!important}}@media only screen and (max-width:540px){table[class=MainContainer],td[class=cell]{width:100%!important;height:auto!important}td[class=specbundle]{width:100%!important;float:left!important;font-size:13px!important;line-height:17px!important;display:block!important;padding-bottom:20px!important}td[class=specbundle3]{width:20px!important;float:left!important;display:block!important;background-color:#f2f2f2!important}td[class=spechide]{display:none!important}img[class=banner]{width:100%!important;height:auto!important}td[class=left_pad]{padding-left:15px!important;padding-right:15px!important}</style>';

    $adminmessage.= '<script type="colorScheme" class="swatch active">
        { "name":"Default", "bgBody":"333333", "link":"E3523A", "color":"AAAAAA", "bgItem":"333333", "title":"FFFFFF" }</script>';

    $adminmessage .= '<body paddingwidth="0" paddingheight="0" offset="0" toppadding="0" leftpadding="0" class="bgBody">';

    $adminmessage .= '<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" align="center"><tbody><tr><td>';

    $adminmessage .= '<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="MainContainer" style="font-family:helvetica, sans-serif;"><tbody><tr><td>';

    $adminmessage.= '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td valign="top" width="20" class="spechide">&nbsp;</td><td class="movableContentContainer" style="border: 1px solid #dcdcdc;">';

    $adminmessage .= '<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"><tr bgcolor="#000"><td class="specbundle2" style="padding:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td align="center" valign="middle" width="100%"><div class="contentEditableContainer contentImageEditable"><div class="contentEditable"><a href="http://glorywebsdemo.com/html/interactivv.com/" style="text-decoration: none;
    font-size: 20px; font-weight: 700;"><img src="http://glorywebsdemo.com/html/interactivv.com/images/interactivv_logo.png" alt="interactivv"/></a></div></div></td>
    </tr></table></td></tr></table></div>';

    $adminmessage.='<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="padding: 15px;background: #fff; border: 0;"><tbody><tr><td style="border: 0;"><h3 style="text-transform: capitalize; color:#000000;">Hello Admin,</h3></td></tr><tr><td style="border: 0;padding-bottom: 15px;"><p style="color: #000000; font-size: 15px;     font-weight: bold;">There is New Enquiry placed on <strong>interactivv.</strong></p></td></tr><tr><td style="border: 0;padding-bottom: 10px;"><p style="color: #000000; font-size: 16px; font-weight:bold;">Details are Same as below : </p></td></tr></tbody></table></div>';

    $adminmessage.= '<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;"><table width="100%" border="1" cellspacing="0" cellpadding="0" align="center" style="padding: 15px;background: #fff; border: 0; color: #000000; font-weight: bold;"><tbody>';

    if(isset($_POST['fname'])){
        $adminmessage.= '<tr style="border-bottom: 0;border-right: 1px solid grey;"><td style="padding:15px; text-transform: capitalize;border-right: 0;">Name</td><td style="padding:15px;">'.$_POST['fname'].'</td></tr>';
    }

    if(isset($_POST['uemail'])){
        $adminmessage.= '<tr style="border-bottom: 0;border-right: 1px solid grey;"><td style="padding:15px; text-transform: capitalize;border-right: 0;">Email</td><td style="padding:15px;">'.$_POST['uemail'].'</td></tr>';
    }

    if(isset($_POST['phoneno'])){
        $adminmessage.= '<tr style="border-bottom: 0; border-right: 1px solid grey;"><td style="padding:15px; text-transform: capitalize;border-right: 0;">Phone no</td><td style="padding:15px;">'.$_POST['phoneno'].'</td></tr>';
    }

    if(isset($_POST['website'])){
        $adminmessage.= '<tr style="border-bottom: 0;border-right: 1px solid grey;"><td style="padding:15px; text-transform: capitalize;border-right: 0;">Desired Service</td><td style="padding:15px;">'.$_POST['website'].' </td></tr>';
    }

    if(isset($_POST['desiredservices'])){
        $adminmessage.= '<tr style="border-bottom: 0;border-right: 1px solid grey;"><td style="padding:15px; text-transform: capitalize;border-right: 0;">Company / Website URL</td><td style="padding:15px;">'.$_POST['desiredservices'].' </td></tr>';
    }

    if(isset($_POST['message'])){
        $adminmessage.= '<tr style="border-bottom:0;border-right: 1px solid grey;"><td style="padding:15px; text-transform: capitalize;border-right: 0;">Message</td><td style="padding:15px;border-right: 1px solid grey;">'.$_POST['message'].' </td></tr>';
    }

    if($url){
        $adminmessage.= '<tr style="border-bottom: 1px solid grey; border-right: 1px solid grey;"><td style="padding:15px; text-transform: capitalize;     border-right: 0;">Reference URL</td><td style="padding:15px;">'.$url.'</td></tr>';
    }

    $adminmessage.= '<tr><td style="border: 0;     padding: 25px 0 15px 0;"><p style="color: #000000; font-size: 15px;     font-weight: bold;"><strong>Thanks,<br>Interactivv Team.</strong></p></td></tr>';

    $adminmessage.= '</tbody></table></div>';

    $adminmessage.= '<div class="movableContent-1 movableContent-footer" style="border: 0px; position: relative;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="background:#efefef;padding: 25px 15px;color: #000000; font-weight:bold;"><tr><td valign="top" align="center"><span>Copyright @ 2020 Interactivv All Right Reserved</span></td></tr></table></div>';

    $adminmessage.='</td><td valign="top" width="20" class="spechide">&nbsp;</td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>';

    $adminmessage.= '</body></html>';


    // user mail
$usermessage = '<html>';
$usermessage .= '<head>';
$usermessage .= '<style type="text/css">.tableContent img{border:0!important;display:block!important;outline:0!important}a{color:#382f2e}h2,p{color:#382f2e}div,h2,p,ul{margin:0}a.link1{color:#e3523a;font-size:13px;font-weight:700;text-decoration:none}h2{color:#fff;font-size:21px;font-weight:400}.bgBody{background:#d9d8d8}.bgItem{background:#333}li,p{color:#aaa;font-size:13px;line-height:19px}.contentEditable h2{text-transform:uppercase;color:#000000;font-size:30px;padding-left:15px}.contentTextEditable p{color:#000000;text-align:left;margin-bottom:5px;font-size:15px;text-transform:capitalize;line-height:25px;text-align:justify}.contentEditable h3{line-height:30px}.movableContent-footer span{color:#fff;font-size:12px;opacity:.8;letter-spacing:.5px}ul.bottom-social{margin:0;padding:0;list-style-type:none}.bottom-social li{display:inline-block;padding-right:15px}.bottom-social li a{color:#fff;font-size:15px}@media only screen and (max-width:480px){table[class=MainContainer],td[class=cell]{width:100%!important;height:auto!important}td[class=specbundle]{width:100%!important;float:left!important;font-size:13px!important;line-height:17px!important;display:block!important;padding-bottom:20px!important}td[class=specbundle3]{width:20px!important;float:left!important;display:block!important;background-color:#f2f2f2!important}td[class=spechide]{display:none!important}img[class=banner]{width:100%!important;height:auto!important}td[class=left_pad]{padding-left:15px!important;padding-right:15px!important}}@media only screen and (max-width:540px){table[class=MainContainer],td[class=cell]{width:100%!important;height:auto!important}td[class=specbundle]{width:100%!important;float:left!important;font-size:13px!important;line-height:17px!important;display:block!important;padding-bottom:20px!important}td[class=specbundle3]{width:20px!important;float:left!important;display:block!important;background-color:#f2f2f2!important}td[class=spechide]{display:none!important}img[class=banner]{width:100%!important;height:auto!important}td[class=left_pad]{padding-left:15px!important;padding-right:15px!important}</style>';

    $usermessage.= '<script type="colorScheme" class="swatch active">
        { "name":"Default", "bgBody":"333333", "link":"E3523A", "color":"AAAAAA", "bgItem":"333333", "title":"FFFFFF" }</script>';

    $usermessage .= '<body paddingwidth="0" paddingheight="0" offset="0" toppadding="0" leftpadding="0" class="bgBody">';

    $usermessage .= '<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" align="center"><tbody><tr><td>';

    $usermessage .= '<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="MainContainer" style="font-family:helvetica, sans-serif;"><tbody><tr><td>';

    $usermessage.= '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td valign="top" width="20" class="spechide">&nbsp;</td><td class="movableContentContainer" style="border: 1px solid #dcdcdc;">';

    $usermessage .= ' <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"><tr bgcolor="#000"><td class="specbundle2" style="padding:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"><tr><td align="center" valign="middle" width="100%"><div class="contentEditableContainer contentImageEditable"><div class="contentEditable"><a href="http://glorywebsdemo.com/html/interactivv.com/" style="text-decoration: none;
    font-size: 20px; font-weight: 700;"><img src="http://glorywebsdemo.com/html/interactivv.com/images/interactivv_logo.png" alt="Interactivv"/></a></div></div></td>
    </tr></table></td></tr></table></div>';

    $usermessage.='  <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="padding: 15px;background: #fff; border: 0;"><tbody><tr><td style="border: 0;"><h3 style="text-transform: capitalize; color: #000000; font-weight:bold;">Hello '.$_POST['fname'].',</h3></td></tr><tr><td style="border: 0;padding-bottom: 15px;"><p style="color: #000000; font-size: 15px;     font-weight: bold;">Thank you for contacting us. We will be happy to connect and provide further information to facilitate better insights of our services within one working day.</p></td></tr><tr><td style="border: 0;     padding: 25px 0 15px 0;"><p style="color: #000000; font-size: 15px;     font-weight: bold;"><strong>Thanks,<br>Interactivv Team.</strong></p></td></tr></tbody></table></div>';

    $usermessage.= '<div class="movableContent-1 movableContent-footer" style="border: 0px; position: relative;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="background:#efefef;padding: 25px 15px;color: #000000; font-weight:bold;"><tr><td valign="top" align="center"><span>Copyright @ 2020 Interactivv All Right Reserved</span></td></tr></table></div>';

    $usermessage.='</td><td valign="top" width="20" class="spechide">&nbsp;</td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>';

    $usermessage.= '</body></html>';
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $adminemail = 'anil.test34@gmail.com';
    $adminsubject = 'Interactivv - New Inquiry';

    $useremail = $_POST['uemail'];
    $usersubject = 'Thank you for submitting inquiry';

    mail($adminemail, $adminsubject,$adminmessage, $headers);
    mail($useremail, $usersubject,$usermessage, $headers);
         
}

?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta http-equiv="Cache-control" content="public">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Thank You</title>
      <link rel="icon" href="images/favicon.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.min.css">
      <!-- Font-awesome CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- font-family: 'Roboto', sans-serif; -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
      <!-- font-family: 'Exo 2', sans-serif; -->
      <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <!-- font-family: 'Open Sans', sans-serif; -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
      <!-- OwlCarousel CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <!-- Theme CSS -->
      <link rel="stylesheet" href="css/style.css?ver=3.1">
      <link rel="stylesheet" href="css/menu.css?ver=3.1">
      <!-- Animation CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <script src="js/modernizr.custom.js?ver=3.1"></script>
   </head>
   <body class="About">
      <header id="site-header" class="site-header">
         <nav class="navbar navbar-expand-lg navbar-dark m-auto">
            <a class="navbar-brand" href="index.html">
            <img class="logo-white" src="images/interactivv_logo.png" alt="Logo">
            <img class="logo-blue" src="images/interactivv_logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler action--open" aria-label="Open Menu"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header-right" id="navbarSupportedContent">
               <ul id="desktop" class="navbar-nav ml-auto mainmenu">
                  <li class="nav-item">
                     <a class="nav-link" href="#">Animation Portfolio</a>
                  </li>
                  <li class="nav-item dropdown mega-dropdown">
                     <a class="nav-link" href="#">Other Folio <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                     <!-- Case Studies Mega munu -->
                     <div class="dropdown-menu mega-dropdown-menu sm-megamenu">
                        <div class="row">
                           <div class="col-md-12">
                              <ul>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Still Images</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">3D Animations</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">VR & Interactive</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="#">Case Studies</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- /Case Studies Mega munu -->
                  </li>
                  <li class="nav-item dropdown smm-mega-dropdown">
                     <a class="nav-link" href="#">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                     <!-- Service Mega munu -->
                     <div class="dropdown-menu mega-dropdown-menu smm-megamenu">
                        <div class="row">
                           <div class="col-md-6">
                              <ul>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="architecture.html">Architectural Animation & 3D Rendering</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="2d-explainer.html">2D Explainer videos</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="website-development.html">Website Development</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="digital-marketing.html">Digital Marketing</a></li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="interactive-ar.html">Interactive AR/VR application</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="3d-animation.html">3D Product/Character Animation</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="branding.html">Branding (Print designs)</a></li>
                                 <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="photography.html">Photography</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- /Service Mega menu -->
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Contact</a>
                  </li>
               </ul>
               <div class="slidemenu">
                  <a href="">Design Services</a>
                  <a href="">Designer On Tap</a>
                  <a href="">White Label Design</a>
                  <a href="">Referral Program</a>
                  <a href="">Podcast Interviews</a>
               </div>
               <div class="menu__toggler"><span></span></div>
            </div>
            <!-- MObile menu -->
            <div id="dl-menu" class="dl-menuwrapper">
               <button class="dl-trigger">Open Menu</button>
               <ul class="dl-menu">
                  <li>
                     <a href="#">Animation Portfolio</a>
                  </li>
                  <li>
                     <a href="#">Other Folio</a>
                     <ul class="dl-submenu">
                        <li><a href="#">Still Images</a></li>
                        <li><a href="#">3D Animations</a></li>
                        <li><a href="#">VR & Interactive</a></li>
                        <li><a href="#">Case Studies</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">Services</a>
                     <ul class="dl-submenu">
                        <li><a href="architecture.html">Architectural Animation & 3D Rendering</a></li>
                        <li><a href="2d-explainer.html">Interactive AR/VR application</a></li>
                        <li><a href="2d-explainer.html">2D Explainer videos</a></li>
                        <li><a href="3d-animation.html">3D Product/Character Animation</a></li>
                        <li><a href="website-development.html">Website Development</a></li>
                        <li><a href="digital-marketing.html">Digital Marketing</a></li>
                        <li><a href="branding.html">Branding (Print designs)</a></li>
                        <li><a href="photography.html">Photography</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#">About</a>
                  </li>
                  <li>
                     <a href="#">Blog</a>
                  </li>
                  <li>
                     <a href="#">Contact</a>
                  </li>
                  <li>
                     <a href="#">Design Services
                     </a>
                  </li>
                  <li>
                     <a href="#">Designer On Tap</a> 
                  </li>
                  <li>
                     <a href="#">White Label Design</a>
                  </li>
                  <li>
                     <a href="#">Referral Program</a>
                  </li>
                  <li>
                     <a href="#">Podcast Interviews</a>
                  </li>
               </ul>
            </div>
            <!-- /dl-menuwrapper -->
         </nav>
      </header>

            <section id="about-banner" class="about-banner">
         <div class="container banner-sec">
            <div class="row bannersec">
               <div class="col-md-12 col-sm-12">
                  <div class="banner-contn">
                  <!--    <p class="wow fadeInUp">What’s our story</p> -->
                     <h1 class="wow fadeInUp">Thank You</h1>
                  </div>
               </div>
            </div>
         </div>
      </section>

<section id="thanks-banner">
 <div class="inner-banners">
       <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <div class="success-icon text-center wow fadeInUp"><i class="fa fa-check-square-o" aria-hidden="true"></i></div>
                    <div class="banner-left-inner text-center">
                          
                        <h1 class="drk-blue-clr wow fadeInUp">Thank You !</h1>
                    </div>
                </div>
            </div>
        </div>  
    </div>  

       <div class="thank-cont-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="left-text-section text-center">
                       
                        <h2 class="headeing_center wow fadeInUp">Your request has been submitted successfully.</h2>

                        <div class="form-btn">
                            <a class="btn btn-default blc-btn thank-btn wow fadeInUp" href="index.html"> BACK TO HOME</a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

</section>

      <!-- Footer -->
      <footer id="footer" class="footer">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-5 ft-col about-col wow fadeInUp" data-wow-delay="0.2s">
                     <a href="index.html"><img src="images/footer_logo.png" alt="Logo"></a>
                     <div class="social-group">
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h5>
                        <ul>
                           <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#" title="Skype" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                           <li><a href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#" title="Linkedin" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 ft-col col-sm-7 services-col ft-links wow fadeInUp" data-wow-delay="0.4s">
                     <h4 class="title">Services</h4>
                     <ul class="clearfix">
                        <li><a href="architecture.html">Architectural Animation & 3D Rendering</a></li>
                        <li><a href="interactive-ar.html">Interactive AR/VR application</a></li>
                        <li><a href="2d-explainer.html">2D Explainer videos</a></li>
                        <li><a href="3d-animation.html">3D Product/Character Animation</a></li>
                        <li><a href="website-development.html">Website Development</a></li>
                        <li><a href="digital-marketing.html">Digital Marketing</a></li>
                        <li><a href="branding.html">Branding (Print designs)</a></li>
                        <li><a href="photography.html">Photography</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-6 ft-col col-sm-5 ft-links company-col wow fadeInUp" data-wow-delay="0.6s">
                     <h4 class="title"> Company </h4>
                     <ul class="clearfix">
                        <li><a href="#"> About Us</a></li>
                        <li><a href="#"> Our Team</a></li>
                        <li><a href="#"> Careers</a></li>
                        <li><a href="#"> Case Study</a></li>
                        <li><a href="#"> Testimonials</a></li>
                        <li><a href="#"> Contact Us</a></li>
                        <li><a href="#"> Blog</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-7 ft-col get-in-touch wow fadeInUp" data-wow-delay="0.8s">
                     <h4 class="title">Have Questions? </h4>
                     <ul class="office-no">
                        <li><label>USA:</label><a href="tel:+1-717-207-7706">+1-717-207-7706</a></li>
                        <li><label>India:</label><a href="tel:+9107948489192">+91-79-4848-9192</a></li>
                     </ul>
                     <ul class="careers-no">
                        <li><label>Careers:</label><a href="tel:+9107948489192">+91-79-4848-9192</a></li>
                     </ul>
                     <ul class="more-info">
                        <li><label>Email:</label><a href="mailto:sales@glorywebs.com">sales@glorywebs.com</a></li>
                        <li><label>Skype:</label><a href="skype:glory-webs?call">glory-webs</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay="0.2s">
                     <ul>
                        <li><a href="#">Sitemap</a> <span>|</span></li>
                        <li><a href="#">Privacy Policy</a> <span>|</span></li>
                        <li><a href="#">Terms and Conditions</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-5 col-md-5 text-right copyright-text wow fadeInUp" data-wow-delay="0.2s">
                     <p>
                        Copyright ©
                        <script type="text/javascript">
                           document.write(new Date().getFullYear());
                        </script> Interactivv.com
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- /Footer -->

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.min.js"></script>
      <!-- Animation Script -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
      <!-- carousel Script -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <!-- Form Validate Script -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" async></script>
      <!-- Mobile Menu Script -->
      <!-- Custom Script -->
      <script src="js/custom.js"></script>
      <script>
         jQuery(document).ready(function() {
          // Partner Logo Slider
         jQuery('.partner-logo-slider .owl-carousel').owlCarousel({
               loop:true,
               // margin:30,
               nav:false,
               dots:false,
               autoplay:true,
               responsive:{
                   0:{
                       items:2
                   },
                   481:{
                       items:3
                   },
                   991:{
                       items:5
                   },
                   1199:{
                       items:6
                   }
               }
           })
         });
      </script>
      <script src="js/jquery.dlmenu.js?ver=3.1"></script>
      <script>
         $(function() {
             $( '#dl-menu' ).dlmenu({
               animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
             });
           });
      </script>
      <!-- <script>
         // Popup Box to show
         setTimeout(function() {
         jQuery("#popup").modal('show');
         }, 30000);
         </script> -->
   </body>
</html>


