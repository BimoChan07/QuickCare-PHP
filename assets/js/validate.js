var username = document.querySelector('[name="username"]')
var password = document.querySelector('[name="password"]')

var submitButton = document.querySelector('[name="login"]');

submitButton.addEventListener('click', function(event) {
    event.preventDefault();
    var usernameErrorSpan = document.querySelector('.username-not-found');
    var passwordErrorSpan = document.querySelector('.password-not-found');
    var successMessageSpan = document.querySelector('.form-submitted');
    var usernameError = '';
    var passwordError = '';
    var successMessage = '';

    if (username.value == '') {
        usernameError += 'Please Enter Username!!';
        //  console.log("Username is empty!!!");
    }
    if (password.value == '') {
        passwordError += 'Please Enter Password!!';
        //  console.log("Username is empty!!!");
    }
    if (username.value != '' && password.value != '') {
        successMessage += 'Form Submitted Successfully';
    }

    usernameError ? usernameErrorSpan.innerHTML = usernameError : usernameErrorSpan.innerHTML = '';
    passwordError ? passwordErrorSpan.innerHTML = passwordError : passwordErrorSpan.innerHTML = '';
    successMessage ? successMessageSpan.innerHTML = successMessage : successMessageSpan.innerHTML = '';

    function formSubmit() {
        document.getElementById("form").submit();
    }
    var form = document.querySelector('[name="form"]');
    successMessage ? formSubmit() : '';
});