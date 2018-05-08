<?php
include '../../include/condb.php';

	$sql = "SELECT * FROM brands WHERE Brand_Name = '".$_POST['name']."'";
	$query = @mysqli_query($conn, $sql);
	$result = @mysqli_fetch_array($query,MYSQLI_ASSOC);
		if ($result['Brand_Name'] != $_POST['name']) {
			if ( $result['Group_ID'] == "0" ) {
				# code...
				echo "<script>alert('Please select The Group of Brand');window.history.go(-1);</script>";
			}else{
			$sql = "INSERT INTO brands (Brand_Name, Group_ID) "
					. "VALUES ('".$_POST["name"]."',"
					." '".$_POST["group"]."')";
					$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
					
						echo "<script>alert('Add the new Customer is SUCCESS!');</script>";
						echo "<meta http-equiv ='refresh'content='0;URL=../addbrand.php'>";
						
					
			}
		}else{
				echo "<script>alert('มีลูกค้าชื่อนี้ในระบบแล้ว กรุณาตรวจสอบชื่อลูกค้าอีกครั้ง');window.history.go(-1);</script>";
				// header('location:addcus.php');}
			}
		// header('location:addcus.php');
			$conn->close();
