<?php
include '../../include/condb.php';

	$sql = "SELECT * FROM products WHERE Pro_Name = '".$_POST['pro_name']."'";
	$query = @mysqli_query($conn, $sql);
	$result = @mysqli_fetch_array($query,MYSQLI_ASSOC);
		if ($result['Pro_Name'] != $_POST['pro_name']) {
			if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../images/products/".$_FILES["filUpload"]["name"]))
				{
					
					$sql = "INSERT INTO products (Pro_Name, Pro_Code, Pro_Detail, Pro_Descpt, Pic, Type_ID) "
					. "VALUES ('".$_POST["pro_name"]."',"
					." '".$_POST["pro_code"]."',"
					." '".$_POST["editor1"]."',"
					." '".$_POST["editor2"]."',"
					." '".$_FILES["filUpload"]["name"]."',"
					." '".$_POST["type"]."')";
					$result = @mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
					
						echo "<script>alert('Add the new Product is SUCCESS!');</script>";
						echo "<meta http-equiv ='refresh'content='0;URL=../addproduct.php'>";
						
					
			}
		}else{
				echo "<script>alert('มีลูกค้าชื่อนี้ในระบบแล้ว กรุณาตรวจสอบชื่อลูกค้าอีกครั้ง');window.history.go(-1);</script>";
				// header('location:addcus.php');}
			}
		// header('location:addcus.php');
			$conn->close();
