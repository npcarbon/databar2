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
			body {
				font-family: 'Kanit', sans-serif;
			}
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
							<h1 class="wow fadeInUp" data-wow-delay="0.6s" style=" margin: 0; padding : 0 0% 0 0%; font-weight: 700;">ติดต่อทั่วไป</h1>
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

			.icon-contact {
				padding: 0 0 10px;
			}

			.icon-contact p {
				padding: 0 0 5.5px 0;
				margin: 0;
				/*				line-height: 1.5;*/
			}
		</style>
		<div class="bgwhite fblack center">
			<div class="container-fluid">
				<div class="row" style="text-align: left; padding: 5% 0 5% 0;">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6" style="padding:0 2% 0 2%;">
							<h3>DATABAR COMPANY LIMITED</h3>
							<p>1448/15 คริสตัล ดีไซน์ เซ็นเตอร์ (CDC) อาคาร L2 ชั้น 2 ห้องเลขที่ 202, 204, 206, 208 ซอยลาดพร้าว 87 (จันทราสุข) ถนนประดิษฐ์มนูธรรม แขวงคลองจั่น เขตบางกะปิ กรุงเทพฯ 10240 Tax ID : 0105557033628</p>
							<div class="icon-contact">
								<p><span style="font-weight:700">T</span> &nbsp;+66 (0) 2 102-2591 (Auto)</p>
								<p><span style="font-weight:700">F</span> &nbsp;+66 (0) 2 102-2590</p>
								<p><span style="font-weight:700">E</span> &nbsp;sales@databar.co.th</p>
							</div>

							<h3>Follow us</h3>
							<div class="icon-contact">
								<p><img src="images/contact/www.png" alt="" width="40px"> &nbsp;www.databar.co.th</p>
								<p><img src="images/contact/line.png" alt="" width="40px"> &nbsp;@Databar</p>
								<p><img src="images/contact/facebook.png" alt="" width="40px"> &nbsp;VAD.databar</p>
							</div>
						</div>
						<div class="col-md-6" style="padding:0 2% 0 2%; border-left: 1px solid #888;">
							<h3>Maps</h3>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15498.401827984275!2d100.6178113!3d13.8029427!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe44151e51909d75!2sDATABAR+Company+Limited!5e0!3m2!1sen!2sth!4v1531796737711" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
							<div class="row" style="padding: 3% 2.5% 0 2.5%; ">
								<a href="images/map_CDC.jpg" class="image-popup">
                              <img onerror="this.style.display='none'"><button type="button" class="btn btn-primary">View Images</button></img>
                         	</a>
								<a href="images/databarcdc.jpg" class="image-popup"></a>
								<a href="print.php" target="_blank">
                              <img onerror="this.style.display='none'"><button type="button" class="btn btn-primary">Click To Print</button></img>
                         	</a>
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