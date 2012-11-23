<div class = "span6">
<form action ="#" method ="post" id = "payment">
<legend>Bill Information</legend>
	<div>
		<label>Credit Card Type</label>
		<select name = "creditcardtype">
			<option>Visa</option>
			<option>Master Card</option>
		</select>
	</div>
	<div>
		<label>Credit Card Number</label>
		<input id = "creditcardinput" type = "text" name ="creditcardnumber">
	</div>
	<div>
		<label>Firstname</label>
		<input id ="firstname" type = "text" name ="firstname">
	</div>
	<div>
		<label>Lastname</label>
		<input id = "lastname" type = "text" name ="lastname">
	</div>
	<div>
		<label>County</label>
		<select name = "country">
			<?php get_country(); ?>
		</select>
	</div>
	
	<div>
		<label>Address</label>
		<input id = "address" type = "text" name = "address">
	</div>
	
	<div>
		<label>Amount</label>
		<input id ="amount" type ="text" name = "amount"> 
	</div>
	
	<input class = "btn btn-info" type = "submit" value = "BUY">
</form>
<div class = "span4" id = "paymentmessage"></div>
</div>
<script type = "text/javascript" src = "js/pay.js"></script>