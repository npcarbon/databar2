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

<style type="text/css">
.form-addcus {
  width: 100%;
  max-width: 500px;
  padding: 15px;
  margin: 0 auto;
}

.form-addcus .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-addcus .form-control:focus {
  z-index: 2;
}

</style>

</head>
<body>
<?php
include 'sidebar.html';
?>
	<div class="container">
		<form class="form-addcus" method="post" action="savecus.php" style="padding-top: 50px;" enctype="multipart/form-data">
		<h1>Add Customers</h1>

				<label style="padding-top: 20px;">Customer Logo </label><br>
				<input type="file" name="filUpload"><br>

				<label style="padding-top: 20px;">Customer's Name </label>
				<input type="text" name="cus_name" class="form-control" >

				<label style="padding-top: 20px;">Customer's Url </label>
				<input type="text" name="cus_url" class="form-control" >

			<div class="row" style="padding-top: 20px;">
				<button type="submit" class="btn btn-success btn-lg  btn-block">
					submit
				</button>
				<button type="button" class="btn btn-danger btn-lg  btn-block" onclick="window.location.href='customer.php';">
					Back
				</button>
			</div>			
		</form>

	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html></body>