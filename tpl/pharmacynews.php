<?php foreach($feed->channel as $value): ?>
	<div class = "news_header">
		<h3><?php print $value->title; ?></h3>
	</div>
<?php endforeach;?>
<?php for($i=0; $i<10; $i++): ?>
<div class = "news_info" >
	<div class = "news_title">
			<h5><?php print $feed->item[$i]->title; ?></h5>
		</div>
			<div class = "news_description">
				<?php print $feed->item[$i]->description; ?>
			</div>
		<div class = "news_link">
			<a href = "<?php print $feed->item[$i]->link ?>">Read Article</a>
	</div>
</div>		
<?php endfor; ?>		