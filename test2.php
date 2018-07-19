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

			p {
				font-size: 16px;
				font-weight: 300;
			}

			.size p {
				font-size: 16px;
				font-weight: 300;
			}

			.font-gray {
				color: #aaaaaa;
			}
		</style>
	</head>

	<body>

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
    @media (max-width: 640px) {

    .box-cus .img-logo {
      width: 100px;
  }
}
</style>
<!-- ###################### Start Content ############################# -->
<div id="product" style="background: url(images/customer/databar_customer.jpg); padding-top: 10%;">
  <div class="overlay">   
    <h1 style="text-align: center; padding-top: 100px;">Our Customers</h1>
  </div>
</div>
<div style=" background-color: #fff; padding: 0%;">
  <div style="padding: 0% 0% 0% 0%">
    <div class="row">
      <?php

        while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
          # code...
          ?>
          <div class="box-cus col-md-2 col-xs-3" style="border: 0.1px solid #eee; padding:80px 10px 80px 10px ; display: block;">
            <div style="vertical-align: middle; ">
              <center><a href="<?= $result['Cus_Url']; ?>" target="_blank"><img class="img-logo" src="Admin/imgaes/customers/<?= $result['Cus_Pic']; ?>" width="180px"  ></a></center>     
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