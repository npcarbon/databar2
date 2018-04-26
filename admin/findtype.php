<?php
	$brand=intval($_GET['brand']);
include '../include/condb.php';
// echo $brand;	
?>

<!--  -->
<select name="type" class="form-control">
 <option>Type of Product</option>
	<?php
	$sql="SELECT * FROM types WHERE Brand_ID = $brand";
	$query = $conn->query($sql);  
   while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
    <option value="<?= $result['Type_ID']?>"><?= $result['Type_Name']?></option>
  <?php 
} 
?>
</select>