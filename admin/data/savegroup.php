<?php
include '../../include/condb.php';

	$sql = "SELECT * FROM groups WHERE Group_Name = '".$_POST['name']."'";
	$query = @mysqli_query($conn, $sql);
	$result = @mysqli_fetch_array($query,MYSQLI_ASSOC);
		if ($result['Group_Name'] != $_POST['name']) {
			$sql = "INSERT INTO groups (Group_Name) "
					. "VALUES ('".$_POST["name"]."')";
					$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
					
						echo "<script>alert('Add the new Graoup is SUCCESS!');</script>";
						echo "<meta http-equiv ='refresh'content='0;URL=../addgroup.php'>";
						
					
			
		}else{
				echo "<script>alert('มีลูกค้าชื่อนี้ในระบบแล้ว กรุณาตรวจสอบชื่อลูกค้าอีกครั้ง');window.history.go(-1);</script>";
				// header('location:addcus.php');}
			}
		// header('location:addcus.php');
			$conn->close();
