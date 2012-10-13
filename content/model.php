<?php

function login($username,$password){

$message = null;

session_start();

if(!empty($username) || !empty($password)){
		
	 $password = md5($password);
	 
	 $query = "SELECT * FROM users WHERE username = '$username' AND passwordone = '$password'";
	 $rows = count_rows($query);
	 
	 if($rows==1){
		
		$userid = get_id_field($query);
		$_SESSION['user_id'] = $userid;
		header('Location: /pharmacy/content');
		
		}else{
			$message = "Invalid Username/password";
			echo "<p class = 'message'> $message </p>";
		
		}
	}else{
			 $message = "Enter Your Username and Password";
			  echo "<p class = 'message'> $message </p>";
		}
		
}



function load_news_xml(){
	
	$feed = simplexml_load_file('http://drugtopics.modernmedicine.com/drugtopics/drugtopics.rss?id=47448');
	
	return $feed;

}


function get_drug($drug){


$query = "SELECT productID, productIMG,productName FROM Products 
		  WHERE productName LIKE '%$drug%' OR productDetails LIKE '%$drug%'";
	$result = db_result($query);
	
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
		
		$data[] = $row;
	}	
	
	return $data;
	
}


function loggedin(){	
	session_start();

	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	
		$fullname = $_SESSION['user_id'];
		$query = "SELECT fullname FROM users WHERE userid ='$fullname'";
		$stmt = db_result($query);
		
		while($row = sqlsrv_fetch_object($stmt)){
			
			$name = $row->fullname;
		
		}	
	
	}
	
	return $name;
		
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





function adduser($username,$passwordone,$passwordtwo,$fullname,$email,$mobile){

if(empty($username) || empty($passwordone) || empty($passwordtwo) || empty($fullname) || empty($email) || empty($mobile)){

	echo "<p class = 'message'> all fields are required</p>";
}else{	

	$query = "SELECT username FROM users WHERE username = '$username'";
	$rows = count_rows($query);
	
	if($rows >= 1){
	
		echo "<p class = 'message'>username $username already in use</p>";
	}else{
	
	$query = "SELECT email FROM users WHERE email = '$email'";
	$rows = count_rows($query);
	
	if($rows >= 1){
		
		echo "<p class = 'message'> $email already in use </p>";
	
	}else{

	$user_id = db_insert(
	
		'users',
			array(
		'username'=>$username,
		'passwordone'=>md5($passwordone),
		'passwordtwo'=> md5($passwordtwo),
		'fullname'=>$fullname,
		'email'=>$email,
		'mobilephone'=>$mobile
		
		)
	
	);
	echo "<p class = 'success'>Registered Successfully, You Can Log In Now </p>";
	
			}
		}		
	}
}

function get_product_by_id($id){
	
	$query = "SELECT * FROM Products WHERE productID =".$id;
	$result = db_result($query);
	
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
		
		$data[] = $row;
	}
	
	return $data;
}



