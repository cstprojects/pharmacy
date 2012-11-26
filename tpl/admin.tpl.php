<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href = "css/global.css" rel = "stylesheet">
<title>pharmacy</title>
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="navbar">
			  <div id = "navbarinverse" class="navbar-inner">
			    <div class="container">
			 
			      <!-- Be sure to leave the brand out there if you want it shown -->
			      <a class="brand" href="home.php">Pharmacy</a>
			      
			       <?php print embed("tpl/user_info.tpl.php",array()); ?>
			      <!-- Everything you want hidden at 940px or less, place within here -->
			      <div class="nav-collapse collapse">
				      
			      </div>
			 
			    </div>
			  </div>
			</div>	
			</div>
		</div>
		<div class="row-fluid">
			<div class="span3">
				<?php print embed("tpl/add_product.tpl.php",array()); ?>
			</div>
			
		</div>
		<div class="row-fluid">
			<div class="span6">
				<div class = "page-header">
					<h1><small>Registered Users</small></h1>
				</div>
				<?php print embed("tpl/users.tpl.php",array('result'=>get_all_user())); ?>
			</div>
			<div class="span6">
				<div class = "page-header">
					<h1><small>Transactions</small></h1>
				</div>
				<?php print embed("tpl/transaction.tpl.php",array('result'=>get_transactions())); ?>
			</div>
		</div>
	</div>
	<script type = "text/javascript" src = "js/admin.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</body>