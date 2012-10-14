<?php  
include 'functions.php';
include 'model.php';

$res =  get_drug($_GET['query']); 
foreach($res as $value): ?>

	<div class ="search_content_info" id ="search_content">
		<div class ="drug_names" id ="name">	
			<h3><?php print $value->productName ?></h3>
		</div>	
		<div class ="content_image" id ="contentimg">
			<img src="<?php print $value->productIMG ?>">
		</div>
		<div class="details" id="more_details">	
		<ul class = "moredetailsinfolist" id ="moredetails_list">
			<li class="moreinfo" id ="moredetaillink">
				<?php print "<a href = products.php?id=$value->productID >Read More & Buy</a>" ?>
 			</li>
		</ul>
	</div>	

	</div>
	
<?php endforeach; ?>






