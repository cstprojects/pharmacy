(function(){
				
var deletefromcart = function(product){
var data = [];
			
	for(var i in product){
		 data.push(
			encodeURIComponent(i)
			+"="+
			encodeURIComponent(product[i])
				
			);
		}
				
	data = data.join("&");
				
   console.log(data);
    
    var client = window.XMLHttpRequest 
      ? new XMLHttpRequest() 
        : new ActiveXObject("Microsoft.XMLHTTP");

    client.open("POST", "trash.php", true);
    
    client.onreadystatechange = function() {
      if (client.readyState == 4 && client.status == 200) {
        var resp = client.responseText;
		document.getElementById("testtrash").innerHTML = resp;
      }
    };
    
    client.setRequestHeader(
      "Content-Type", 
      "application/x-www-form-urlencoded"
    );
    
    client.send(data);
  };
  
  
	var trash = document.getElementsByClassName("icon-trash");
	for(var i = 0; i<trash.length; i++){
		
		trash[i].onclick = function(){
			
			var press  = confirm("Are you sure you want to delete this item?");
			
			if(press == true){
				
					
					
					var product = {
						id:this.parentNode.parentNode.parentNode.cells[0].innerHTML
					};		
					
					deletefromcart(product);		
				
				var id = this.parentNode.parentNode.parentNode.rowIndex;
				var table = document.getElementById("cartTable");
				var removerow =  table.deleteRow(id);
				
				document.location.reload(true);
		
			}else{
				//cancel
			}
		
		}
	
	}
		
 

 
  		

})();