<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="css/main.css" />
<link rel = "stylesheet" type = "text/css" href = "css/global.css">
<title>pharmacy</title>

</head>

<body class ="front" id ="main_page">
	
	<div class="page_wrapper" id ="page">
		<div class="main_header_area" id="top_header_area">
			<header class="main_header" id="header">
				<?php print $header; ?>
			</header>	
		</div>
				
		<div class = "top_10">
			<?php print $top_last_added; ?>
		</div>
		<div class="search" id="search_form">
				<?php print $form; ?>
			<div class="content" id ="output"></div>
		</div>
		<div class ="news_feed">
			<?php print $news ?>
		</div>	
		<div class = "footer_area">
			<footer class = "footer">
				<?php print $footer; ?>
			</footer>
		</div>
	</div>	
	
	<script type="text/javascript" src="js/search.js"></script>
</body>

</html>