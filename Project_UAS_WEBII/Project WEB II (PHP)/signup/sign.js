const passwordInput = document.getElementById("password");

passwordInput.addEventListener("input", function() {
  passwordInput.value = "*".repeat(passwordInput.value.length);
});
