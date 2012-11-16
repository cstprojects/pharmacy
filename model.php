<?php

//include 'functions.php';

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


//search
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


function get_products(){
	
	$query = "SELECT * FROM Products ORDER BY NEWID()";
	$result = db_result($query);
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
	
		$data[] = $row;
	}
	
	return $data;
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
	
	$query = "SELECT * FROM Products WHERE

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

//last added product selects 16 item..
function last_added(){
	
	$query = "SELECT TOP 16 * FROM Products"; 
	$result = db_result($query);
	
	$data = array();
	
	while($row = sqlsrv_fetch_object($result)){
	
		
		$data[] = $row;
	
	}
	
	return $data;
	

}


function get_transaction_data(){


	$user = $_SESSION['user_id'];
	$query = "SELECT * FROM Transactions WHERE userid = '$user'";
	$row = count_rows($query);
	
	$result = db_result($query);
	$data = array();
	while($rows = sqlsrv_fetch_object($result)){
		
		$data[] = $rows;
	
	}
	
	
	return $data;
	
}


function addtransaction($productname,$productprice,$productquantity,$user_id){
		
	session_start();
	$user = $_SESSION['user_id'];
	$query = "SELECT * FROM Transactions WHERE productName = '$productname' AND userid = '$user'";
	$row = count_rows($query);
	if($row == 0){
		
		
	$transaction = db_insert('Transactions',array(
		
		'productName'=>$productname,
		'productPrice'=>$productprice,
		'productQuantity'=>$productquantity,
		'userid'=>$user_id
	
	));	
		
	}else{
	
	$query = "UPDATE Transactions SET productQuantity = '$productquantity' WHERE productName = '$productname' AND userid = '$user'";
	$result = db_result($query);
		
	}	

}

