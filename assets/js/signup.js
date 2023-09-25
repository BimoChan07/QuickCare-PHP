var fname = document.querySelector('[name="fname"]')
var email = document.querySelector('[name="email"]')
var password = document.querySelector('[name="password"]')
var username = document.querySelector('[name="username"]')

var submitButton = document.querySelector('[name="login"]');

submitButton.addEventListener('click', function(event) {
    event.preventDefault();
    var fnameErrorSpan = document.querySelector('.fname-not-found');
    var emailErrorSpan = document.querySelector('.email-not-found');
    var passwordErrorSpan = document.querySelector('.password-not-found');
    var usernameErrorSpan = document.querySelector('.username-not-found');
    var successMessageSpan = document.querySelector('.form-submitted');
    var fnameError = '';
    var emailError = '';
    var passwordError = '';
    var usernameError = '';
    var successMessage = '';

    if (fname.value == '') {
        fnameError += 'Please Enter Your Full Name !!';
    }
    if (email.value == '') {
        emailError += 'Please Enter Your Email !!';
    }
    if (password.value == '') {
        passwordError += 'Please Enter Your Password !!';
    }
    if (username.value == '') {
        usernameError += 'Please Enter Your Username !!';
    }
    if (fname.value != '' && email.value != '' && password.value != '' && username.value != '') {
        successMessage += 'Form Submitted Successfully';
    } else {
        successMessage += 'Please check the entry once again';
    }

    fnameError ? fnameErrorSpan.innerHTML = fnameError : fnameErrorSpan.innerHTML = '';
    emailError ? emailErrorSpan.innerHTML = emailError : emailErrorSpan.innerHTML = '';
    passwordError ? passwordErrorSpan.innerHTML = passwordError : passwordErrorSpan.innerHTML = '';
    usernameError ? usernameErrorSpan.innerHTML = usernameError : usernameErrorSpan.innerHTML = '';
    successMessage ? successMessageSpan.innerHTML = successMessage : successMessageSpan.innerHTML = '';

    function formSubmit() {
        document.getElementById("form").submit();
    }
    var form = document.querySelector('[name="form"]');
    successMessage ? formSubmit() : '';
});