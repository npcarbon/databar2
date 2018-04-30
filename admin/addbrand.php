<?php
include '../include/condb.php'
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

<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

</head>
<body>
<?php
include 'sidebar.html';
?>
	<div class="container">
		<form class="form-control" method="post" action="data/savebrand.php" style="padding-top: 50px; background-color: ##F5F5F5;" enctype="multipart/form-data">
		<h1>Add New Brand</h1>

<!-- 				<h5 style="padding-top: 20px;">Product's Picture </h5><br>
				<input type="file" name="filUpload" class="form-control"><br>
 -->
				<h5>Brand's Name </h5>
				<input type="text" name="name" class="form-control" >

				
						<h5 style="padding-top: 20px;">Group of Brand</h5><br>
							<select name="group" class="form-control" required>
								<option value="">Group of Brand</option>
								<?php
								$sql = "SELECT * FROM groups";
								$query = $conn->query($sql);
								while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
									?>
									<option value="<?= $result['Group_ID']?>"><?= $result['Group_Name']?></option>"
									<?php
								}
								?>
							</select>
					

				
			<div class="container row" style="padding-top: 20px;">
				<button type="submit" class="btn btn-success btn-lg  btn-block">
					Submit
				</button>
				<button type="button" class="btn btn-danger btn-lg  btn-block" onclick="window.location.href='index.php';">
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