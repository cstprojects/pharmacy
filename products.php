<?php

include 'functions.php';
include 'model.php';

echo embed('tpl/home.product.tpl.php',array('title'=>'products','last_product'=>
		embed('tpl/last_product.php',array('result'=>last_added())),'body'=>
			embed('tpl/product.tpl.php',array('result'=>get_product_by_id($_GET['id'])))));