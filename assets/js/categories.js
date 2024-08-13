document.addEventListener("DOMContentLoaded", function () {
  // Kartları içeren kapsayıcı
  const container = document.querySelector("#cards-container");

  // Kartları oluştururken eklenmiş olan olay dinleyicilerini yönetmek için fonksiyonlar
  const cards = container.querySelectorAll(".card");

  cards.forEach((card) => {
    const differentColorDesign = card.querySelector(".different-color-design");
    const hoverElement = card.querySelector("#hover-element");
    const mainProductImage = card.querySelector(".card-img");
    let mainProductImageOriginalSrc = mainProductImage.src; // Orijinal resmi saklıyoruz

    // different-color-design üzerine mouse girdiğinde
    differentColorDesign.addEventListener("mouseenter", function () {
      differentColorDesign.style.visibility = "hidden";
      hoverElement.style.visibility = "visible";
    });

    // hover-element üzerine mouse girdiğinde
    hoverElement.addEventListener("mouseleave", function () {
      differentColorDesign.style.visibility = "visible";
      hoverElement.style.visibility = "hidden";
    });

    // Kartın kendisine mouse ayrıldığında ana resmi eski haline döndür
    card.addEventListener("mouseleave", function () {
      mainProductImage.src = mainProductImageOriginalSrc;
      differentColorDesign.style.visibility = "visible";
      hoverElement.style.visibility = "hidden";
    });

    // Renk seçeneklerine tıklama ve üzerine gelme olayları
    const otherColorImages = card.querySelectorAll(".other-color-img");

    otherColorImages.forEach((image) => {
      image.addEventListener("mouseenter", function () {
        mainProductImage.src = image.src;
      });

      image.addEventListener("click", function () {
        console.log("Resme tıklandı:", image.src);
        mainProductImageOriginalSrc = image.src; // Tıklanan resmi orijinal resim olarak ayarlıyoruz
      });
    });
  });
});

document.querySelectorAll(".add-favorite-icon").forEach(function (icon) {
  icon.addEventListener("click", function (event) {
    event.stopPropagation(); // Olayın yayılmasını durdur
    event.preventDefault(); // Varsayılan davranışı iptal et
  });
});

// Event listener for custom select trigger
document
  .querySelector(".custom-select-trigger")
  .addEventListener("click", function () {
    document.querySelector(".custom-select").classList.toggle("open");
  });

// Dışarı tıklama event
document.addEventListener("click", function (event) {
  if (!customSelect.contains(event.target)) {
    customSelect.classList.remove("open");
  }
});

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    var container = this.closest(".category-filter-container"); // Üst öğeyi bul

    if (content.style.display === "block") {
      content.style.display = "none";
      container.style.border = "none";
      container.style.padding = "0px";
      container.style.borderRadius = "0px";
      this.style.borderBottom = "1px solid #ececec";
    } else {
      content.style.display = "block";
      container.style.border = "1px solid #ececec";
      container.style.padding = "10px";
      container.style.borderRadius = "6px";
      this.style.border = "none";
    }
  });
}
