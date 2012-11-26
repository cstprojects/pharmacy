<table class = "table table-bordered table-hover" >
	<th>
	Date
	</th>
	<th>
	Sold
	</th>
	<th>
	quantity
	</th>
	<th>
	Earned
	</th>
	
	<?php foreach($result as $value): ?>
		<tr>
			<td> <?php print $value->date; ?> </td>
			<td> <?php print $value->productName; ?> </td>
			<td> <?php print $value->productQuantity ?> </td>
			<td class="alert alert-success"> +<?php print $value->productPrice*$value->productQuantity ?> </td>
		</tr>
		
	<?php endforeach; ?>		
	
	
	
</table>