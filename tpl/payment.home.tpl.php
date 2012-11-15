<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href = "css/global.css" rel = "stylesheet">
<title>pharmacy</title>

</head>

<body class ="front" id ="main_page">
<div class = "navbar">
	<div class = "navbar-inner">
		<div class ="container">
			<a class="brand" href="/pharmacy/home.php">Pharmacy</a>
		<div class="nav-collapse">
			<div class ="span3 offset2"><?php print $form; ?></div>
			<?php print $header; ?>
		</div>
			</div>
		</div>
	</div>
	<div class="suggestion span7" id ="output"></div>
<div class = "container-fluid">
	<div class ="row-fluid">
		<div class ="span3">
		<?php print $category; ?>
		</div>
		<div class ="span6">
			<?php print $body ?>
			<div class = "spa6" id = "paymentmessage"></div>
		</div>
	
		<div class ="span3" >
		<div class = "row-fluid">
			<div class = "page-header">
				<h5>Last added</h5>
			</div>
		<div class = "span10">
			<?php print $top_last_added; ?>
		</div>
		</div>
		</div>
	</div>
</div>			
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/search.js"></script>
	<script type = "text/javascript" src ="js/pay.js"></script>
</body>

</html>