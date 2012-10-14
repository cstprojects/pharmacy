<!doctype html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href = "css/auth.css">
	<title>Pharmacy</title>
</head>
<body id = "body">	
<div class ="auth">
	<div class = "loginform" id ="login">
		<?php print $login; ?>
	</div>
	<div id = "login_message"><?php print $login_message; ?></div>
	<div class ="registration" id ="register">
		<?php print $reg_form; ?>
	</div>
	<div id = "message"></div>
<script type="text/javascript" src = "js/authentication.js"></script>	
</div>	
</body>
</html>