<?php foreach($result as $value): ?>
	
<div class = "container-fluid">
<div class = "row-fluid">
	<div class = "span2">
		<img  src = <?php print $value->productIMG ?>>
	</div>
	<div class = "span6">
		<h5 id = "productName"><?php print $value->productName; ?></h5>
		<div class = "product_price"> 
				<p id = "productPrice">USD <?php print $value->Price ?></p>
		</div>
	</div>
	<div class = "span7">
		<?php echo embed('tpl/addtocart.tpl.php',array()); ?>
	</div>
	<div class = "span9">
		<div class = "product_description">
		<label>
		<h5>Product Description</h5>
		</label>
		<p><?php print $value->productDetails; ?></p>
		</div>
	</div>
</div>	

</div>
<?php endforeach; ?>	
	
	