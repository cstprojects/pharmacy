<?php

include 'functions.php';
include 'model.php';

echo embed('tpl/user.home.tpl.php',array('title'=>'products','header'=>
		embed('tpl/header.php',array()),'form'=>embed('tpl/search.tpl.php',array()),'category'=>
			embed('tpl/category.tpl.php',array('result'=>get_category())),'body'=>embed('tpl/user.tpl.php',array('result'=>get_user_info()))));
			
			
			
		