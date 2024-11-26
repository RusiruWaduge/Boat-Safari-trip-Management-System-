function validatePassword() {
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirm_Password").value;

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return false;
  } else {
    return true;
  }
}

document.getElementById("registration-form").addEventListener("submit", validatePassword);
