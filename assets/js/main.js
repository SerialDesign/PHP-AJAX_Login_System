
    //alert("form was not submitted");
$(document)
.on("submit", "form.js-register, form.js-login", function(event) {
    event.preventDefault();
    
    let _form = $(this); //entire form element in variable _form
    let _error = $(".js-error", _form);

    let dataObj = {
        email: $("input[type='email']", _form).val(), //only searches within form element, not the whole page. Good practise if you have a big page
        password: $("input[type='password']", _form).val()
    }

    //just a very simple js validation
    if(dataObj.email.length < 6){
        _error
            .text("Please enter a valid email address")
            .show();
        return false; // just exit here
    }else if(dataObj.password.length < 11){
        _error
            .text("Please enter a passphrase that is at least 11 characters long.")
            .show();
        return false; // just exit here
    }


    //Assuming the code gets this far, we can start the AJAX process
    _error.hide();

    //console.log(dataObj);

    $.ajax({
        type: 'POST',
        url: 'ajax/register.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        //whatever data is
        console.log(data);
        if(data.redirect !== undefined){
           //window.location = data.redirect; 
        }
        alert(data.name);
    })
    .fail(function ajaxFailed(e){
        // This failed
        console.log(e);
    })
    .always(function ajaxAlwaysDoThis(dataObj){
        // Always do
        console.log("Always");
    })



    return false;
})