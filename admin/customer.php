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
<div class="container" style="padding-bottom: 20px;">
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
							$sql = "DELETE FROM customer
									WHERE Cus_ID = '".$_GET['id']."'";
							$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
							if($query) {
						        echo "<div class=\"alert alert-danger\"><center>Customer deleted.</center></div>";
							}else{
						        echo "<script type='text/javascript'>alert('Customer can't Delete.);</script>" ;
						    }
							
						break;
						}


					  if(isset($_POST["txtKeyword"]))
				  {
				    $strKeyword = $_POST["txtKeyword"];
				  }
 $perpage = 20;
 if (isset($_GET['page'])) {
 $page = $_GET['page'];
 } else {
 $page = 1;
 }
$Prev_Page = $page-1;
$Next_Page = $page+1;
  $start = ($page - 1) * $perpage;

				$sql = "SELECT * FROM customer 
						WHERE Cus_Name LIKE '%".$strKeyword."%' 
						ORDER BY Cus_Name ASC 
						LIMIT {$start} , {$perpage}";// 
				$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
				$numrows = mysqli_num_rows($query);
				$total_page = ceil($numrows / $perpage);

	?>
		<h1>Customer</h1>
    <a href="addcus.php" class="btn btn-outline-success btn-sm"> <span style="font-size: 1em;"><strong>+</strong></span> Add new Customer</a><br><br>
    <form  name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="300">
    <tr>
        <td width="15%">คำค้น</td>
        <td width="50%">
          <input class="form-control" style="width:100%;" type="search" name="txtKeyword" value="<?php echo $strKeyword;?>">
        </td>
        <td width="20%">
          <button type="submit" class="btn btn-default" aria-label="Left Align"> <span class="glyphicon glyphicon-search"> ค้นหา</span> </button>
        </td>
    </tr>
  </table>
</form>

    

				<table class="table">
					<tr>
						<th width="150px">Customer's Pic</th>
						<th width="70%">Customer's Name</th>
						<th></th>
					</tr>
				<?php
					while ($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
					$numrows = mysqli_num_rows($result);
				?>
					<tr>

						<td><img src="imgaes/customers/<?= $result['Cus_Pic']?>" width="150px"></td>
						<td><?= $result['Cus_Name']?></td>
						<td>
							
							<button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='edit-customer.php?id=<?= $result["Cus_ID"];?>'">Edit</button>
							<button type="button" class="btn btn-danger btn-sm" onclick="window.location.href='customer.php?a=delete&id=<?= $result["Cus_ID"];?>'">Delete</button>
						</td>
					</tr>
				<?php
					}
				?>
				</table>
<?php
 $sql2 = "SELECT * FROM customer ";
 $query2 = mysqli_query($conn, $sql2);
 $total_record = mysqli_num_rows($query2);
 $total_page = ceil($total_record / $perpage);
 ?>
<p>จำนวนลูกค้าที่พบทั้งหมด <?= $total_record; ?> ราย</p>
<?php
if($Prev_Page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$total_page; $i++){
	if($i != $page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($page!=$total_page)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?page=$Next_Page'>Next>></a> ";
}

$conn->close();
?> 
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html></body>