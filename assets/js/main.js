$(document).on("submit", "form.js-register", function(event) {

    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);

    var dataObj = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='Password']", _form).val()
    };

    if (dataObj.email.length < 16) {
        _error.text("Please enter a valid email address").show();
        return false;
    } else if (dataObj.password.length < 6) {
        _error.text("Please enter password at least 6 characters long").show();
        return false;
    }

    //Assuming the code gets this far, we can start the ajax process

    $.ajax({
            type: 'GET',
            url: '/ajax/register.php',
            data: dataObj,
            datatype: 'json',
            async: true
        })
        .done(function ajaxDone(data) {
            console.log(data);
            // if (data.redirect !== undefined)
            //     window.location = data.redirect;
        })
        .fail(function ajaxFailed(e) {
            console.log(e);
        })
        .always(function ajaxAlwaysDoThis(data) {
            console.log('Always');
        })

    _error.hide();
    //  console.log(data);
    //alert('form was submitted');
    return false;
})