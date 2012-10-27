(function(){
	
	
	var addtocart = function(product) {
    var data = [];
    
    for (var i in product) {
      data.push(
        encodeURIComponent(i) 
        + "=" +
        encodeURIComponent(product[i])
      );
    }
    
    data = data.join("&");
    
    console.log(data);
    
    var client = window.XMLHttpRequest 
      ? new XMLHttpRequest() 
        : new ActiveXObject("Microsoft.XMLHTTP");

    client.open("POST", "transacconroler.php", true);
    
    client.onreadystatechange = function() {
      if (client.readyState == 4 && client.status == 200) {
        document.getElementById("transaction").innerHTML = client.responseText;
      }
    };
    
    client.setRequestHeader(
      "Content-Type", 
      "application/x-www-form-urlencoded"
    );
    
    client.send(data);
  };
  
  var form = document.getElementById("addtocart");
  
	form.onsubmit = function(e){
		
		e.preventDefault();
		
		var node = document.getElementById("user_id");
		var user_id = 0;

		if (node) {
		   user_id = parseInt(node.innerHTML);
		}
		
		var product = {
			
			productquantity: this.quantity.value,
			productprice: document.getElementById("productPrice").innerHTML,
			productname: document.getElementById("productName").innerHTML,
			user: document.getElementById("user_id").innerHTML

		};
		
		addtocart(product);
		
		
		document.location.reload(true);
		
		
		return false;
	};

})();