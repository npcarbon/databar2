<?php
include '../../include/condb.php';

	$sql = "UPDATE products 
			SET Pro_Name  = '".$_POST['pro_name']."',
			Pro_Code = '".$_POST['pro_code']."',
			Pro_Detail = '".$_POST['editor1']."',
			Pro_Descpt = '".$_POST['editor2']."'
			WHERE Pro_ID = '".$_POST['Pro_ID']."'";
	$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
	if($query) {
        echo "<script type='text/javascript'>alert('Product edited success.);</script>" ;
	}else{
        echo "<script type='text/javascript'>alert('Product can't edit.);</script>" ;
    }	 	echo "<meta http-equiv ='refresh'content='0;URL=../products.php?a=edit'>";
$conn->close();