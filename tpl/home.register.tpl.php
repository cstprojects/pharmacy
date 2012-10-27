<!doctype html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Pharmacy</title>
</head>
<body id = "body">	
<div class="page-header">
  <h1>Welcome to online drug shop <small>Subtext for header</small></h1>
</div>
<div class ="container-fluid">
	<div class ="row-fluid">
		<div class = "span3">
			<div class="login_form" id ="login">
				<?php print $login; ?>
				<div id = "login_message"><?php print $login_message; ?></div>
			</div>	
			<div class ="register_form" id ="register">
				<?php print $reg_form; ?>
				<div id = "message"></div>
			</div>	
		</div>	
	</div>
</div>	

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script type="text/javascript" src = "js/authentication.js"></script>		
</body>
</html>