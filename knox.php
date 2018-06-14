<?php 
include 'include/condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Databar</title>
<link rel="shortcut icon" href="favicon.png">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
<!-- Main css -->
<link rel="stylesheet" href="css/webstyle.css">
<link rel="stylesheet" href="css/dropbtn.css">
<link rel="stylesheet" href="css/stylepages.css">
<link rel="stylesheet" href="css/slideshow.css">
<style type="text/css">
 .box h1,.box h2,.box h3,.box p{
    color:black;
    padding: 0;
    font-weight: 400;
  }
</style>
<script type="text/javascript">
  function cutStr($str, $maxChars='', $holder=''){

    if (strlen($str) > $maxChars ){
      $str = iconv_substr($str, 0, $maxChars,"UTF-8") . $holder;
  } 
  return $str;
} 
</script>
</head>
<body style="padding-top: 5.5%;">


<!-- PRE LOADER -->

<!-- <div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div> -->



          <div class="visible-md visible-lg ">
               <?php
                     include 'include/navlg.inc';
               ?>
          </div>
          <div class="visible-xs visible-sm">               
               <?php
                     include 'include/navsm.inc';
               ?>
          </div>


<!-- Section 1 -->

<div style="background-color:#ffffff; text-align:center;">
  <div class="row box" style="padding-top: 3%; ">
    <div class="col-md-4 col-md-offset-4">
      <h4>Knox Platform</h4>
      <h1><strong>A secure device is a
      reliable device</strong></h1>
    </div>
    <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1" style="padding: 2%;">
      <p>The Samsung Knox platform is built into Samsung smartphones, tablets, and wearables at the manufacturing stage, so you have it the moment you unpack your device. The Knox platform consists of overlapping defense and security mechanisms that protect against intrusion, malware, and more malicious threats.</p>

      <p>To further protect these devices for high security use cases, Samsung developed resilient and user-friendly Knox solutions.</p>
    </div>

  <div class="row" style="padding: 10% 0% 5% 0%;">
      <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"><img src="images/Knox/home-1.jpg" style="width:100%" /></div>
  </div>
  </div>
  <div class="box" style="padding-top:3%"> 
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1">
            <h1><strong>A flexible device management experience</strong></h1>
        </div>
        <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1" style="padding-top: 3%;">
          <p>With the Knox platform, over 1,000 APIs are available for apps to leverage granular management and control features of Samsung devices. Samsung has used these APIs to create our IT solutions, and also offers them to developers to enhance their apps with the Knox platform.</p>
        </div>
      </div>
      <div class="row">
         <div class="col-md-12" style="padding-top: 3%;">
          <img src="images/Knox/0zkyUI2B0-mJIuFm.jpg" width="100%">
        </div>
      </div> 
    </div>
</div>

<!-- Section 2 -->
<div style="padding-top:2%">&nbsp;</div>
<span style="color:#ffffff">
        <div class="bgblack" style="padding-top: 2% " >
                   <h4>Knox Solutions</h4>
                   <h1><strong>Covered every step of the way</strong></h1>
                      <div class="tab">
         
                         <strong><h3><button class="tablink active" onclick="openNumb(event,'1')">IT ADMINS</button> |
                          <button class="tablink" onclick="openNumb(event,'2')">DEVELOPERS</button> |
                          <button class="tablink" onclick="openNumb(event,'3')">INDIVIDUALS</button></h3></strong>
                      </div>

                    <!-- Tab content -->
                  <div id="1" class="Numb">
                      <div class="row" >
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                              <img src="images/Knox/2018-05-18_13-14-07.jpg" width="100%" style="padding: 3% 0 0 0;">
                            </div>
                              <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                              <h4>Knox IT solutions leverage the Knox platform, and provide IT admins with end-to-end solutions, from configuration and deployment, to managing, securing and maintaining devices.</h4>
                              <a href="product.php?group=Knox" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="0.5s" style="font-family: 'Open Sans';">Learn more</a>
                            </div>
                      </div>
                  </div>
                  <div id="2" class="Numb" style="display:none">
                    <div class="row" >
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                              <img src="images/Knox/2.jpg" width="100%" style="padding: 3% 0 0 0;">
                            </div>
                              <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                              <h4>Build and deploy your app on secure Samsung devices with Knox developer tools, a diverse set of SDKs, code libraries, and support materials available from our Samsung Enterprise Alliance Program.</h4>
                            </div>
                      </div>
                  </div>
                  <div id="3" class="Numb" style="display:none">
                     <div class="row" >
                            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                              <img src="images/Knox/3.jpg" width="100%" style="padding: 3% 0 0 0;">
                            </div>
                              <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                              <h4>Your financial, health, and government information is always safe on Samsung consumer apps leveraging Knox. Learn more about apps that use Knox to verify system security and safeguard data.</h4>
                            </div>
                      </div>
                  </div>
            </div>
          <script>
          function openNumb(evt, NumbName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("Numb");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(NumbName).style.display = "block";
            evt.currentTarget.className += " active";
          }
          </script>
    </span>

