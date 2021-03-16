$(document).ready(function(){

    //view values from storage
    var position = JSON.parse(localStorage.getItem("form1Values"));
    $('#Form1').css({'left': position});
    var position = JSON.parse(localStorage.getItem("form2Values"));
    $('#Form2').css({'left': position});
    var position = JSON.parse(localStorage.getItem("progress"));
    $('#progress').css({'width': position});


    $('#Form1').on('submit',function(event){


        event.preventDefault();

        localStorage.setItem("flag","set");
        var form = $(this);
        let data= $('#Form1').serializeArray();

        $.each(data, function(i, obj){
            localStorage.setItem(obj.name,obj.value);
        });


        var createUser=$.ajax({
            url:form.attr('action'),
            data: form.serialize(),
            method: form.attr('method')
        });

        createUser.done(function (data){
            if (data){
                // console.log(data);
            var response = JSON.parse(data);
            console.log(response);
            $('.erorMassegeEmail').text(response.errors).slideDown();
            $('.erorMassegeFirstName').text(response.models.errors.FirstName).slideDown();
            $('.erorMassegeLastNAme').text(response.models.errors.LastNAme).slideDown();
            $('.erorMassegeReportSubject').text(response.models.errors.ReportSubject).slideDown();
            $('.erorMassegePhone').text(response.models.errors.phone_num).slideDown();
            $('.erorMassegeEmail').text(response.models.errors.Email).slideDown();
            return false;
        }    
            else{
                $('#Form1').css({'left': '-450px'});
                $('#Form2').css({'left': '40px'});
                $('#progress').css({'width': '360px'});
                var form1='-450px';
                var form2='40px';
                var progress='360px';
                localStorage.setItem('form1Values', JSON.stringify(form1));
                localStorage.setItem('form2Values', JSON.stringify(form2));
                localStorage.setItem('progress', JSON.stringify(progress));
                console.log('ok')}
        });

    })





    if (localStorage.getItem('flag')=='set'){
        let data= $('#Form1').serializeArray();
    

        $.each(data, function(i, obj){
            $("[name='"+obj.name+"']").val(localStorage.getItem(obj.name))
        });
    }


    $('#Form2').on('submit',function(event){
        event.preventDefault();
        localStorage.clear();
        var form = $(this);
        var files = $('#avatar')[0].files;
        form.append('avatar',files[0]);

        var createUser=$.ajax({
            url:form.attr('action'),
            data: new FormData(this),
            enctype: form.attr('enctype'),
            method: form.attr('method'),
            cache:false,
            contentType: false,
            processData: false,
        });
        
        createUser.done(function (data){
            var response = JSON.parse(data);
            $('.float-right').text('all members ('+response.count+')').slideDown();
            console.log('ok2');
        });
    })
    
        
})