<?php

include 'functions.php';
include 'model.php';

echo embed('tpl/home.product.tpl.php',array('title'=>'products','header'=>
		embed('tpl/header.php',array()),'form'=>embed('tpl/search.tpl.php',array()),'category'=>
			embed('tpl/category.tpl.php',array('result'=>get_category())),'body'=>
				embed('tpl/product.tpl.php',array('result'=>get_product_by_id($_GET['id'])))));
			
			
			
		