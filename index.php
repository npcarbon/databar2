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
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<!-- Main css -->
<link rel="stylesheet" href="css/webstyle.css">
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
     <div >
 <!-- <center><img src="images/logolight.png" style="width: 15%;" class="img-responsive"alt="Logo" style="top: 100px;"></center>                              -->
          


               <section class="awSlider" style="margin: auto auto;">
                 <div  class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                     <li data-target=".carousel" data-slide-to="0" class="active"></li>
                     <li data-target=".carousel" data-slide-to="1"></li>
                     <li data-target=".carousel" data-slide-to="2"></li>
                     <li data-target=".carousel" data-slide-to="3"></li>
                   </ol>

                   <!-- Wrapper for slides -->
                   <div class="carousel-inner" role="listbox">
                     <div class="item active">
                       <img src="images/slides/GTA_1.png">
                       <div class="carousel-caption">#1</div>
                     </div>
                     <div class="item">
                       <img src="images/slides/GTA_2.png">
                       <div class="carousel-caption">#2</div>
                     </div>
                     <div class="item">
                       <img src="images/slides/GTA_5.png">
                       <div class="carousel-caption">3</div>
                     </div>
                     <div class="item">
                       <img src="images/slides/GTA_4.png">
                       <div class="carousel-caption">#4</div>
                     </div>
                   </div>

                   <!-- Controls -->
                   <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                     <span class="sr-only"><</span>
                   </a>
                   <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                     <span class="sr-only">İleri</span>
                   </a>
                 </div>
               </section>
     </div>
</section>
<!-- Product Section -->

<section id="product">
     <div class="overlay">
          
     </div>
     <div class="container">
          <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp">
                         <h1>Our Products</h1>
                         <hr>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-3 col-xs-6 padtop" data-wow-delay="0.4s">
                    <div class="item wow bounceIn" data-wow-delay="0.1s">
                         <a href="#">
                              <img src="images/groups/Group1.jpg" class="img-responsive">
                         </a>    
                         <center><button onclick="window.location.href='product.php?group=1'" class="btn btn-success section-btn" >View All</button></center>
                    </div>
               </div>
               <div class="wow fadeInUp col-md-3 col-xs-6 padtop" data-wow-delay="0.4s">
                    <div class="item wow fadeInUp" data-wow-delay="0.3s">
                         <a href="#">
                              <img src="images/groups/Group2.jpg" class="img-responsive">
                         </a>
                         <center><button onclick="window.location.href='product.php?group=2'" class="btn btn-success section-btn" >View All</button></center>
                    </div>
               </div>
               <div class="wow fadeInUp col-md-3 col-xs-6 padtop" data-wow-delay="0.4s">
                    <div class="item wow fadeInUp" data-wow-delay="0.5s">
                          <a href="#">
                              <img src="images/groups/Group3.jpg" class="img-responsive">
                          </a>
                         <center><button onclick="window.location.href='product.php?group=3'" class="btn btn-success section-btn">View All</button></center>
                    </div>
               </div>
               <div class="wow fadeInUp col-md-3 col-xs-6 padtop" data-wow-delay="0.4s">
                    <div class="item wow fadeInUp" data-wow-delay="0.7s">
                         <a href="#">
                              <img src="images/groups/Group4.jpg" class="img-responsive">
                         </a>
                         <center><button onclick="window.location.href='product.php?group=4 '" class="btn btn-success section-btn">View All</button></center>
               </div>
          </div>
     </div>
</section>


