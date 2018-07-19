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



		<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">

		<!-- Main css -->
		<link rel="stylesheet" href="css/webstyle.css">
		<link rel="stylesheet" href="css/dropbtn.css">
		<link rel="stylesheet" href="css/slideshow.css">
		<style type="text/css">
			h3 {
				font-size: 27px;
			}

			h4 {
				font-size: 17px;
				font-weight: 700;
			}

			.font-gray {
				color: #aaaaaa;
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



		<!--		<div style="padding-bottom: 5%;"></div>-->
		<div id="product" style="background: url(images/services/KV_pc2.jpg); background-size: cover; background-repeat: no-repeat;  background-position: bottom; ">
			<div class="overlay" style="opacity: 0;background: #000;  "></div>

			<!-- <div class="container-fluid"> -->
			<div class="row" style="display:flex; align-items: center; justify-content: center; min-height:400px;">
				<div class="slider-text-inner text-center box">
					<div class="row" style="display:flex; flex-wrap: wrap; align-items: center; justify-content: center; min-height:400px;">
						<div class="col-md-12">
							<h1 class="wow fadeInUp" data-wow-delay="0.6s" style=" margin: 0; padding : 0 0% 0 0%; font-weight: 700;">Samsung Corporate Service Centre</h1>
							<p class="wow fadeInUp" data-wow-delay="0.8s" style="color: white; padding: 2% 10% 0 10%; margin: 0;">Whether it's a product repair or just some help and advice. We are authorised service centre for corporate or enterprise customers that can help you. All are fully trained and use genuine parts in all repairs from Samsung and other brand’s original sources. Find your product type below to contact us to get the support you need.</p>
						</div>

					</div>

				</div>
			</div>
		</div>
		<style type="text/css">
			/*
			@media (max-width: 1200px) {
  .box-texth4 h4 {
				min-height: 65px;
				padding: 0px;
				margin: 5% 0 0 0px;
				line-height: 1.5;

			}
}
			@media (max-width: 980px) {

		.box-texth4 h4 {
				
				padding: 0 0 2%;
				margin: 5% 0 0 0px;
				line-height: 1.5;

			}

}
*/

			.box-texth4 h4 {
				min-height: 65px;
				padding: 0px;
				margin: 2% 0 0 0px;
				line-height: 1.5;

			}

			.what-product {
				min-height: 500px;
			}

			.ser-list {
				position: relative;
			}

			.ser-box {
				height: 350px;
				width: auto;
				padding: 0% 10% 0 0%;
			}

			.ser-box p {
				font-size: 14px;
				padding: 5% 0% 0 0%;
			}



			.box-imag {
				height: auto;
				display: block;
				margin: 0 auto 0 auto;
			}

			.map-session,
			.service-session,
			.what-product,
			.session-timeline {
				position: relative;

			}

			@media (min-width: 993px) {
				.ser-list .ser-box {
					border-right: 1px solid #999;
				}
				.timeline::after {
					left: 50%;
					width: 1px;

				}
				h2 {
					padding: 5% 0 3%;
					margin: 0;
					font-weight: 700;
				}
				.map-session iframe {
					width: 80%;
					height: 600px;
					padding: 0 0 1.5% 0;
				}
				.lbox-img {
					display: flex;
					align-items: flex-end;
					justify-content: center;
					min-height: 100px;
				}
			}

			@media (max-width: 992px) {
				.box-img {
					padding-left: 15px;
					height: 150px;
					width: auto;
					display: flex;
					align-items: center;
					justify-content: center;
				}
				.box-img img {
					width: 100px;
				}
				.ser-box {
					padding: 0 0 2%;
					border-right: none;
					height: auto;
					border: none;

				}
				.ser-list .ser-box {
					border-bottom: 1px solid #999;
				}
				.timeline::after {
					left: 0%;
					width: 0px;

				}
				.box-texth4{
					text-align: left;
					padding: 20px;
				}
				.box-texth4 p{
					padding: 0px;
				}
				.box-texth4 h4 {
					min-height: 0;
					padding: 0 0 2%;
					margin: 0 0 0 1px;
					line-height: 1.5;

				}
				h2 {
					padding: 10% 0 5%;
					margin: 0;
					font-weight: 700;
				}
				.map-session iframe {
					width: 80%;
					height: 300px;
					padding: 0 0 5% 0;
				}
				.lbox-img {
					min-height: 70px;
					display: flex;
					align-items: flex-end;
					justify-content: center;

				}
			}
		</style>
		<div class="bgwhite fblack center" style="background-color: #fff;">
			<div class="what-product">
				<div class="container-fluid" style="padding: 0 5% 0 5%;">
					<div class="row">
						<h2 style="font-weight: 700; margin:0;">What product do you have?</h2>
						<div class="ser-list">
							<div class="col-md-3 col-sm-12">
								<div class="ser-box">
									<div class="row">
										<div class="col-md-12 col-sm-3 col-xs-3">
											<div class="box-img">
												<img src="images/services/smartphone.png" width="150px" style="padding:4% 0 0 0;" alt="">
											</div>
										</div>
										<div class="col-md-12 col-sm-9 col-xs-9" style="padding:0px;">
											<div class="box-texth4">
												<h4>Samsung consumer graded Smartphone or Tablet</h4>
												<p>Samsung corporate service centre can help you with anything, from a cracked screen to transferring data. Email us at services@databar.co.th or give us a call today on (099) 287-4709, (099) 287-4733.</p>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="ser-box">
									<div class="row">
										<div class="col-md-12 col-sm-3 col-xs-3">
											<div class="box-img">
												<img class="image-icon" src="images/services/rugged.png" width="150px" style="padding:4% 0 0 0;" alt="">
											</div>
										</div>
										<div class="col-md-12 col-sm-9 col-xs-9" style="padding:0px;">
											<div class="box-texth4">
												<h4>Samsung rugged Smartphone or Tablet</h4>
												<p>Samsung corporate service centre can help you with anything, from a cracked screen to transferring data. Email us at services@databar.co.th or give us a call today on (099) 287-4709, (099) 287-4733.
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="ser-box">
									<div class="row">
										<div class="col-md-12 col-sm-3 col-xs-3">
											<div class="box-img">
												<img src="images/services/sknox.png" width="150px" style="padding:4% 0 0 0;" alt=""></div>
										</div>
										<div class="col-md-12 col-sm-9 col-xs-9" style="padding:0px;">
											<div class="box-texth4">
												<h4>Samsung Knox </h4>
												<p>For anything about Samsung Knox, please send us inquiry at knox@databar.co.th or give us a call today on (099) 287-4728, (099) 287-4723.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="ser-box" style="border:none; padding-bottom: 0px;">
									<div class="row">
										<div class="col-md-12 col-sm-3 col-xs-3">
											<div class="box-img">
												<img src="images/services/orther.png" style="padding:4% 0 0 0;" width="150px" alt="">
											</div>
										</div>
										<div class="col-md-12 col-sm-9 col-xs-9" style="padding:0px;">
											<div class="box-texth4">
												<h4>Non Samsung products </h4>
												<p>For other Android or Windows device, barcode scanner, barcode printer, accessory and others, please send us inquiry at services@databar.co.th or give us a call today on (099) 287-4709, (099) 287-4733.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<session>
				<div class="map-session">
					<div class="row">
						<div class="col-md-12">
							<h2>Find a Corporate Service Centre</h2>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.6063812000907!2d100.61581151079214!3d13.802586113484853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d8a5b6ca4e1%3A0xbe44151e51909d75!2sDATABAR+Company+Limited!5e0!3m2!1sen!2skr!4v1530695128168" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</session>
			<style type="text/css">
				.session-timeline {
					padding: 0 10% 5% 10%;
				}

				.session-timeline p {
					font-size: 14px;
				}

				.session-timeline h3 {
					padding: 0 0 2%;
					font-size: 18px;
				}


				.timeline {
					position: relative;
					max-width: 1600px;
					margin: 0 auto;
				}

				.timeline::after {
					content: '';
					position: absolute;
					background-color: #eee;
					top: 0;
					bottom: 0;
					margin-left: -3px;
				}
			</style>
			<div class="session-timeline">
				<h2 style="font-weight: 700;">What services do we offer?</h2>
				<div class="timeline" style="padding:0 0 5% 0;">
					<div class="row">
						<div class="col-md-5">
							<span>
  							<div class="lbox-img">
							<img class="svg" src="images/services/Callcenter.svg" alt="" width="15%">
							 </div>
							<h3>Call Centre / Help Desk</h3>
							<p>Customers can log in a request for service or seek technical assistance via our Call Centre or Helpdesk. Our support teams are ready to provide troubleshooting via e-mail, phone call or fax.</p>
						</div>
						<div class="col-md-5 col-md-offset-2">
						<div class="lbox-img">
							<img class="svg" src="images/services/DepotRepair.svg" alt="" width="15%">
						</div>
							<h3>Depot Repair</h3>
							<p>Send your hardware to a convenient depot location specified by us; a repair expert will diagnose the problem and provide a free repair estimate. Your repair will be performed within 48 hours of approval. Every repair includes guaranteed workmanship, realignment, testing and return to factory specifications utilizing only original parts.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="lbox-img">
								<img class="svg" src="images/services/Extendedwarranty.png" alt="" width="22%">
							</div>
							<h3>Extended warranty and Product service contracts</h3>
							<p>The extended warranty and service contracts can be purchased for a vast majority of our hardware products. Our product experts can help you with the right plan that will extend the life of your purchased product and help you minimize downtime. Our extended warranty and service contracts are also available for purchase when you purchase your hardware equipment.
							</p>

						</div>
						<div class="col-md-5 col-md-offset-2">
							<div class="lbox-img">
								<img class="svg" src="images/services/OnsiteRepair.svg" alt="" width="15%">
							</div>
							<h3>Onsite Repair</h3>
							<p>A factory-trained technician will arrive at your location in Bangkok and outskirts within 24-48 hours of your service call equipped with the parts needed to perform repair on the first visit. This service is available for purchase of extended warranty and/or product service contract.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="lbox-img">
								<img class="svg" src="images/services/Training.svg" alt="" width="17%">
							</div>
							<h3>User Training</h3>
							<p>We offer user training, seminar on all our products and solutions at our office or clients' place. Users will learn to configure, operate, maintain and troubleshoot the hardware and software.
							</p>

						</div>
						<div class="col-md-5 col-md-offset-2">
							<div class="lbox-img">
								<img src="images/services/ConsultingServices.svg" alt="" width="15%">
							</div>
							<h3>Consulting Services</h3>
							<p>We offer customers a wide variety of consulting services, which include efficiency planning, business process design, integration and mobility technology trend. We seek to provide an integrated solution that fits our clients' needs today and in the future.

							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
		</div>
<!--
		<div id="product" style="background: url(images/services/Banner_Service2.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center; ">
			<div class="overlay" style="opacity: 0.2;background: #000;  "></div>
			<div class="container-fluid" style="padding: 1% 0 5% 0;">
				<div class="row">
					<div class="col-md-6 font-white" style="text-align: right; padding: 0 0 0 6%;">
						<h3>Call Centre/Help Desk</h3>
						<p>Customers can log in a request for service or seek technical assistance via our Call Centre or Helpdesk. Our support teams are ready to provide troubleshooting via e-mail, phone call or fax.</p> <br><br>

						<h3>Depot Repair</h3>
						<p>Send your hardware to a convenient depot location specified by us; a repair expert will diagnose the problem and provide a free repair estimate. Your repair will be performed within 48 hours of approval. Every repair includes guaranteed workmanship, realignment, testing and return to factory specifications utilizing only original parts.</p><br><br>

						<h3>On-Site Repair</h3>
						<p>A factory-trained technician will arrive at your location in Bangkok and outskirts within 24-48 hours of your service call equipped with the parts needed to perform repair on the first visit. This service is available for purchase of extended warranty and/or product service contract.</p> <br><br>

						<h3>Extended warranty and Product service contracts</h3>
						<p>Optional extended warranty and service contracts can be purchased for a vast majority of our hardware products. Our product experts can help you with the right plan that will extend the life of your purchased product and help you minimize downtime. Our extended warranty and service contracts are also available for purchase when you purchase your hardware equipment.</p> <br><br>

						<h3>User Training</h3>
						<p>We offer user training, seminar on all our products and solutions at our office or clients' place. Users will learn to configure, operate, maintain and troubleshoot the hardware and software.</p> <br><br>

						<h3>Consulting Services</h3>
						<p>We offer customers a wide variety of consulting services, which include efficiency planning, business process design, integration and mobility technology trend. We seek to provide an integrated solution that fits our clients' needs today and in the future.</p> <br>
						<br><br>
						<div class="text-center js-fullheight slider-text" style="padding-top: 5% ;text-align: center;">
							<img src="images/services/logodatabar2.png" width="40%" style="letter-spacing: 3px;">
							<p style="font-weight: 300; padding-top: 3%;">Monday - Friday : 08.30 a.m. – 05.30 p.m.</p>
							<center>
								<p style="border-bottom: 1px solid #fff; width: 80%; padding-top: 1%;">Mobile Device Management</P>
							</center>
							<div class="row" style="padding: 1% 10% 5% 7%;">
								<div class="col-md-4 col-xs-12">
									<img src="images/icons/wphone-square.png" width="15%">
									<p style=""> +66 (0) 2 102-2591
									</p>
								</div>
								<div class="col-md-4 col-xs-12">
									<img src="images/icons/wenvelope.png" width="15%">
									<p>knox@databar.co.th
									</p>
								</div>
								<div class="col-md-4 col-xs-12">
									<img src="images/icons/wenvelope.png" width="15%">
									<p>42Gears@databar.co.th
									</p>
								</div>
							</div>
							<center>
								<p style="border-bottom: 1px solid #fff; width: 80%; text-align: center;"> Service and Repair</p>
							</center>
							<div class="row" style="padding: 1% 0 5% 0; display: flex; align-items: center; justify-content: center;">
								<div class="col-md-4 col-xs-12">
									<img src="images/icons/wphone-square.png" width="15%">
									<p> +66 (0) 99 287-4709, 4733
									</p>
								</div>
								<div class="col-md-4 col-xs-12">
									<img src="images/icons/wenvelope.png" width="15%">
									<p>services@databar.co.th
									</p>
								</div>
							</div>

						</div>
						<center>
							<img src="images/services/Authorized service_BGBlue.jpg" width="40%" style="padding-right: 1%;">
							<img src="images/services/Enterprise.jpg" width="40%">
						</center>
					</div>
				</div>
			</div>
		</div>
-->


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