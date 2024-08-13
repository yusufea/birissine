const numbers = [1];

// Sample image array (JSON)
const images = [
  "assets/media/images/prodthumbimg_1.webp",
  "assets/media/images/prodthumbimg_2.webp",
  "assets/media/images/prodthumbimg_3.webp",
  "assets/media/images/prodthumbimg_4.webp",
  "assets/media/images/prodthumbimg_5.webp",
  "assets/media/images/prodthumbimg_1.webp",
  "assets/media/images/prodthumbimg_2.webp",
  "assets/media/images/prodthumbimg_3.webp",
  "assets/media/images/prodthumbimg_4.webp",
  "assets/media/images/prodthumbimg_5.webp",
];

const mainImg = document.getElementById("product-image-id");
const thumbContainer = document.getElementById("thumb-container");
const prevImageBtn = document.getElementById("prevImage");
const nextImageBtn = document.getElementById("nextImage");
// Set the first image as the main image

// Create thumbnails and add them to the thumb container
document.addEventListener("DOMContentLoaded", function () {
  const thumbContainer = document.getElementById("thumb-container");

  thumbContainer.addEventListener("mouseover", (event) => {
    if (event.target.classList.contains("product-detail-thumb-img")) {
      // Tüm küçük resimlerden 'selected' sınıfını kaldır
      document
        .querySelectorAll(".product-detail-thumb-img")
        .forEach((img) => img.classList.remove("selected"));
      // Üzerine gelinen küçük resmi seçili yap
      event.target.classList.add("selected");
      // Ana resmi güncelle
      mainImg.src = event.target.src;
    }
  });
});

let currentIndex = 0;

prevImageBtn.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  mainImg.src = images[currentIndex];
  updateSelectedThumbnail(currentIndex);
  imageZoom("product-image-id", "product-img-result");
});

// Next image button click event
nextImageBtn.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % images.length;
  mainImg.src = images[currentIndex];
  updateSelectedThumbnail(currentIndex);
  imageZoom("product-image-id", "product-img-result");
});

function updateSelectedThumbnail(index) {
  document.querySelectorAll(".product-detail-thumb-img").forEach((img, idx) => {
    if (idx === index) {
      img.classList.add("selected");
    } else {
      img.classList.remove("selected");
    }
  });
  // Update the zoom effect for the new main image
  imageZoom("product-image-id", "product-img-result");
}
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*clear previous lens if it exists*/
  if (img.previousElementSibling) {
    img.previousElementSibling.remove();
  }
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  lens.style.visibility = "hidden";
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = img.width * cx + "px " + img.height * cy + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  // thumbImg.addEventListener("mouseover", () => {
  //   lens.style.visibility = "hidden";
  // });
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  /*hide result when mouse is not over the image:*/
  img.addEventListener("mouseout", () => {
    result.style.visibility = "hidden";
    lens.style.visibility = "hidden";
  });
  lens.addEventListener("mouseout", () => {
    result.style.visibility = "hidden";
    lens.style.visibility = "hidden";
  });
  function moveLens(e) {
    result.style.visibility = "visible";
    lens.style.visibility = "visible";
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - lens.offsetWidth / 2;
    y = pos.y - lens.offsetHeight / 2;
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {
      x = img.width - lens.offsetWidth;
    }
    if (x < 0) {
      x = 0;
    }
    if (y > img.height - lens.offsetHeight) {
      y = img.height - lens.offsetHeight;
    }
    if (y < 0) {
      y = 0;
    }
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + x * cx + "px -" + y * cy + "px";
  }
  function getCursorPos(e) {
    var a,
      x = 0,
      y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return { x: x, y: y };
  }
}

// SİMİLAR PRODUCT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#product-slider", {
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

// COMMENT --- SLİDER
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#comment-slider", {
    type: "loop",
    perPage: 4,
    autoplay: true,
    interval: 3000,
    pauseOnHover: true,
    pagination: false,
    gap: 15,
    arrows: true,
  }).mount();
});

