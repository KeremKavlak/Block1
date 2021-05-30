
quiz = [[],[],[],[]];
function generateQuiz(){
	var easy = document.getElementById("Easy");
	var hard = document.getElementById("Hard");
var difficulty;
if(easy.checked){difficulty = "easy";}else {difficulty = "hard";}
//variables
for(var i = 0; i < quiz.length; i++){
var genInt1 = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
var genInt2 = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
var ans;


//selection of easy or hard
var arithmetic;
if (difficulty == "easy"){
 arithmetic = " plus ";
 ans = genInt1 + genInt2;
} else {
	arithmetic = " times "
	ans = genInt1 * genInt2;
}

quiz[i] = [i+1, "What is " + genInt1 + arithmetic + genInt2, ans]; 
console.log(quiz[i][1]);
console.log(quiz[i][2]);
}
document.getElementById("question").innerHTML = quiz[0][1];
}






//definitions
var counter = 0;
var j = 0;


//user submiton
function submit(){
	var userAnswer = document.getElementById("ans").value;
    var answer = quiz[j][2];
    var score = document.getElementById("score");     


//if correct add 1 score to counter
if (userAnswer == answer) {
		ansresp.innerHTML = "correct";
		counter++;
		score.innerHTML = counter;
		
//if incorrect remove 1 score IF score is above 0
	}else {
		if (counter > 0) {
		counter--
	    ansresp.innerHTML = "wrong";
	    score.innerHTML = counter;
	   
//notify user they've got the answer wrong, since the score is 0 don't change it (otherwise it'll be minus)
		} else {
			ansresp.innerHTML = "wrong";
			score.innerHTML = counter;
			}
	}

//cycle through quiz array
if (j < quiz.length && j != quiz.length -1){
j++;
//show question
document.getElementById("question").innerHTML = quiz[j][1]; 
} else{
//when done cycling through array

var localLog = localStorage.getItem("currentAccount");

var account = JSON.parse(localStorage.getItem(localLog));
account.newScore = counter;

localStorage.setItem(localLog, JSON.stringify(account));

document.getElementById("question").innerHTML = "The END!";

location.reload();
}
}


