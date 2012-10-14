<?php 

include 'config.php';

function count_rows($query){

$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query(db_connect(),$query,$params,$options);
$row_count = sqlsrv_num_rows($stmt);

return $row_count;
}


function get_id_field($query){
	$stmt = sqlsrv_query(db_connect(),$query);
	
	if( sqlsrv_fetch( $stmt ) === false) {
     die( print_r( sqlsrv_errors(), true));
	 }
	 $id = sqlsrv_get_field($stmt,0);
	 
	 return $id;

}


function current_file(){
	
	 $current_file = $_SERVER['SCRIPT_NAME'];
	 
		return $current_file;

}

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
		DB_SERVER,
		array('database'=>'pharmacy')
		);
		
	}
	
	return $conn;
	
}



function db_result($query){
	
	$result = sqlsrv_query(db_connect(),$query);
	
	return $result;
	
}



function db_insert($table, $data) {
  $query  = "INSERT INTO %s (%s) VALUES ('%s')";
  $fields = implode(",", array_keys($data));
  $values = implode("','", $data);
  $query  = sprintf($query, $table, $fields, $values);
  
  db_result($query);
}