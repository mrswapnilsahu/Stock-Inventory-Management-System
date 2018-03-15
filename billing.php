<?php
require 'config.php';
$conn = connection();

// code to make entry in the bill table



// code to insert the product in billing product table
$count = $_REQUEST['count'];
for ($i=0; $i < $count; $i++) { 
	$cat = $_REQUEST['bill_p_'.$i];
	$size = $_REQUEST['bill_s_'.$i];
	// This query fetch the product id on the basis of cat and type
	$sql = "SELECT pro_id FROM product where pro_grpid = $cat and pro_typeid = $size";
	$pro_id = $conn->query($sql);

	foreach ($pro_id as $key => $value) {
		$pid = $value['pro_id']; //final product id
	}
	 	

}
?>