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

document.addEventListener("DOMContentLoaded", (event) => {
  const sexCards = document.querySelectorAll(".sex-card");
  sexCards.forEach((card) => {
    card.addEventListener("click", () => {
      sexCards.forEach((c) => c.classList.remove("selected"));
      card.classList.add("selected");
    });
  });
});

// CONTRAT MODAL
var contractTextModal = document.getElementById("contract-text");
var contractButton = document.getElementById("contractButton");
var modal_close_icon = document.getElementsByClassName("modal-close-icon")[0];

contractButton.onclick = function () {
  contractTextModal.style.display = "block";
};

modal_close_icon.onclick = function () {
  contractTextModal.style.display = "none";
};
