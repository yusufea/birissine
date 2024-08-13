// FAVORITES PRODUCT --- SLIDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#favorites-product-slider", {
    type: "loop",
    perPage: 5, // Bir sayfada görünen slayt sayısı
    perMove: 1, // Bir hareketle kayan slayt sayısı
    autoplay: false,
    interval: 3000,
    pauseOnHover: true,
    pagination: false,
    arrows: false,
    gap: "0.5rem",
    breakpoints: {
      325: {
        perPage: 2,
      },
    },
  }).mount();

  document.querySelectorAll(".add-favorite-icon").forEach(function (icon) {
    icon.addEventListener("click", function (event) {
      event.stopPropagation(); // Olayın yayılmasını durdur
      event.preventDefault(); // Varsayılan davranışı iptal et
    });
  });
});

// MYFAVORITES PRODUCT --- SLIDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#recommended-product-slider", {
    type: "loop",
    perPage: 5, // Bir sayfada görünen slayt sayısı
    perMove: 1, // Bir hareketle kayan slayt sayısı
    autoplay: false,
    interval: 3000,
    pauseOnHover: true,
    pagination: false,
    arrows: false,
    gap: "0.5rem",
    breakpoints: {
      325: {
        perPage: 2,
      },
    },
  }).mount();

  document.querySelectorAll(".add-favorite-icon").forEach(function (icon) {
    icon.addEventListener("click", function (event) {
      event.stopPropagation(); // Olayın yayılmasını durdur
      event.preventDefault(); // Varsayılan davranışı iptal et
    });
  });
});

// BeforeAdd PRODUCT --- SLIDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#beforeAdd-product-slider", {
    type: "loop",
    perPage: 5, // Bir sayfada görünen slayt sayısı
    perMove: 1, // Bir hareketle kayan slayt sayısı
    autoplay: false,
    interval: 3000,
    pauseOnHover: true,
    pagination: false,
    arrows: false,
    gap: "0.5rem",
    breakpoints: {
      325: {
        perPage: 2,
      },
    },
  }).mount();

  document.querySelectorAll(".add-favorite-icon").forEach(function (icon) {
    icon.addEventListener("click", function (event) {
      event.stopPropagation(); // Olayın yayılmasını durdur
      event.preventDefault(); // Varsayılan davranışı iptal et
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tabs .card-border-s");
  const contents = document.querySelectorAll(".order-content");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", function () {
      // Tüm sekmelerden active-tab sınıfını kaldır
      tabs.forEach((t) => {
        t.classList.remove("active-tab");
        t.classList.remove("selected-tabs-border");
      });
      // İçeriği gizle
      contents.forEach((content) => (content.style.display = "none"));

      // Tıklanan sekmeye active-tab sınıfını ekle ve içeriği göster
      this.classList.add("active-tab");
      this.classList.add("selected-tabs-border");
      contents[index].style.display = "block";
    });
  });

  // Varsayılan olarak 'Önceden Eklediklerim' sekmesini aktif yap
  tabs[0].click();
});

//
// const productsData = [
//   {
//     seller: "Birissine",
//     products: [
//       {
//         imgSrc: "assets/media/images/c_0158.jpg",
//         sellerName: "Birissine",
//         productName: "Baget Çanta Bej",
//         details: "Apple • 128GB • Gece Yarısı",
//         shipping: "Kargo Bedava",
//         count: 2,
//         price: "109",
//         priceOndalik: ",99",
//       },
//       {
//         imgSrc: "assets/media/images/c_0159.jpg",
//         sellerName: "Birissine",
//         productName: "Baget Çanta Bej",
//         details: "Apple • 128GB • Gece Yarısı",
//         shipping: "Kargo Bedava",
//         count: 1,
//         price: "109",
//         priceOndalik: ",99",
//       },
//     ],
//   },
//   {
//     seller: "Başkassına",
//     products: [
//       {
//         imgSrc: "assets/media/images/prodthumbimg_2.webp",
//         sellerName: "Birissine",
//         productName: "Baget Çanta Bej",
//         details: "Apple • 128GB • Gece Yarısı",
//         shipping: "Kargo Bedava",
//         count: 2,
//         price: "109",
//         priceOndalik: ",99",
//       },
//       {
//         imgSrc: "assets/media/images/prodthumbimg_1.webp",
//         sellerName: "Birissine",
//         productName: "Baget Çanta Bej",
//         details: "Apple • 128GB • Gece Yarısı",
//         shipping: "Kargo Bedava",
//         count: 2,
//         price: "109",
//         priceOndalik: ",99",
//       },
//       {
//         imgSrc: "assets/media/images/prodthumbimg_3.webp",
//         sellerName: "Birissine",
//         productName: "Baget Çanta Bej",
//         details: "Apple • 128GB • Gece Yarısı",
//         shipping: "Kargo Bedava",
//         count: 1,
//         price: "109",
//         priceOndalik: ",99",
//       },
//     ],
//   },
//   {
//     seller: "Kimissine",
//     products: [
//       {
//         imgSrc: "assets/media/images/prodthumbimg_2.webp",
//         sellerName: "Birissine",
//         productName: "Baget Çanta Bej",
//         details: "Apple • 128GB • Gece Yarısı",
//         shipping: "Kargo Bedava",
//         count: 4,
//         price: "109",
//         priceOndalik: ",99",
//       },
//     ],
//   },
// ];

