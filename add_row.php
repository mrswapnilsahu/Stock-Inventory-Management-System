<?php
require 'config.php';
// echo $_REQUEST['firm']; die;
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
		<select class="form-control input-xs chosen-select" id="bill_f_<?php echo $count; ?>" name="bill_f_<?php echo $count; ?>" onchange="get_cat(this.value,this.id);" required="">
			<option value="">Select Firm</option>                
			<?php foreach ($fdata as $row) { ?>
			<option value="<?php echo $row['firm_id']; ?>"><?php echo ucwords($row['firm_name']); ?></option>
			<?php } ?>
		</select>
	</td>
	<td>
		<select class="form-control input-xs chosen-select" id="bill_p_<?php echo $count; ?>" name="bill_p_<?php echo $count; ?>" onchange="get_size(this.value,this.id);" required="">
			<option value="">Select Product</option>                
			<?php foreach ($data as $row) { ?>
			<option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
			<?php } ?>
		</select>
	</td>
	
	<td>
		<select class="form-control input-xs chosen-select" id="bill_s_<?php echo $count; ?>" name="bill_s_<?php echo $count; ?>" onchange="get_pde(this.id);" required="">                  
			<option value="">Size</option>
		</select>
	</td>
	<td style="width: 100px;">
		<input type="number" style="width: 100px;" min="1" max="???" step="1" id="bill_q_<?php echo $count; ?>" required="" name="bill_q_<?php echo $count; ?>" onkeyup="calc(this.id,this.value);" class="form-control input-xs" required="">
	</td>
	<td id="bill_a_<?php echo $count; ?>">
		<!-- Available&nbsp;: -->
	</td>	
	<td><center>
		<input type="number" name="to_amt_<?php echo $count; ?>" id="to_amt_<?php echo $count; ?>" value="" style="width: 100px;">
		<input type="hidden" name="firm" value="<?php echo $_POST['firm']; ?>">
		</center>
	</td>