function cheaktranrow(){
	session_start();
	$user = $_SESSION['user_id'];
	$query = "SELECT * FROM Transactions WHERE userid = '$user'";
	$row = count_rows($query);
	$result = db_result($query);
	$data = array();
	while($rows = sqlsrv_fetch_object($result)){
		
		$data[] = $rows;
	
	}
	
	if(!empty($row)){
	
	return '('.$row.')';
	
	}else{
		
		return '(empty)';
		}
	
	return $data;
	
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

function bill($creditcardtype,$creditcardnumber,$firstname,$lastname,$country,$address,$amount){

session_start();

if(!empty($creditcardnumber)||
	!empty($firstname)||
	!empty($lastname)||
	!empty($address)||
	!empty($amount)){
	
	if(empty($creditcardnumber)){
	
		echo "<p class = 'alert alert-error'>all field are required</p>";
	
	}else{
	
		if(empty($firstname)){
			
			echo "<p class = 'alert alert-error'>all field are required</p>";

		}else{
			
			if(empty($lastname)){
				
				echo "<p class = 'alert alert-error'>all field are required</p>";
				
			}else{
			
			if(empty($address)){
				
				echo "<p class = 'alert alert-error'>all field are required</p>";
			
			}else{
			
				if(empty($amount)){
					
					echo "<p class = 'alert alert-error'>all field are required</p>";
				
				}else{
	
		if(!is_numeric($creditcardnumber) || strlen($creditcardnumber)!=16){
			
			echo "<p class = 'alert alert-error'>incorrect creditcard number</p>";
			
		}else{
		
		
			$userid = $_SESSION['user_id'];
			$query = "SELECT SUM(productPrice) FROM Transactions WHERE  userid = $userid";
			$result = db_result($query);
			$row = sqlsrv_fetch_array($result);
			
			for($i=0; $i<1; $i++){
				
				$nums = $row[$i];
			
			}
			
			if($amount >= $nums){
	
				
				$query = "DELETE FROM Transactions";
				$result = db_result($query);
			
				
	
				echo "<p class = 'alert alert-success'>product(s) will arrive as soon as possible </p>";
				
				
				
			}else{
					
				echo "<p class = 'alert alert-error'>Enter correct price</p>";
			
			}
		
				
						}
					}
				}
			}
		}
	}
	
	}else{
	
		
			
		echo "<p class = 'alert alert-error'>all field are required</p>";
	}
	


}


function trash($id){
	
	$query = "DELETE FROM Transactions WHERE TransactionID =".$id;
	$result = db_result($query);
}

	

function get_country(){
	
$countries =
 
array(
"AF" => "Afghanistan",
"AL" => "Albania",
"DZ" => "Algeria",
"AS" => "American Samoa",
"AD" => "Andorra",
"AO" => "Angola",
"AI" => "Anguilla",
"AQ" => "Antarctica",
"AG" => "Antigua and Barbuda",
"AR" => "Argentina",
"AM" => "Armenia",
"AW" => "Aruba",
"AU" => "Australia",
"AT" => "Austria",
"AZ" => "Azerbaijan",
"BS" => "Bahamas",
"BH" => "Bahrain",
"BD" => "Bangladesh",
"BB" => "Barbados",
"BY" => "Belarus",
"BE" => "Belgium",
"BZ" => "Belize",
"BJ" => "Benin",
"BM" => "Bermuda",
"BT" => "Bhutan",
"BO" => "Bolivia",
"BA" => "Bosnia and Herzegovina",
"BW" => "Botswana",
"BV" => "Bouvet Island",
"BR" => "Brazil",
"IO" => "British Indian Ocean Territory",
"BN" => "Brunei Darussalam",
"BG" => "Bulgaria",
"BF" => "Burkina Faso",
"BI" => "Burundi",
"KH" => "Cambodia",
"CM" => "Cameroon",
"CA" => "Canada",
"CV" => "Cape Verde",
"KY" => "Cayman Islands",
"CF" => "Central African Republic",
"TD" => "Chad",
"CL" => "Chile",
"CN" => "China",
"CX" => "Christmas Island",
"CC" => "Cocos (Keeling) Islands",
"CO" => "Colombia",
"KM" => "Comoros",
"CG" => "Congo",
"CD" => "Congo, the Democratic Republic of the",
"CK" => "Cook Islands",
"CR" => "Costa Rica",
"CI" => "Cote D'Ivoire",
"HR" => "Croatia",
"CU" => "Cuba",
"CY" => "Cyprus",
"CZ" => "Czech Republic",
"DK" => "Denmark",
"DJ" => "Djibouti",
"DM" => "Dominica",
"DO" => "Dominican Republic",
"EC" => "Ecuador",
"EG" => "Egypt",
"SV" => "El Salvador",
"GQ" => "Equatorial Guinea",
"ER" => "Eritrea",
"EE" => "Estonia",
"ET" => "Ethiopia",
"FK" => "Falkland Islands (Malvinas)",
"FO" => "Faroe Islands",
"FJ" => "Fiji",
"FI" => "Finland",
"FR" => "France",
"GF" => "French Guiana",
"PF" => "French Polynesia",
"TF" => "French Southern Territories",
"GA" => "Gabon",
"GM" => "Gambia",
"GE" => "Georgia",
"DE" => "Germany",
"GH" => "Ghana",
"GI" => "Gibraltar",
"GR" => "Greece",
"GL" => "Greenland",
"GD" => "Grenada",
"GP" => "Guadeloupe",
"GU" => "Guam",
"GT" => "Guatemala",
"GN" => "Guinea",
"GW" => "Guinea-Bissau",
"GY" => "Guyana",
"HT" => "Haiti",
"HM" => "Heard Island and Mcdonald Islands",
"VA" => "Holy See (Vatican City State)",
"HN" => "Honduras",
"HK" => "Hong Kong",
"HU" => "Hungary",
"IS" => "Iceland",
"IN" => "India",
"ID" => "Indonesia",
"IR" => "Iran, Islamic Republic of",
"IQ" => "Iraq",
"IE" => "Ireland",
"IL" => "Israel",
"IT" => "Italy",
"JM" => "Jamaica",
"JP" => "Japan",
"JO" => "Jordan",
"KZ" => "Kazakhstan",
"KE" => "Kenya",
"KI" => "Kiribati",
"KP" => "Korea, Democratic People's Republic of",
"KR" => "Korea, Republic of",
"KW" => "Kuwait",
"KG" => "Kyrgyzstan",
"LA" => "Lao People's Democratic Republic",
"LV" => "Latvia",
"LB" => "Lebanon",
"LS" => "Lesotho",
"LR" => "Liberia",
"LY" => "Libyan Arab Jamahiriya",
"LI" => "Liechtenstein",
"LT" => "Lithuania",
"LU" => "Luxembourg",
"MO" => "Macao",
"MK" => "Macedonia, the Former Yugoslav Republic of",
"MG" => "Madagascar",
"MW" => "Malawi",
"MY" => "Malaysia",
"MV" => "Maldives",
"ML" => "Mali",
"MT" => "Malta",
"MH" => "Marshall Islands",
"MQ" => "Martinique",
"MR" => "Mauritania",
"MU" => "Mauritius",
"YT" => "Mayotte",
"MX" => "Mexico",
"FM" => "Micronesia, Federated States of",
"MD" => "Moldova, Republic of",
"MC" => "Monaco",
"MN" => "Mongolia",
"MS" => "Montserrat",
"MA" => "Morocco",
"MZ" => "Mozambique",
"MM" => "Myanmar",
"NA" => "Namibia",
"NR" => "Nauru",
"NP" => "Nepal",
"NL" => "Netherlands",
"AN" => "Netherlands Antilles",
"NC" => "New Caledonia",
"NZ" => "New Zealand",
"NI" => "Nicaragua",
"NE" => "Niger",
"NG" => "Nigeria",
"NU" => "Niue",
"NF" => "Norfolk Island",
"MP" => "Northern Mariana Islands",
"NO" => "Norway",
"OM" => "Oman",
"PK" => "Pakistan",
"PW" => "Palau",
"PS" => "Palestinian Territory, Occupied",
"PA" => "Panama",
"PG" => "Papua New Guinea",
"PY" => "Paraguay",
"PE" => "Peru",
"PH" => "Philippines",
"PN" => "Pitcairn",
"PL" => "Poland",
"PT" => "Portugal",
"PR" => "Puerto Rico",
"QA" => "Qatar",
"RE" => "Reunion",
"RO" => "Romania",
"RU" => "Russian Federation",
"RW" => "Rwanda",
"SH" => "Saint Helena",
"KN" => "Saint Kitts and Nevis",
"LC" => "Saint Lucia",
"PM" => "Saint Pierre and Miquelon",
"VC" => "Saint Vincent and the Grenadines",
"WS" => "Samoa",
"SM" => "San Marino",
"ST" => "Sao Tome and Principe",
"SA" => "Saudi Arabia",
"SN" => "Senegal",
"CS" => "Serbia and Montenegro",
"SC" => "Seychelles",
"SL" => "Sierra Leone",
"SG" => "Singapore",
"SK" => "Slovakia",
"SI" => "Slovenia",
"SB" => "Solomon Islands",
"SO" => "Somalia",
"ZA" => "South Africa",
"GS" => "South Georgia and the South Sandwich Islands",
"ES" => "Spain",
"LK" => "Sri Lanka",
"SD" => "Sudan",
"SR" => "Suriname",
"SJ" => "Svalbard and Jan Mayen",
"SZ" => "Swaziland",
"SE" => "Sweden",
"CH" => "Switzerland",
"SY" => "Syrian Arab Republic",
"TW" => "Taiwan, Province of China",
"TJ" => "Tajikistan",
"TZ" => "Tanzania, United Republic of",
"TH" => "Thailand",
"TL" => "Timor-Leste",
"TG" => "Togo",
"TK" => "Tokelau",
"TO" => "Tonga",
"TT" => "Trinidad and Tobago",
"TN" => "Tunisia",
"TR" => "Turkey",
"TM" => "Turkmenistan",
"TC" => "Turks and Caicos Islands",
"TV" => "Tuvalu",
"UG" => "Uganda",
"UA" => "Ukraine",
"AE" => "United Arab Emirates",
"GB" => "United Kingdom",
"US" => "United States",
"UM" => "United States Minor Outlying Islands",
"UY" => "Uruguay",
"UZ" => "Uzbekistan",
"VU" => "Vanuatu",
"VE" => "Venezuela",
"VN" => "Viet Nam",
"VG" => "Virgin Islands, British",
"VI" => "Virgin Islands, U.s.",
"WF" => "Wallis and Futuna",
"EH" => "Western Sahara",
"YE" => "Yemen",
"ZM" => "Zambia",
"ZW" => "Zimbabwe"
);

foreach($countries as $key => $value) {
		
echo  "<option>$value</option>";

}

}





