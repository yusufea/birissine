// login.js
document.addEventListener("DOMContentLoaded", function () {
  const togglePassword = document.getElementById("togglePassword");
  const passwordInput = document.getElementById("password");

  togglePassword.addEventListener("click", function () {
    console.log("basıldı");
    // Şifrenin gösterilip gösterilmediğini kontrol edin
    const type =
      passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);

    // Göz simgesini değiştirin
    this.innerHTML = type === "password" ? "visibility" : "visibility_off";
  });
});
