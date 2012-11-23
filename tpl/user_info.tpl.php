 <div class="btn-group pull-right" >
 <button onclick="window.location = 'cart.php'" class ="btn btn-info btn-medium"><i class = "icon-shopping-cart icon-white"></i> <?php print cheakrow(); ?></button>

  <button class="btn btn-info btn-medium"><i class = "icon-user icon-white"></i> <?php print loggedin();?></button>
  <button class="btn btn-info btn-medium dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
	<li>
		<a href = "orders.php">My orders</a>
		<a href = "userlogout.php">Sign out</a>
	</li> 
  </ul>
</div>