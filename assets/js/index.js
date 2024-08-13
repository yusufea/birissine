// STORY PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  var splide = new Splide("#story-product-slider", {
    type: "slider",
    perPage: 14.5,
    perMove: 1,
    // autoplay: true,
    // interval: 3000,
    pauseOnHover: true,
    pagination: false,
    arrows: true,
    gap: 10,
    rewind: false,
  }).mount();

  var prevArrow = document.querySelector(".splide__arrow--prev");
  var nextArrow = document.querySelector(".splide__arrow--next");

  function updateArrows() {
    console.log(splide);
    if (splide.index === 17.5) {
      splide.go(0);
    }
    if (splide.index === 0) {
      prevArrow.style.display = "none";
    } else {
      prevArrow.style.display = "block";
    }

    if (splide.index === splide.Components.Controller.getEnd() - 0.5) {
      nextArrow.style.display = "none";
    } else {
      nextArrow.style.display = "block";
    }
  }

  // İlk durumu kontrol et
  updateArrows();

  // Slide değiştiğinde kontrol et
  splide.on("move", function () {
    updateArrows();
  });
});

// CAROUSEL IMAGES
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#image-carousel", {
    heightRatio: 0.4,
  }).mount();
});

// BESTSELLER PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#bestseller-product-slider", {
    type: "loop",
    perPage: 7,
    perMove: 1,
    autoplay: true,
    interval: 3000,
    pauseOnHover: true,
    pagination: false,
    arrows: true,
    gap: 14,
  }).mount();

  document.querySelectorAll(".add-favorite-icon").forEach(function (icon) {
    icon.addEventListener("click", function (event) {
      event.stopPropagation(); // Olayın yayılmasını durdur
      event.preventDefault(); // Varsayılan davranışı iptal et
    });
  });
});

// POPULER PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#populer-product-slider", {
    type: "loop",
    perPage: 7,
    autoplay: true,
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

// MOST VISITED PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#mostvisited-product-slider", {
    type: "loop",
    perPage: 7,
    autoplay: true,
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

// MOST FAVORITES PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#mostfavorites-product-slider", {
    type: "loop",
    perPage: 7,
    autoplay: true,
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

// FREE CARGO PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#freecargo-product-slider", {
    type: "loop",
    perPage: 7,
    autoplay: true,
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

// FOR YOU PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#foryou-product-slider", {
    type: "loop",
    perPage: 7,
    autoplay: true,
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
