<?php
include '../include/condb.php';
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
<link rel="shortcut icon" href="../favicon.png">

<!-- <link href="css/bootstrap.min.css" rel="stylesheet">
 -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<script src="../ckeditor/ckeditor.js"></script>
<!-- <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script> -->
<?php
								$sql = "SELECT * FROM types 
										INNER JOIN brands ON types.Brand_ID = brands.Brand_ID
										-- ORDER BY  `types`.`Brand_ID` ASC 
										WHERE Type_ID = '".$_GET["id"]."'";
								$query = $conn->query($sql); 
								$rs = mysqli_fetch_array($query,MYSQLI_ASSOC);
								?>
</head>
<body>
<?php
include 'sidebar.html';
?>
	<div class="container">
		<form class="form-control" method="post" action="data/edit-type.php" style="padding-top: 50px; background-color: ##F5F5F5;" enctype="multipart/form-data">
		<h1>Edit Type</h1>

				<!-- <h5>Type's Picture </h5><br> -->
				<input type="text" name="type_id" value="<?= $rs['Type_ID']?>" hidden>
				<h5 style="padding-top: 20px;">Type Name </h5>
				<input type="text" name="type_name" class="form-control" value="<?= $rs['Type_Name']?>">
				<h5 style="padding-top: 20px;">Brand Name </h5>
				<select name="brand" class="form-control">
					<option value="<?= $rs['Brand_ID']?>"><?= $rs['Brand_Name']?></option>

				</select>
				
			<div class="container row" style="padding-top: 20px;">
				<button name="stm" type="submit" class="btn btn-success btn-lg  btn-block">
					Submit
				</button>
				<button type="button" class="btn btn-danger btn-lg  btn-block" onclick="window.location.href='type.php';">
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