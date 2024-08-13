// NEW ADDRESS MODAL
var newAddressModal = document.getElementById("newAddressModal");
var newAddressButton = document.getElementById("newAddressButton");
var modal_close_icon = document.getElementsByClassName("modal-close-icon")[0];

newAddressButton.onclick = function () {
  newAddressModal.style.display = "block";
};

modal_close_icon.onclick = function () {
  newAddressModal.style.display = "none";
};

// EDİT ADDRES MODAL
var editAddressModal = document.getElementById("editAddressModal");
var editAddressModalClose = document.getElementsByClassName("close")[0];
var btns = document.querySelectorAll(".edit-address-button");

editAddressModalClose.onclick = function () {
  editAddressModal.style.display = "none";
};

btns.forEach(function (btn) {
  btn.onclick = function () {
    editAddressModal.style.display = "block";
  };
});

// DELETE ADDRESS MODAL
var deleteAddressModal = document.getElementById("deleteAddressModal");
var closeIcon = document.getElementsByClassName("close")[1];
var deleteAddressBtns = document.querySelectorAll(".delete-address-button");

closeIcon.onclick = function () {
  deleteAddressModal.style.display = "none";
};

deleteAddressBtns.forEach(function (btn) {
  btn.onclick = function () {
    deleteAddressModal.style.display = "block";
  };
});

// DELETE MODAL HAYIR BUTONU
var deleteAddresModalNoButton = document.getElementById(
  "deleteAddresModalNoButton"
);

deleteAddresModalNoButton.onclick = function () {
  deleteAddressModal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == deleteAddressModal) {
    deleteAddressModal.style.display = "none";
  }
  if (event.target == editAddressModal) {
    editAddressModal.style.display = "none";
  }
  if (event.target == newAddressModal) {
    newAddressModal.style.display = "none";
  }
};

document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.getElementById("phone");

  phoneInput.addEventListener("input", function () {
    let value = phoneInput.value.replace(/\D/g, ""); // Sadece rakamları al

    // Başlangıçta 0 ekleyip değerleri formatla
    let formattedValue = "";
    if (value.length > 0) {
      formattedValue += "0";
    }
    if (value.length > 1) {
      formattedValue += " (" + value.slice(1, 4);
    }
    if (value.length > 4) {
      formattedValue += ") " + value.slice(4, 7);
    }
    if (value.length > 7) {
      formattedValue += " " + value.slice(7, 9);
    }
    if (value.length > 9) {
      formattedValue += " " + value.slice(9, 11);
    }

    phoneInput.value = formattedValue;
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.getElementById("phone2");

  phoneInput.addEventListener("input", function () {
    let value = phoneInput.value.replace(/\D/g, ""); // Sadece rakamları al

    // Başlangıçta 0 ekleyip değerleri formatla
    let formattedValue = "";
    if (value.length > 0) {
      formattedValue += "0";
    }
    if (value.length > 1) {
      formattedValue += " (" + value.slice(1, 4);
    }
    if (value.length > 4) {
      formattedValue += ") " + value.slice(4, 7);
    }
    if (value.length > 7) {
      formattedValue += " " + value.slice(7, 9);
    }
    if (value.length > 9) {
      formattedValue += " " + value.slice(9, 11);
    }

    phoneInput.value = formattedValue;
  });
});
