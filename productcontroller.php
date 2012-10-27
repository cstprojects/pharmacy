<?php

include 'model.php';
include 'functions.php';

$result = admin_add_product(
	$_POST['productname'],
	$_POST['productdetails'],
	$_POST['productimagelink'],
	$_POST['productprice'],
	$_POST['productquantity'],
	$_POST['product_category_id']
	);
	
	header('Location: admin.php');