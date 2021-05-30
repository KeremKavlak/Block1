window.onload = tabgen;


function tabgen() {

debugger;
var sctable = [];

var valid = false;
if (localStorage.length > 0){
     for (var i = 0; i < localStorage.length; i++){
        if( localStorage.key(i) != "currentAccount"){
            var location =JSON.parse(localStorage.getItem(localStorage.key(i)));
        	sctable.push(location);
        	valid = true;
        }
    
    }
                
}








if (valid) {  
var table = document.getElementById("highscores");
for(var i = 0; i < sctable.length; i++){
    table.innerHTML = table.innerHTML + ("<tr> <td>"+ sctable[i].username+"</td> <td>"+ sctable[i].newScore + "</td> </tr>");
}

}


}
