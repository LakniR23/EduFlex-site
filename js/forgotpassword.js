function checkPassword() {
	var password = document.getElementById("pwd").value;
	var confirmPassword = document.getElementById("cpwd").value;
	
	//conditions
	if (password !== confirmPassword) {
		alert("Password Mismatched!");
		return false;
	} else {
		alert("Success");
		return true;
	}
}