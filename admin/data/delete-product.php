<?php
include '../../include/condb.php';

	$sql = "DELETE FROM products
			WHERE Pro_ID = '".$_GET['id']."'";
	$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
	if($query) {
        echo "<meta http-equiv ='refresh'content='0;URL=../products.php?a=delete'>";
	}else{
        echo "<script type='text/javascript'>alert('Product can't edit.);</script>" ;
    }	 	
$conn->close();	