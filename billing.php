<?php
require 'config.php';
require 'conversion.php';

// echo convertNumberToWordsForIndia(10); die;

$conn = connection();

// Generate the unique id for every bill

$date = date("F_j_Y_G_i_s");
$uid = uniqid($date);
// echo $uid; die;

// code to make entry in the bill table

$bill_name = $_REQUEST['bill_name'];
// echo $gst = $_REQUEST['gst_no'];
// echo $tchrg = $_REQUEST['trans_chg'];
// echo $tno = $_REQUEST['trans_no'];
$entrydt = date("Y-m-d H:i:s");
$total = $_REQUEST['total_amt'];
$type = $_REQUEST['bill_type'];



 $record = "INSERT INTO `bill_records` (`bill_id`, `bill_uid`, `bill_name`, `bill_gst`, `bill_tchrg`, `bill_tno`, `bill_amt`, `bill_type`, `bill_entrydt`) VALUES (NULL, '$uid', '$bill_name', NULL, NULL, NULL, '$total', $type, '$entrydt');";
$conn->query($record);

// code to insert the product in billing product table

$count = $_REQUEST['count'];
for ($i=0; $i < $count; $i++) { 
	$firm = $_REQUEST['bill_f_'.$i];
	$cat = $_REQUEST['bill_p_'.$i];
	$size = $_REQUEST['bill_s_'.$i];
	$qty = $_REQUEST['bill_q_'.$i];
	
	// This query fetch the product id on the basis of cat and type

	$sql = "SELECT pro_id, pro_price, pro_qty FROM product p INNER JOIN category c ON cat_id=pro_grpid INNER JOIN type t ON pro_typeid=ty_id WHERE pro_firmid = $firm AND pro_grpid = $cat AND pro_typeid = $size";
	$pro_id = $conn->query($sql);

	foreach ($pro_id as $key => $value) {
		$pid = $value['pro_id']; //final product id
		$price = $value['pro_price']; //product price
		$sqty = $value['pro_qty']; //product quantity in stock
		// Add the stock when bill type is 1 and Remove the stock when bill type is 2

		if ($type == 1) {
			$remain = $qty + $sqty;
		}
		else{
			$remain = $sqty - $qty;
		}
		

		$update_stock = "UPDATE product SET pro_qty = $remain WHERE pro_id = $pid";
		$conn->query($update_stock);


		// query to insert all product of this perticular bill

		$produts = "INSERT INTO bill_products (bp_uid, bp_pid, bp_qty, bp_price) VALUES ('$uid', $pid, $qty, $price)";
		$conn->query($produts);

	}	
}

$query = "SELECT * FROM `bill_records` WHERE `bill_uid` = '$uid'";
$rec = $conn->query($query);
$pro = "SELECT f.firm_name,c.cat_name,t.ty_name,bp.bp_qty,bp.bp_price,p.pro_price FROM `bill_products` bp INNER JOIN product p ON p.pro_id = bp.bp_pid INNER JOIN category c ON c.cat_id=p.pro_grpid INNER JOIN type t ON t.ty_id=p.pro_typeid INNER JOIN firm f ON f.firm_id= p.pro_firmid WHERE bp.bp_uid = '$uid'";
$detail = $conn->query($pro);
?>

<?php

foreach ($rec as $key => $value) {
	// echo $value['bill_id']; die;
}

?>

<link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
<link rel="stylesheet" href="assets/css/style.css" type="text/css"/>

<table align="center" border="1px dotted black;" width="90%">
	<tr>
			
		<br>
			<h1 style="text-decoration: underline; font-style: italic;
			"><center><strong>ESTIMATE</strong></center></h1>
		<br>

	</tr>	
	<tr>
		<td colspan="2"><strong>&nbsp;Bill No.&nbsp;:&nbsp;<?php echo $value['bill_id']; ?></strong> </td>
		<td colspan="3"><strong>&nbsp;M/S&nbsp;:&nbsp;<?php echo ucwords($value['bill_name']); ?></strong></td>
		<td colspan="2"><strong>&nbsp;Date&nbsp;:&nbsp;<?php echo $value['bill_entrydt'];?></strong></td>
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<th><strong><center>S. No.</center></strong></th>
		<th><strong><center>FIRM</center></strong></th>
		<th><strong><center>DESCRIPTION</center></strong></th>
		<th><strong><center>SIZE</center></strong></th>
		<th><strong><center>QUANTITY</center></strong></th>
		<th><strong><center>RATE</center></strong></th>
		<th><strong><center>AMOUNT</center></strong></th>
	</tr>
	<?php $s=0; foreach ($detail as $key => $row) { $s++; ?>
			
	<tr>
		<td><center><?php echo $s; ?></center></td>
		<td>&nbsp;<?php echo ucwords($row['firm_name']); ?></td>
		<td>&nbsp;<?php echo ucwords($row['cat_name']); ?></td>
		<td><center><?php echo ucwords(strtoupper($row['ty_name'])); ?></center></td>
		<td><center><?php echo $row['bp_qty']; ?></center></td>
		<td><center><?php echo $row['bp_price']; ?></center></td>
		<td><center><?php echo $row['bp_price'] * $row['bp_qty'];?></center></td>
	</tr>
	
	<?php	}	?>

	<tr>
		<td colspan="5"><strong>&nbsp;Rupees In Words&nbsp;:&nbsp;</strong><?php echo convertNumberToWordsForIndia($value['bill_amt']); ?></td>
		<td colspan="2"><strong>&nbsp;Total&nbsp;:&nbsp;<?php echo $value['bill_amt']."&nbsp;/-"; ?></strong></td>
	</tr>
	<tr>
		<td colspan="2"><strong>&nbsp;GSTIN&nbsp;:&nbsp;<?php echo $value['bill_gst']; ?></strong></td>
		<td colspan="3"><strong>&nbsp;&nbsp;Transport Charge&nbsp;:&nbsp;<?php echo $value['bill_tchrg']; ?></strong></td>
		<td colspan="2"><strong>&nbsp;Transport no&nbsp;:&nbsp;<?php echo $value['bill_tno']; ?></strong></td>
	</tr>
</table>