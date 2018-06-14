<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="shortcut icon" href="images/databar-icon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="images/databar-icon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en" />
<meta name="author" content="voutlook Team" />
<meta name="description" content="service,services,support,supports,program,it support,network" />
<meta name="keywords" content="Databar �����ԡ�÷ҧ��ҹ Consulting Services, Managed Services, Support, Program
�����Ҩ���繻ѭ�ҷҧ softward ���� hardware �������ö���·�ҹ���" /> 
    <title>Databar</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.1.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.js"></script>
        <script type="text/javascript" src="js/respond1.min.js"></script>
        <link rel="stylesheet" type="text/css" media="all" href="style-ie.css"/>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) or jssor.sliderc.mini.js (32KB, with caption, no slideshow) or jssor.sliders.mini.js (28KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
</head>
<body>
<!-- Head and Nav -->
<div class="navbar navbar-default navbar-static-top" role="navigation" style="background-color:#3c6aa1;background:-webkit-linear-gradient(top,#4d80af 0,#2b5593 100%);">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="text-muted pull-left" href="index.php"><img src="images/logo-120x131.png" class="logo-wd" style="height:60px;" /></a>
   </div>
    <div class="navbar-collapse collapse">
                                     <div class="input-group navbar-right" style="margin-top:5px;">
     <style type="text/css">
    .gsc-control-cse{background-color: #e7e7e7;border:none !important;}
	.gsc-control-cse{background:none !important;}
    .gsib_a{padding: 0px 6px 0;}
    

	
	input.gsc-search-button.gsc-search-button-v2,
	input.gsc-search-button.gsc-search-button-v2:hover
	{
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false) !important;
		background-image: url('images/icons2.png');
		background-color: #fff;
		background-repeat: no-repeat;
		background-position: center;
		margin:0;
		padding:12px 15px !important;
		border-color:#ccc !important;
	}
	input.gsc-search-button, input.gsc-search-button:hover, input.gsc-search-button:focus
    {

	}
	#gsc-iw-id1{position:relative;top:0;}
	
    .gsc-search-box-tools .gsc-search-box .gsc-input{padding-right: 0px !important;}
    table.gsc-search-box td {vertical-align:top !important;}
    .gsc-input-box{height: 26px;}
    .gsc-control-cse{padding: 0;}
    #gsc-i-id1{background: white !important; font-size: 10px!important;line-height: 24px!important;}
    #gs_tti50{background: white !important;}
    .gsib_b{display: none;}
	.gsc-control-cse {padding:0 !important;}
	#___gcse_0{width:250px;}    @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
	/* IE10+ CSS styles go here */
	#gsc-i-id1{padding-top:7px !important;}
	}
	
    </style>
	<!--[if lte IE 9]>
	<style type="text/css">
	input.gsc-search-button.gsc-search-button-v2,
	input.gsc-search-button.gsc-search-button-v2:hover
	{
		padding:12px 15px 13px !important;
	}
	</style>
	<![endif]-->
	<!--[if lte IE 8]>
	<style type="text/css">
	input.gsc-search-button.gsc-search-button-v2,
	input.gsc-search-button.gsc-search-button-v2:hover
	{
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false) !important;
		background-image: url('images/icons2.png');
		background-color: #fff;
		background-repeat: no-repeat;
		background-position: center;
		margin:0;
		padding:12px 0 !important;
		border-color:#ccc !important;
		width:32px;
	}
	input.gsc-search-button, input.gsc-search-button:hover, input.gsc-search-button:focus
    {

	}
	</style>
	<![endif]-->
                                  <script>
  (function() {
    var cx = '015449593616925650890:v9dq-bqdofu';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

<gcse:search></gcse:search>    </div>
      <ul class="nav navbar-nav navbar-right cl-effect-1" style="margin-top:3px;">
      
      
      <li><a href="contact.php" style="color:white;">Contact US</a></li>
      <li><a href="service.php" style="color:white;">Reseller Services</a></li>
      <li><a href="email.php" style="color:white;">Inquiry</a></li>
	  <!--<li><a href="client.php">Clients</a></li>-->
    </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
<!-- END Head and Nav -->
<!-- Shadow header -->
<!-- <div class="all_header_border"></div> -->
<div style="position: relative; width: 100%;  overflow: hidden;margin-top:10px;">
        <div style="position: relative; ">
            <!-- Jssor Slider Begin -->
            <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 0px; width: 980px; height: 400px; background: url(images/main_bg.jpg) top center no-repeat;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">                    </div>
                    <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 980px;
                    height: 400px; overflow: hidden;">
                    <div>
                       
                        <img src="images/5.jpg" style="position: absolute; width: 980px; height: 400px;" />
                        <img u="thumb" src="images/5.jpg" />                    </div>
                    <div>
                        
                        <img src="images/1.jpg" style="position: absolute; width:980px; height: 400px;" />
                        <img u="thumb" src="images/1.jpg" />                    </div>
                    <div>
                       
                          
                        <img src="images/2.jpg" style="position: absolute;  width: 980px; height: 400px;" />
                        <img u="thumb" src="images/2.jpg" />                    </div>
                   
                    <div>
                       
                        <img src="images/3.jpg" style="position: absolute; width: 980px; height: 400px;" />
                        <img u="thumb" src="images/3.jpg" />                    </div>
                         <div>
                       
                        <img src="images/4.jpg" style="position: absolute; width: 980px; height: 400px;" />
                        <img u="thumb" src="images/4.jpg" />                    </div>
                             
                </div>
                <!-- Arrow Navigator Skin Begin -->
                <style>
                    /* jssor slider arrow navigator skin 07 css */
                    /*
                    .jssora07l              (normal)
                    .jssora07r              (normal)
                    .jssora07l:hover        (normal mouseover)
                    .jssora07r:hover        (normal mouseover)
                    .jssora07ldn            (mousedown)
                    .jssora07rdn            (mousedown)
                    */
                    .jssora07l, .jssora07r, .jssora07ldn, .jssora07rdn {
                        position: absolute;
                        cursor: pointer;
                        display: block;
                        background: url(images/a07.png) no-repeat;
                        overflow: hidden;
                    }

                    .jssora07l {
                        background-position: -5px -35px;
                    }

                    .jssora07r {
                        background-position: -65px -35px;
                    }

                    .jssora07l:hover {
                        background-position: -125px -35px;
                    }

                    .jssora07r:hover {
                        background-position: -185px -35px;
                    }

                    .jssora07ldn {
                        background-position: -245px -35px;
                    }

                    .jssora07rdn {
                        background-position: -305px -35px;
                    }
                    .navbar-default, body{background-color: #e4e6ea;}
                    .col-md-2{width: 17.4%;}
                    .col-md-3{width: 23%;}
                    h6{font-size: 10px;}
                    a{white-space: nowrap;color:black;}
                    h4{font-size: 13px;}
                    h2{font-size: 18px;}
                    p{font-size: 1.1rem;line-height: 1.25em;}
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora07l" style="width: 50px; height: 50px; top: 123px;
                    left: 8px;"></span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora07r" style="width: 50px; height: 50px; top: 123px;
                    right: 8px"></span>
                <!-- Arrow Navigator Skin End -->
                <!-- ThumbnailNavigator Skin Begin -->
                <div u="thumbnavigator" class="jssort04" style="position: absolute; width: 600px;
                    height: 60px; right: 0px; bottom: 0px;">
                    <!-- Thumbnail Item Skin Begin -->
                    <style>
                        /* jssor slider thumbnail navigator skin 04 css */
                        /*
                        .jssort04 .p            (normal)
                        .jssort04 .p:hover      (normal mouseover)
                        .jssort04 .pav          (active)
                        .jssort04 .pav:hover    (active mouseover)
                        .jssort04 .pdn          (mousedown)
                        */
                        .jssort04 .w, .jssort04 .pav:hover .w {
                            position: absolute;
                            width: 62px;
                            height: 32px;
                            border: #0099FF 1px solid;
                        }

                        * html .jssort04 .w {
                            width: /**/ 62px;
                            height: /**/ 32px;
                        }

                        .jssort04 .pdn .w, .jssort04 .pav .w {
                            border-style: solid;
                        }

                        .jssort04 .c {
                            width: 62px;
                            height: 32px;
                            filter: alpha(opacity=45);
                            opacity: .45;
                            transition: opacity .6s;
                            -moz-transition: opacity .6s;
                            -webkit-transition: opacity .6s;
                            -o-transition: opacity .6s;
                        }

                        .jssort04 .p:hover .c, .jssort04 .pav .c {
                            filter: alpha(opacity=0);
                            opacity: 0;
                        }

                        .jssort04 .p:hover .c {
                            transition: none;
                            -moz-transition: none;
                            -webkit-transition: none;
                            -o-transition: none;
                        }
                    </style>
                    <div u="slides" style="bottom: 25px; right: 26px;">
                        <div u="prototype" class="p" style="position: absolute; width: 62px; height: 32px; top: 0; left: 0;">
                            <div class="w">
                                <thumbnailtemplate style="width: 100%; height: 100%; border: none; position: absolute; top: 0; left: 0;"></thumbnailtemplate>
                            </div>
                            <div class="c" style="position: absolute; background-color: #000; top: 0; left: 0">                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- ThumbnailNavigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">javascript image slider</a>            </div>
            <!-- Jssor Slider End -->
        </div>
    </div>
    
<!--<div class="jumbotron">
      <div class="container">
        <img src="imgs/largepreview_2013_wordpress.jpg" style="position:absolute;width:500px" />
        <div style="margin-left:600px;">
        <h1>Welcome !</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-default btn-lg" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
      
    </div>-->

<!-- Begin page content -->
<div class="container">

<div class="row">
        <div class="col-md-4 feature">
            <a href="partner.php">
        <img src="images/business_partner_icon.jpg" alt="">
          <div>
            <h2 style="font-size:16px;line-height: 1.25em;font-weight:normal;">Business Partner</h2></a>
                <p>What is the DATABAR Business Partner Network?</p>
          </div>
        </div>
        <div class="col-md-4 feature">
            <a href="channel_partner.php">
        	<img src="images/icon_channel-partners.jpg" alt="">
        	<div>
         		<h2 style="font-size:16px;line-height: 1.25em;font-weight:normal;">Channel Partner</h2></a>
		    	<p>We welcome your participation in our DATABAR channel partner programs and communities.</p>
         </div>
       </div>
       <style type="text/css">
           @media (max-width: 768px) { 
            .s{border-bottom: none; border-bottom: 10px;margin-bottom:-40px;}
            }
       </style>
        <div class="col-md-4 feature s">
            <a href="about.php">
        	<img src="images/consulting.jpg" alt="">
        	<div>
         		 <h2 style="font-size:16px;line-height: 1.25em;font-weight:normal;">About US</h2>
                 </a>
              <p>DATABAR is the value-added technology distributor that sells and supports the comprehensive products 
.</p>

         </div>
       </div>
  </div>
<div class="col-lg-12 menu">
                    <!-- ul li  menu bottom in home page-->
                    <style type="text/css">
                       .menux { list-style:none;padding:0px;}
                      .menux li{line-height:8px;}
                       .a-gray{color:#bbb;}
                       .col-md-2{padding: 0px;}
                       .col-md-3{padding: 0px;}
                    </style>
                    <!-- *** -->

                <div class="form-group has-success">
                    <div  class="tbl1">

                        <div class="col-md-2 tal" style="margin-right:38px;">
                     <h4>&nbsp;</h4>
                     <h4><a href="http://www.samsung.com">SAMSUNG</a></h4>
                     <h5>PRODUCT</h5>
                     <h6 style="line-height:0.2em;"><a href="http://www.samsung.com/th/business/">ENTERPRISE BUSINESS SOLUTION</a></h6>
                     <h6><a href="http://www.samsung.com/th/business/business-products/mobile-devices">ENTERPRISE MOBILITY</a></h6>
                     <h6><a href="http://www.samsung.com/th/business/solutions-services/mobile-solutions/">SAMSUNG KNOX</a></h6>
                     </div>
                        <div class="col-md-2 tal">
                            <h4>&nbsp;</h4>
                     <h4><a href="http://www.bixolon.com"><b>BIXOLON</b></a></h4>
                     <h5>PRODUCT</h5>
                     <h6 style="line-height:0.2em;"><a href="http://www.bixolon.com/html/en/product/product_list.xhtml?large_cd=0001">POS PRINTERS</a></h6>
                     <h6><a href="http://www.bixolon.com/html/en/product/product_list.xhtml?large_cd=0005">LABEL PRINTERS</a></h6>
                     <h6><a href="http://www.bixolon.com/html/en/product/product_list.xhtml?large_cd=0003">MOBILE PRINTERS</a></h6>
                     <h6><a href="http://www.bixolon.com/html/en/product/product_list.xhtml?large_cd=0012">POS PERIPHERALS</a></h6>
                     <h6><a href="http://www.bixolon.com/html/en/product/product_list.xhtml?large_cd=0002">MECHANISMS</a></h6>
                     <h6><a href="http://www.bixolon.com/html/en/product/accessory_list.xhtml?large_cd=0009">ACCESSORIES</a></h6>
                     </div>
                                             <div class="col-md-2 tal">
                     <h4>&nbsp;</h4>
                     <h4><a href="http://www.pointmobile.co.kr"><b>POINT MOBILE</b></a></h4>
                     <h5>PRODUCT</h5>
                     <h6><ul class="menux"><li><a href="http://www.pointmobile.co.kr/itemlist.php?ca_id=10">HANDHELD TERMINAL</a><ul>
                        <!--<li><a href="pm_ht_pm260.php" class="a-gray">- 2.8 inch</a></li></ul></li>--></ul></h6>
                     <h6><ul class="menux"><li><a href="http://www.pointmobile.co.kr/itemlist.php?ca_id=20">ENTERPRICE MOBILITY</a><ul>
                        <!--<li>- 3.5 inch</li></ul></li>--></ul></h6>
                     <h6><ul class="menux"><li><a href="http://www.pointmobile.co.kr/itemlist.php?ca_id=30">RUGGED ANDROID</a><ul>
                        <!--<li>- 3.5 inch</li></ul></li>--></ul></h6>
                     <h6><ul class="menux"><li><a href="http://www.pointmobile.co.kr/itemlist.php?ca_id=40">SMART DEVICE</a><ul>
                        <!--<li>- 5.x inch</li></ul></li>--></ul></h6>
                     </div>
                           <div class="col-md-3 tal">
                            <h4>&nbsp;</h4>
                     <h4><a href="http://www.datalogic.com"><b>DATALOGIC</b></a></h4>
                     <h5>PRODUCT</h5>
                     <h6 style="line-height:0.2em;"><a href="http://www.datalogic.com/eng/products/automatic-data-capture/in-counter-scanner/scales-pc-1.html">IN-COUNTER SCANNERS/SCALES</a></h6>
                     <h6><a href="http://www.datalogic.com/eng/products/automatic-data-capture/on-counter-readers-pc-2.html">ON-COUNTER READERS</a></h6>
                     <h6><a href="http://www.datalogic.com/eng/products/automatic-data-capture/general-purpose-handhelds-pc-3.html">GENERAL PURPOSE HANDHELDS</a></h6>
                     <h6><a href="http://www.datalogic.com/eng/products/automatic-data-capture/industrial-handhelds-pc-4.html">INDUSTRIAL HANDHELDS</a></h6>
                     <h6><a href="http://www.datalogic.com/eng/products/automatic-data-capture/mobile-computers-pc-5.html">MOBILE COMPUTERS</a></h6>
                     <h6><a href="http://www.datalogic.com/eng/products/industrial-automation/fixed-industrial-barcode-readers-pc-13.html">FIXED INDUSTRIAL BARCODE READERS</a></h6>
                     <h6><a href="http://www.datalogic.com/eng/products/industrial-automation/machine-vision-pc-16.html">MACHINE VISION</a></h6>
                     <h6><a href="http://www.datalogic.com/eng/products/industrial-automation/laser-marking-pc-17.html">LASER MARKING </a></h6>
                     </div>
                         <div class="col-md-2 tal">
                     <h4>&nbsp;</h4>
                     <h4><a href="http://www.toshibatec-ris.com"><b>TOSHIBA</b></a></h4>
                     <h5>PRODUCT</h5>
                     <h6 style="line-height:0.2em;"><a href="http://www.toshibatec-ris.com/products_overseas/#s2">INDUSTRIAL BARCODE/LABEL PRINTERS</a></h6>
                     <h6><a href="http://www.toshibatec-ris.com/products_overseas/#s2">RFID PRINTERS</a></h6>
                     </div>

             
                    </div>
                </div>
            </div>
</div><!-- <div class="container"> -->


<footer id="fw-footer">
  <div class="container">
    <!--<p class="text-muted" style="color:#000;"> -->
        <ul>
        <li style="color:black;">Copyright &copy; 2015, Databar Company Limited</li>
        <li><a href="partner.php">Business Partner</a></li>
        <li><a href="channel_partner.php">Channel Partner</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul> 
  </div>
</footer>

<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
  </body>
</html>