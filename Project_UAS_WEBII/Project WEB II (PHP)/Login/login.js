const passwordInput = document.getElementById("password");

passwordInput.addEventListener("input", function() {
  passwordInput.value = "*".repeat(passwordInput.value.length);
});


function login() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password-input").value;
  if (email === "AES@gmail.com" && password === "123") {
    window.location.href = "index.html";
  }
    else {
    alert("Invalid email or password. Please try again.");
  }
}