// QUESTİONS --- SLİDER
const questions = [
  {
    name: "Y** E** A**",
    date: "4 Temmuz 2024",
    comment: "Kadın L bedeniniz ile erkek L bedeniniz aynımı",
    reply:
      "Merhaba, bayan arka boy 62cm, göğüs 65cm, kol boyu 83cm'dir, bay arka boy 70cm, göğüs 59cm, kol boyu 66,5cm'dir. Keyifli alışverişler dileriz",
    seller: "Lufian",
  },
  {
    name: "Y** E** A**",
    date: "4 Temmuz 2024",
    comment: "mankenin üzerindeki beden",
    reply: "Merhaba, boy 1.80 beden S' dir. Keyifli alışverişler dileriz",
    seller: "Lufian",
  },
  {
    name: "Y** E** A**",
    date: "4 Temmuz 2024",
    comment: "içi tüylü mu",
    reply: "Merhaba, ürün iç kısmı şardonludur. Keyifli alışverişler dileriz.",
    seller: "Lufian",
  },
  {
    name: "Y** E** A**",
    date: "4 Temmuz 2024",
    comment: "Ürün geniş kalıp mı",
    reply:
      "Merhaba, ürünlerimiz normal kalıptır. Keyifli alışverişler dileriz.",
    seller: "Lufian",
  },
  {
    name: "Y** E** A**",
    date: "4 Temmuz 2024",
    comment: "Ürün boyu kaç cm?",
    reply:
      "Merhaba, boy ve kilo bilgilerinizi bizimle paylaşmanız durumunda sizlere daha iyi yardımcı olacağımızı bildirmek isteriz keyifli alışverişler dileriz.",
    seller: "Lufian",
  },

  // Add more comments as needed
];
function createQuestionCard(question) {
  return `
    <li class="splide__slide">
      <div class="question-card">
        <h4 class="open-sans text-xs">${question.comment}</h4>
        <div class="flex">
          <span class="font-family-regular text-xs">${question.name}</span>
          <div style="width: 5px; height: 5px; background-color: #9999; border-radius: 100%;"></div>
          <span class="font-family-regular text-xs">${question.date}</span>
        </div>
        <div class="question-reply-area">
          <div class="flex gap-3">
            <img src="assets/media/images/lufianlogo.webp" class="seller-logo" alt="satıcı logo"/>
            <div class="flex-column">
              <h6 class="open-sans text-xs">
                <span class="font-bold">${question.seller}</span> satıcısının cevabı
              </h6>
              <h6 class="open-sans">11 saat içinde cevaplandı.</h6>
            </div>
          </div>
          <h6 class="font-normal text-xs open-sans">${question.reply}</h6>
        </div>
      </div>
    </li>
  `;
}

document.addEventListener("DOMContentLoaded", function () {
  const questionList = document.getElementById("question-list");

  if (!questionList) {
    return;
  }

  questions.forEach((question) => {
    questionList.innerHTML += createQuestionCard(question);
  });

  new Splide("#question-slider", {
    type: "loop",
    perPage: 3,
    autoplay: true,
    interval: 3000,
    pauseOnHover: true,
    gap: 40,
    padding: 10,
    pagination: false,
    arrows: true,
  }).mount();
});

// Initiate zoom effect for the first image:
imageZoom("product-image-id", "product-img-result");

function focusProductAllProperty() {
  var target = document.getElementById("product-info-area");
  target.scrollIntoView({ behavior: "smooth", block: "center" });
  target.focus({ preventScroll: true });
}

document.querySelectorAll(".size-table").forEach((item) => {
  item.addEventListener("click", () => {
    for (const className of item.classList) {
      if (className === "size-sold-out" || className === "size-sold-out-bg") {
        return;
      }
    }

    const sizeTables = document.querySelectorAll(".size-table");
    sizeTables.forEach((i) => {
      i.classList.remove("selected");
    });

    item.classList.add("selected");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Ana ürün resmini seç
  const mainProductImage = document.querySelector("#product-image-id");
  // Ana ürün resminin orijinal kaynağını kaydet
  const mainProductImageOriginalSrc = mainProductImage.src;

  // Diğer küçük resimleri seç
  const otherColorImages = document.querySelectorAll(
    ".product-other-color-img"
  );

  // Her küçük resim için hover olayını dinle
  otherColorImages.forEach(function (image) {
    image.addEventListener("mouseenter", function () {
      mainProductImage.src = image.src;
      // image.classList.add('card-border')
    });

    image.addEventListener("mouseleave", function () {
      mainProductImage.src = mainProductImageOriginalSrc;
      // image.classList.remove('card-border')
    });

    // Resme tıklandığında
    image.addEventListener("click", function () {
      console.log("Resme tıklandı:", image.src);
    });
  });
});