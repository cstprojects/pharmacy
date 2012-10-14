<div class ="last_added_header">LAST ADDED</div>
<?php foreach($result as $value): ?>	
<div class = "last_added_product">		
	<div class = "last_added_product_title">
		<?php print "<a href = '?id=$value->productID'> $value->productName </a>"; ?>
	</div>
	<div class = "top_last_added_product_image">
		<img src = "<?php print $value->productIMG;?>" width = "100" height = "100">
	</div>
</div>	
	
<?php endforeach; ?>	