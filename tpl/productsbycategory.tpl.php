<?php foreach($result as $value): ?>
<table class = "table table-bordered table-hover">
	<th>
		<?php print "<a href = 'products.php?id=$value->productID'>$value->productName</a>" ?>
	</th>
	<tr>
		<td><img src = "<?php print $value->productIMG; ?>" width="100" height="100"></td>
	</tr>
	<tr>
	<td><input type = "number" placeholder = "quantity"></td>
	</tr>
</table>
<?php endforeach; ?>	