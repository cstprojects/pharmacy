 <div class="btn-group pull-right" >
 <a href = "cart.php"><button class ="btn btn-info btn-medium"><a href ="cart.php" id = "cart_link"><i class = "icon-shopping-cart icon-white"></i> <?php print cheaktranrow(); ?></a></button></a>

  <button class="btn btn-info btn-medium"><i class = "icon-user icon-white"></i> <?php print loggedin();?></button>
  <button class="btn btn-info btn-medium dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
	<li>
		<a href = "admin.php">Admin Tools<a>
		<a href = "userlogout.php">Sign out</a>
		<p style = "color:white; font:0px arial;" id = "user_id"><?php  get_user_loggedin_id(); ?></p>
	</li> 
  </ul>
</div>


-
