(function(){

var body =  document.getElementById("body");
	
	body.onclick = function(){
		
		var msg = document.getElementById("login_message");
		msg.style.display = "none";
	};
	
	var createUser = function(user) {
    var data = [];
    
    for (var i in user) {
      data.push(
        encodeURIComponent(i) 
        + "=" +
        encodeURIComponent(user[i])
      );
    }
    
    data = data.join("&");
    
    console.log(data);
    
    var client = window.XMLHttpRequest 
      ? new XMLHttpRequest() 
        : new ActiveXObject("Microsoft.XMLHTTP");

    client.open("POST", "usercontroller.php", true);
    
    client.onreadystatechange = function() {
      if (client.readyState == 4 && client.status == 200) {
        document.getElementById("message").innerHTML = client.responseText;
      }
    };
    
    client.setRequestHeader(
      "Content-Type", 
      "application/x-www-form-urlencoded"
    );
    
    client.send(data);
  };
    
    
    
    var form = document.getElementById("registerform");
    
    form.onsubmit = function(e){
	
		e.preventDefault();
	    
	    var user = {
	    	username: this.username.value,
	    	passwordone: this.passwordone.value,
	    	passwordtwo: this.passwordtwo.value,
	    	fullname: this.fullname.value,
	    	email: this.email.value,
	    	mobile: this.mobile.value
		  	  
	    };
	    
	    if(this.passwordone.value!=this.passwordtwo.value){
	    
	    	alert("password doesn't match");
	    
	    }else{
	    
	    createUser(user);
	    
	    }
	    
	    this.username.value='';
	    this.passwordone.value='';
	    this.passwordtwo.value='';
	    this.fullname.value='';
	    this.email.value='';
	    this.mobile.value='';
	    
		 return false;
    };
    
})();

 