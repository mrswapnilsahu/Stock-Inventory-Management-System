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
$tr_amt = $_REQUEST['tr_amt'];



$record = "INSERT INTO `bill_records` (`bill_id`, `bill_uid`, `bill_name`, `bill_gst`, `bill_tchrg`, `bill_tno`, `bill_amt`, `bill_type`, `bill_entrydt`) VALUES (NULL, '$uid', '$bill_name', NULL, $tr_amt, NULL, '$total', $type, '$entrydt');";
$conn->query($record);

// code to insert the product in billing product table

$count = $_REQUEST['count'];
for ($i=0; $i < $count; $i++) { 
	 $name = $_REQUEST['bill_f_'.$i];
	 $price = $_REQUEST['bill_p_'.$i];
	// $size = $_REQUEST['bill_s_'.$i];
	 $qty = $_REQUEST['bill_q_'.$i];		
		
		// query to insert all product of this perticular bill

		$produts = "INSERT INTO custom_products (cp_uid, cp_name, cp_price, cp_qty) VALUES ('$uid', '$name', '$price', '$qty');)";
		$conn->query($produts);

		
}

$query = "SELECT * FROM `bill_records` WHERE `bill_uid` = '$uid'";
$rec = $conn->query($query);
$pro = "SELECT * FROM custom_products WHERE cp_uid LIKE '$uid'";
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
		<th><center>S.no.</center></th>
		<th colspan="2"><center>Name Of Product</center></th>									
		<th><center>Price</center></th>
		<th><center>Qty Req.</center></th>
		<th><center>Amount</center></th>
	</tr>
	<?php $s=0; foreach ($detail as $key => $row) { $s++; ?>
			
	<tr>
		<td><center><?php echo $s; ?></center></td>
		<td colspan="2">&nbsp;<?php echo ucwords($row['cp_name']); ?></td>
		<td><center><?php echo $row['cp_price']; ?></center></td>
		<td><center><?php echo $row['cp_qty']; ?></center></td>
		<td><center><?php echo $row['cp_price'] * $row['cp_qty'];?></center></td>
	</tr>
	
	<?php	}	?>

	<tr>
		<td colspan="5"><strong>&nbsp;Rupees In Words&nbsp;:&nbsp;</strong><?php echo convertNumberToWordsForIndia($value['bill_amt']+$value['bill_tchrg']); ?></td>
		<td colspan="2"><strong>&nbsp;Total&nbsp;:&nbsp;<?php echo $value['bill_amt']+$value['bill_tchrg']."&nbsp;/-"; ?></strong></td>
	</tr>
	<tr>
		<td colspan="2"><strong>&nbsp;GSTIN&nbsp;:&nbsp;<?php echo $value['bill_gst']; ?></strong></td>
		<td colspan="3"><strong>&nbsp;&nbsp;Transport Charge&nbsp;:&nbsp;<?php echo $value['bill_tchrg']; ?></strong></td>
		<td colspan="2"><strong>&nbsp;Transport no&nbsp;:&nbsp;<?php echo $value['bill_tno']; ?></strong></td>
	</tr>
</table>