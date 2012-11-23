<div class ="span6">
<table id ="cartTable" class="table table-hover">
	<tbody>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
	<?php for($i=0; $i<sizeof($result); $i++): ?>
	<tr class = "rows">
		<td> <?php print $result[$i]->cartID?></td>
		<td id = "productname" > <?php print $result[$i]->productName?></td>
		<td id = "productquantity" > <?php print $result[$i]->productQuantity?></td>
		<td id = "productprice"> <?php print $result[$i]->productPrice?></td>
		<td> <a href = "#"><i class = "icon-trash"> </i></a></td>
	</tr>
	<?php endfor; ?>
	<tr>	
		<td></td>
		<td></td>
		<?php $total = 0; ?>
		<?php for($j = 0; $j<sizeof($result); $j++):
		$total += $result[$j]->productPrice*$result[$j]->productQuantity ?>
		<?php endfor; ?>	
		<td>Total</td>
		<td><?php print $total; ?></td>		
	</tr>
	</tbody>	
</table>
	<a href = "payment.php"><button class = "btn btn-primary">Continue</button></a>
</div>
<script type = "text/javascript" src = "js/trash.js"></script>

