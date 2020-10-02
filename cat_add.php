<?php

require 'config.php';

$name = $_POST['name'];
$des = $_POST['des'];

$conn = connection();
$check = "SELECT *  FROM `category` WHERE `cat_name` = '$name'";
$check = $conn->query($check);
if ($check->rowCount() > 0) {
	echo "<span class=\"splash-description\">Category already exist.</span>";
	$conn=null;
}else{
	$sql = "INSERT INTO category (cat_name, cat_des)
	VALUES ('$name', '$des')";
	$conn->query($sql);
	$conn=null;
	echo "<span class=\"splash-description\">Category added.</span>";
}

$conn = connection();
$sql = "select * from category order by cat_name ASC";
$data = $conn->query($sql);
$conn=null;
?>

<table class="table table-condensed table-hover table-bordered table-striped">
	<thead>
		<tr>
			<th><center>S. no.</center></th>
			<th><center>Name</center></th>
			<th><center>Description</center></th>
			<!--  <th><center>Status</center></th> -->
		</tr>
	</thead>

	<tbody style="color:black;">
		<?php $s=0;
		foreach ($data as $row){ $s++; ?>
		<tr>
			<td><center><?php echo $s; ?></center></td>
			<td><?php echo ucwords($row['cat_name']); ?></td>
			<td><?php echo ucwords($row['cat_des']); ?></td>              
		</tr>
		<?php   } ?>
	</tbody>         
</table>