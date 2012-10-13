<?php 

include 'config.php';

function embed($file,$vars){
	
	ob_start();
	
	extract($vars,EXTR_SKIP);
	
	include($file);	
		
	$content = ob_get_contents();
	ob_end_clean();
	
	return $content;
}


function db_connect(){

static $conn;
	
	if(empty($conn)){
		
		$conn = sqlsrv_connect(
		server,
		array('database'=>'pharmacy')
		);
		
	}
	
	return $conn;
	
}

function db_result($query){
	
	$result = sqlsrv_query(db_connect(),$query);
	
	return $result;
	
}