<?php
function dash(){
	include 'dash.php';
}	
function pro(){
	include 'pro.php';	
}
function pro_list(){
	include 'pro_list.php';	
}
function cat(){
	include 'cat.php';
}
function ty(){
	include 'ty.php';
}
function st(){
	include 'stock_details.php';;
}
function firm(){
	include 'firm.php';
}
function bill(){
	include 'bill.php';
}
function showbill(){
	include 'sb.php';
}
function seller_bill(){
	include 'sbill.php';
}
function show_seller_bill(){
	include 'show_seller_bill.php';
}
function custom_bill(){
	include 'custom_billing.php';
}

	$link = $_POST['pro'];
	
	if ($link == 'pro') {
		pro();
	}elseif ($link == 'pro_list') {
		pro_list();
	}elseif ($link == 'cat') {
		cat();
	}elseif ($link == 'ty') {
		ty();
	}elseif ($link == 'dash') {
		dash();
	}elseif ($link == 'st') {
		st();
	}elseif ($link == 'bill') {
		bill();
	}elseif ($link == 'firm') {
		firm();
	}elseif ($link == 'sb') {
		showbill();
	}elseif ($link == 'sbill') {
		seller_bill();
	}elseif ($link == 'show_seller_bill') {
		show_seller_bill();
	}elseif ($link == 'c_bill') {
		custom_bill();
	}
?>