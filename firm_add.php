<?php
require 'config.php';

$name = $_POST['name'];
$des = $_POST['des'];

$conn = connection();

$sql = "INSERT INTO `firm` (`firm_name`, `firm_des`) VALUES ('$name', '$des');";
$conn = connection();
$conn->query($sql);

$sql = "SELECT * FROM firm ORDER BY firm_name ASC";
$data = $conn->query($sql);
$conn=null;

?>

<table class="table table-condensed table-hover table-bordered table-striped">
	<thead>
		<tr>
			<th><center>S. no.</center></th>
			<th><center>Name</center></th>
			<th><center>Category</center></th>
		</tr>
	</thead>
	<tbody style="color:black;">
		<?php $s=0;
		foreach ($data as $row){ $s++; ?>
		<tr>
			<td><center><?php echo $s; ?></center></td>
			<td><?php echo ucwords($row['firm_name']); ?></td>
			<td><?php echo ucwords($row['firm_des']); ?></td>
			
		</tr>
		<?php   } ?>
	</tbody>
</table>
