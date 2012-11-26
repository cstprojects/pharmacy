<table class = "table table-bordered table-hover" >
	<th>
	ID
	</th>
	<th>
	Username
	</th>
	<th>
	Fullname
	</th>
	<th>
	Email	
	</th>
	<th>
	Phone
	</th>
	
	<?php foreach($result as $value): ?>
		<tr>
			<td> <?php print $value->userid; ?> </td>
			<td> <?php print $value->username; ?> </td>
			<td> <?php print $value->fullname ?> </td>
			<td> <?php print $value->email ?> </td>
			<td> <?php print $value->mobilephone?> </td>
		</tr>
		
	<?php endforeach; ?>		
	
	
	
</table>