<?php

include 'model.php';
include 'functions.php';

echo embed('tpl/cart.home.tpl.php',array('header'=>
		embed('tpl/header.php',array()),'category'=>
			embed('tpl/category.tpl.php',array('result'=>get_category())),'body'=>embed('tpl/cart.tpl.php',array('result'=>get_transaction_data())),'top_last_added'=>
				embed('tpl/top_last_added.tpl.php',array('result'=>last_added())),'form'=>
					embed('tpl/search.tpl.php',array()),'footer'=>
						embed('tpl/footer.php',array())));
						
						