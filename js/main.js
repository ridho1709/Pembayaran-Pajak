function togglePasswordVisibility() {
  var passwordField = document.getElementById("password");
  var toggle = document.querySelector(".toggle-show i");

  if (passwordField.type === "password") {
    passwordField.type = "text";
    toggle.classList.remove("bx-hide");
    toggle.classList.add("bx-show");
  } else {
    passwordField.type = "password";
    toggle.classList.remove("bx-show");
    toggle.classList.add("bx-hide");
  }
}
