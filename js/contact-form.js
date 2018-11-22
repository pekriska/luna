
// Subor riesi validaciu formularu, pridava a odobera classy pre vypis oznameni vola ajax.php
$(document).ready( function () {

    $('#drosselContactForm').on('submit', function(e){
    
        e.preventDefault();

        $('.has-error').removeClass('has-error');
        $('.js-show-feedback').removeClass('js-show-feedback');

        var form    =  $(this);
            name    =  form.find('#name').val();
            email   =  form.find('#email').val();
            message =  form.find('#message').val();
            ajaxurl =  form.data('url');

        function IsEmail(email) {
            var regex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
            return regex.test(email);
        }

        if( name === '' ){
            $('#name').parent('.form-group').addClass('has-error');
            return;
        }
    
        if( !IsEmail(email) ){
            $('#email').parent('.form-group').addClass('has-error');
            return;
        }
    
        if( message === '' ){
            $('#message').parent('.form-group').addClass('has-error');
            return;
        }

        form.find('input, button, textarea').attr('disabled', 'disabled', 'disabled');
        
        $('.js-form-submission').addClass('js-show-feedback');

        $.ajax({
                
            url  : ajaxurl,
            type : 'post',
            data : {   
                name    : name,
                email   : email,
                message : message,
                action  : 'drossel_save_user_contact_form'   
                },
                error   : function( response ){
                    $('.js-form-submission').removeClass('js-show-feedback');
                    $('.js-form-error').addClass('js-show-feedback');
                    form.find('input, button, textarea').removeAttr('disabled', 'disabled', 'disabled');
                },
                success : function( response ){
                    if(response == 0){
                        setTimeout(function(){
                            $('.js-form-submission').removeClass('js-show-feedback');
                            $('.js-form-error').addClass('js-show-feedback');
                             form.find('input, button, textarea').removeAttr('disabled', 'disabled', 'disabled');  
                        },1000);  
                    } 
                    else {
                        setTimeout(function(){
                            $('.js-form-submission').removeClass('js-show-feedback');
                            $('.js-form-success').addClass('js-show-feedback');
                            form.find('input, button, textarea').removeAttr('disabled', 'disabled', 'disabled').val('');
                        }, 1000);
                    }
                }
                
        });



    });

});
