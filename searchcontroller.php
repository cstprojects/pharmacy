<?php  
include 'functions.php';
include 'model.php';

$res =  get_drug($_GET['query']); 
foreach($res as $value): ?>

<div class ="search_content_info" id ="search_content">
		<div class="details" id="more_details">	
		<ul class = "moredetailsinfolist" id ="moredetails_list">
			<li>
			<?php if(!empty($value->productIMG)): ?>
				<img src = "<?php print  $value->productIMG ?>" height = "50" width = "50">
			<?php endif; ?>
			</li>
			<li class="moreinfo" id ="moredetaillink">
				<?php print "<a href = products.php?id=$value->productID >$value->productName</a>" ?>
 			</li>
		</ul>
	</div>	
</div>
	
<?php endforeach; ?>






