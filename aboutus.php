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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
	<!-- Main css -->
	<link rel="stylesheet" href="css/webstyle.css">
	<link rel="stylesheet" href="css/dropbtn.css">
	<link rel="stylesheet" href="css/stylepages.css">
	<link rel="stylesheet" href="css/slideshow.css">
	<style type="text/css">
		.box h1,
		.box h2,
		.box h3,
		.box p {
			color: #fff;
			padding: 0;
			font-weight: lighter;
			z-index: 1;
		}

		h3 {
			font-size: 27px;

		}

		h4 {
			font-size: 22px;

		}

		p {
			font-size: 17px;
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

<body style="padding-top: 5.5%; ">


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


	<!-- Section 1 -->
	<div id="product" style="background: url(images/aboutus/cdc.jpg); background-size: cover; background-repeat: no-repeat;  background-position: center; background-attachment: fixed; ">
		<div class="overlay" style="opacity: 0.6;background: #000;  "></div>

		<!-- <div class="container-fluid"> -->
		<div class="row" style="display:flex; align-items: center; justify-content: center; min-height:400px;">
			<div class="slider-text-inner text-center box">
				<div class="row" style="display:flex; flex-wrap: wrap; align-items: center; justify-content: center; min-height:400px;">
					<div class="col-md-12" style="padding: 0 10% 0 10%">
						<h1 class="wow fadeInUp" data-wow-delay="0.3s" style="text-align: center; font-weight: 400;">
							About Us</h1>
						<div style="text-align: left; ">
							<p class="wow fadeInUp" data-wow-delay="0.6s" style="padding-top:2%; ">DATABAR is business-to-business (B2B) distributor and authorized services that sells, supports, repair services the comprehensive products and solutions of Samsung enterprise mobility, Samsung KNOX (EMM), 42Gears mobility solutions – SaaS/On-cloud and On-premise, barcode and complementary mobility solutions on Samsung Android, Android, iOS, Windows OS platforms.</p> <br>
							<p class="wow fadeInUp" data-wow-delay="0.9s">DATABAR provides a broad range of experienced sales reps, knowledgeable technical support and skilled professional services to help channel partners to achieve growth in a variety of vertical markets including field force automation, retail, services, healthcare, finance & banking, transport & logistics, manufacturing & supply chain, government and public sector.</p><br>


							<p class="wow fadeInUp" data-wow-delay="1.2s" style="padding-top:;">Our mission is to help mobile operators or carriers, independent software providers, system integrators, technology solution providers, value-added resellers (VARs), at what they do best by providing the best products, complementary solutions, proprietary tools and supports in the vertical industries. </p><br>
							<p class="wow fadeInUp" data-wow-delay="1.5s">We aim to enhance your business with seamless provision of Samsung enterprise mobility, non-Samsung mobility, barcode and complementary mobility solutions, and authorized repair services.</p>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>


	<div class="bgwhite"></div>
	<style type="text/css">
		.circle {
			border: 2px dashed #eee;
			width: 500px;
			position: relative;
			box-shadow: 0px 0px 4px 0px #000000;
			height: 500px;
			border-radius: 50%;
			margin: 5% auto 3% auto;
			text-align: center;
		}

		.warp-cen {
			/*      position: relative;
      text-align: center;*/
		}

		.icon1,
		.icon2,
		.icon3,
		.icon4,
		.icon5 {
			position: absolute;
			display: inline-block;
		}

		.icon1 {
			left: -15%;
			top: 20%;

		}

		.icon2 {
			left: 2%;
			top: -7%;
		}

		.icon3 {
			left: 40%;
			top: -20%;
		}

		.icon4 {
			left: 77%;
			top: -7%;
		}

		.icon5 {
			left: 97%;
			top: 20%;
		}

		@media (min-width: 992px) {
			.modal-lg {
				width: 65%;

			}
			.icon-size i {
				font-size: 60px;

			}

		}

		@media (max-width: 991px) {
			.modal-lg {
				width: 65%;
			}
			.icon-size i {
				font-size: 70px;


			}
			.bglack {
				height: 50vh;
			}

		}
	</style>
	<div class="visible-lg visible-md">
		<div class="bgwhite center fwhite text-center" style="background-color: #4a555b; border-top: 1px solid #fff; border-bottom: 1px solid #fff;">
			<div class="row">
				<h1 style="padding-bottom: 3%; "><strong>Core Competencies</strong></h1>
				<div class="circle" style="margin-top:5%;">
					<div class="tab">
						<div class="warp-cen">
							<div class="icon-size" style="color: #999; ">
								<button class="icon1 tablink active" onclick="openNumb(event,'1')"><i class="far fa-check-square " style="position: relative; text-align: center;"></i></button>
								<button class="icon2 tablink" onclick="openNumb(event,'2')"><i class="fab fa-product-hunt"></i></button>
								<button class="icon3 tablink" onclick="openNumb(event,'3')"><i class="fas fa-shipping-fast"></i></button>
								<button class="icon4 tablink" onclick="openNumb(event,'4')"><i class="far fa-handshake"></i></button>
								<button class="icon5 tablink" onclick="openNumb(event,'5')"><i class="fas fa-users"></i></button>
							</div>
						</div>
					</div>
					<div id="1" class="Numb">
						<div class="row" style="display: flex; padding-top: 25%; align-items: center;">
							<div class="col-md-10 col-md-offset-1 ">
								<div style="color: white;">
									<h2>Authorization</h2>
									<li style="padding:2% 0 0 0;">B2B VAD</li>
									<li>Master distributor</li>
									<li>Authorized repair services and technical supports</li>
									<li>Tier 1 managed services</li>
								</div>
							</div>
						</div>
					</div>
					<div id="2" class="Numb" style="display:none">
						<div class="row" style="padding-top: 13%;">
							<div class="col-md-10 col-md-offset-1">
								<div style="color: white;">
									<h2>Product solutions</h2>
									<p style="padding:2% 0 1% 0; margin:0; font-weight: 700;">Samsung</p>
									<li>HHP, GTA2, XCover 4, Wearable</li>
									<li>KNOX</li>
									<li>B2B repair services</li>
									<p style="padding:4% 0 1% 0; margin:0; font-weight: 700;">Non Samsung</p>
									<li>Other Android, Windows platform mobile devices, Printing devices, IOT</li>
									<li>MDM, EMM, ATP / MTP, KoolSpan, Iris Biometric, VocalVest</li>
									<li>Complementary products - mobility and accessories </li>
								</div>
							</div>
						</div>
					</div>
					<div id="3" class="Numb" style="display:none">
						<div class="row" style="padding-top: 25%;">
							<div class="col-md-10 col-md-offset-1 ">
								<div style="color: white;">
									<h2>Professional services </h2>
									<li style="padding:2% 0 0 0;">On-site service supports</li>
									<li>Extended warranty for 1-2 years, 1-3 years</li>
									<li>Authorized repair services</li>
									<li>Hotline / Help Desk</li>
								</div>
							</div>
						</div>
					</div>
					<div id="4" class="Numb" style="display:none">
						<div class="row" style="padding-top: 25%;">
							<div class="col-md-8 col-md-offset-2">
								<div style="color: white;">
									<h2>Partners ecosystem</h2>
									<li style="padding:2% 0 0 0;">Carriers</li>
									<li>Solution partners</li>
									<li>Technology partners</li>
									<li>System integrators</li>
									<li>Value added resellers</li>
								</div>
							</div>
						</div>
					</div>
					<div id="5" class="Numb" style="display:none">
						<div class="row" style="padding-top: 30%;">
							<div class="col-md-8 col-md-offset-2">
								<h1>Vertical enterprise customers</h1>

							</div>
						</div>
					</div>
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
	<style type="text/css">
		.display-container {
			position: relative;
		}

		.Comp {
			min-height: 400px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.display-left {
			position: absolute;
			top: 50%;
			left: 0%;
			transform: translate(0%, -50%);
			-ms-transform: translate(-0%, -50%);
		}

		.display-right {
			position: absolute;
			top: 50%;
			right: 0%;
			transform: translate(0%, -50%);
			-ms-transform: translate(-0%, -50%);
		}

		.arrow-button {
			background: transparent;
			border: transparent;
			font-size: 30px;

		}
	</style>

	<div class="visible-sm visible-xs">
		<div class="display-container" style="padding:20px; background-color: #4a555b;">
			<center>
				<h1>Core Competencies</h1>
				<div class="Comp icon-size" style="color:#999;">
					<div class="mySlides">
						<i class="far fa-check-square "></i>
						<div style="color: white;">
							<h2>Authorization</h2>

							<li style="padding: 2% 0 0 0;">B2B VAD</li>
							<li>Master distributor</li>
							<li>Authorized repair services and technical supports</li>
							<li>Tier 1 managed services</li>
						</div>
					</div>
					<div class="mySlides">
						<i class="fab fa-product-hunt"></i>
						<div class="fwhite" style="color: white;">
							<h2>Product solutions</h2>
							<p style="padding:0% 0 2% 0; margin:0; font-weight: 700;">Samsung</p>
							<li>HHP, GTA2, XCover 4, Wearable</li>
							<li>KNOX</li>
							<li>B2B repair services</li>

							<p style="padding:3% 0 1% 0; margin:0; font-weight: 700;">Non Samsung</p>
							<li>Other Android, Windows platform mobile devices, Printing devices, IOT</li>
							<li>MDM, EMM, ATP / MTP, KoolSpan, Iris Biometric, VocalVest</li>
							<li>Complementary products - mobility and accessories </li>
						</div>
					</div>
					<div class="mySlides">
						<i class="fas fa-shipping-fast"></i>
						<div style="color: white;">
							<h2>Professional services </h2>
							<li>On-site service supports</li>
							<li>Extended warranty for 1-2 years, 1-3 years</li>
							<li>Authorized repair services</li>
							<li>Hotline / Help Desk</li>
						</div>
					</div>
					<div class="mySlides">
						<i class="far fa-handshake"></i>
						<div style="color: white;">
							<h2>Partners ecosystem</h2>
							<li>Carriers</li>
							<li>Solution partners</li>
							<li>Technology partners</li>
							<li>System integrators</li>
							<li>Value added resellers</li>
						</div>
					</div>
					<div class="mySlides">
						<i class="fas fa-users"></i>
						<h2>Vertical enterprise customers</h2>
					</div>
					<button class="arrow-button display-left" onclick="plusDivs(-1)">&#10094;</button>
					<button class="arrow-button display-right" onclick="plusDivs(1)">&#10095;</button></center>
			</div>
		</div>
	</div>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = x.length
			}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			x[slideIndex - 1].style.display = "block";
		}
	</script>
	<style type="text/css">
		@media (min-width: 768px) {
			.list {
				display: block;
			}
		}

		@media (min-width: 992px) {
			.list {
				display: flex;
				align-items: center;
			}
		}

		.arrow-size {
			font-size: 30px;
			padding: 10px 0 0 0;
			margin: 0;
			color: #808080;
		}


		/*box databar*/

		.box-border {
			display: block;
			color: #A6ACAF;
			padding: 1px 1px 1px 1px;
			background-color: #A6ACAF;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		.box-border p {
			padding: 0;
			margin: 0;
		}

		.boxdata {
			flex: 2;
			background-color: #5DADE2;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0;
			min-height: 55px;
			height: auto;
			margin: 1px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			transition: transform .2s;
		}

		/*box partner*/

		.boxpart {
			flex: 2;
			background-color: #667588;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0;
			min-height: 55px;
			height: auto;
			margin: 1px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			transition: transform .2s;
		}

		/*box user*/

		.boxuser {
			flex: 1.5;
			background-color: #2a374b;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0;
			min-height: 55px;
			height: auto;
			margin: 1px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			transition: transform .2s;
		}

		.list p {
			font-size: 12px;
			line-height: 1.5;
		}


		.boxuser:hover,
		.boxpart:hover,
		.boxdata:hover {
			transform: scale(1.2);
			z-index: 1;
		}
	</style>
	<!-- ======Session 3======== -->
	<div class="bgwhite center fwhite" style="background-color: #fff;">
		<div class="flowchart"></div>
		<div class="row" style="padding: 3% 0 5% 0;">
			<h1 style="color: #444; font-size: 50px; padding: 0 0 1%;"><strong>Business Channel</strong></h1>
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-12">
					<div class="box-border wow fadeInUp" data-wow-delay="0.3s">
						<h2 style="padding: 10px 0 5px 0; margin: 0; font-size:25px; ">DATABAR</h2>
						<div class="list wow fadeInUp" data-wow-delay="0.6s">
							<div class="boxdata">
								<p>Sales reps for Vertical <br> end users</p>
							</div>
							<div class="boxdata">
								<p>Sales reps for Channel <br> partners</p>
							</div>
							<div class="boxdata">
								<p>Pre Sales supports</p>
							</div>
							<div class="boxdata">
								<p>Co-Promo & <br> Market research</p>
							</div>
							<div class="boxdata">
								<p>Stock and Credit Term<br>supports</p>
							</div>
							<div class="boxdata">
								<p>Post Sales supports</p>
							</div>
						</div>
					</div>
					<div class="row arrow-size wow fadeInDown" data-wow-delay="0.9s">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<i class="fas fa-arrow-down"></i>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<i class="fas fa-arrow-down"></i>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<i class="fas fa-arrow-down"></i>
						</div>
					</div>
					<div class="box-border wow fadeInUp" data-wow-delay="1.2s">
						<h2 style="padding: 10px 0 5px 0; margin: 0; font-size:25px;">Channel Partners</h2>
						<div class="list wow fadeInUp" data-wow-delay="1.5s">
							<div class="boxpart">
								<p>Solutions Partners</p>
							</div>
							<div class="boxpart">
								<p>System Integrators</p>
							</div>
							<div class="boxpart">
								<p>Value-Added Resellers</p>
							</div>
							<div class="boxpart">
								<p>AIS (Carrier)</p>
							</div>
							<div class="boxpart">
								<p>DTAC (Carrier)</p>
							</div>
							<div class="boxpart">
								<p>TRUE (Carrier)</p>
							</div>
						</div>
					</div>
					<div class="row arrow-size wow fadeInDown" data-wow-delay="1.8s">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<i class="fas fa-arrow-down"></i>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<i class="fas fa-arrow-down"></i>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<i class="fas fa-arrow-down"></i>
						</div>
					</div>
					<div class="box-border wow fadeInUp" data-wow-delay="2.1s">
						<h2 style="padding: 10px 0 5px 0; margin: 0; font-size:25px;">Vertical End Users</h2>
						<div class="list wow fadeInUp" data-wow-delay="2.4s">
							<div class="boxuser">
								<p>Manufacturing & Supply Chain</p>
							</div>
							<div class="boxuser">
								<p>Transport & Logistics</p>
							</div>
							<div class="boxuser">
								<p>Hospital</p>
							</div>
							<div class="boxuser">
								<p>Finance, Security and Insurance</p>
							</div>
							<div class="boxuser">
								<p>Retail</p>
							</div>
							<div class="boxuser">
								<p>Construction</p>
							</div>
							<div class="boxuser">
								<p>Education</p>
							</div>
							<div class="boxuser">
								<p>Government</p>
							</div>
							<div class="boxuser">
								<p>Services & <br> Hotel</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<style type="text/css">
		.cir {
			position: relative;

		}

		.cir button {
			margin: 40px 20px 0 20px;
			background-color: #eee;
			padding: 60px 10px 60px 10px;
			border-radius: 50%;
			border: 2px solid #444;
		}

		.cir i {
			margin: 100px;
			font-size: 80px;
			color: #444;
		}

		.container-bar {
			position: absolute;
			top: 10%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 100%;
			height: 100px;
		}

		.progressbar {
			width: 100%;
			height: 20px;
			background: linear-gradient(to right, rgb(76, 217, 105), rgb(90, 200, 250), rgb(0, 132, 255), rgb(52, 170, 220), rgb(88, 86, 217), rgb(255, 45, 83));
			margin-top: 10px;
			background-size: 100% 5px;
			border-radius: 10px;
		}
	</style>







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