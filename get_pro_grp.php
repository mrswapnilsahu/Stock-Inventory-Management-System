<?php

require 'config.php';

$grp = $_POST['grp'];

if(isset($_POST['grp']) && $_POST['grp']!=""){
	$conn = connection();
	$mea_data = "SELECT * FROM type where ty_grp = $grp ORDER BY ty_name ASC";
	$mea_data = $conn->query($mea_data);
	$conn=null;
	if ($mea_data->rowCount() > 0) {
	
?>
<select class="form-control input-xs" id="pro_ty" required="">
	<option value="">select type</option>                
	<?php foreach ($mea_data as $row) { ?>
	<option value="<?php echo $row['ty_id']; ?>"><?php echo ucwords($row['ty_name']); ?></option>
	<?php } ?>
</select>
<?php }else{ ?>

<select class="form-control input-xs" required="">
	<option>NO MEASUREMENT FOUND</option>
</select>

<?php	
}
}else{ ?>

<select class="form-control input-xs" required="">
	<option>NO MEASUREMENT FOUND</option>
</select>

<?php
}








