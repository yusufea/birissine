document.querySelectorAll(".order-detail-card-button").forEach(function (icon) {
  icon.addEventListener("click", function (event) {
    event.stopPropagation(); // Olayın yayılmasını durdur
    event.preventDefault(); // Varsayılan davranışı iptal et
  });
});

// SİMİLAR PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#buy-product-slider", {
    type: "loop",
    perPage: 6,
    autoplay: false,
    interval: 3000,
    pauseOnHover: true,
    pagination: false,
    arrows: true,
    gap: 20,
  }).mount();

  document.querySelectorAll(".add-favorite-icon").forEach(function (icon) {
    icon.addEventListener("click", function (event) {
      event.stopPropagation(); // Olayın yayılmasını durdur
      event.preventDefault(); // Varsayılan davranışı iptal et
    });
  });
});

// REVİEW SELLER MODAL
var reviewSellerModal = document.getElementById("reviewSellerModal");
var reviewSellerButtons = document.querySelectorAll(".review-seller-button");
var modal_close_icon = document.getElementsByClassName("modal-close-icon")[0];

console.log(reviewSellerButtons);

reviewSellerButtons.forEach(function (btn) {
  btn.onclick = function () {
    reviewSellerModal.style.display = "block";
  };
});

modal_close_icon.onclick = function () {
  reviewSellerModal.style.display = "none";
};

document.addEventListener("DOMContentLoaded", function () {
  const storyInput = document.getElementById("story");
  const charCount = document.getElementById("charCount");
  const maxChars = 2500;

  storyInput.addEventListener("input", function () {
    const remainingChars = maxChars - storyInput.value.length;
    charCount.textContent = remainingChars;

    if (remainingChars <= 0) {
      storyInput.style.borderColor = "red";
    } else {
      storyInput.style.borderColor = "";
    }
  });
});
