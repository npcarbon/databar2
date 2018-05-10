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
	<?php
				$action = isset($_GET['a']) ? $_GET['a'] : "";
					switch ($action) {
						case 'edit':
							echo "<div class=\"alert alert-success\"><center>Product edited.</center></div>";
						break;
						case 'add':
							echo "<div class=\"alert alert-success\"><center>Product added.</center></div>";
						break;
						case 'delete':
							echo "<div class=\"alert alert-danger\"><center>Product deleted.</center></div>";
						break;
						}
	?>
	<form class="form-control" method="post" action="data/savetype.php" style="padding-top: 50px; background-color: ##F5F5F5;" enctype="multipart/form-data">
		<h1>Products</h1>
    <a href="addproduct.php" class="btn btn-outline-success btn-sm"> <span style="font-size: 1em;"><strong>+</strong></span> Add new product</a><br><br>
			<?php
				$sql = "SELECT products.*, types.Type_Name
						FROM products 
						INNER JOIN types ON products.Type_ID = types.Type_ID
						ORDER BY  products.Type_ID ASC ";
				$query = $conn->query($sql);

			?>
				<table class="table">
					<tr>
						<th width="5%"></th>
						<th>Product's Name</th>
						<th>Product's Type</th>
						<th></th>
					</tr>
				<?php
					while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
				?>
					<tr>
						<td>
							<input type="checkbox" name="status">
						</td>
						<td><?= $result['Pro_Name']?></td>
						<td><?= $result['Type_Name']?></td>
						<td>
							
							<button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='edit-product.php?id=<?= $result["Pro_ID"];?>'">Edit</button>
							<button type="button" class="btn btn-danger btn-sm" onclick="window.location.href='data/delete-product.php?id=<?= $result["Pro_ID"];?>'">Delete</button>
						</td>
					</tr>
				<?php
					}
				?>
				</table>
		
		</form>

	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html></body>