 <ul class="thumbnails">
 <?php foreach($result as $value): ?>
  <li>
    <div class="thumbnail">
      <img src="<?php print $value->productIMG;?>" alt="" width = "100" height = "100">

    </div>
  </li>
    <?php endforeach; ?>	
</ul>
