<?php

require 'config.php';

$val = $_POST['val'];
$count = $_POST['count'];
// echo $val;
$conn = connection();
$sql = "SELECT * FROM `category` c INNER JOIN type t on c.cat_id=t.ty_grp where cat_id=$val ORDER BY cat_name ASC";
$conn = connection();
$data = $conn->query($sql);

?>
<select class="form-control input-xs" id="bill_s_<?php echo $count; ?>" name="bill_s_<?php echo $count; ?>" onchange="get_seller_pde(this.id)">                  
	<option value="">Size</option>                
	<?php foreach ($data as $row) { ?>
	<option value="<?php echo $row['ty_id']; ?>"><?php echo ucwords($row['ty_name']); ?></option>
	<?php } ?>
</select>