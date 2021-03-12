let Form1 = document.getElementById("Form1");
let Form2 = document.getElementById("Form2");
let Share = document.getElementById("share");

let Next1 = document.getElementById("Next1");
let Next2 = document.getElementById("Next2");
let Back1 = document.getElementById("Back1");
let Back2 = document.getElementById("Back2");

let progress = document.getElementById("progress");


Next1.onclick = function (e) {
    Form1.style.left = "-450px";
    Form2.style.left = "40px";
    progress.style.width = "360px";
    localStorage.setItem('form1Values', JSON.stringify(Form1.style.left));
    localStorage.setItem('form2Values', JSON.stringify(Form2.style.left));
    
}

Back1.onclick = function () {
    Form1.style.left = "40px";
    Form2.style.left = "450px";
    progress.style.width = "160px"
    localStorage.setItem('form1Values', JSON.stringify(Form1.style.left));
    localStorage.setItem('form2Values', JSON.stringify(Form2.style.left));
    
}



show();

Next2.onclick = function (e) {
    Form2.style.left = "-450px";
    Share.style.left = "-450px";
    Share.style.left = "40px";
    
}

function checkParams() {
    var FirstName = $('#FirstName').val();
    var LastNAme = $('#LastNAme').val();
    
    var ReportSubject = $('#ReportSubject').val();
    
    var phone_num = $('#phone_num').val();
    var Email = $('#Email').val();
    if (FirstName.length != 0 && LastNAme.length != 0 && ReportSubject.length != 0 && phone_num.length != 0 && Email.length != 0
    ) {
        $('#Next1').removeAttr('disabled');
    } else {
        $('#Next1').attr('disabled', 'disabled');
    }
}


