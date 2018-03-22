<?php
// Fill Transport Amount
$id = $_REQUEST['id'];
$value = $_REQUEST['value']; 
require 'config.php';
$conn = connection();
$query = "UPDATE bill_records SET bill_tchrg = $value  WHERE bill_id = $id";
$conn->query($query);

?>