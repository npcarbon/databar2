<? 

class mysql2json{
 function getJSON($result,$num){
 $numberRows=0;
 $arrfieldName=array();
 $i=0;
 $json="";
	//print("Test");
 	while ($i < mysql_num_fields($result))  {
 		$meta = mysql_fetch_field($result, $i);
		if (!$meta) {
		}else{
		$arrfieldName[$i]=$meta->name;
		}
		$i++;
 	}
	 $i=0;
	  $json="[\n";
	while($row=mysql_fetch_array($result, MYSQL_NUM)) {
		$i++;
		$json.="{\n";
		for($r=0;$r < count($arrfieldName);$r++) {
			$json.=" \"$arrfieldName[$r]\" :	\"$row[$r]\"";
			if($r < count($arrfieldName)-1){
				$json.=",\n";
			}else{
				$json.="\n";
			}
		}
		 if($i!=$num){
		 	$json.="\n},\n";
		 }else{
		 	$json.="\n}\n";
		 }	
	}
	$json.="\n]";
	
	return $json;
 }
}
?>