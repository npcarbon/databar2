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
<script type="text/javascript">
function getBrand(Group_Id){
   var strURL="findBand.php?group="+Group_Id;
   var xhttp = new XMLHttpRequest();
    if (Group_Id.length == 0) { 
    document.getElementById("branddiv").innerHTML = "";
    return;
  }
  xhttp.onreadystatechange = function(){
  	if (this.readyState == 4 && this.status == 200) {
  		document.getElementById("branddiv").innerHTML = this.responseText;
  	}
  };

   xhttp.open("GET", strURL, true);
   xhttp.send();
   }

function getType(Group_Id, Brand_ID){
  var strURL="findtype.php?group="+Group_Id+"&brand="+Brand_ID;
  var xhttp = new XMLHttpRequest();
if (Brand_ID.length == 0) { 
    document.getElementById("typediv").innerHTML = "";
    return;
  }
  xhttp.onreadystatechange = function(){
  	if (this.readyState == 4 && this.status == 200) {
  		document.getElementById("typediv").innerHTML = this.responseText;
  	}
  };

   xhttp.open("GET", strURL, true);
   xhttp.send();
   }
</script>
</head>
<body>
<?php
include 'sidebar.html';
?>
	<div class="container">
		<form class="form-control" method="post" action="data/saveproduct.php" style="padding-top: 50px; background-color: ##F5F5F5;" enctype="multipart/form-data">
		<h1>Add New Product</h1>

				<h5 style="padding-top: 20px;">Product's Picture </h5><br>
				<input type="file" name="filUpload" class="form-control"><br>


				<div class="row">
					<div class="col-md-4">
						<h5>Group of Product</h5><br>
							<select name="group" class="form-control" onchange="getBrand(this.value)">
								<option value="">Group of Product</option>
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
					</div>
					<div class="col-md-4">
						<h5>Brand of Product</h5><br>
						<div id="branddiv">
							<select name="brand" class="form-control" disabled="true">
								<option value="">-----------------</option>

							</select>
						</div>
					</div>
					<div class="col-md-4">
						<h5>Type of Product</h5><br>
						<div id="typediv">
							<select name="type" class="form-control" disabled="true">
								<option value="">-----------------</option>
							</select>
						</div>
					</div>
				</div>
				<h5 style="padding-top: 20px;">Product's Code </h5>
				<input type="text" name="pro_code" class="form-control" placeholder="Product's Code">
				<h5 style="padding-top: 20px;">Product's Model </h5>
				<input type="text" name="pro_name" class="form-control" placeholder="Product's Model" >
				<h5 style="padding-top: 20px;">Product's PDF </h5><br>
				<input type="text" name="pdf" class="form-control" placeholder="Product's PDF"><br>

				<h5 style="padding-top: 20px;">Product's Detail</h5>
				<textarea name="editor1" class="form-control"></textarea>

				<h5 style="padding-top: 20px;">Product's Description </h5>
				<textarea name="editor2" class="form-control"></textarea>
				<script type="text/javascript">
			      	CKEDITOR.replace( 'editor1' );
			      	CKEDITOR.replace( 'editor2' );
			      	// function CKupdate() {
		        //         for (instance in CKEDITOR.instances)
		        //             CKEDITOR.instances[instance].updateElement();
		        //         }
				</script>
			<div class="container row" style="padding-top: 20px;">
				<button type="submit" class="btn btn-success btn-lg  btn-block">
					Submit
				</button>
				<button type="button" class="btn btn-danger btn-lg  btn-block" onclick="window.location.href='products.php';">
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