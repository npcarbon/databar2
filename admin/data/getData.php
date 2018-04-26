<?
include '../../include/condb.php';
require 'mysql2json.class.php';
	$ID=$_GET[ID];
	$type=$_GET[TYPE];
	
	if($type=='Brand') {
		$sql="SELECT * FROM brands WHERE Brand_ID='".$ID."'";
	} else if($type=='Type'){
		$sql="SELECT * FROM types WHERE Type_ID='".$ID."'";
	}
	$query=$conn->query($sql);
	$num=mysqli_affected_rows($conn);
	
	$json=new mysql2json;
	$data=$json->getJSON($result,$num);
	echo $data;

	