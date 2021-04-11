
    //alert("form was not submitted");
$(document)
.on("submit", "form.js-register, form.js-login", function(event) {
    event.preventDefault();
    
    let _form = $(this); //entire form element in variable _form
    let _error = $(".js-error", _form);

    let data = {
        email: $("input[type='email']", _form).val(), //only searches within form element, not the whole page. Good practise if you have a big page
        password: $("input[type='password']", _form).val()
    }

    //just a very simple js validation
    if(data.email.length < 6){
        _error
            .text("Please enter a valid email address")
            .show();
        return false; // just exit here
    }else if(data.password.length < 11){
        _error
            .text("Please enter a passphrase that is at least 11 characters long.")
            .show();
        return false; // just exit here
    }


    //Assuming the code gets this far, we can start the AJAX process
    _error.hide();

    console.log(data);


    return false;
})