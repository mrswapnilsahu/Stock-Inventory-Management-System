<?php
require 'config.php';

$name = $_POST['name'];
$grp = $_POST['grp'];

$conn = connection();

$sql = "INSERT INTO type (ty_name, ty_grp)
		VALUES ('$name', '$grp')";
		$conn->query($sql);
		$conn=null;

echo "<span class=\"splash-description\">Measurement Added.</span>";

$conn = connection();
$sql = "SELECT * FROM type t inner join category c on t.ty_grp = c.cat_id order by ty_name ASC";
$data = $conn->query($sql);

$ty_data = "SELECT * FROM type t inner join category c on t.ty_grp = c.cat_id order by ty_name ASC";
$ty_data = $conn->query($ty_data);
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