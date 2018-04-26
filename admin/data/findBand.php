<?php
	$group=intval($_GET['group']);
include '../../include/condb.php';
// echo $group;
?>

<!--  -->
<select name="brand" class="form-control" onchange="getType(this.value)">
 <option>Brand of Product</option>
	<?php
	$sql="SELECT * FROM brands WHERE Group_ID = $group";
	$query = $conn->query($sql);  
   while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
    <option value="<?= $result['Brand_ID']?>"><?= $result['Brand_Name']?></option>
  <?php 
} 
?>
</select>