<ul class="nav nav-tabs nav-stacked">
<li class ="nav-header">Category</li>
<?php foreach($result as $value): ?>
  <li>
	<?php print "<a href ='Category.php?id=$value->categoryID'>  $value->categoryName </a>" ?>
   </li>
 <?php endforeach; ?>
</ul>


