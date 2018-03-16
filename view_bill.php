<?php
$id = $_REQUEST['id'];

// require 'config.php';

// $conn = connection();

// $query = "SELECT * FROM `bill_records` WHERE `bill_uid` = $id";
// $rec = $conn->query($query);

// // print_r($rec); die;

// foreach ($rec as $value) {
// 	// echo $value['bill_id']; die;
// }

// $pro = "SELECT c.cat_name,t.ty_name,bp.bp_qty,bp.bp_price,p.pro_price FROM `bill_products` bp INNER JOIN product p ON p.pro_id = bp.bp_pid INNER JOIN category c ON c.cat_id=p.pro_grpid INNER JOIN type t ON t.ty_id=p.pro_typeid WHERE bp.bp_uid = '$value['bill_uid']'";
// $detail = $conn->query($pro);

?>

<table border="1" class="table table-condensed table-bordered" width="100%">
	<tr>
		<td colspan="6"><br>
			<h1 style="text-decoration: underline;margin-top: -3%;"><center><strong>VKS Industry</strong></center></h1>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<strong>Bill No.&nbsp;:&nbsp;</strong>
		</td>
		<td colspan="2">
			<strong>M/S&nbsp;:&nbsp;</strong>
		</td>
		<td colspan="2">
			<strong>Date&nbsp;:&nbsp;</strong>
		</td>
	</tr>
	<tr>
		<th><strong><center>S. No.</center></strong></th>
		<th><strong><center>DESCRIPTION</center></strong></th>
		<th><strong><center>SIZE</center></strong></th>
		<th><strong><center>QUANTITY</center></strong></th>
		<th><strong><center>RATE</center></strong></th>
		<th><strong><center>AMOUNT</center></strong></th>
	</tr>
	<?php //$s=0; foreach ($detail as $key => $row) { $s++; ?>
			
	<tr>
		<td><center></center></td>
		<td></td>
		<td><center></center></td>
		<td><center></center></td>
		<td><center></center></td>
		<td><center></center></td>
	</tr>

	<?php	//}	?>
	<tr>
		<td colspan="4"><strong>Rupees In Words&nbsp;:&nbsp;</strong></td>
		<td colspan="2"><strong>Total&nbsp;:&nbsp;</strong></td>
	</tr>
	<tr>
		<td colspan="2"><strong>GSTIN&nbsp;:&nbsp;</strong></td>
		<td colspan="2"><strong>Transportation Charge&nbsp;:&nbsp;</strong></td>
		<td colspan="2"><strong>Transportation no&nbsp;:&nbsp;</strong></td>
	</tr>
</table>