// function generateProductHTML(product) {
//   return `
//       <div class="product flex alignItems-center gap-3 p-2 py-4">
//           <input type="checkbox" class="select-checkbox">
//           <div>
//               <img class="product-img" src="${product.imgSrc}" alt="">
//           </div>
//           <div class="flex justify-between w-full alignItems-center gap-3">
//               <div class="flex-column justify-between h-full">
//                   <div class="flex gap-1">
//                       <span class="font-family-semibold text-sm">${
//                         product.sellerName
//                       }</span>
//                       <h4 class="font-family-regular text-sm">${
//                         product.productName
//                       }</h4>
//                   </div>
//                   <p class="font-family-regular text-gray-t text-xxs mt-1">${
//                     product.details
//                   }</p>
//                   <p class="flex alignItems-center gap-1 text-xs text-green mt-1 font-family-semibold">
//                       <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#22c55e">
//                           <path d="M240-192q-50 0-85-35t-35-85H48v-408q0-29.7 21.15-50.85Q90.3-792 120-792h552v144h120l120 168v168h-72q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-72q20.4 0 34.2-13.8Q288-291.6 288-312q0-20.4-13.8-34.2Q260.4-360 240-360q-20.4 0-34.2 13.8Q192-332.4 192-312q0 20.4 13.8 34.2Q219.6-264 240-264ZM120-384h24q17-23 42-35.5t54-12.5q29 0 54 12.5t41.53 35.5H600v-336H120v336Zm600 120q20.4 0 34.2-13.8Q768-291.6 768-312q0-20.4-13.8-34.2Q740.4-360 720-360q-20.4 0-34.2 13.8Q672-332.4 672-312q0 20.4 13.8 34.2Q699.6-264 720-264Zm-48-192 168-1-85-119h-83v120Zm-310-93Z"/>
//                       </svg>
//                       ${product.shipping}
//                   </p>
//                   <div class="flex alignItems-center gap-1 mt-1">
//                       <input type="checkbox">
//                       <p class="text-xs font-family-regular">Hediye Paketi İstiyorum</p>
//                   </div>
//               </div>
//               <div class="">
//                   <div class="flex alignItems-center">
//                       ${
//                         product.count > 1
//                           ? `<span class="material-symbols-outlined text-general-color cart-remove">
//                           remove
//                       </span>`
//                           : `<span class="material-symbols-outlined text-general-color cart-delete">
//                           delete
//                       </span>`
//                       }
//                       <h6 class="font-family-regular text-md cart-count">
//                           ${product.count}
//                       </h6>
//                       <span class="material-symbols-outlined text-general-color cart-add">
//                           add
//                       </span>
//                   </div>
//               </div>
//               <div class="">
//                   <h3 class="font-family-semibold text-xl text-center mr-4">${
//                     product.price
//                   }<span class="text-sm">${
//     product.priceOndalik
//   } <span style="font-size:12px">TL</span></span></h3>
//               </div>
//           </div>
//       </div>
//       <div class="line"></div>
//   `;
// }

// function generateSellerHTML(sellerData) {
//   const productsHTML = sellerData.products
//     .map((product) => generateProductHTML(product))
//     .join("");
//   return `
//       <div id="products" class="card-border">
//           <div class="cart-card-header-tag p-2">
//               <div class="flex justify-between alignItems-center">
//                   <div class="flex gap-3 alignItems-center">
//                       <input type="checkbox" class="select-checkbox-general">
//                       <div>
//                           <h6 class="text-gray-t font-family-regular text-sm">
//                               Satıcı: <span class="font-family-semibold text-black-t">${sellerData.seller}</span>
//                           </h6>
//                       </div>
//                   </div>
//                   <a class="flex alignItems-center pointer">
//                       <h6 class="font-family-semibold text-sm text-general-color">Tüm ürünler</h6>
//                       <span class="material-symbols-outlined">
//                           chevron_right
//                       </span>
//                   </a>
//               </div>
//           </div>
//           <div class="flex-column">
//               ${productsHTML}
//           </div>
//       </div>
//   `;
// }

