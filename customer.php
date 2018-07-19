<?php

      include 'include/condb.php';

      $sql = "SELECT Cus_Pic,Cus_Url FROM customer Order By Cus_Name";
      $query = $conn->query($sql);
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
		<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">

		<!-- Main css -->
		<link rel="stylesheet" href="css/webstyle.css">
		<link rel="stylesheet" href="css/dropbtn.css">
		<link rel="stylesheet" href="css/slideshow.css">

	</head>

	<body>
	
	<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


		<!-- PRE LOADER -->

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
			.box-cus{
					border: 0.1px solid #eee; display: block;
					padding:80px 10px 80px 10px ;
				}
			
			@media (max-width: 990px) {
				.box-cus{
					border: 0.1px solid #eee; display: block;
					padding:20px 10px 20px 10px ;
				}
				.box-cus .img-logo {
					width: 100px;
				}
				
			
			}
			@media (max-width: 560px) {
				.box-cus{
					border: 0.1px solid #eee; display: block;
					padding:10px 0px 20px 0px ;
				}
				.box-cus .img-logo {
					width: 60px;
					padding:10px 0 10px 0 ;
				}
				
			}
		</style>
		<!-- ###################### Start Content ############################# -->
		<div id="product" style="background: url(images/customer/123.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: bottom; ">
			<div class="overlay" style="opacity: 0.2;background: #000;  "></div>

			<!-- <div class="container-fluid"> -->
			<div class="row" style="display:flex; align-items: center; justify-content: center; min-height:400px;">
				<div class="col-md-12 col-sm-12  col-xs-12 text-center">
					<div class="slider-text-inner text-center box">
						<h1 class="wow fadeInUp" data-wow-delay="0.3s" style="font-weight: 700;">
							Our Corporate Customers</h1>

					</div>
				</div>
			</div>
		</div>

		<div style=" background-color: #fff; padding: 0%;">
			<div style="padding: 0% 0% 0% 0%">
				<div class="row">
					<?php

        while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
       
          ?>
						<div class=" col-md-2 col-sm-2 col-xs-3">
							<div class="box-cus" style="">
								<div style="vertical-align: middle; ">
									<center><a href="<?= $result['Cus_Url']; ?>" target="_blank"><img class="img-logo" src="Admin/imgaes/customers/<?= $result['Cus_Pic']; ?>" width="120px"  ></a></center>
								</div>
							</div>
						</div>
						<?php    
        }
      ?>
				</div>
			</div>

		</div>

		<!-- ###################### End Content ############################# -->

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