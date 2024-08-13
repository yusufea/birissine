document.addEventListener("DOMContentLoaded", function () {
  const searchBar = document.querySelector(".seller-search-bar");
  const searchMenu = document.getElementById("seller-search-menu");
  console.log(searchBar);
  const initialMenuContent = `
        <div class="flex-column p-4 gap-6">
            <div class="flex-column gap-2">
              <h6 class="font-family-semibold text-sm">Kategoriler</h6>
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

document.addEventListener("DOMContentLoaded", function () {
  const titles = document.querySelectorAll(".seller-tab-title");
  if (document.querySelector(".seller-all-products-page")) {
    titles[0].style.borderBottom = "solid 2px #232f3e";
    titles[0].style.color = "#000";
  } else if (document.querySelector(".seller-profile-page")) {
    titles[1].style.borderBottom = "solid 2px #232f3e";
    titles[1].style.color = "#000";
  }
});
