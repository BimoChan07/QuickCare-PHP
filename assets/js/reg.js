var fname = document.querySelector('[name="fname"]')
var contactn = document.querySelector('[name="contactn"]')
var email = document.querySelector('[name="email"]')
var comments = document.querySelector('[name="comments"]')


var submitButton = document.querySelector('[name="login"]');

submitButton.addEventListener('click', function(event) {
    event.preventDefault();
    var fnameErrorSpan = document.querySelector('.fname-not-found');
    var contactnErrorSpan = document.querySelector('.contactn-not-found');
    var emailErrorSpan = document.querySelector('.email-not-found');
    var successMessageSpan = document.querySelector('.form-submitted');
    var fnameError = '';

    var contactnError = '';
    var emailError = '';
    var successMessage = '';

    if (fname.value == '') {
        fnameError += 'Please Enter Your First Name!!';
    }
    if (contactn.value == '') {
        contactnError += 'Please Enter Your Contactn No!!';
    }
    if (email.value == '') {
        emailError += 'Please Enter Your Email!!';
    }
    if (fname.value != '' && contactn.value != '' && email.value != '') {
        successMessage += 'Form Submitted Successfully';
    }

    fnameError ? fnameErrorSpan.innerHTML = fnameError : fnameErrorSpan.innerHTML = '';
    contactnError ? contactnErrorSpan.innerHTML = contactnError : contactnErrorSpan.innerHTML = '';
    emailError ? emailErrorSpan.innerHTML = emailError : emailErrorSpan.innerHTML = '';
    successMessage ? successMessageSpan.innerHTML = successMessage : successMessageSpan.innerHTML = '';

    function formSubmit() {
        document.getElementById("form").submit();
    }
    var form = document.querySelector('[name="form"]');
    successMessage ? formSubmit() : '';
});