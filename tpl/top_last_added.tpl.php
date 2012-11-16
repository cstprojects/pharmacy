 <ul class="thumbnails lastadded">
  <?php foreach($result as $value): ?>
  <li>
    <div class="thumbnail">
	<a href="#<?php print $value->productID?>" role="button" data-toggle="modal"><img src="<?php print $value->productIMG?>" width = '100' height = '100' ></a>
    </div>
</li>	
<div id="<?php print $value->productID?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel"><?php print $value->productName ?></h3>
  </div>
  <div class="modal-body">
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
  </div>
  <div class="modal-footer">
  
   <?php print "<a href = 'products.php?id=$value->productID'> <button class='btn'>Read More</button> </a>"?>
   <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
	
  </li>
<?php endforeach; ?>  
</ul>

		

