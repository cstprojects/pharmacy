<?php

include 'functions.php';
include 'model.php';

echo embed('tpl/home.tpl.php',array(

	'header'=>embed('tpl/header.tpl.php',array()),
	'sidebar_first'=>embed('tpl/category.tpl.php',array('result'=>get_category())),
	'body'=>embed('tpl/payment.tpl.php',array()),
	'sidebar_second'=>embed('tpl/top_last_added.tpl.php',array('result'=>last_added()))));	
						
						