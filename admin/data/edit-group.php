<?php
include '../../include/condb.php';


		$sql = "UPDATE groups 
				SET Group_Name = '".$_POST['group_name']."'
				WHERE Group_ID = '".$_POST['group_id']."'";

	$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
	if($query) {
        echo "<script type='text/javascript'>alert('Group edited success.);</script>" ;
	}else{
        echo "<script type='text/javascript'>alert('Group can't edit.);</script>" ;
    }	 	
    echo "<meta http-equiv ='refresh'content='0;URL=../group.php?a=edit'>";


$conn->close();
	