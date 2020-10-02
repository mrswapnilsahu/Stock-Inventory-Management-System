<?php
require 'config.php';
require 'conversion.php';

$conn = connection();

// Generate the unique id for every bill

$date = date("F_j_Y_G_i_s");
$uid = uniqid($date);

// code to make entry in the bill table

$bill_name = $_REQUEST['bill_name'];
$gst = $_REQUEST['gst_no'];
$tchrg = $_REQUEST['trans_chg'];
$tno = $_REQUEST['trans_no'];
$entrydt = date("Y-m-d H:i:s");
$total = $_REQUEST['total_amt'];

$record = "INSERT INTO bill_records (bill_uid, bill_name, bill_gst, bill_tchrg, bill_tno, bill_amt, bill_entrydt) VALUES ('$uid', '$bill_name', $gst, $tchrg, $tno, $total, '$entrydt')";

if(isset($_REQUEST['firm']) && $_REQUEST['firm']!=""){
	$condition.=" and pro_firmid = '".$_REQUEST['firm']."'";
	
}

// code to insert the product in billing product table

$count = $_REQUEST['count'];
for ($i=0; $i < $count; $i++) { 
	$cat = $_REQUEST['bill_p_'.$i];
	$size = $_REQUEST['bill_s_'.$i];
	$qty = $_REQUEST['bill_q_'.$i];
	
	// This query fetch the product id on the basis of cat and type

	$sql = "SELECT pro_id, pro_price FROM product where pro_grpid = $cat and pro_typeid = $size $condition";
	$pro_id = $conn->query($sql);

	foreach ($pro_id as $key => $value) {
		$pid = $value['pro_id']; //final product id
		$price = $value['pro_price']; //product price

		// query to insert all product of this perticular bill

		$produts = "INSERT INTO bill_products (bp_uid, bp_pid, bp_qty, bp_price) VALUES ('$uid', $pid, $qty, $price)";
		$conn->query($produts);

	}	
}

$query = "SELECT * FROM `bill_records` WHERE `bill_uid` = '$uid'";
$rec = $conn->query($query);
$pro = "SELECT c.cat_name,t.ty_name,bp.bp_qty,bp.bp_price,p.pro_price FROM `bill_products` bp INNER JOIN product p ON p.pro_id = bp.bp_pid INNER JOIN category c ON c.cat_id=p.pro_grpid INNER JOIN type t ON t.ty_id=p.pro_typeid WHERE bp.bp_uid = '$uid'";
$detail = $conn->query($pro);
?>

<?php

foreach ($rec as $key => $value) {
	// echo $value['bill_id']; die;
}

?>

<table border="1" class="table table-condensed table-bordered" width="100%">
	<tr>
		<td colspan="6"><br>
			<h1 style="text-decoration: underline;"><center><strong>VKS Industry</strong></center></h1>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<strong>Bill No.&nbsp;:&nbsp;<?php echo $value['bill_id']; ?></strong>
		</td>
		<td colspan="2">
			<strong>M/S&nbsp;:&nbsp;<?php echo ucwords($value['bill_name']); ?></strong>
		</td>
		<td colspan="2">
			<strong>Date&nbsp;:&nbsp;<?php echo $value['bill_entrydt'];?></strong>
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
	<?php $s=0; foreach ($detail as $key => $row) { $s++; ?>
			
	<tr>
		<td><center><?php echo $s; ?></center></td>
		<td><?php echo ucwords($row['cat_name']); ?></td>
		<td><center><?php echo ucwords(strtoupper($row['ty_name'])); ?></center></td>
		<td><center><?php echo $row['bp_qty']; ?></center></td>
		<td><center><?php echo $row['bp_price']; ?></center></td>
		<td><center><?php echo $row['bp_price'] * $row['bp_qty'];?></center></td>
	</tr>

	<?php	}	?>
	<tr>
		<td colspan="4"><strong>Rupees In Words&nbsp;:&nbsp;</strong><?php echo convertNumberToWordsForIndia($value['bill_amt']); ?></td>
		<td colspan="2"><strong>Total&nbsp;:&nbsp;<?php echo $value['bill_amt']."&nbsp;/-"; ?></strong></td>
	</tr>
	<tr>
		<td colspan="2"><strong>GSTIN&nbsp;:&nbsp;<?php echo $value['bill_gst']; ?></strong></td>
		<td colspan="2"><strong>Transportation Charge&nbsp;:&nbsp;<?php echo $value['bill_tchrg']; ?></strong></td>
		<td colspan="2"><strong>Transportation no&nbsp;:&nbsp;<?php echo $value['bill_tno']; ?></strong></td>
	</tr>
</table>