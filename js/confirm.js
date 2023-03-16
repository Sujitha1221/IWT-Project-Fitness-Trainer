function checkPassword(){
	var pass = document.getElementById('pwd').value;
	var repass = document.getElementById('repwd').value;
	
	if(pass != repass){
		window.alert("Password mismatch");
		return false;
	}	
	
	else{
		window.alert("Success");
		return true;
	}
}
function enableButton(){
		var checkbox = document.getElementById('check');
		
		if(checkbox.checked == true){
			document.getElementById('registerbtn').disabled = false;
		}
		
		else{
			document.getElementById('registerbtn').disabled = true;
		}
}
