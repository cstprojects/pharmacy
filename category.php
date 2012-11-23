<?php

include 'model.php';
include 'functions.php';
						
echo embed('tpl/home.tpl.php',array(

	'header'=>embed('tpl/header.tpl.php',array()),
	'sidebar_first'=>embed('tpl/category.tpl.php',array('result'=>get_category())),
	'body'=>embed('tpl/productsbycategory.tpl.php',array('result'=>get_products_by_category($_GET['id']))),
	'sidebar_second'=>embed('tpl/top_last_added.tpl.php',array('result'=>last_added()))));						