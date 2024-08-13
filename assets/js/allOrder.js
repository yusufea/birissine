document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tabs .card-border");
  const orderContent = document.getElementById("orderContent");

  tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      // Tüm sekmelerden active-tab sınıfını kaldır
      tabs.forEach((t) => t.classList.remove("active-tab"));

      // Tıklanan sekmeye active-tab sınıfını ekle
      this.classList.add("active-tab");

      // İçeriği güncelle
      updateOrderContent(this.id);
    });
  });

  function updateOrderContent(tabId) {
    // İçeriği temizle
    orderContent.innerHTML = "";

    // Tab'a göre içerik ekle
    let content = "";

    switch (tabId) {
      case "tabAll":
        content = `
                  <div class="flex justify-between order-tag-area p-3">
                      <div class="flex-column">
                          <h5 class="text-sm font-family-semibold">Sipariş Tarihi</h5>
                          <h6 class="font-family-regular text-13">24 Mayıs 2021 - 20:27</h6>
                      </div>
                      <div class="flex-column">
                          <h5 class="text-sm font-family-semibold">Sipariş Özeti</h5>
                          <h6 class="font-family-regular text-13">2 Teslimat, 2 Ürün</h6>
                      </div>
                      <div class="flex-column">
                          <h5 class="text-sm font-family-semibold">Alıcı</h5>
                          <h6 class="font-family-regular text-13">Kullanıcı adı</h6>
                      </div>
                      <div class="flex-column">
                          <h5 class="text-sm font-family-semibold">Tutar</h5>
                          <h6 class="font-family-regular text-13">110,86 TL</h6>
                      </div>
                        <a href="orderDetail.php" class="go-cart-button text-sm w-full font-family-regular flex alignItems-center justify-center text-13" style="width:20%;">Sipariş Detayı</a>
                  </div>
                  <div class="p-4">
                      <div class="card-border p-4">
                          <div class="flex">
                              <div class="flex-column gap-1">
                                  <div class="flex alignItems-center gap-1 text-green-t text-sm">
                                      <span class="material-symbols-outlined">
                                          check
                                      </span>
                                      <h6 class="text-sm font-family-semibold">Teslim Edildi</h6>
                                  </div>
                                  <p class="font-family-regular text-13">
                                      1 ürün 28 Mayıs tarihinde teslim edilmiştir.
                                  </p>
                              </div>
                              <div class="flex justify-center gap-1_5" style="width: 50%;">
                                  <img class="order-img" src="./assets/media/images/cardimg4_1.webp" />
                                  <img class="order-img" src="./assets/media/images/cardimg4_2.webp" />
                              </div>
                          </div>
                      </div>
                  </div>`;
        break;
      case "tabOngoing":
        content = `<div class="p-4">
                  <p class="font-family-regular">Devam Eden Siparişler</p>
              </div>`;
        break;
      case "tabReturns":
        content = `<div class="p-4">
                  <p class="font-family-regular">İadeler</p>
              </div>`;
        break;
      case "tabCancellations":
        content = `<div class="p-4">
                  <p class="font-family-regular">İptaller</p>
              </div>`;
        break;
      default:
        content = `                <div class="flex-column card-border rounded-md">
                    <div class="flex justify-between order-tag-area p-3">
                        <div class="flex-column gap-1_5">
                            <h5 class="text-gray text-sm">Sipariş Tarihi</h5>
                            <h6 class="font-normal text-xs">24 Mayıs 2021 - 20:27</h6>
                        </div>
                        <div class="flex-column gap-1_5">
                            <h5 class="text-gray text-sm">Sipariş Özeti</h5>
                            <h6 class="font-normal text-xs">2 Teslimat, 2 Ürün</h6>
                        </div>
                        <div class="flex-column gap-1_5">
                            <h5 class="text-gray text-sm">Alıcı</h5>
                            <h6 class="font-normal text-xs">Kullanıcı adı</h6>
                        </div>
                        <div class="flex-column gap-1_5">
                            <h5 class="text-gray text-sm">Tutar</h5>
                            <h6 class="font-normal text-xs">110,86 TL</h6>
                        </div>
                        <a href="orderDetail.php" class="update-button open-sans font-semibold text-xs" role="button" style="width: 25%;">
                            Sipariş Detayı
                        </a>
                    </div>
                    <div class="p-4">
                        <div class="card-border p-4">
                            <div class="flex">
                                <div class="flex-column gap-1">
                                    <div class="flex alignItems-center gap-1 text-green-t text-sm">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                        <h6 class="text-sm open-sans font-normal">Teslim Edildi</h6>
                                    </div>
                                    <p class="font-semibold open-sans text-xxs">
                                        1 ürün 28 Mayıs tarihinde teslim edilmiştir.
                                    </p>
                                </div>
                                <div class="flex justify-center gap-1_5" style="width: 50%;">
                                    <img class="order-img" src="./assets/media/images/cardimg4_1.webp" />
                                    <img class="order-img" src="./assets/media/images/cardimg4_2.webp" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
    }

    // Yeni içeriği ekle
    orderContent.innerHTML = content;
  }

  // Varsayılan olarak 'Tümü' sekmesini aktif yap
  document.getElementById("tabAll").click()
});
