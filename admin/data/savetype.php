<?php
include '../../include/condb.php';

	$sql = "SELECT * FROM types WHERE Type_Name = '".$_POST['name']."'";
	$query = @mysqli_query($conn, $sql);
	$result = @mysqli_fetch_array($query,MYSQLI_ASSOC);
			if ($result['Type_Name'] == $_POST['name'] and $result['Brand_ID'] == $_POST['brand']) {
				echo "<script>alert('This Brand had been added');window.history.go(-1);</script>";
				}elseif ($result['Type_Name'] == $_POST['name'] && $result['Brand_ID'] != $_POST['brand']) {
					$sql = "INSERT INTO types (Type_Name, Brand_ID) "
						. "VALUES ('".$_POST["name"]."',"
						." '".$_POST["brand"]."')";
						$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
							
							echo "<script>alert('Add the new Customer is SUCCESS!');</script>";
							echo "<meta http-equiv ='refresh'content='0;URL=../addbrand.php'>";
				}elseif ($result['Type_Name'] != $_POST['name'] && $result['Brand_ID'] == $_POST['brand']) {
					$sql = "INSERT INTO types (Type_Name, Brand_ID) "
						. "VALUES ('".$_POST["name"]."',"
						." '".$_POST["brand"]."')";
						$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
							
							echo "<script>alert('Add the new Customer is SUCCESS!');</script>";
							echo "<meta http-equiv ='refresh'content='0;URL=../addbrand.php'>";
				} else{
					$sql = "INSERT INTO types (Type_Name, Brand_ID) "
						. "VALUES ('".$_POST["name"]."',"
						." '".$_POST["brand"]."')";
						$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
							
							echo "<script>alert('Add the new Customer is SUCCESS!');</script>";
							echo "<meta http-equiv ='refresh'content='0;URL=../addbrand.php'>";
				}

$conn->close();
