 <div class="btn-group pull-right" >
 <button class ="btn btn-info btn-medium">Cart <?php print cheaktranrow(); ?></button>	

  <button class="btn btn-info btn-medium"><?php print loggedin();?></button>
  <button class="btn btn-info btn-medium dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
	<li>
		<a href = "user.php">My Account</a>
		<a href = "userlogout.php">sign out</a>
		<p id = "user_id"><?php  get_user_loggedin_id(); ?></p>
	</li> 
  </ul>
</div>



