(function() { 
	
	var user = document.getElementById("userfullname").innerHTML;
	var admintools = document.getElementById("admintools")
	if(user.match("lasha badashvili")){
		
		admintools.style.display = "block";
	}
	
})();