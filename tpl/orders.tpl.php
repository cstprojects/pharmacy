<div class ="span6">
<table id ="cartTable" class="table table-hover">
	<tbody>
	<tr>
		<th>#</th>
		<th>Date</th>
		<th>Name</th>
		<th>Quantity</th>
	</tr>
	<?php for($i=0; $i<sizeof($result); $i++): ?>
	<tr>
		<td> <?php print $i+1; ?> </td>
		<td> <?php print $result[$i]->date ?></td>
		<td> <?php print $result[$i]->productName?></td>
		<td> <?php print $result[$i]->productQuantity?></td>
	</tr>
	<?php endfor; ?>
	</tbody>	
</table>
</div>
