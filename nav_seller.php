<?php
session_start();	
function pro(){
	include 'pro.php';	
}
function cat(){
	include 'cat.php';
}
function ty(){
	include 'ty.php';
}
function dash(){
	include 'dash.php';
}
function st(){
	echo "<strong>UNDER CONSTRUCTION</strong>";
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

	$link = $_POST['pro'];
	
	if ($link == 'pro') {
		pro();
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
	}
?>