function validateName(){
    var name = document.getElementById("finalname").value;
    name.trim(); 
    if(name.length > 0){ 
        var regexp = /^([A-z',.\s?]+)$/;
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("Name has incorrect format, please enter alphabetical symbols separated with a blankspace.");
            return false;
        }
    }
    alert("Please fill in your name.");
    return false;
}

function validateContact(){
	var contact = document.getElementById("finalcontact").value;
	contact.trim();
	if(contact.length > 0){
		var regexp = /[0-9]{8}/;
		if(regexp.test(contact)){
			return true;
		}
		else{
			alert("Contact entered in wrong format.");
			return false;
		}
		alert("Please fill in your contact.");
		return false;
	}
}

function validateEmail(){
	var email = document.getElementById("finalemail").value;
	email.trim();
	if(email.length > 0){
		var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
		if(regexp.test(email)){
			return true;
		}
		else{
			alert("Email entered in wrong format.");
			return false;
		}
		alert("Please fill in your Email.");
		return false;
	}
}