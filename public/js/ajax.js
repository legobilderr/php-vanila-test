$(document).ready(function(){
    $('#Form1').on('submit',function(event){
        event.preventDefault();
        var form = $(this);
        var createUser=$.ajax({
            url:form.attr('action'),
            data: form.serialize(),
            method: form.attr('method')
        });
        createUser.done(function (data){
            console.log('ok');
            console.log(data);
        });
    })
    $('#Form2').on('submit',function(event){
        event.preventDefault();
        var form = $(this);
        var files = $('#avatar')[0].files;
        form.append('avatar',files[0]);

        var createUser=$.ajax({
            url:form.attr('action'),
            data: form.serialize(),
            method: form.attr('method')
        });
        createUser.done(function (data){
            console.log('ok2');
            console.log(data);
        });
    })
})