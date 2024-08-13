function toggleCommentInformationModal(show) {
  var commentInformationModal = document.getElementById(
    "commentInformationModal"
  );
  if (show) {
    commentInformationModal.style.display = "block";
  } else {
    commentInformationModal.style.display = "none";
  }
}
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

  new Splide("#photo-gallery-review-slider", {
    type: "loop",
    perPage: 10,
    autoplay: true,
    interval: 3000,
    pauseOnHover: true,
    pagination: false,
    arrows: true,
    gap: 10,
  }).mount();

  // Modal açma ve kapama işlevini ayarlayın
  var photoModal = document.getElementById("photoModal");
  var photoButton = document.querySelectorAll(".photoButton");
  var close_icon = document.getElementsByClassName("close-icon")[0];
  photoButton.forEach(function (btn) {
    btn.addEventListener("click", function () {
      photoModal.style.display = "block";
    });
  });

  close_icon.addEventListener("click", function (event) {
    photoModal.style.display = "none";
  });

  // Modal açma ve kapama işlevini ayarlayın
  var commentInformationModal = document.getElementById(
    "commentInformationModal"
  );
  var commentInformationButton = document.querySelectorAll(
    ".commentInformationButton"
  );
  var modal_close_icon = document.getElementsByClassName("modal-close-icon")[0];

  commentInformationButton.forEach(function (btn) {
    btn.addEventListener("click", function () {
      toggleCommentInformationModal(true);
    });
  });

  modal_close_icon.addEventListener("click", function () {
    toggleCommentInformationModal(false);
  });

  window.addEventListener("click", function (event) {
    if (event.target === commentInformationModal) {
      toggleCommentInformationModal(false);
    }
  });

  // Varsayılan olarak 'Önceden Eklediklerim' sekmesini aktif yap
  tabs[0].click();
});
