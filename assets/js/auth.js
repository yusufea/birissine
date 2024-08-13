document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.getElementById("phone");

  phoneInput.addEventListener("input", function () {
    let value = phoneInput.value.replace(/\D/g, ""); // Sadece rakamları al

    // Başlangıçta 0 ekleyip değerleri formatla
    let formattedValue = "";
    if (value.length > 0) {
      formattedValue += "0";
    }
    if (value.length > 1) {
      formattedValue += " (" + value.slice(1, 4);
    }
    if (value.length > 4) {
      formattedValue += ") " + value.slice(4, 7);
    }
    if (value.length > 7) {
      formattedValue += " " + value.slice(7, 9);
    }
    if (value.length > 9) {
      formattedValue += " " + value.slice(9, 11);
    }

    phoneInput.value = formattedValue;
  });
});
