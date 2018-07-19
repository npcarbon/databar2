<?php
	$type=intval($_GET['type']);
	$group=intval($_GET['group']);
include '../include/condb.php';
?>


<select name="brand" class="form-control">
 <option>Brand of Product</option>
	<?php
	$sql="SELECT * FROM brands 
			INNER JOIN types 
			ON brands.Type_ID = types.Type_ID
			WHERE brands.Type_ID = $type AND types.Group_ID = $group ";
	$query = $conn->query($sql);  
   while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
    <option value="<?= $result['Brand_ID']?>"><?= $result['Brand_Name']?></option>
  <?php 
} 
?>
</select>
