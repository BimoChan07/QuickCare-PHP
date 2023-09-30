const toggleVisibility = () => {
  let passwordEvent = document.getElementById("cpassword");
  passwordEvent.addEventListener("input", function () {
    let inputValue = document.getElementById("cpassword").value;
    while (inputValue.length < 1) {
      return false;
    }
    document.getElementById("button-addon2").style.display = "block";
  });
};
const toggleCVisibility = () => {
  let passwordEvent = document.getElementById("password");
  passwordEvent.addEventListener("input", function () {
    let inputValue = document.getElementById("password").value;
    while (inputValue.length < 1) {
      return false;
    }
    document.getElementById("button-addon2").style.display = "block";
  });
};

const togglePassword = () => {
  event.preventDefault();
  let inputType = document.getElementById("password").type;
  if (inputType != "password") {
    document.getElementById("password").type = "password";
    document.getElementById("button-addon2").innerHTML = "Show";
  } else {
    document.getElementById("password").type = "text";
    document.getElementById("button-addon2").innerHTML = "Hide";
  }
};
const toggleCPassword = () => {
  event.preventDefault();
  let inputType = document.getElementById("cpassword").type;
  if (inputType != "cpassword") {
    document.getElementById("cpassword").type = "cpassword";
    document.getElementById("button-addon3").innerHTML = "Show";
  } else {
    document.getElementById("cpassword").type = "text";
    document.getElementById("button-addon3").innerHTML = "Hide";
  }
};
