<?php
include '../../include/condb.php';


$sql = "UPDATE types 
				SET Type_Name = '".$_POST['type_name']."'
				WHERE Type_ID = '".$_POST['type_id']."'";

	$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
	if($query) {
        echo "<script type='text/javascript'>alert('Type edited success.);</script>" ;
	}else{
        echo "<script type='text/javascript'>alert('Type can't edit.);</script>" ;
    }	 	
    echo "<meta http-equiv ='refresh'content='0;URL=../type.php?a=edit'>";


$conn->close();
	