<div class = "span9">
<?php foreach($result as $value): ?>
	
<div class = "container-fluid">
<div class = "row-fluid">
	<div class = "span2">
		<img  src = <?php print $value->productIMG ?>>
	</div>
	
	<div class = "span6">
		<h5 id = "productName"><?php print $value->productName; ?></h5>

		<div class = "product_price"> 
				<p id = "productPrice"><?php print $value->Price ?></p>
		</div>
	</div>
	<?php if(!empty($value->quantity)!=0): ?>
		<div class = "span2"> 
			<p id = "aval" class = "text text-success">In Stock (<?php print $value->quantity; ?>)</p>
		</div>

	<?php else: ?>
		<div class = "span2"> 
			<p id = "aval" class = "text text-error">Not Available</p> 
		</div>
		<?php endif; ?>
	<div class = "span7">
		<?php echo embed('tpl/addtocart.tpl.php',array()); ?>
	</div>
	<div id = "resp"></div>
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
</div>
<script type = "text/javascript" src = "js/cart.js"></script>
	

	
	