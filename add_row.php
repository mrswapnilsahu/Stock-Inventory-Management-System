<?php
require 'config.php';
// echo $_REQUEST['firm']; die;
$count = $_POST['count'];
if(isset($_POST['firm']) && $_POST['firm']!=""){
	$condition.=" and pro_firmid = '".$_POST['firm']."'";
	
}

$conn = connection();
$sql = "SELECT cat_id,cat_name FROM product p inner join category c on p.pro_grpid = c.cat_id inner join firm f on f.firm_id=p.pro_firmid where 0=0 $condition group by pro_grpid order by cat_name asc";
$data = $conn->query($sql);

?>

 
	<td><center><?php echo $count+1; ?></center></td>
	<td>
		<select class="form-control input-xs" id="bill_p_<?php echo $count; ?>" name="bill_p_<?php echo $count; ?>" onchange="get_size(this.value,this.id);">
			<option value="">Select Product</option>                
			<?php foreach ($data as $row) { ?>
			<option value="<?php echo $row['cat_id']; ?>"><?php echo ucwords($row['cat_name']); ?></option>
			<?php } ?>
		</select>
	</td>
	<span id="bill_s"></span>
	<td>
		<select class="form-control input-xs" id="bill_s_<?php echo $count; ?>" name="bill_s_<?php echo $count; ?>" onchange="get_pde(this.id);">                  
			<option value="">Size</option>
		</select>
	</td>
	<td style="width: 100px;">
		<input type="number" style="width: 100px;" min="1" max="???" step="1" id="bill_q_<?php echo $count; ?>" required="" name="bill_q_<?php echo $count; ?>" onkeyup="calc(this.id,this.value);" class="form-control input-xs">
	</td>
	<td id="bill_a_<?php echo $count; ?>">
		<!-- Available&nbsp;: -->
	</td>	
	<td><center>
		<input type="number" name="to_amt_<?php echo $count; ?>" id="to_amt_<?php echo $count; ?>" value="" style="width: 100px;">
		<input type="hidden" name="firm" value="<?php echo $_POST['firm']; ?>">
		</center>
	</td>
