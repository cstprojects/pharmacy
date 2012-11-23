<!doctype html>
<html lang ="en">
<head>
     <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	 <link href="css/bootstrap-responsive.css" rel="stylesheet">
	 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	 <link href = "css/global.css" rel = "stylesheet">
	<title>Pharmacy</title>
</head>
<body id = "body">	
<div class="navbar navbar-inverse">
  <div id = "navbarinverse" class="navbar-inner">
    <div class="container">
 
      <!-- Be sure to leave the brand out there if you want it shown -->
      <a class="brand" href="#">Pharmacy</a>
 
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div>
 
    </div>
  </div>
</div>
<div class = "span10">
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src = "img/slide1.jpg"></div>
    <div class="item"><img src = "img/slide2.jpg"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div>
<div class ="container-fluid">
	<div class ="row-fluid">
		<div class = "span3 offset1">
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