<?php
include '../../include/condb.php';


$sql = "UPDATE brands 
				SET Brand_Name = '".$_POST['brand_name']."'
				WHERE Brand_ID = '".$_POST['brand_id']."'";

	$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
	if($query) {
        echo "<script type='text/javascript'>alert('Brand edited success.);</script>" ;
	}else{
        echo "<script type='text/javascript'>alert('Brand can't edit.);</script>" ;
    }	 	
    echo "<meta http-equiv ='refresh'content='0;URL=../brand.php?a=edit'>";


$conn->close();
	