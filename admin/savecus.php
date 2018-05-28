<?php
include '../include/condb.php';

	$sql = "SELECT * FROM customer WHERE Cus_Name = '".$_POST['cus_name']."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
		if ($result['Cus_Name'] != $_POST['cus_name']) {
			if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"imgaes/customers/".$_FILES["filUpload"]["name"]))
				{
					
					$sql = "INSERT INTO customer (Cus_Pic, Cus_Name, Cus_Url) "
					. "VALUES ('".$_FILES["filUpload"]["name"]."',"
					." '".$_POST["cus_name"]."',"
					." '".$_POST["cus_url"]."')";
					$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

						echo "<script>alert('Add the new Customer is SUCCESS!');</script>";
						echo "<meta http-equiv ='refresh'content='0;URL=addcus.php'>";
						
					
			}
		}else{
				echo "<script>alert('มีลูกค้าชื่อนี้ในระบบแล้ว กรุณาตรวจสอบชื่อลูกค้าอีกครั้ง');window.history.go(-1);</script>";
				// header('location:addcus.php');}
			}
		// header('location:addcus.php');
			$conn->close();
