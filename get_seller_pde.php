<?php
require 'config.php';

$grp = $_POST['cat'];
$firm = $_POST['firm'];
$type = $_POST['size'];
$count = $_POST['count'];
$conn = connection();
$sql = "SELECT * FROM product WHERE pro_typeid =$type AND pro_grpid = $grp AND pro_firmid = $firm";
$data = $conn->query($sql);
$conn=null;

?>
<?php foreach ($data as $row) {  ?>
	<?php //if ($row['pro_qty']>0) { ?>
		<!-- Available&nbsp;:<?php echo $row['pro_qty']; ?><br>
	<input type="hidden" name="av_<?php echo $count; ?>" id="av_<?php echo $count; ?>" value="<?php echo $row['pro_qty']; ?>"> -->
	<!-- Price&nbsp;: --><?php echo $row['pro_sell_price']; ?><br>
	<input type="hidden" name="p_<?php echo $count; ?>" id="p_<?php echo $count; ?>" value="<?php echo $row['pro_sell_price']; ?>">
	<input type="hidden" name="p_cgst_<?php echo $count; ?>" id="p_cgst_<?php echo $count; ?>" value="<?php echo $row['cgst']; ?>">
	<input type="hidden" name="p_igst_<?php echo $count; ?>" id="p_igst_<?php echo $count; ?>" value="<?php echo $row['igst']; ?>">
	<input type="hidden" name="p_sgst_<?php echo $count; ?>" id="p_sgst_<?php echo $count; ?>" value="<?php echo $row['sgst']; ?>">
	<?php //}else {
		//echo "OUT OF STOCK";
	//} ?>
	
</td>
<?php break; } ?>




