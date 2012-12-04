<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn" data-toggle="modal">Add new product</a>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3 id="myModalLabel">New product</h3>
  </div>
  <div class="modal-body">
  <div class="span3">
  	<form action = "productcontroller.php" method = "POST">
	<input type = "text" name = "productname" placeholder = "name">
	<input type = "text" name = "productdetails" placeholder = "description">
	<input type = "text" name = "productimagelink" placeholder = "image link">
	<input type = "text" name = "productprice" placeholder = "price">
	<input type = "number" name = "productquantity" placeholder = "quantity">
	<input type = "text" name  = "product_category_id" placeholder = "category id">
	<input class = "btn btn-info" type = "submit">
	
</form>
  </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