<section id="whychooseus" style="padding-top: 5%;">
     <div class="container-fluid">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="wow bounceIn section-title" style="padding-bottom: 0px;">
                         <h2>Why Choose Us</h2>
                         <p class="wow fadeInUp" data-wow-delay="0.5s">We are the Telecommunication Equipment Supplier</p>

                    </div>
                    <div class="wow fadeInUp product-form" data-wow-delay="0.8s">
                         <div class="col-md-4 col-xs-12 text-center item-block">
                              <center><img src="images/icons/tools-icon.png" width="30%" class="img-responsive"></center>
                              <h2>Service</h2>
                              <p style="font-size: 1.1em; min-height: 220px;">DATABAR provides a broad range of experienced sales reps, knowledgeable technical support and skilled professional services to help channel partners to achieve growth in a variety of vertical markets including field force automation, retail, services, healthcare, finance & banking, transport & logistics, manufacturing & supply chain, government and public sector.</p>
                              <center><button class="btn btn-success section-btn" onclick="location.href='service.php'">see more</button></center>
                         </div>
                         <div class="col-md-4 col-xs-12 text-center item-block">
                              <center><img src="images/icons/product.png" width="30%" class="img-responsive"></center>
                              <h2>Product</h2>
                              <p style="font-size: 1.1em; min-height: 220px;">DATABAR is business-to-business (B2B) distributor of Samsung enterprise mobility, Samsung KNOX (EMM), 42Gears mobility solutions – SaaS/On-cloud and On-premise, barcode and complementary mobility solutions on Samsung Android, Android, iOS, Windows OS platforms.</p>
                              <center><button class="btn btn-success section-btn" onclick="window.location.href='product.php'">see more</button></center>
                         </div>
                         <div class="col-md-4 col-xs-12 text-center item-block">
                              <center><img src="images/icons/product-destruction-company.png " width="30%" class="img-responsive"></center>
                              <h2>Our mission</h2>
                              <p style="font-size: 1.1em; min-height: 220px;">Databar enables to help mobile operators or carriers, independent software providers, system integrators, technology solution providers, value-added resellers (VARs), at what they do best by providing the best products, complementary solutions, proprietary tools and supports in the vertical industries. We aim to enhance your business with seamless provision </p>
                              <center><button class="btn btn-success section-btn" onclick="window.location.href='customer.php'">see more</button></center>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>



<!-- Home Section -->

<section id="home" class="main" style="padding-left: 10px; padding-right: 10px">
     <div class="overlay"></div>
     	<div class="row">

               <div class="wow fadeInUp col-md-5 col-sm-6 col-xs-10 col-xs-offset-1 col-sm-offset-0" data-wow-delay="0.2s">
                    <img src="images/Knox.png" class="img-responsive">
               </div>

               <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="home-thumb">
                         <h1 class="wow fadeInUp" data-wow-delay="0.6s">Knox Technology</h1>
                         <p class="wow fadeInUp" data-wow-delay="0.8s">Knox is a new security feature that is being offered with certain Samsung handsets. It helps you to securely separate your personal and professional data. Essentially, you can have the benefits of using a 'work phone' without the need to carry, and secure, a separate device.</p>
                         <a href="#product" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s">Learn more</a>
                    </div>
               </div>

		</div>
</section>

<!-- product Section -->



<!-- Screenshot Section -->

<section id="screenshot">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="section-title">
                         <h1>App Screenshots</h1>
                         <p class="wow fadeInUp" data-wow-delay="0.8s">Nulla nisi purus, ultrices et scelerisque at, ullamcorper et ex. Phasellus at nisi lobortis, semper tortor sed, gravida neque.</p>
                    </div>
               </div>

               <!-- Screenshot Owl Carousel -->
               <div id="screenshot-carousel" class="owl-carousel">

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/screenshot-img1.jpg" class="image-popup">
                              <img src="images/screenshot-img1.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/screenshot-img2.jpg" class="image-popup">
                              <img src="images/screenshot-img2.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/screenshot-img3.jpg" class="image-popup">
                              <img src="images/screenshot-img3.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/screenshot-img4.jpg" class="image-popup">
                              <img src="images/screenshot-img4.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/screenshot-img5.jpg" class="image-popup">
                              <img src="images/screenshot-img5.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/screenshot-img6.jpg" class="image-popup">
                              <img src="images/screenshot-img6.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/screenshot-img7.jpg" class="image-popup">
                              <img src="images/screenshot-img7.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href="images/screenshot-img8.jpg" class="image-popup">
                              <img src="images/screenshot-img8.jpg" class="img-responsive" alt="screenshot">
                         </a>
                    </div>

               </div>

          </div>
     </div>
</section>



<!-- Divider Section -->






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