<?php
$id = $_REQUEST['id'];
// echo $id;

// die;
$price = $_REQUEST['price'];
$cgst = $_REQUEST['cgst'];
$igst = $_REQUEST['igst'];
$sgst = $_REQUEST['sgst'];
// echo $id;
// echo $price;
// echo $cgst;
// echo $igst;
// echo $sgst;
// die;

require 'config.php';
$conn = connection();
$pro_info = "UPDATE `product` SET `pro_price` = $price, `cgst` = $cgst, `igst` = $igst, `sgst` = $sgst WHERE `pro_id` = $id" ;
$inf = $conn->query($pro_info);
// print_r($inf);
// die;

$sql = "SELECT * FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid inner join firm f on f.firm_id=p.pro_firmid
     WHERE 0=0 ORDER BY cat_name ASC";
$data = $conn->query($sql);
$conn=null;

?>


<table class="table table-condensed table-hover table-bordered table-striped">
	<thead>
		<tr>
			<th><center>S. no.</center></th>
			<!-- <th><center>Name</center></th> -->
			<th><center>Firm</center></th>
			<th><center>Category</center></th>
			<th><center>Type</center></th>
			<th><center>Price</center></th>
			<th><center>CGST</center></th>
			<th><center>IGST</center></th>
			<th><center>SGST</center></th>
			<th><center>Quantity</center></th>
			<th><center>Status</center></th>
			<th><center>Edit</center></th>
		</tr>
	</thead>
	<tbody style="color:black;">
		<?php $s=0;
		foreach ($data as $row){ $s++; ?>
		<tr>
			<td><center><?php echo $s; ?></center></td>
			<!-- <td><?php echo ucwords($row['pro_name']); ?></td> -->
			<td><?php echo ucwords($row['firm_name']); ?></td>
			<!-- <td><?php echo ucwords($row['pro_des']); ?></td> -->
			<td><?php echo ucwords($row['cat_name']); ?></td>
			<td><?php echo ucwords($row['ty_name']); ?></td>
			<td><?php echo ucwords($row['pro_price']); ?></td>
			<td><?php echo ucwords($row['cgst'])."%"; ?></td>
			<td><?php echo ucwords($row['igst'])."%"; ?></td>
			<td><?php echo ucwords($row['sgst'])."%"; ?></td>
			<td><?php echo ucwords($row['pro_qty']); ?></td>
			<td><?php
			if ($row['pro_qty'] > 0) {
				echo "Available";
			}else{
				echo "<span style='color:red;'>Out of stock</span>";
			}
			?></td>
			<td><button data-toggle="modal" data-target="#edit-product" class="btn btn-space md-trigger btn-danger" onclick="edit_pro(<?php echo $row['pro_id']; ?>);"><i class="icon icon-left mdi mdi-eyedropper"></i> EDIT</button></td>
		</tr>
		<?php   } ?>
	</tbody>
</table>