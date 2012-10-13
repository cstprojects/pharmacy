<!doctype html>
<html>
<head>
<meta charset = "UTF-8" />
<title> <?php print $title ?></title>
<link rel = "stylesheet" type = "text/css" href = "/pharmacy/css/products.css">
<link rel = "stylesheet" type = "text/css" href = "/pharmacy/css/global.css">
</head>

<body>
	<div class = "product_page">
		<div class = "top_10">
			<?php print $last_product; ?>
		</div>
		<div class = "product_content">
			<?php print $body ?>
		</div>
	</div>
</body>
</html>
