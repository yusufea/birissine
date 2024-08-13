document.addEventListener("DOMContentLoaded", function () {
  // Aktif sayfanın URL'sini alın
  const currentUrl = window.location.href;

  // Menü öğelerini alın
  const userInfoLink = document.getElementById("userInfoLink");
  const allOrdersLink = document.getElementById("allOrdersLink");
  const addressInfoLink = document.getElementById("addressInfoLink");
  const helpLink = document.getElementById("helpLink");

  // Aktif olan menü öğesine 'active' sınıfını ekleyin
  if (currentUrl.includes("userInfo.php")) {
    userInfoLink.classList.add("change-tab-color");
  } else if (
    currentUrl.includes("allOrders.php") |
    currentUrl.includes("orderDetail.php")
  ) {
    allOrdersLink.classList.add("change-tab-color");
  } else if (currentUrl.includes("addressInfo.php")) {
    addressInfoLink.classList.add("change-tab-color");
  } else if (currentUrl.includes("help.php")) {
    helpLink.classList.add("change-tab-color");
  }
});
