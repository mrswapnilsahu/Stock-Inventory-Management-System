<?php

require 'config.php';

$val = $_POST['val'];
$count = $_POST['count'];
// echo $val;
$conn = connection();
$sql = "SELECT cat_id,cat_name FROM category c INNER JOIN product p ON p.pro_grpid=c.cat_id WHERE pro_firmid = $val group by cat_id ORDER BY cat_name ASC ";
// $conn = connection();
$data = $conn->query($sql);

?>
<select class="form-control input-xs" id="bill_s_<?php echo $count; ?>" name="bill_s_<?php echo $count; ?>" onchange="get_pde(this.id)">                  
	<option value="">Size</option>                
	<?php foreach ($data as $row) { ?>
	<option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
	<?php } ?>
</select>