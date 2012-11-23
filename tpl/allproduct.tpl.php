<div class = "span6">
<?php foreach($result as $value): ?>
<table class = "table table-bordered table-hover">
	<th>
		<?php print "<a href = 'products.php?id=$value->productID'>$value->productName</a>" ?>
		<td>INFO</td>
		<td>Price</td>
	</th>
	<tr>
		<td><img src = "<?php print $value->productIMG; ?>" width="100" height="100"></td>
		<td>
		<?php if(!empty($value->quantity)!=0): ?>
			<p class = "text text-success">In Stock</p>
		<?php else: ?>
			<p class = "text text-error">Not Available</p>	
		<?php endif;?>	
		</td>
		<td>
			<?php print $value->Price; ?>$
		</td>
	</tr>

</table>
<?php endforeach; ?>
</div>	