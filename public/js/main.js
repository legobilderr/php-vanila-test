let container=document.getElementById('container');
let steprow=document.getElementById('step-row');

let Form1 = document.getElementById("Form1");
let Form2 = document.getElementById("Form2");
let Share = document.getElementById("share");

let Next1 = document.getElementById("Next1");
let Next2 = document.getElementById("Next2");
let Back1 = document.getElementById("Back1");
let Back2 = document.getElementById("Back2");

let progress = document.getElementById("progress");





Back1.onclick = function () {
    Form1.style.left = "40px";
    Form2.style.left = "450px";
    progress.style.width = "160px"
    localStorage.setItem('form1Values', JSON.stringify(Form1.style.left));
    localStorage.setItem('form2Values', JSON.stringify(Form2.style.left));
    
}



Next2.onclick = function (e) {
    container.style.height = "350px";
    steprow.style.left = "-450px";
    Form2.style.left = "-450px";
    Share.style.left = "-450px";
    Share.style.left = "40px";
    
}


function checkParams() {
    
}


