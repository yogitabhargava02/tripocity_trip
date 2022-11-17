
function validatePassword() {
var defaultcurrentPass,changenewPass,RetypePassword,output = true;

defaultcurrentPass = document.frmChange.defaultcurrentPass;
changenewPass = document.frmChange.changenewPass;
RetypePassword = document.frmChange.RetypePassword;

if(!defaultcurrentPass.value) {
	defaultcurrentPass.focus();
	document.getElementById("defaultcurrentPass").innerHTML = "required";
	output = false;
}
else if(!changenewPass.value) {
	changenewPass.focus();
	document.getElementById("changenewPass").innerHTML = "required";
	output = false;
}
else if(!RetypePassword.value) {
	RetypePassword.focus();
	document.getElementById("RetypePassword").innerHTML = "required";
	output = false;
}
if(changenewPass.value != RetypePassword.value) {
	changenewPass.value="";