<!-- Section 3 -->
<div class="row box" style="background-color:#ffffff; text-align:center; padding-top: 5%;"> 
    <div class="col-md-10 col-md-offset-1">
      <h1 style="padding-bottom: 1%; "><strong>Knox Solutions</strong></h1>
        <h4 style="padding-bottom: 5%; ">See how Samsung's Knox mobile security platform can drive your business forward.</h4>
        <div class="row">
        <div class="col-md-4">
            <img src="images/Knox/knox_workspace.png" width="50%">
            <h3><strong>Knox Workspace</strong></h3><br>
            <h4 style="color: #1428a0;">Full-featured work container</h4><br>
            <p style="padding: 0 15% 0 15%;">Enterprise work container that
              isolates work applications and
              data from the rest of the device
              backed by the device chipset and
              Knox Platform
            </p>
        </div>
        <div class="col-md-4">
            <img src="images/Knox/knox_premium.png" width="50%">
            <h3><strong>Knox Premium</strong></h3><br>
            <h4 style="color: #1428a0;">Cloud-based device management</h4><br>
            <p style="padding: 0 15% 0 15%;">Cloud-based cross-platform EMM
                solution combined with an on-
                device secure container
                for Samsung devices
            </p>
        </div>
        <div class="col-md-4">
            <img src="images/Knox/knox_configure.png" width="50%">
            <h3><strong>Knox Configure</strong></h3><br>
            <h4 style="color: #1428a0;">Bulk device configuration and deployment</h4><br>
            <p style="padding: 0 13% 0 13%;">Cloud-based tool to configure
                devices remotely and to
                dynamically update configuration
                policies that include most
                up-to-date features
            </p>
        </div>
        </div>
        <div class="row" style="padding: 5% 0 5% 0; ">
        <div class="col-md-4">
            <img src="images/Knox/knox_mobile_enrollment.png" width="50%">
            <h3><strong>Knox Mobile Enrollment</strong></h3><br>
            <h4 style="color: #1428a0;">EMM installation and enrollment</h4><br>
            <p style="padding: 0 15% 0 15%;">Cloud-based tool to help
              install an EMM Agent and
              enroll to EMM automatically
            </p>
        </div>
        <div class="col-md-4">
            <img src="images/Knox/knox_customisation.png" width="50%">
            <h3><strong>Knox Customisation SDK</strong></h3><br>
            <h4 style="color: #1428a0;">Sophisticated device configuration</h4><br>
            <p style="padding: 0 15% 0 15%;">Software development kit
              that provides access to 1000+
              APIs for device configuration
              and customisation on Samsung
              devices
            </p>
        </div>
        <div class="col-md-4">
            <img src="images/Knox/knox_enabledapp.png" width="50%">
            <h3><strong>Knox Enabled App</strong></h3><br>
            <h4 style="color: #1428a0;">Added security for Android apps</h4><br>
            <p style="padding: 0 15% 0 15%;">Invisible container that
              safeguards an individual
              app by isolating the app
              and its data from the rest
              of the device
            </p>
        </div>
        </div>
    </div>
</div>






<!-- Footer Section -->

<?php
     include 'include/foot.inc';
?>




<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>