<?php 
require 'config.php';

$val = $_POST['val'];
$id = $_POST['id'];

$conn = connection();

$sql = "UPDATE product SET pro_sell_price = '$val' WHERE pro_id = $id";

$conn->query($sql);

$conn = null;
?>