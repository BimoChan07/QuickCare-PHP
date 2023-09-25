var fname = document.querySelector('[name="fname"]')
var lname = document.querySelector('[name="lname"]')
var contactn = document.querySelector('[name="contactn"]')
var email = document.querySelector('[name="email"]')
var form = document.querySelector('[name="loginForm"]')

var submitButton = document.querySelector('[name="submit"]');

console.log(fname);
console.log(lname);
console.log(contactn);
console.log(email);

submitButton.addEventListener('click', function(event){
  event.preventDefault();
  var fnameErrorSpan = document.querySelector('.fname-not-found');
  var lnameErrorSpan = document.querySelector('.lname-not-found');
  var contactNErrorSpan = document.querySelector('.contact-not-found');
  var emailErrorSpan = document.querySelector('.email-not-found');
  var successMessageSpan = document.querySelector('.form-submitted');
  var fnameError = '';
  var lnameError = '';
  var contactNError = '';
  var emailError = '';
  var successMessage = '';

 if ( fname.value == '') {
   fnameError += 'Please Enter First Name!!';
  //  console.log("Username is empty!!!");
  } 
  if ( lname.value == '') {
    lnameError += 'Please Enter Last Name!!';
   //  console.log("Username is empty!!!");
   } 
   if ( contactn.value == '') {
    contactNError += 'Contact Number cannot be empty!!';
   //  console.log("Username is empty!!!");
   } 
  if ( email.value == '') {
    emailError += 'Please Enter Your Email!!';
  //  console.log("Password is empty!!!");
  }
  if ( fname.value != '' && lname.value != '' && contactn.value != '' && email.value != ''){
    successMessage += 'Form Submitted Successfully';
  }

  fnameError ? fnameErrorSpan.innerHTML = fnameError : fnameErrorSpan.innerHTML = '';
  lnameError ? lnameErrorSpan.innerHTML = lnameError : lnameErrorSpan.innerHTML = '';
  contactNError ? contactNErrorSpan.innerHTML = contactNError : contactNErrorSpan.innerHTML = '';
  emailError ? emailErrorSpan.innerHTML = emailError : emailErrorSpan.innerHTML = '';
  successMessage ? successMessageSpan.innerHTML = successMessage : successMessageSpan.innerHTML ='';

  // var form = document.querySelector('[name = "form" ]');
  successMessage ? loginForm.submit() : '';
});

function formSubmit(){
  loginForm.submit();
}
function formReset(){
  document.getElementById("loginForm").reset();
}

// formSubmit();