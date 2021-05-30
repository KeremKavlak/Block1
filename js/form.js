

function reg() {

//obtaining input elements
var userNameC = document.getElementById("userC").value;
var passWordC = document.getElementById("passwordC").value;
var feedbackC = document.getElementById("fbC"); 



//validation(error)
if ( userNameC == false   || userNameC.length < 5) {
	alert("make sure the username/password field is filled in and more than 5 characters");
}
else if (passWordC == false || passWordC.length < 5) {
	alert("make sure the username/password field is filled in and more than 5 characters");
}
//creating new account for local storage
else{
	var userLog = {
	username: userNameC,
	password: passWordC
};
	localStorage.setItem(userNameC, JSON.stringify(userLog));
	alert("account created");
}

}


function login() {



//obtaining input elements
var userName = document.getElementById("user").value;
var passWord = document.getElementById("pass").value;


//console.log(accountDetails);
//var feedback = document.getElementById("fb");

//validation(error)
if ( userName == false   || userName.length < 5) {
	alert("make sure the username/password field is filled in and more than 5 characters");
}
else if (passWord == false || passWord.length < 5) {
	alert("make sure the username/password field is filled in and more than 5 characters");
} 
else if (localStorage[userName] == undefined){
    alert("This account does not exist.")
}
else {
	var accountDetails = JSON.parse(localStorage[userName]);
		if ((userName == accountDetails.username) && (passWord == accountDetails.password)) {
	alert("logged in");
    localStorage.currentAccount = userName;
}

}
/*else if (localStorage[userName] == undefined){
    alert("This account does not exist.")
}else if ((userName == accountDetails.username) && (passWord == accountDetails.password)) {
	alert("logged in");
    localStorage.currentAccount = userName;
}
*/

}




