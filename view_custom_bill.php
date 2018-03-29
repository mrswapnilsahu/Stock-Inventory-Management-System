<?php
require 'config.php';
require 'conversion.php';
$conn = connection();

$id = $_REQUEST['id'];

$query = "SELECT * FROM bill_records WHERE bill_id = '$id'";
$rec = $conn->query($query);

foreach ($rec as $key => $value) {
	 $uid = $value['bill_uid'];
}

$pro = "SELECT * FROM custom_products WHERE cp_uid = '$uid'";
$detail = $conn->query($pro);
?>

<link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
<link rel="stylesheet" href="assets/css/style.css" type="text/css"/>

<table align="center" border="1px dotted black;" width="90%">
	<tr>

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