<?php

include 'functions.php';
include 'model.php';

						
	echo embed('tpl/home.tpl.php',array(

	'header'=>embed('tpl/header.tpl.php',array()),
	'sidebar_first'=>embed('tpl/category.tpl.php',array('result'=>get_category())),
	'body'=>embed('tpl/product.tpl.php',array('result'=>get_product_by_id($_GET['id'])))));