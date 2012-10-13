<?php foreach($result as $value): ?>
	
<div class = "product_info">
<div class = "product_img">
		<img  src = <?php print $value->productIMG ?>>
		</div>
	<table border = "1">
		<tr>
			<td>Name</td>
			<th><?php print $value->productName; ?></th>
		</tr>
		<tr>
			<td>Category</td>
		</tr>
		<tr>
			<td>Description</td>
			<td><?php print $value->productDetails; ?> </td>
		</tr>
		<tr>
			<td>Price</td>
		</tr>
	</table>	
</div>
<?php endforeach; ?>	
	
	