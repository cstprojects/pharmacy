 <ul class="thumbnails lastadded">
  <?php foreach($result as $value): ?>
  <li>
    <div class="thumbnail">
	<?php print "<a href = 'products.php?id=$value->productID'><img src='$value->productIMG' width = '100' height = '100'></a>" ?>
    </div>
  </li>
<?php endforeach; ?>  
</ul>

		

