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
			<a class="brand" href="#">Pharmacy</a>
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
		<div class ="span7" >
			<div id="myCarousel" class="carousel slide">
			  <!-- Carousel items -->
			  <div class="carousel-inner">
				<div class="active item" ><img src = "http://www.macwallpapers.eu/images/wallpapers/Leoaprd%20Desktop%20Put%20Your%20Hands%20On%20Me-254690.jpeg"></div>
				<div class="item"><img src = "http://im04.thewallpapers.org/photo/21803/Simple-Apple.jpg"></div>
			  </div>
			  <!-- Carousel nav -->
			  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
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
</body>

</html>