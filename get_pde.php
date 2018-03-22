<?php
require 'config.php';

$grp = $_POST['cat'];
$type = $_POST['size'];
$count = $_POST['count'];
$conn = connection();
$sql = "SELECT * FROM product WHERE pro_typeid =$type  AND pro_grpid = $grp";
$data = $conn->query($sql);
$conn=null;

?>
<?php foreach ($data as $row) {  ?>
	<?php //if ($row['pro_qty']>0) { ?>
		<!-- Available&nbsp;:<?php echo $row['pro_qty']; ?><br>
	<input type="hidden" name="av_<?php echo $count; ?>" id="av_<?php echo $count; ?>" value="<?php echo $row['pro_qty']; ?>"> -->
	<!-- Price&nbsp;: --><?php echo $row['pro_price']; ?><br>
	<input type="hidden" name="p_<?php echo $count; ?>" id="p_<?php echo $count; ?>" value="<?php echo $row['pro_price']; ?>">
	<?php //}else {
		//echo "OUT OF STOCK";
	//} ?>
	
</td>
<?php break; } ?>




