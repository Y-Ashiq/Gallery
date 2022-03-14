//gallry page
var lightbox = document.createElement('div'); //creating a div element
lightbox.id = 'modal';
document.body.appendChild(lightbox); // then we use appendChild to let the element appear in html or to the document

var images = document.querySelectorAll('img'); // get all the images

/*loop for each images and controll the appearance  by the selectors (ID modal and CLASS active)*/
images.forEach(image => {
  // the addeventlisten make the image to open and close it when we click on it
  image.addEventListener('click', ev => {
    //when we click on image it will show in the .active class
    lightbox.classList.add('active')
    //we add the image tand show it int the class
    var img = document.createElement('img')
    img.src = image.src
    while (lightbox.firstChild) {
      lightbox.removeChild(lightbox.firstChild)
    }
    // apppend the image
    lightbox.appendChild(img)
  })
})
//when we click outside or anything except the image it will close and remove the class
lightbox.addEventListener('click', ev => {
  if (ev.target !== ev.currentTarget)
    return;
  lightbox.classList.remove('active')
})

function validation() {
  var valid = true;
  var formLables = document.getElementsByTagName("label");
  var firstname = document.regform.Firstname.value;
  if (firstname == "") {
    formLables[0].innerHTML = "First Name : required";
    formLables[0].style.color = "red";
    valid = false;
  } else if (!isNaN(firstname)) {
    formLables[0].innerHTML = "First Name : Text Only";
    formLables[0].style.color = "red";
    valid = false;
  } else {
    formLables[0].innerHTML = "First Name";
        formLables[0].style.color = "#48bfe3";
    valid = (valid) ? true : false;
  }
  var Lastname = document.regform.Lastname.value;
  if (Lastname == "") {
    formLables[1].innerHTML = "Lastname: required";
    formLables[1].style.color = "red";
    valid = false;
  } else if (!isNaN(Lastname)) {
    formLables[1].innerHTML = "Last Name : Text Only";
    formLables[1].style.color = "red";
    valid = false;
  } else {
    formLables[1].innerHTML = "Last Name";
    formLables[1].style.color = "#48bfe3";
    valid = (valid) ? true : false;
  }
  var email = document.regform.email.value;
  var at = email.indexOf("@");
  var dot = email.indexOf(".");
  if (email == "") {
    formLables[2].innerHTML = "Email: required";
    formLables[2].style.color = "red";
    valid = false;
  } else if (at == -1 || dot == -1 || dot < at) {
    formLables[2].innerHTML = "incorrect email";
    formLables[2].style.color = "red";
    valid = false;
  } else {
    formLables[2].innerHTML = "Email";
        formLables[2].style.color = "#48bfe3";
    valid = (valid) ? true : false;
  }
  var password = document.regform.password.value;
  if (password == "") {
    formLables[3].innerHTML = "password: required";
    formLables[3].style.color = "red";
    valid = false;
  } else if (password.length < 8) {
    formLables[3].innerHTML = "password must be 8 characters or more";
    formLables[3].style.color = "red";
    valid = false;
  } else {
    formLables[3].innerHTML = "Password";
        formLables[3].style.color = "#48bfe3";
    valid = (valid) ? true : false;
  }
  return valid;
}

function login() {
  var valid = true;
  var formLables = document.getElementsByTagName("label");

  var email = document.regform.email.value;
  var at = email.indexOf("@");
  var dot = email.indexOf(".");
  if (email == "") {
    formLables[2].innerHTML = "Email: required";
    formLables[2].style.color = "red";
    valid = false;
  } else if (at == -1 || dot == -1 || dot < at) {
    formLables[2].innerHTML = "incorrect email";
    formLables[2].style.color = "red";
    valid = false;
  } else {
    formLables[2].innerHTML = "Email";
        formLables[2].style.color = "#48bfe3";
    valid = (valid) ? true : false;
  }
  var password = document.regform.password.value;
  if (password == "") {
    formLables[3].innerHTML = "password: required";
    formLables[3].style.color = "red";
    valid = false;
  } else if (password.length < 8) {
    formLables[3].innerHTML = "password must be 8 characters or more";
    formLables[3].style.color = "red";
    valid = false;
  } else {
    formLables[3].innerHTML = "Password";
        formLables[3].style.color = "#48bfe3";
    valid = (valid) ? true : false;
  }
  return valid;
}
