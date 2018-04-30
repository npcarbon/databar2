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
<link rel="shortcut icon" href="../favicon.png">

<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<link href="sidebar.css" rel="stylesheet">

<style type="text/css">

a {
  color: #000;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  text-decoration: none !important;
}
a:hover, a:active, a:focus {
  color: #4d4dff;
  outline: none;
}


</style>

</head>
<body>
<?php
include 'sidebar.html';
?>
<!-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> -->

	<div class="container">
		<form class="form-control" style="padding-top: 50px;" enctype="multipart/form-data">
		<h1><u>Website Manager</u></h1><hr>
			<div class="media">
			  <div class="media-body">
			    <h5 class="mt-0">Products</h5>
			    <div class="media mt-3">
			      	<a class="pr-3" href="#"></a>
			      	<div class="media-body">
							<ul>
								<li><a href="addproduct.php">Product</a></li>
								<li><a href="addgroup.php">Group</a></li>
								<li><a href="addbrand.php">Brand</a></li>
								<li><a href="addtype.php">Type</a></li>
							</ul>
					</div>
			    </div>
			  </div>
			  <div class="media-body">
			    <h5 class="mt-0">Customers</h5>
			    <div class="media mt-3">
			      	<a class="pr-3" href="#"></a>
			      	<div class="media-body">
							<ul>
								<li><a href="addcus.php">Customer</a></li>
							</ul>
					</div>
			    </div>
			  </div>
			  <div class="media-body">
			    <h5 class="mt-0">Partner</h5>
			    <div class="media mt-3">
			      	<a class="pr-3" href="#"></a>
			      	<div class="media-body">
							<ul>
								<li><a href="">Bussiness</a></li>
								<li><a href="">Chanel</a></li>
							</ul>
					</div>
			    </div>
			  </div>
			</div>
		</form>

	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html></body>