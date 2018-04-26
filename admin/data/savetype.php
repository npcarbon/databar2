<?php
include '../../include/condb.php';

	$sql = "SELECT * FROM types WHERE Type_Name = '".$_POST['name']."'";
	$query = @mysqli_query($conn, $sql);
	$result = @mysqli_fetch_array($query,MYSQLI_ASSOC);
		if ($result['Type_Name'] != $_POST['name']) {
			if ( $result['Group_ID'] == "0" ) {
				# code...
				echo "<script>alert('Please select The Group of Type');window.history.go(-1);</script>";
			}else{
				$sql = "INSERT INTO types (Type_Name, Brand_ID) "
					. "VALUES ('".$_POST["name"]."',"
					." '".$_POST["brand"]."')";
					$result = $conn->query( $sql) or die ("Error in query: $sql " . mysqli_error());
					
						echo "<script>alert('Add the new type of product is SUCCESS!');</script>";
						echo "<meta http-equiv ='refresh'content='0;URL=../addtype.php'>";

			}
		}else{
				echo "<script>alert('The type of product has been added');window.history.go(-1);</script>";
				// header('location:addcus.php');}
			}
		// header('location:addcus.php');
			$conn->close();
