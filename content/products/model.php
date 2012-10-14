<?php

function get_product_by_id($id){
	
	$query = "SELECT * FROM Products WHERE productID =".$id;
	$result = db_result($query);
	
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
		
		$data[] = $row;
	}
	
	return $data;
}

function last_added(){
	
	
	$query = "SELECT TOP 10 * FROM Products"; 
	$result = db_result($query);
	
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
	
		
		$data[] = $row;
	
	}
	
	return $data;
	

}