document.addEventListener("DOMContentLoaded", () => {
  const productContainer = document.getElementById("product-container");
  console.log(productContainer)
  if (productContainer) {
    // Tüm checkboxların durumunu kontrol et ve güncelle
    const updateSellerCheckbox = (sellerElement) => {
      const productCheckboxes = sellerElement.querySelectorAll(
        ".product .select-checkbox"
      );
      const sellerCheckbox = sellerElement.querySelector(
        ".select-checkbox-general"
      );
      const allChecked = Array.from(productCheckboxes).every(
        (checkbox) => checkbox.checked
      );
      sellerCheckbox.checked = allChecked;

      // Gölge efekti ekle/çıkar
      if (allChecked) {
        sellerElement.classList.add("shadow-effect");
      } else {
        sellerElement.classList.remove("shadow-effect");
      }
    };

    // Ürün checkboxlarına event listener ekle
    const productCheckboxes = document.querySelectorAll(
      ".product .select-checkbox"
    );

    productCheckboxes.forEach((checkbox) => {
      checkbox.addEventListener("change", (event) => {
        const productCard = event.target.closest(".product");

        // Gölge efekti ekle/çıkar
        if (event.target.checked) {
          productCard.classList.add("selected-bg");
        } else {
          productCard.classList.remove("selected-bg");
        }

        const sellerElement = event.target.closest(".card-border");
        updateSellerCheckbox(sellerElement);
      });
    });

    // Seller checkboxlarına event listener ekle
    const sellerCheckboxes = document.querySelectorAll(
      ".select-checkbox-general"
    );
    sellerCheckboxes.forEach((checkbox) => {
      checkbox.addEventListener("change", (event) => {
        const productCard = event.target.closest(".card-border");
        const productCheckboxes = productCard.querySelectorAll(
          ".product .select-checkbox"
        );

        productCheckboxes.forEach((productCheckbox) => {
          productCheckbox.checked = event.target.checked;

          // Ürün kartına selected-bg sınıfı ekle/çıkar
          if (event.target.checked) {
            productCheckbox.closest(".product").classList.add("selected-bg");
          } else {
            productCheckbox.closest(".product").classList.remove("selected-bg");
          }
        });

        // Gölge efekti ekle/çıkar
        if (event.target.checked) {
          productCard.classList.add("shadow-effect");
        } else {
          productCard.classList.remove("shadow-effect");
        }
      });
    });

    // Başlangıçta tüm seller checkboxlarını kontrol et
    const sellerElements = document.querySelectorAll(".card-border");
    sellerElements.forEach((sellerElement) => {
      updateSellerCheckbox(sellerElement);
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tabs .card-border-s");
  const contents = document.querySelectorAll(".order-content");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", function () {
      // Tüm sekmelerden active-tab sınıfını kaldır
      tabs.forEach((t) => t.classList.remove("active-tab"));
      // İçeriği gizle
      contents.forEach((content) => (content.style.display = "none"));

      // Tıklanan sekmeye active-tab sınıfını ekle ve içeriği göster
      this.classList.add("active-tab");
      contents[index].style.display = "block";
    });
  });

  // Varsayılan olarak 'Önceden Eklediklerim' sekmesini aktif yap
  tabs[0].click();
});
function openDiscountMenu() {
  const discountMenu = document.getElementById("discountMenu");
  const discountSides = document.querySelectorAll(".discount-side");
  const discountTitleSide = document.getElementById("discountTitleSide");

  if (discountMenu.style.display === "flex") {
    discountMenu.style.display = "none";

    discountSides.forEach((side) => {
      side.classList.remove("selected-bg");
      side.classList.remove("gap-2");
    });

    discountTitleSide.style.justifyContent = "center";
    // İkonu 'add' olarak değiştir
    discountTitleSide.querySelector(".material-symbols-outlined").textContent =
      "add";
  } else {
    discountMenu.style.display = "flex";

    discountSides.forEach((side) => {
      side.classList.add("selected-bg");
      side.classList.add("gap-2"); // gap-2 sınıfını ekle
    });

    discountTitleSide.style.justifyContent = "start";
    // İkonu 'remove' olarak değiştir
    discountTitleSide.querySelector(".material-symbols-outlined").textContent =
      "remove";
  }
}
