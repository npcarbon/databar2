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

		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link rel="stylesheet" href="css/magnific-popup.css">

		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.carousel.css">


		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900|Open+Sans" rel="stylesheet">

		<!-- Main css -->
		<link rel="stylesheet" href="css/webstyle.css">
		<link rel="stylesheet" href="css/dropbtn.css">
		<link rel="stylesheet" href="css/slideshow.css">
		<style type="text/css">
			.item-block {
				padding-top: 5%;

			}

			.padtop {
				padding-top: 20px;
			}

			.zoom {
				transition: transform .2s;
				border: 1px solid #eee;
				margin: 2% 0 5% 0;
				"

			}

			.zoom:hover {
				transform: scale(1.1);
				/* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
				border: 1px solid #999;

			}
		</style>
		<script type="text/javascript">
			function cutStr($str, $maxChars = '', $holder = '') {

				if (strlen($str) > $maxChars) {
					$str = iconv_substr($str, 0, $maxChars, "UTF-8").$holder;
				}
				return $str;
			}
		</script>
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
		<style type="text/css">
		</style>

		<!-- Slide Section -->

		<!--<section id="slide">-->
		<!-- <center><img src="images/logolight.png" style="width: 15%;" class="img-responsive"alt="Logo" style="top: 100px;"></center>                              -->


		<div id="product" style="background: url(images/contact/123.jpg); background-size: cover; background-repeat: no-repeat;  background-position: bottom; ">
			<div class="overlay" style="opacity: 0.1;background: #000;  "></div>

			<!-- <div class="container-fluid"> -->
			<div class="row" style="display:flex; align-items: center; justify-content: center; min-height:400px;">
				<div class="slider-text-inner text-center box">
					<div class="row" style="display:flex; flex-wrap: wrap; align-items: center; justify-content: center; min-height:400px;">
						<div class="col-md-12">
							<h1 class="wow fadeInUp" data-wow-delay="0.6s" style=" margin: 0; padding : 0 0% 0 0%; font-weight: 700;">General Contact</h1>
							<p class="wow fadeInUp" data-wow-delay="0.8s" style="color: white; padding: 2% 10% 0 10%; margin: 0;"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<style>
			.box-border {
				/*			padding: 0 20% 0 20%;*/
			}

			.box-icon i {
				display: block;
				font-size: 90px;
				color: #999;
				transition: transform .2s;
				width: 40%;
				margin: 20px auto 20px auto;
				padding: 10% 0 10% 0;

			}

			.box-icon i:hover {
				color: #eee;
				background: #999;
			}
			.button-box button {
				background-color: transparent;
				padding: 4px 10px 4px 10px;
				border: solid 1px #eee;
				color: black;
				font-weight: 700;
			}

			.button-box button:hover {
				color: #2cb2eb;
			}

			.button-box button:active {
				color: #2cb2eb;
			}

			/*
			.box-border{
				border-left: 1px solid #888;
			}
			
*/

			@media (max-width: 768px) {
				.box-border {
					border-left: 0px solid #888;
				}
				.icon-contact a {
					display: block;
					padding: 0 2% 2.5px 0%;
					
				}
			}

			@media (min-width: 768px) {
				.box-border {
					border-left: 0px solid #888;
				}
				.icon-contact{
					padding: 0 0 2%;
				}
				.icon-contact a {
					padding: 0 4% 0 0%;
					
				}
				
			}

			@media (min-width: 970px) {
				.box-border {
					border-left: 1px solid #888;
				}
				.icon-contact a {
					padding: 0 2% 2.5px 0%;
					display: block;


				}
				.icon-contact p {
					margin:0;
				


				}
			}
		</style>


		<div class="bgwhite fblack center">
			<div class="container-fluid">
				<div class="row" style="text-align: left; padding: 5% 0 5% 0;">
					<div class="col-md-10 col-md-offset-1">
						<!-- Tab content -->
						<div id="1" class="Numb">
							<div class="col-md-6" style="padding:0 2% 0 2%;">
								<h3>Databar Company Limited (Branch 00001)</h3>
								<p>Tax ID &nbsp;0105557033628<br>1448/15 Crystal Design Center (CDC), L2, 2FL., Room 202, 204, 206, 208, Soi Ladprao 87 (Chandra Suk), Praditmanuthum Rd., Klongjan, Bangkapi, Bangkok 10240 THAILAND.</p>
								<div class="icon-contact">
									<p><span style="font-weight:700">T</span> &nbsp;+66 (0) 2 102-2591 (Auto)</p>
									<p><span style="font-weight:700">F</span> &nbsp;+66 (0) 2 102-2590</p>
									<p><span style="font-weight:700">E</span> &nbsp;sales@databar.co.th</p>
								</div>
								<h3>Follow us</h3>
								<div class="icon-contact">
									<a href="#"><img src="images/contact/www.png" alt="" width="40px"> &nbsp;www.databar.co.th</a>
									<a href="line://ti/p/@als8485h"><img src="images/contact/line.png" alt="" width="40px"> &nbsp;@Databar</a>
									<a href="https://www.facebook.com/VAD.databar" target="_blank"><img src="images/contact/facebook.png" alt="" width="40px"> &nbsp;VAD.databar</a>
								</div>
							</div>
							<div class="col-md-6 box-border" style="padding:0 2% 0 2%;">
								<h3>Maps</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15498.401827984275!2d100.6178113!3d13.8029427!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe44151e51909d75!2sDATABAR+Company+Limited!5e0!3m2!1sen!2sth!4v1531796737711" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								<div class="row" style="padding: 3% 2.5% 0 2.5%; ">
									<a href="images/map_CDC.jpg" class="image-popup" style="font-weight:100;">
                              		<img onerror="this.style.display='none'"><button type="button" class="btn btn-databar">View Images</button></img>
								</a>
									<a href="images/databarcdc.jpg" class="image-popup"></a>
									<a href="print.php" target="_blank">
                              <img onerror="this.style.display='none'"><button type="button" class="btn btn-databar" style="margin: 0 4px 0 4px;">Click To Print</button></img>
                         	</a>
									<div class="button-box" style="float:right;">
										<button class="tablink active" onclick="openNumb(event,'1')">EN</button>
										<button class="tablink" onclick="openNumb(event,'2')">TH</button>
									</div>
								</div>
							</div>
						</div>
						<div id="2" class="Numb" style="display:none;">
							<div class="col-md-6" style="padding:0 2% 0 2%;">
								<h3 style="font-family: 'Kanit', sans-serif;">บริษัท ดาต้าบาร์ จำกัด (สาขาที่ 00001)</h3>
								<p style="font-family: 'Kanit', sans-serif; font-weight: 200; font-size:16px;">เลขประจำตัวผู้เสียภาษีอากร &nbsp;0105557033628 <br>1448/15 คริสตัล ดีไซน์ เซ็นเตอร์ (CDC) อาคาร L2 ชั้น 2 ห้องเลขที่ 202, 204, 206, 208 ซอยลาดพร้าว 87 (จันทราสุข) ถนนประดิษฐ์มนูธรรม แขวงคลองจั่น เขตบางกะปิ กรุงเทพฯ 10240.</p>
								<div class="icon-contact">
									<p><span style="font-weight:700">T</span> &nbsp;+66 (0) 2 102-2591 (Auto)</p>
									<p><span style="font-weight:700">F</span> &nbsp;+66 (0) 2 102-2590</p>
									<p><span style="font-weight:700">E</span> &nbsp;sales@databar.co.th</p>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">ติดตามเรา</h3>
								<div class="icon-contact">
									<a href="#"><img src="images/contact/www.png" alt="" width="40px"> &nbsp;www.databar.co.th</a>
									<a href="line://ti/p/@als8485h"><img src="images/contact/line.png" alt="" width="40px"> &nbsp;@Databar</a>
									<a href="https://www.facebook.com/VAD.databar" target="_blank"><img src="images/contact/facebook.png" alt="" width="40px"> &nbsp;VAD.databar</a>
								</div>
							</div>
							<div class="col-md-6 box-border" style="padding:0 2% 0 2%;">
								<h3 style="font-family: 'Kanit', sans-serif;">แผนที่</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15498.401827984275!2d100.6178113!3d13.8029427!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe44151e51909d75!2sDATABAR+Company+Limited!5e0!3m2!1sen!2sth!4v1531796737711" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								<div class="row" style="padding: 3% 2.5% 0 2.5%; ">

									<a href="images/map_CDC.jpg" class="image-popup" style="font-weight:100;">
                              		<img onerror="this.style.display='none'"><button type="button" class="btn btn-databar" style="font-family: 'Kanit', sans-serif;">เปิดแผนที่</button></img>
								</a>
									<a href="images/databarcdc.jpg" class="image-popup"></a>
									<a href="print.php" target="_blank">
                              <img onerror="this.style.display='none'"><button type="button" class="btn btn-databar" style="font-family: 'Kanit', sans-serif; margin: 0 4px 0 4px;">พิมพ์แผนที่</button></img>
                         	</a>
									<div class="button-box" style="float:right;">
										<button class="tablink active" onclick="openNumb(event,'1')">EN</button>
										<button class="tablink" onclick="openNumb(event,'2')">TH</button>
									</div>
								</div>
							</div>
						</div>



					</div>
				</div>
			</div>
		</div>
		</div>


		<script>
			document.addEventListener("DOMContentLoaded", function(event) {
				document.querySelectorAll('img').forEach(function(img) {
					img.onerror = function() {
						this.style.display = 'none';
					};
				})
			});
		</script>
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
		<!-- Footer Section -->

		<?php
     include 'include/foot.inc';
?>




			<!-- SCRIPTS -->

			<script src="js/jquery.js"></script>
			<script src="js/main.js"></script>
			<!-- Resource jQuery -->

			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/magnific-popup-options.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/smoothscroll.js"></script>
			<script src="js/wow.min.js"></script>
			<script src="js/custom.js"></script>

	</body>

	</html>