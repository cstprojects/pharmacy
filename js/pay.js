(function(){
	
	
	var payfor = function(products) {
    var data = [];
    
    for (var i in products) {
      data.push(
        encodeURIComponent(i) 
        + "=" +
        encodeURIComponent(products[i])
      );
    }
    
    data = data.join("&");
    
    console.log(data);
    
    var client = window.XMLHttpRequest 
      ? new XMLHttpRequest() 
        : new ActiveXObject("Microsoft.XMLHTTP");

    client.open("POST", "paycontroller.php", true);
    
    client.onreadystatechange = function() {
      if (client.readyState == 4 && client.status == 200) {
			document.getElementById("paymentmessage").innerHTML = client.responseText;
      }
    };
    
    client.setRequestHeader(
      "Content-Type", 
      "application/x-www-form-urlencoded"
    );
    
    client.send(data);
  };
  
  var form = document.getElementById("payment");
  
	form.onsubmit = function(e){
		
		var products = {
		 	creditcardtype: this.creditcardtype.value,
			creditcardnumber: this.creditcardnumber.value,
			firstname: this.firstname.value,
			lastname: this.lastname.value,
			country: this.country.value,
			address: this.address.value,
			amount: this.amount.value
			
		
		};
		
		payfor(products);
			
			this.creditcardnumber.value ='';
			this.firstname.value ='';
			this.lastname.value ='';
			this.address.value='';
			this.amount.value='';
			
			setTimeout("location.reload(true);",3000);
			return false;	
			
		};
		
		
	

})();