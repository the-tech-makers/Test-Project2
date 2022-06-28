/*
var firstNameError = document.getElementById("first-name-error");
var lastNameError = document.getElementById("last-name-error");
var emailError = document.getElementById("email-error");
var phoneError = document.getElementById("phone-error");
var addressError = document.getElementById("address-error");
var pincodeError = document.getElementById("pincode-error");

function validateFirstName() {
  var name = document.getElementById("inputName").value;
  if (name.length == 0) {
    firstNameError.innerHTML = "Name is rquired";
    return false;
  }

  if (!name.match(/^[A-Za-z]*$/)) {
    firstNameError.innerHTML = "write first name";
    return false;
  }

  firstNameError.innerHTML = "valid";
  return true;
}

function validateLastName() {
  var lastname = document.getElementById("inputLastName").value;
  if (lastname.length == 0) {
    lastNameError.innerHTML = "Name is rquired";
    return false;
  }

  if (!lastname.match(/^[A-Za-z]*$/)) {
    lastNameError.innerHTML = "write last name";
    return false;
  }

  lastNameError.innerHTML = "valid";
  return true;
}

function validateEmail() {
  var email = document.getElementById("inputEmail").value;
  if (email.length == 0) {
    emailError.innerHTML = "Email is rquired";
    return false;
  }

  if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
    emailError.innerHTML = "Email invalied";
    return false;
  }

  emailError.innerHTML = "valid";
  return true;
}

function validatePhone() {
  var phone = document.getElementById("inputPhone").value;

  if (phone.length == 0) {
    phoneError.innerHTML = "Phone no. is rquired";
    return false;
  }

  if (phone.length !== 10) {
    phoneError.innerHTML = "Phone no. should be 10 digit";
    return false;
  }

  if (!phone.match(/^[0-9]{10}$/)) {
    phoneError.innerHTML = "only digits please.";
    return false;
  }

  phoneError.innerHTML = "valid";
  return true;
}

function validateAddress() {
  var address = document.getElementById("inputAddress").value;
  var required = 30;
  var left = required - address.length;
  if (left > 0) {
    addressError.innerHTML = left + "more characters required";
    return false;
  }

  addressError.innerHTML = "valid";
  return true;
}

function validatePincode() {
  var pincode = document.getElementById("inputPincode").value;
  if (pincode.length === 6) {
    if (/[0-9]/.test(pincode)) {
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}

function validateForm() {
  if (
    !validateFirstName() ||
    !validateLastName() ||
    !validateEmail() ||
    !validatePhone() ||
    !validateAddress() ||
    !validatePincode()
  ) {
    submitError.style.display = "block";
    submitError.innerHTML = "please fix error to submit";
    setTimeout(function () {
      submitError.style.display = "none";
    }, 3000);
    return false;
  }
}

*/

setTimeout(() => {
  document.getElementsByClassName("error_msg").innerHTML = "";
}, 5000);

function validateForm() {
  var f_name = document.getElementById("f_name").value;
  var l_name = document.getElementById("l_name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var address = document.getElementById("address").value;
  var pincode = document.getElementById("pincode").value;

  if (f_name == "") {
    document.getElementById("first-name-error").innerHTML =
      "First name is required.";
    return false;
  } else {
    if (!f_name.match(/^[a-z]+$/)) {
      document.getElementById("first-name-error").innerHTML =
        "First name is invalid.";
      return false;
    }
  }

  if (l_name == "") {
    document.getElementById("last-name-error").innerHTML =
      "Last name is required.";
    return false;
  } else {
    if (!l_name.match(/^[a-z]+$/)) {
      document.getElementById("last-name-error").innerHTML =
        "Last name is invalid.";
      return false;
    }
  }

  if (email == "") {
    document.getElementById("email-error").innerHTML = "Email is required.";
    return false;
  } else {
    if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
      document.getElementById("email-error").innerHTML = "email is invalid.";
      return false;
    }
  }

  if (phone == "") {
    document.getElementById("phone-error").innerHTML = "phone no. is required.";
    return false;
  } else {
    if (!phone.match(/^[0-9]{10}$/)) {
      document.getElementById("phone-error").innerHTML =
        "phone no. is invalid.";
      return false;
    }
  }

  if (address == "") {
    document.getElementById("address-error").innerHTML = "Address is required.";
    return false;
  }

  if (pincode == "") {
    document.getElementById("pincode-error").innerHTML = "pincode is required.";
    return false;
  } else {
    if (!pincode.match(/^[0-9]{6}$/)) {
      document.getElementById("pincode-error").innerHTML =
        "pincode is invalid.";
      return false;
    }
  }
  return true;
}
