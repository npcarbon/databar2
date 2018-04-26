<?php
include '../../include/condb.php';

	$sql = "SELECT * FROM brands WHERE Brand_Name = '".$_POST['name']."' AND Group_ID = '".$_POST['group']."'";
	$query = @mysqli_query($conn, $sql);
	$result = @mysqli_fetch_array($query,MYSQLI_ASSOC);

			if ($result['Brand_Name'] == $_POST['name'] and $result['Group_ID'] == $_POST['group']) {
				echo "<script>alert('This Brand had been added');window.history.go(-1);</script>";
				}elseif ($result['Brand_Name'] == $_POST['name'] && $result['Group_ID'] != $_POST['group']) {
					$sql = "INSERT INTO brands (Brand_Name, Group_ID) "
						. "VALUES ('".$_POST["name"]."',"
						." '".$_POST["group"]."')";
						$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
							
							echo "<script>alert('Add the new Customer is SUCCESS!');</script>";
							echo "<meta http-equiv ='refresh'content='0;URL=../addbrand.php'>";
				}elseif ($result['Brand_Name'] != $_POST['name'] && $result['Group_ID'] == $_POST['group']) {
					$sql = "INSERT INTO brands (Brand_Name, Group_ID) "
						. "VALUES ('".$_POST["name"]."',"
						." '".$_POST["group"]."')";
						$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
							
							echo "<script>alert('Add the new Customer is SUCCESS!');</script>";
							echo "<meta http-equiv ='refresh'content='0;URL=../addbrand.php'>";
				} else{
					$sql = "INSERT INTO brands (Brand_Name, Group_ID) "
						. "VALUES ('".$_POST["name"]."',"
						." '".$_POST["group"]."')";
						$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
							
							echo "<script>alert('Add the new Customer is SUCCESS!');</script>";
							echo "<meta http-equiv ='refresh'content='0;URL=../addbrand.php'>";
				}

$conn->close();
