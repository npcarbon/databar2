<?php
	$brand=intval($_GET['brand']);
	$group=intval($_GET['group']);
include '../include/condb.php';
?>


<select name="type" class="form-control">
 <option>Type of Product</option>
	<?php
	$sql="SELECT types.*, brands.Group_ID FROM types 
		  INNER JOIN brands ON types.Brand_ID = brands.Brand_ID 
		  WHERE types.Brand_ID = $brand AND brands.Group_ID = $group ";
	$query = $conn->query($sql);  
   while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
    <option value="<?= $result['Type_ID']?>"><?= $result['Type_Name']?></option>
  <?php 
} 
?>
</select>