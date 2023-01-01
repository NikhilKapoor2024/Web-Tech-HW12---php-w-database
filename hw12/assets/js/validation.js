// JavaScript Document
// checkName
function checkName(nameValue, nameId) {
	
	console.log("Name: " + nameValue);
	console.log("ID: " + nameId);
	var pattern = /[a-zA-Z]+$/;
	var msg;
	if (nameValue.match(pattern)) {
		msg = "Data is valid";
	}
	else {
		msg = "Invalid data entered";
	}
	
	document.getElementById(nameId+'Help').innerHTML = msg;
}

function checkEmail(emailValue) {
	
	console.log("Email: " + emailValue);
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var msg;
	if (emailValue.match(mailformat)) {
		msg = "Email is valid";
		console.log("valid");
	}
	else {
		msg = "Email is invalid";
		console.log("invalid");
	}
	
	document.getElementById("emailHelp").innerHTML = msg;
}

function checkUserName(unameValue, unameId) {
	console.log("Username: " + unameValue);
	console.log("ID: " + unameId);
	var uNFormat = /[a-zA-Z0-9]+$/;
	var msg;
	if (unameValue.length < 8 || !(unameValue.match(uNFormat))) {
		msg = "Username invalid";
	}
	else {
		msg = "Username works!";
	}
	
	document.getElementById(unameId + "Help").innerHTML = msg;
}

function checkComment(cmntValue, cmntId) {
	console.log("Comment: " + cmntValue);
	console.log("ID: " + cmntId);
	var cFormat = /[^a-zA-Z0-9.]/;
	var msg;
	if (cmntValue.match(cFormat)) {
		msg = "Comment invalid!";
	}
	else {
		msg = "Comment valid";
	}
	
	document.getElementById(cmntId + "Help").innerHTML = msg;
}