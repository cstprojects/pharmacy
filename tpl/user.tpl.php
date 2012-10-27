<?php foreach($result as $value): ?>
	<div>
		<p id =""> <?php print $value->userid; ?> </p>
	</div>
	
	<div>
		<?php print $value->username; ?>
	</div>
<?php endforeach; ?>	