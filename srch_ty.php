<?php

require 'config.php';

$condition = "";

$conn = connection();
// echo $_POST['name']; die;
if(isset($_POST['sname']) && $_POST['sname']!=""){
	$condition.=" and t.ty_name like '".$_POST['sname']."%'";
}
if(isset($_POST['sgrp']) && $_POST['sgrp']!=""){
	$condition.=" and c.cat_id like '".$_POST['sgrp']."%'";
}
$sql = "SELECT * FROM type t inner join category c on t.ty_grp = c.cat_id where 0=0 $condition order by ty_name ASC";
$ty_data = $conn->query($sql);
// print_r($data); die;
$conn=null;

?>

<table class="table table-condensed table-hover table-bordered table-striped">
	<thead>
		<tr>
			<th><center>S. no.</center></th>
			<th><center>Measurement Name</center></th>
			<th><center>Category</center></th>
			<th><center>Category Description</center></th>
		</tr>
	</thead>
	<tbody style="color:black;">
		<?php $s=0;
		foreach ($ty_data as $row){ $s++; ?>
		<tr>
			<td><center><?php echo $s; ?></center></td>
			<td><?php echo ucwords($row['ty_name']); ?></td>
			<td><?php echo ucwords($row['cat_name']); ?></td>
			<td><?php echo ucwords($row['cat_des']); ?></td>
		</tr>
		<?php   } ?>
	</tbody>
</table>