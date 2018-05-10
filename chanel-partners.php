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
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">

<!-- Main css -->
<link rel="stylesheet" href="css/webstyle.css">
<link rel="stylesheet" href="css/dropbtn.css">
<link rel="stylesheet" href="css/slideshow.css">

<style type="text/css">
  h3{
    font-family: 'Signika', sans-serif;
  }
  p{
    font-size: 14px;
  }
  h3{
    font-size: 28px;
  }
  .content p ,h1 ,h4{
    color: black;
  }

</style>
</head>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>



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

<!-- ###################### Start Content ############################# -->
<div id="home" style="background: url(images/channel-partners/channelpartner.png); background-repeat: no-repeat; background-attachment: fixed;    background-position: center; ">
  <div class="overlay" style="opacity: 0.7;background: #000; z-index: 1; "></div>
  <h2 class="container wow bounceIn" data-wow-delay="0.8s" style="color: #fff; font-size: 60px; text-align: center; z-index: 9;">Become a <br> channel partner<hr></h2>
</div>
<div class="content" style=" background-color: #fff;">
      <div class="container">
        <!-- <div class="row"> -->
          <p style="padding-top: 5%; font-size: 16px">DATABAR offers our channel partners; mobile operators, system integrators, technology solution providers, value-added resellers (VARs); a broad selection of comprehensive Samsung enterprise mobility; smartphones, consumer graded tablets, Samsung Galaxy Tab Active; Samsung KNOX, barcode and complementary solutions like barcode scanners, wireless handheld scanners, mobile computers, barcode printers, and mobile printers and POS printers including services, from financing, education, training and business development resources to marketing services and pre- and post-sale technical assistance. 

        We welcome your participation in our DATABAR channel partner programs and communities.</p>
          <div class="row wow fadeInUp" style="padding: 20px;" data-wow-delay="0.3s">
            <span class="col-md-3 center" style="">
              <img src="images/channel-partners/AIS-logo-.jpg" style="width: 80%; ">
            </span>
            <div class="col-md-9">
              <h3>Advanced Info Services Plc. (AIS)</h3>
              <p>AIS is the leading mobile operator in Thailand. Our core businesses include domestic mobile services, international direct dialing (IDD) services, and international roaming services. Our business strategy focuses on delivering quality in all dimension including device, network, applications and services. At AIS we believe in building and developing the ecosystem of the Thai telecommunication space. With our core strength in network quality, we aim to enhance sustainable growth through quality services delivered by our key business partners. For example, instead of creating our own branded mobile devices, we collaborate with the leading manufacturers to locally market variety of proper mobile devices. Similarly on digital content and applications, a growing group of local content/applications developers join our AIS the Startup, and together we increase variety of digital consumption. In delivering quality services, we work alongside with our business alliances and solutions partners to differentiate our services with segmented privileges, discounts program, and new lifestyle.</p>              
            </div>
          </div>
          <div class="row wow fadeInUp" style="padding: 20px;" data-wow-delay="0.3s">
            <div class="col-md-3 ">
              <img src="images/channel-partners/dtac-logo.jpg" style="width: 80%;">
            </div>
            <div class="col-md-9" style="padding: ">
              <h3>Total Access Communication Public Company Limited (DTAC)</h3>
              <p>Total Access Communication Public Company Limited (DTAC) DTAC was established as a limited company in August 1989 by Bencharongkul family to provide wireless telecommunications services in 800 MHz and 1800 MHz frequency bands under a Build-Transfer-Operate concession granted by CAT Telecom Public Company Limited (formerly known as Communications Authority of Thailand, CAT). To promote the development of telecommunication services in Thailand, the private sector was allowed to participate in the telecommunication market under concessions on a Build-Transfer-Operate (BTO) basis with two state enterprises, which has been corporatized as TOT Corporation Public Company Limited (TOT) and known as TOT Public Company Limited and CAT Telecom Public Company Limited (CAT). In 2012, dtac Trinet Company Limited, a subsidiary of the Company, has obtained the spectrum license for mobile telecommunications in the Frequency Band 2.1 GHz from the National Broadcasting and Telecommunications Commission (NBTC) and provides service in 2013.</p>              
            </div>
          </div>
          <div class="row wow fadeInUp" style="padding: 20px;" data-wow-delay="0.3s">
            <div class="col-md-3 ">
              <img src="images/channel-partners/true-logo.jpg" style="width: 80%;">
            </div>
            <div class="col-md-9" >
              <h3>TrueMove</h3>
              <p>TrueMove offers innovative and high-quality mobile telecommunications services on its nationwide 1800 MHz network to 15 million subscribers throughout Thailand. TrueMove's vision is to create a pioneering wireless hi-speed lifestyle where people can communicate as well as access knowledge, information and entertainment wherever, whenever, and however they wish. The company delivers excellent coverage coupled with quality, value and unique integrated products while also taking the lead to introduce 3G services to the Kingdom.</p>              
            </div>
          </div>        
  </div>
   <img src="images/channel-partners/Tendencias2016-1.jpg" style="width: 70%; display: block; margin: 3%; margin-left: auto; margin-right: auto;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><br>
</div>

<!-- ###################### End Content ############################# -->

<!-- Footer Section -->

<?php
     include 'include/foot.inc';
?>

<? $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
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