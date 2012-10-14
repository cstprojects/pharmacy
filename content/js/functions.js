window.onload = function(){
var search = function(){

var form = document.getElementById("search");

form.onkeyup = function() {
	
	var client = window.XMLHttpRequest
		? new XMLHttpRequest()
			: new ActiveXObject("Microsoft.XMLHTTP");	
	var data = document.getElementById("string").value;		
	
	if(data == ""){
		
		document.getElementById("output").innerHTML="";
	}else{
			
	client.open("GET","searchcontroller.php?query="+data,true);
	client.send();
	
	client.onreadystatechange = function() { 
		
		if(client.readyState == 4 && client.status ==200){
			
			document.getElementById("output").innerHTML = client.responseText;
			}
		};
	
	}			

};
};

search();

}