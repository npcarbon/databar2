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
<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
<!-- Main css -->
<link rel="stylesheet" href="css/webstyle.css">
<link rel="stylesheet" href="css/stylepages.css">
<link rel="stylesheet" href="css/dropbtn.css">
<link rel="stylesheet" href="css/slideshow.css">
<style type="text/css">
  .item-block {
    padding-top: 5%;
  }
  .padtop{
    padding-top: 20px;
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
<body>




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


<!-- Slide Section -->

<section id="slide">
 <!-- <center><img src="images/logolight.png" style="width: 15%;" class="img-responsive"alt="Logo" style="top: 100px;"></center>                              -->
          
<div class="container-fluid" style="padding: 0 5% 5% 5%;">

               <section class="awSlider" style="margin: auto auto;">
                 <div  class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                     <li data-target=".carousel" data-slide-to="0" class="active"></li>
                     <li data-target=".carousel" data-slide-to="1"></li>
                     <li data-target=".carousel" data-slide-to="2"></li>
                     <li data-target=".carousel" data-slide-to="3"></li>
                     <li data-target=".carousel" data-slide-to="4"></li>
                     <li data-target=".carousel" data-slide-to="5"></li>
                     <li data-target=".carousel" data-slide-to="6"></li>

                   </ol>

                   <!-- Wrapper for slides -->
                   <div class="carousel-inner" role="listbox">
                     <div class="item active">
                       <img src="images/slides/GTA_1.jpg">
                       <div class="carousel-caption">#1</div>
                     </div>
                     <div class="item">
                       <img src="images/slides/GTA_2.jpg">
                       <div class="carousel-caption">#2</div>
                     </div>
                     <div class="item">
                       <img src="images/slides/GTA_3.jpg">
                       <div class="carousel-caption">#3</div>
                     </div>
                     <div class="item">
                       <img src="images/slides/GTA_8.jpg">
                       <div class="carousel-caption">#4</div>
                     </div>
                     <div class="item">
                       <img src="images/slides/GTA_9.jpg">
                       <div class="carousel-caption">#5</div>
                     </div>
                     <div class="item">
                       <img src="images/slides/GTA_11.jpg">
                       <div class="carousel-caption">#6</div>
                     </div>
                     <!-- <div class="item">
                       <img src="images/slides/GTA_12.jpg">
                       <div class="carousel-caption">#6</div>
                     </div> -->
                   </div>

                   <!-- Controls -->
                   <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                     <span class="sr-only"></span>
                   </a>
                   <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                     <span class="sr-only">İleri</span>
                   </a>
                 </div>
               </section>
     </div>
</section>
<div class="bgwhite">
                <div class="wow bounceIn section-title" style="padding-top: 5%;">
                    <h1><strong>Why Choose Us</strong></h1>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">We are the Telecommunication Equipment Supplier</p>
                </div>
</div>

<section id="whychooseus">
  <div class="overlay">
    <div class="container-fluid ">
            <div class="row">
                <div class="text-center" style="padding: 5% 10% 0 10%"> 
                  <div class="wow fadeInUp product-form" data-wow-delay="0.3s">
                      <h2>Service</h2><br>
                      <p>DATABAR provides a broad range of experienced sales reps, knowledgeable technical support and skilled professional services to help channel partners to achieve growth in a variety of vertical markets including field force automation, retail, services, healthcare, finance & banking, transport & logistics, manufacturing & supply chain, government and public sector.</p>
                      <center><button class="btn btn-success section-btn" style="margin-bottom: 5%;" onclick="location.href='service.php'">see more</button></center>
                  <hr style="width: 100%">
                  </div>
                </div>
            </div>
          <div class="row">
                <div class="text-center" style="padding: 0 10% 0 10%"> 
                  <div class="wow fadeInUp product-form" data-wow-delay="0.3s">
                      <h2>Product</h2><br>
                      <p>DATABAR is business-to-business (B2B) distributor of Samsung enterprise mobility, Samsung KNOX (EMM), 42Gears mobility solutions – SaaS/On-cloud and On-premise, barcode and complementary mobility solutions on Samsung Android, Android, iOS, Windows OS platforms.</p>
                      <center><button class="btn btn-success section-btn"  style="margin-bottom: 5%;" onclick="window.location.href='product.php'">see more</button></center>
                    <hr style="width: 100%">
                  </div>
                </div>
            </div>
            <div class="row" style=" display: flex; flex-wrap: wrap; align-items: center;" >
                <div class="text-center" style="padding: 0 10% 0 10%"> 
                    <div class="wow fadeInUp product-form letterspac" data-wow-delay="0.3s">
                      <h2>Our mission</h2><br>
                      <p>Databar enables to help mobile operators or carriers, independent software providers, system integrators, technology solution providers, value-added resellers (VARs), at what they do best by providing the best products, complementary solutions, proprietary tools and supports in the vertical industries. We aim to enhance your business with seamless provision.</p>
                      <center><button class="btn btn-success section-btn"  style="margin-bottom: 5%;" onclick="window.location.href='customer.php'" >see more</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Home Section -->

<section id="home" class="main" style="background-attachment: fixed;">
     <div class="overlay">
      <div class="row" style="padding-left: 10px; padding-right: 10px;margin:10%">

              

               <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                    <div class="home-thumb">
                         <h1 class="wow fadeInUp" data-wow-delay="0.6s" style="font-family: 'Oxygen';padding-bottom: 3%;">Knox Technology</h1>
                         <p class="wow fadeInUp" data-wow-delay="0.8s">Knox is a new security feature that is being offered with certain Samsung handsets. It helps you to securely separate your personal and professional data. Essentially, you can have the benefits of using a 'work phone' without the need to carry, and secure,<br> a separate device.</p>
                         <a href="knox.php" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s" style="font-family: 'Open Sans';">Learn more</a>
                    </div>
               </div>

               <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <!-- <img src="images/knoxp.png"  class="img-responsive" style="width: 80%; margin-right: auto; margin-left: auto;"> -->
               </div>
              </div>
    </div>
</section>

<!-- product Section -->



<!-- Screenshot Section -->

<section id="screenshot">
     <div class="container">
          <div class="row">
                <div class="wow bounceIn section-title">
                    <h1><strong>App Screenshots</strong></h1>
                </div>
            </div>

               <!-- Screenshot Owl Carousel -->
               <div id="screenshot-carousel" class="owl-carousel">

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/13275193_1042607849158236_2125177647_o.jpg" class="image-popup">
                              <img src="images/13275193_1042607849158236_2125177647_o.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/13579845_1042611475824540_1090941095_o.jpg" class="image-popup">
                              <img src="images/13579845_1042611475824540_1090941095_o.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/13579716_1042611389157882_111139789_o.jpg" class="image-popup">
                              <img src="images/13579716_1042611389157882_111139789_o.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/13549030_1042611522491202_838154759_o.jpg" class="image-popup">
                              <img src="images/13549030_1042611522491202_838154759_o.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/13549209_1042611489157872_488789606_o.jpg" class="image-popup">
                              <img src="images/13549209_1042611489157872_488789606_o.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/13549297_1042611439157877_337964232_o.jpg" class="image-popup">
                              <img src="images/13549297_1042611439157877_337964232_o.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/13555704_1042607949158226_286972203_o.jpg" class="image-popup">
                              <img src="images/13555704_1042607949158226_286972203_o.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/13569958_1042607982491556_1058200384_o.jpg" class="image-popup">
                              <img src="images/13569958_1042607982491556_1058200384_o.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

               </div>

          </div>
     </div>
</section>







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