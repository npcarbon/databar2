<?php
include '../../include/condb.php';

if($_FILES["filUpload"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"../imgaes/customers/".$_FILES["filUpload"]["name"]))
		{
				//*** Delete Old File ***//			
			unlink("../imgaes/customers/".$_POST["hdnOldFile"]);

		$sql = "UPDATE customer SET Cus_Name  = '".$_POST['cus_name']."',
			Cus_Pic = '".$_FILES["filUpload"]["name"]."',
			Cus_Url = '".$_POST['cus_url']."'
			WHERE Cus_ID = '".$_POST['cus_id']."'";

	$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
	if($query) {
        echo "<script type='text/javascript'>alert('Customer edited success.);</script>" ;
	}else{
        echo "<script type='text/javascript'>alert('Customer can't edit.);</script>" ;
    }	 	echo "<meta http-equiv ='refresh'content='0;URL=../customer.php?a=edit'>";

	}
}else{
	$sql = "UPDATE customer SET Cus_Name  = '".$_POST['cus_name']."',
			Cus_Url = '".$_POST['cus_url']."'
			WHERE Cus_ID = '".$_POST['cus_id']."'";

	$query = $conn->query($sql) or die("Error in query: $sql " . mysqli_error());
	if($query) {
        echo "<script type='text/javascript'>alert('Customer edited success.);</script>" ;
	}else{
        echo "<script type='text/javascript'>alert('Customer can't edit.);</script>" ;
    }	 	echo "<meta http-equiv ='refresh'content='0;URL=../customer.php?a=edit'>";
}

$conn->close();
	