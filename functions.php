<?php 

include 'config.php';

function count_rows($query){
	
	$result = db_result($query);
	
	return mysqli_num_rows($result);
}

function get_field($result,$row,$field) { 
  if($result->num_rows==0) return 'unknown'; 
  $result->data_seek($row);
  $ceva=$result->fetch_assoc(); 
  $rasp=$ceva[$field]; 
  return $rasp; 
}

function get_id_field($query){
	
	$id = mysqli_fetch_field_direct(db_result($query),1);
	
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

function db_connect() {
	  static $conn;

	  if (empty($conn)) {
	    $conn = mysqli_connect(
	      DB_HOST,
	      DB_USER,
	      DB_PASS,
	      DB_NAME
	    );
	  }

	  return $conn;
	}


function get_numbers_from_string($string){

echo preg_replace("/[^0-9\.]/", '', $string);

}

function db_result($query){
	
	
	  return mysqli_query(db_connect(),$query);
	
}

function db_insert($table, $data) {
  $query  = "INSERT INTO %s (%s) VALUES ('%s')";
  $fields = implode(",", array_keys($data));
  $values = implode("','", $data);
  $query  = sprintf($query, $table, $fields, $values);
  
  db_result($query);
}