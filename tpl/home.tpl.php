<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href = "css/global.css" rel = "stylesheet">
<title>pharmacy</title>

</head>

<body class ="front" id ="main_page">
<?php if(!empty($header)) : ?>
	<?php print $header; ?>
<?php endif; ?>	
<div class="suggestion span7" id ="output"></div>	
<div class = "container-fluid">
	<div class ="row-fluid">

		<?php if(!empty($sidebar_first)): ?>
			<?php print $sidebar_first; ?>
		<?php endif; ?>	

		<?php if(!empty($body)): ?>
			<?php print $body; ?>
		<?php endif; ?>	

		<div class = "row-fluid">
		<?php if(!empty($sidebar_second)): ?>
			<?php print $sidebar_second; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<div>
	<?php print embed('tpl/footer.tpl.php',array()); ?>
</div>			
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/search.js"></script>

</body>

</html>