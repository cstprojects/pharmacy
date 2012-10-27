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
		header('Location: home.php');
		
		}else{
			$message = "Invalid Username/password";
			echo "<p class = 'alert alert-error'> $message </p>";
		
		}
	}else{
			 $message = "Enter Your Username and Password";
			  echo "<p class = 'alert alert-error'> $message </p>";
		}
		
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

	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	
		$loggedinuserid = $_SESSION['user_id'];
		$query = "SELECT fullname FROM users WHERE userid ='$loggedinuserid'";
		$stmt = db_result($query);
		
		while($row = sqlsrv_fetch_object($stmt)){
			$name = $row->fullname;

		}	
	
	}else{

		header('Location: /pharmacy');

	}
	
	return $name;
		
}

function userlogout(){

	session_start();
	session_destroy();

}




function adduser($username,$passwordone,$passwordtwo,$fullname,$email,$mobile){

if(empty($username) || empty($passwordone) || empty($passwordtwo) || empty($fullname) || empty($email) || empty($mobile)){

	echo "<p class = 'alert alert-error'> all fields are required</p>";
}else{	

	$query = "SELECT username FROM users WHERE username = '$username'";
	$rows = count_rows($query);
	
	if($rows >= 1){
	
		echo "<p class = 'text-error'>username $username already in use</p>";
	}else{
	
	$query = "SELECT email FROM users WHERE email = '$email'";
	$rows = count_rows($query);
	
	if($rows >= 1){
		
		echo "<p class = 'alert alert-error'> $email already in use </p>";
	
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
	echo "<p class = 'alert alert-success'>Registered Successfully, You Can Log In Now </p>";
	
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

function get_products_by_category($id){
	
	$query = "SELECT productID, productName,productIMG FROM Products WHERE

	product_category_id =".$id;
	
	
	$result = db_result($query);
	
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
		
		$data[] = $row;
	}
	
	return $data;
}


function get_category(){
	
	$query = "SELECT categoryName,categoryID FROM Category";
	$result = db_result($query);
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
		
		$data[] = $row;
	}
	
	return $data;

}

function get_loggedin_userid(){
	
	print_r($_SESSION['user_id']);
	
}

function last_added(){
	
	
	$query = "SELECT TOP 16 * FROM Products"; 
	$result = db_result($query);
	
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
	
		
		$data[] = $row;
	
	}
	
	return $data;
	

}

function cheaktranrow(){
	
	session_start();
	$user = $_SESSION['user_id'];
	$query = "SELECT * FROM Transactions WHERE userid = '$user'";
	$row = count_rows($query);
	
	if(!empty($row)){
	
	return '('.$row.')';
	
	}else{
		
		return '(empty)';
		}
	

}

function addtransaction($productname,$productprice,$productquantity,$user_id){
	
	
	$transaction = db_insert('Transactions',array(
		
		'productName'=>$productname,
		'productPrice'=>$productprice,
		'productQuantity'=>$productquantity,
		'userid'=>$user_id
	
	));
	

}


function get_user_loggedin_id(){
	
	print_r($_SESSION['user_id']);

}

function get_user_info(){
	
	$userid = $_SESSION['user_id'];
	$query = "SELECT * FROM users WHERE userid = '$userid'";
	$result = db_result($query);
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
		
		$data[]=$row;
	
	}
		
return $data;
}


function admin_add_product($productName,$productDetails,$productImage,$productPrice,$productQuantity,$productCategoryId){
	
if(!empty($productName)||
	!empty($productDetails)||
	!empty($productImage)||
	!empty($productPrice)||
	!empty($productQuantity)||
	!empty($productCategoryId)
	){
		
	$query = "SELECT * FROM users WHERE fullname = 'lasha badashvili'";
	$result = db_result($query);
	
	if($result){
		
		db_insert('Products',
		
		array('productName'=>$productName,
				'productDetails'=>$productDetails,
				'productIMG'=>$productImage,
				'Price'=>$productPrice,
				'quantity'=>$productQuantity,
				'product_category_id'=>$productCategoryId
			
			));
	
	
	}
	
	}else{
		
		echo 'ALL FIELDS ARE REQUIRED';
	
	}
	
	
	
	
}	

