<?php
// Fill GST Number
$id = $_REQUEST['id'];
$value = $_REQUEST['value']; 
require 'config.php';
$conn = connection();
$query = "UPDATE seller_bill_records SET bill_gst = '$value'  WHERE bill_id = $id";
$conn->query($query);

?>