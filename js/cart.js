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

    client.open("POST", "cartcontroller.php", false);
    
    client.onreadystatechange = function() {
      if (client.readyState == 4 && client.status == 200) {
			resp = client.responseText;
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
		
		
		var product = {
			
			productquantity: this.quantity.value,
			productprice: document.getElementById("productPrice").innerHTML,
			productname: document.getElementById("productName").innerHTML

		};
		
		
		if(document.getElementById("aval").innerHTML != "Not Available"){
			if(this.quantity.value<=0){
		
				alert("we cant add");
			
		}else{
		
		if(this.quantity.value<=document.getElementById("aval").innerHTML.match(/\d+/g)){

		addtocart(product);
				
		document.location.reload(true);
		
		return false;
		
		}
		
		}
		this.quantity.value = '';
		}	
	};

})();