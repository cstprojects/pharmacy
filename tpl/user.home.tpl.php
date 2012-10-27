<!doctype html>
<html>
<head>
<meta charset = "UTF-8" />
<title> <?php print $title ?></title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href = "css/global.css" rel = "stylesheet">
</head>

<body>
	
<div class = "product_page">
	<div class = "navbar">
		<div class = "navbar-inner">
		<div class ="container">
			<a class="brand" href="/pharmacy/home.php">Pharmacy</a>
		<div class="nav-collapse">
			<div class ="span8 offset2"><?php print $form; ?></div>
			<?php print $header; ?>
		</div>
			</div>
			<div id = "transaction"></div>
		</div>
	</div>
	<div class="suggestion span7" id ="output"></div>
	<div class = "container-fluid">
		<div class ="row-fluid">
		<div class ="span3">
		<?php print $category; ?>
		</div>
		<?php print $body; ?>
	</div>
</div>

<div id = "transaction"></div>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/search.js"></script>
</body>
</html>
