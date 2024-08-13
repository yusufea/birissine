$(document).ready(function () {
  var modals = document.querySelectorAll(".modal");
  modals.forEach(function (modal) {
    var header = modal.querySelector(".modal-header");
    var isDragging = false;
    var offsetX, offsetY;

    header.addEventListener("mousedown", function (e) {
      isDragging = true;
      offsetX = e.offsetX;
      offsetY = e.offsetY;
    });

    document.addEventListener("mousemove", function (e) {
      if (isDragging) {
        modal.style.left = e.pageX - offsetX + "px";
        modal.style.top = e.pageY - offsetY + "px";
      }
    });

    document.addEventListener("mouseup", function () {
      isDragging = false;
    });
  });

  // Sonradan kaldırılır şuanlık çalışır durumda görünmesi için koyuldu
  document.querySelectorAll(".tag-a a").forEach(function (anchor) {
    anchor.href = "categories.php";
  });
});

function close_modal(element) {
  element.parentElement.parentElement.parentElement.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.getElementById("navbar");

  // Simüle edilmiş JSON verisi
  const categories = [
    {
      name: "Kadın",
      link: "Kadın",
      subcategories: [
        {
          label: "Clothing",
          subsubcategories: [
            { label: "Eblise", link: "#tshirt" },
            { label: "Hırka", link: "#pants" },
            { label: "Bluz", link: "#tshirt" },
            { label: "Tayt", link: "#pants" },
            { label: "Triko", link: "#tshirt" },
            { label: "Pantolon", link: "#pants" },
            { label: "Gömlek", link: "#tshirt" },
            { label: "Tunik", link: "#pants" },
            { label: "Çanta", link: "#tshirt" },
            { label: "Ayakkabı", link: "#pants" },
            { label: "Pijama", link: "#tshirt" },
            { label: "Pants", link: "#pants" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Bags", link: "#bags" },
            { label: "Jewelry", link: "#jewelry" },
          ],
        },
        {
          label: "Clothing",
          subsubcategories: [
            { label: "T-Shirt", link: "#tshirt" },
            { label: "Pants", link: "#pants" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Bags", link: "#bags" },
            { label: "Jewelry", link: "#jewelry" },
          ],
        },
        {
          label: "Clothing",
          subsubcategories: [
            { label: "T-Shirt", link: "#tshirt" },
            { label: "Pants", link: "#pants" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Bags", link: "#bags" },
            { label: "Jewelry", link: "#jewelry" },
          ],
        },
      ],
    },
    {
      name: "Ayakkabı",
      link: "Ayakkabı",
      subcategories: [
        {
          label: "Clothing",
          subsubcategories: [
            { label: "Shirts", link: "#shirts" },
            { label: "Jeans", link: "#jeans" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Watches", link: "#watches" },
            { label: "Belts", link: "#belts" },
          ],
        },
      ],
    },
    {
      name: "Çanta",
      link: "Çanta",
      subcategories: [
        { label: "Phones", link: "#phones" },
        { label: "Laptops", link: "#laptops" },
        { label: "Cameras", link: "#cameras" },
      ],
    },
    {
      name: "Züccaciye",
      link: "Züccaciye",
      subcategories: [
        {
          label: "Clothing",
          subsubcategories: [
            { label: "Shirts", link: "#shirts" },
            { label: "Jeans", link: "#jeans" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Watches", link: "#watches" },
            { label: "Belts", link: "#belts" },
          ],
        },
      ],
    },
    {
      name: "Tessettür Giyim",
      link: "Tessettür Giyim",
      subcategories: [
        {
          label: "Clothing",
          subsubcategories: [
            { label: "T-Shirt", link: "#tshirt" },
            { label: "Pants", link: "#pants" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Bags", link: "#bags" },
            { label: "Jewelry", link: "#jewelry" },
          ],
        },
      ],
    },
    {
      name: "Çocuk Giyim",
      link: "Çocuk Giyim",
      subcategories: [
        {
          label: "Clothing",
          subsubcategories: [
            { label: "Shirts", link: "#shirts" },
            { label: "Jeans", link: "#jeans" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Watches", link: "#watches" },
            { label: "Belts", link: "#belts" },
          ],
        },
      ],
    },
    {
      name: "İç Giyim",
      link: "İç Giyim",
      subcategories: [
        { label: "Phones", link: "#phones" },
        { label: "Laptops", link: "#laptops" },
        { label: "Cameras", link: "#cameras" },
      ],
    },
    {
      name: "Aksesuar",
      link: "Aksesuar",
      subcategories: [
        {
          label: "Clothing",
          subsubcategories: [
            { label: "Shirts", link: "#shirts" },
            { label: "Jeans", link: "#jeans" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Watches", link: "#watches" },
            { label: "Belts", link: "#belts" },
          ],
        },
      ],
    },
    {
      name: "Elektronik",
      link: "Elektronik",
      subcategories: [
        {
          label: "Clothing",
          subsubcategories: [
            { label: "Shirts", link: "#shirts" },
            { label: "Jeans", link: "#jeans" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Watches", link: "#watches" },
            { label: "Belts", link: "#belts" },
          ],
        },
      ],
    },
    {
      name: "Yeni Gelenler",
      link: "Yeni Gelenler",
      subcategories: [
        {
          label: "Clothing",
          subsubcategories: [
            { label: "Shirts", link: "#shirts" },
            { label: "Jeans", link: "#jeans" },
          ],
        },
        {
          label: "Accessories",
          subsubcategories: [
            { label: "Watches", link: "#watches" },
            { label: "Belts", link: "#belts" },
          ],
        },
      ],
    },
  ];

  // Navbar içeriğini oluştur
  let navbarHTML = "";
  categories.forEach((category) => {
    navbarHTML += `
      <div class="subnav py-2">
        <a href="categories.php?category=${category.link}" class="subnavbtn eee font-family-semibold">${category.name}</a>
        <div class="subnav-content">
         <div class="flex">
    `;

    category.subcategories.forEach((subcategory) => {
      navbarHTML += `
        <div class="flex-column gap-2 p-4">
          <a href="categories.php" class="font-family-semibold subcategory-text">${subcategory.label}</a>
          <div class="flex-column">
      `;

      if (subcategory.subsubcategories) {
        subcategory.subsubcategories.forEach((subsubcategory) => {
          navbarHTML += `
            <a href="categories.php?category=${subsubcategory.link}" class="mt-1 font-family-regular text-sm subcategory-text">${subsubcategory.label}</a>
          `;
        });
      }

      navbarHTML += `</div></div>`;
    });

    navbarHTML += `
    </div>
        </div>
      </div>
    `;
  });

  // Navbar içeriğini HTML'e ekle
  navbar.innerHTML = navbarHTML;

  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

    // Alt menüyü açmak için olay ekle
    navbar.querySelectorAll(".subnav").forEach((subnav) => {
      subnav.addEventListener("mouseover", function () {
        const content = this.querySelector(".subnav-content");
        content.style.display = "block";

        // Siyah opak arka planı aç
        document.body.classList.add("overlay-active");
        var element = document.getElementById("carousel-img");
        if (element) {
          // null kontrolü ekle
          element.classList.add("opacity-decrease");
          element.classList.remove("opacity-increase");
        }
      });

      subnav.addEventListener("mouseout", function () {
        const content = this.querySelector(".subnav-content");
        content.style.display = "none";

        // Siyah opak arka planı kapat
        document.body.classList.remove("overlay-active");
        var element = document.getElementById("carousel-img");
        if (element) {
          // null kontrolü ekle
          element.classList.add("opacity-increase");
          element.classList.remove("opacity-decrease");
        }
      });
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const searchBar = document.querySelector(".header-search-bar");
  const searchMenu = document.getElementById("search-menu");

  const initialMenuContent = `
      <div class="flex-column p-4 gap-6">
          <div class="flex-column gap-2">
            <div class="flex justify-between">
              <h6 class="font-family-semibold text-sm">Geçmiş Aramalar</h6>
              <h6 class="font-family-semibold text-xs text-gray pointer" style="text-decoration: underline">Temizle</h6>
            </div>
            <div class="flex flex-wrap gap-2">
              <div class="word-card">
                <span class="font-family-regular" style="font-size: 14px">Etek</span>
              </div>
              <div class="word-card">
                <span class="font-family-regular" style="font-size: 14px">Gömlek</span>
              </div>
              <div class="word-card">
                <span class="font-family-regular" style="font-size: 14px">Eşofman</span>
              </div>
            </div>
          </div>
      </div>
  `;

  const getDynamicMenuContent = (query) => `
      <div class="flex-column p-4 gap-6">
          <div class="flex-column gap-2">
            <h6 class="font-family-semibold text-sm">İlgili Sonuçlar</h6>
            <div class="flex-column gap-1">
              <h6 class="font-family-regular text-sm">Etek</h6>
              <h6 class="font-family-regular text-sm">Gömlek</h6>
              <h6 class="font-family-regular text-sm">Eşofman</h6>
              <h6 class="font-family-regular text-sm">Triko</h6>
              <h6 class="font-family-regular text-sm">Tayt</h6>
              <h6 class="font-family-regular text-sm">Hırka</h6>
            </div>
          </div>
      </div>
  `;

  searchBar.addEventListener("focus", function () {
    searchMenu.innerHTML = initialMenuContent;
    searchMenu.classList.add("open");
    searchBar.classList.add("no-bottom-radius");
    searchBar.classList.add("input-shadow");
  });

  searchBar.addEventListener("input", function () {
    const query = searchBar.value.trim();
    if (query.length > 0) {
      searchMenu.innerHTML = getDynamicMenuContent(query);
    } else {
      searchMenu.innerHTML = initialMenuContent;
    }
  });

  searchBar.addEventListener("blur", function (event) {
    if (!searchMenu.contains(event.relatedTarget)) {
      searchMenu.classList.remove("open");
      searchBar.classList.remove("no-bottom-radius");
      searchBar.classList.remove("input-shadow");
    }
  });

  searchMenu.addEventListener("mousedown", function (event) {
    event.preventDefault();
  });
});
