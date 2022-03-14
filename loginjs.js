function login() {
  var valid = true;
  var formLables = document.getElementsByTagName("label");

  var email = document.logform.email.value;
  var at = email.indexOf("@");
  var dot = email.indexOf(".");
  if (email == "") {
    formLables[0].innerHTML = "Email: required";
    formLables[0].style.color = "red";
    valid = false;
  } else if (at == -1 || dot == -1 || dot < at) {
    formLables[0].innerHTML = "incorrect email";
    formLables[0].style.color = "red";
    valid = false;
  } else {
    formLables[0].innerHTML = "Email";
        formLables[0].style.color = "#48bfe3";
    valid = (valid) ? true : false;
  }
  var password = document.logform.password.value;
  if (password == "") {
    formLables[1].innerHTML = "password: required";
    formLables[1].style.color = "red";
    valid = false;
  } else if (password.length < 8) {
    formLables[1].innerHTML = "password must be 8 characters or more";
    formLables[1].style.color = "red";
    valid = false;
  } else {
    formLables[1].innerHTML = "Password";
        formLables[1].style.color = "#48bfe3";
    valid = (valid) ? true : false;
  }
  return valid;
}
