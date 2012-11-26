<div class = "span9">
<?php foreach($result as $value): ?>
<div class="container-fluid">
	<div class="row-fluid">
	<div class="span3">
	<img  src = <?php print $value->productIMG ?>>
	</div>	
		<h5 id = "productName"><?php print $value->productName; ?></h5>
		<p id = "productPrice"><?php print $value->Price ?></p>
		
		<?php if(!empty($value->quantity)!=0): ?>
		 	<p id = "aval" class = "text text-success">In Stock (<?php print $value->quantity; ?>)</p>
		 <?php else: ?> 
		 
		<p id = "aval" class = "text text-error">Not Available</p> 
		<?php endif; ?>
	
		<?php echo embed('tpl/addtocart.tpl.php',array()); ?>
		
		</div>	
	<label>
	<h5>Product Description</h5>
	</label>
	<p class="desc"><?php print $value->productDetails; ?></p>		
</div>	
<?php endforeach; ?>
</div>

<script type = "text/javascript" src = "js/cart.js"></script>
	

	
	