let Form1 = document.getElementById("Form1");
let Form2 = document.getElementById("Form2");
let Form3 = document.getElementById("Form3");

let Next1 = document.getElementById("Next1");
let Next2 = document.getElementById("Next2");
let Back1 = document.getElementById("Back1");
let Back2 = document.getElementById("Back2");

let progress = document.getElementById("progress");


Next1.onclick = function (e) {
    Form1.style.left = "-450px";
    Form2.style.left = "40px";
    progress.style.width = "360px";
}

Back1.onclick = function () {
    Form1.style.left = "40px";
    Form2.style.left = "450px";
    progress.style.width = "160px"

}

function checkParams() {
    var FirstName = $('#FirstName').val();
    var LastNAme = $('#LastNAme').val();
    // var birthday = $('#birthday').val(); 
    var ReportSubject = $('#ReportSubject').val();
    // var country = $('#country').val();
    var phone_num = $('#phone_num').val();
    var Email = $('#Email').val();
    if (FirstName.length != 0 && LastNAme.length != 0 && ReportSubject.length != 0 && phone_num.length != 0 && Email.length != 0
    ) {
        $('#Next1').removeAttr('disabled');
    } else {
        $('#Next1').attr('disabled', 'disabled');
    }
}


// submitForms = function(){
//     document.getElementById("Form1").submit();
//     document.getElementById("Form2").submit();
//     return true;
// }


// $(document).ready(function(){
//     $('#Form1').on('submit',function(event){
//         event.preventDefault();
//         var form = $(this);
//         var createUser=$.ajax({
//             url:form.attr('action'),
//             data: form.serialize(),
//             method: form.attr('method')
//         });
//         createUser.done(function (data){
//             console.log('ok');
//             console.log(data);
//         });
//         createUser.fail(function (data){
//             console.log('no ok');
//             console.log(data);
//         });
//     })
// })