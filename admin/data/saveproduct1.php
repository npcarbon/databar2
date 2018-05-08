<?php
include '../../include/condb.php';

	$sql = "SELECT * FROM products WHERE Pro_Name = '".$_POST['pro_name']."'";
	$query = @mysqli_query($conn, $sql);
	$result = @mysqli_fetch_array($query,MYSQLI_ASSOC);
		if ($result['Pro_Name'] != $_POST['pro_name']) {
			if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../imgaes/products/".$_FILES["filUpload"]["name"])){
				echo 'Pro pic uploaded'
			//  if(move_uploaded_file($_FILES["pdf"]["tmp_name"],"../PDF/".$_FILES["pdf"]["name"])){
					
			// 		$sql = "INSERT INTO products (Pro_Name, Pro_Code, Pro_Detail, Pro_Descpt, Pic, PDF, Type_ID, Group_ID, Brand_ID) "
			// 		. "VALUES ('".$_POST["pro_name"]."',"
			// 		." '".$_POST["pro_code"]."',"
			// 		." '".$_POST["editor1"]."',"
			// 		." '".$_POST["editor2"]."',"
			// 		." '".$_FILES["filUpload"]["name"]."',"
			// 		." '".$_FILES["pdf"]["name"]."',"
			// 		." '".$_POST["type"]."',"
			// 		." '".$_POST["group"]."',"
			// 		." '".$_POST["brand"]."')";
			// 		$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
					
			// 			echo "<script>alert('Add the new Product is SUCCESS!');</script>";
			// 			echo "<meta http-equiv ='refresh'content='0;URL=../product.php?a=Add'>";
						
			// }		exit();
			}
		}else{
				echo "<script>alert('This product has been added');window.history.go(-1);</script>";
				// header('location:addcus.php');}
			}
		// header('location:addcus.php');
			$conn->close();
