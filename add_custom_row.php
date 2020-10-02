<?php
require 'config.php';
$count = $_POST['count'];
$conn = connection();
$firm = "SELECT firm_id,firm_name FROM firm ORDER BY firm_name ASC";
$fdata = $conn->query($firm);

$sql = "SELECT cat_id,cat_name FROM product p inner join category c on c.cat_id=p.pro_grpid inner join type t on t.ty_id=p.pro_typeid inner join firm f on f.firm_id = p.pro_firmid
    ORDER BY cat_name ASC";
$data = $conn->query($sql);

?>

	<td><center><?php echo $count+1; ?></center></td>
	<td>
		<input type="text" placeholder="Enter Product Name" style="width: 100%;" id="bill_f_<?php echo $count; ?>" name="bill_f_<?php echo $count; ?>" required="">
	</td>
	<td style="width: 120px;">
		<input type="number" placeholder="Enter Price" id="bill_p_<?php echo $count; ?>" name="bill_p_<?php echo $count; ?>" style="width: 120px;" required="">
	</td>	
	<td style="width: 120px;">
		<input type="number" placeholder="Enter Qty" style="width: 100%;" id="bill_q_<?php echo $count; ?>" required="" name="bill_q_<?php echo $count; ?>" onkeyup="custom_calc(this.id,this.value);" style="width: 120px;" required="">
	</td>
	<td style="width: 120px;">
		<center>
			<input type="number" name="to_amt_<?php echo $count; ?>" id="to_amt_<?php echo $count; ?>" value="" style="width: 100%;">
		</center>
	</td>
