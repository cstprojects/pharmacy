<?php

if(isset($_POST['username']) && isset($_POST['password'])){

	$res = login($_POST['username'],$_POST['password']);
			
	}



echo $_GET['query'];