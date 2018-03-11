<?php 

require 'config.php';

$condition = "";

$conn = connection();
// echo $_POST['name']; die;
if(isset($_POST['sname']) && $_POST['sname']!=""){
	$condition.=" and cat_name like '".$_POST['sname']."%'";
}
if(isset($_POST['sdes']) && $_POST['sdes']!=""){
	$condition.=" and cat_des like '".$_POST['sdes']."%'";
}
$sql = "SELECT *  FROM `category` WHERE 0=0 $condition";
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