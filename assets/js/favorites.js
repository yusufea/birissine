document.querySelectorAll(".remove-favorite-icon").forEach((item) => {
  item.addEventListener("click", (event) => {
    event.stopPropagation();
    // Favorilerden çıkarma işlemi burada yapılabilir
    console.log("Favorilerden çıkarıldı");
  });
});

// Tüm continue-shop-button elementlerine event listener ekleyin
document.querySelectorAll(".continue-shop-button").forEach((item) => {
  item.addEventListener("click", (event) => {
    event.stopPropagation();
    // Sepete ekleme işlemi burada yapılabilir
    console.log("Sepete eklendi");
  });
});

document.querySelectorAll(".remove-favorite-icon").forEach(function (icon) {
  icon.addEventListener("click", function (event) {
    event.stopPropagation(); // Olayın yayılmasını durdur
    event.preventDefault(); // Varsayılan davranışı iptal et
  });
});

document.querySelectorAll(".add-to-card").forEach(function (icon) {
  icon.addEventListener("click", function (event) {
    event.stopPropagation(); // Olayın yayılmasını durdur
    event.preventDefault(); // Varsayılan davranışı iptal et
  });
});


document.querySelectorAll(".card-event-side").forEach(function (icon) {
  icon.addEventListener("click", function (event) {
    event.stopPropagation(); // Olayın yayılmasını durdur
    event.preventDefault(); // Varsayılan davranışı iptal et
  });
});
