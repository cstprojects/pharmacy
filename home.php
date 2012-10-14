<?php

include 'model.php';
include 'functions.php';

echo embed('tpl/home.tpl.php',array('header'=>
		embed('tpl/header.php',array()),'top_last_added'=>
			embed('tpl/top_last_added.tpl.php',array('result'=>last_added())),'form'=>
				embed('tpl/search.tpl.php',array()),'news'=>
					embed('tpl/pharmacynews.php',array('feed'=>load_news_xml())),'footer'=>
						embed('tpl/footer.php',array())));				
		
		
	
							