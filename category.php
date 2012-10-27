<?php

include 'model.php';
include 'functions.php';

echo embed('tpl/category.home.tpl.php',array('header'=>
		embed('tpl/header.php',array()),'category'=>
			embed('tpl/category.tpl.php',array('result'=>get_category())),'products_category'=>
				embed('tpl/productsbycategory.tpl.php',array('result'=>get_products_by_category($_GET['id']))),'top_last_added'=>
				embed('tpl/top_last_added.tpl.php',array('result'=>last_added())),'form'=>
					embed('tpl/search.tpl.php',array()),'footer'=>
						embed('tpl/footer.php',array())));