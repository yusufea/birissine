<?php require_once('header.php') ?>
<link rel="stylesheet" href="assets/css/addressInfo.css">
<div>
    <div id="newAddressModal" class="modal-2">
        <div class="modal-content-2">
            <div class="modal-header-2">
                <div class="flex justify-between alignItems-center">
                    <div class="flex-column gap-1">
                        <h4 class="text-base font-family-semibold">Adres Ekle</h4>
                        <p class="sans-pro-Light text-xs">Kargonuzun sorunsuz ulaşması için tüm alanları eksiksiz doldurun. *</p>

                    </div>
                    <span class="modal-close-icon">&times;</span>
                </div>
            </div>
            <div class="my-2" style="height: 1px;background-color: #333; opacity:0.1"></div>
            <form action="" class="flex-column gap-3 py-2">
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Ad*
                        </label>
                        <input class="input w-full" type="text" placeholder="Adınızı Giriniz" style="height: 23px;">
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            Soyad*
                        </label>
                        <input class="input" type="text" placeholder="Soyadınızı Giriniz" style="height: 23px;">
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Cep telefonu*
                        </label>
                        <input type="tel" id="phone" name="phone" placeholder="0 (___) ___ __ __" style="height: 23px;" class="input" required>
                        <p id="message"></p>
                        <!-- <input class="input w-full" type="tel" id="phone" name="phone" pattern="^(?:\+90|0)?[1-9][0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}$" > -->
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            İl*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-province" style="height: 46px;">
                            <option class='select-option-text' value="${option.value}">İstanbul</option>
                            <option class='select-option-text' value="${option.value}">Bursa</option>
                        </select>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            İlçe*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-district" style="height: 46px;">
                            <option class='select-option-text' value="${option.value}">Bahçelievler</option>
                            <option class='select-option-text' value="${option.value}">Osmangazi</option>
                        </select>
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Mahalle*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-quarter" style="height: 46px;">
                            <option class='select-option-text' value="${option.value}">Yenibosna Merkez Mah.</option>
                        </select>
                    </div>
                </div>
                <div class="flex-column gap-2 w-full">
                    <label class=" text-sm font-family-semibold ml-1">
                        Adres*
                    </label>
                    <textarea id="addressTextArea" class="font-family-semibold text-xs" name="story" rows="5" cols="33" placeholder="Cadde, mahalle sokak ve diğer bilgileri giriniz."></textarea>
                </div>
                <div class="flex-column gap-2 w-full">
                    <label class=" text-sm font-family-semibold ml-1">
                        Adres Başlığı*
                    </label>
                    <input class="input" type="text" placeholder="Adres Başlığı Giriniz" style="height: 23px;">
                </div>
                <button type="submit" class="w-full continue-shop-button card-border px-6  font-semibold text-sm py-2" style="cursor: pointer;">
                    Kaydet
                </button>

            </form>
        </div>
    </div>

    <div id="editAddressModal" class="modal-2">
        <div class="modal-content-2">
            <div class="modal-header-2">
                <div class="flex justify-between alignItems-center">
                    <h4 class=" text-base font-family-semibold">Adresi Düzenle</h4>
                    <span class="close">&times;</span>
                </div>
            </div>
            <div class="my-2" style="height: 1px;background-color: #333; opacity:0.1"></div>
            <form action="" class="flex-column gap-3 py-2">
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Ad*
                        </label>
                        <input class="input w-full" type="text" placeholder="Adınızı Giriniz" style="height: 23px;">
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            Soyad*
                        </label>
                        <input class="input" type="text" placeholder="Soyadınızı Giriniz" style="height: 23px;">
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Cep telefonu*
                        </label>
                        <input type="tel" id="phone2" name="phone" placeholder="0 (___) ___ __ __" style="height: 23px;" class="input" required>
                        <p id="message"></p>
                        <!-- <input class="input w-full" type="tel" id="phone" name="phone" pattern="^(?:\+90|0)?[1-9][0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}$" > -->
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            İl*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-province-2" style="height: 46px;">
                            <option class='select-option-text' value="${option.value}">İstanbul</option>
                            <option class='select-option-text' value="${option.value}">Bursa</option>
                        </select>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            İlçe*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-district-2" style="height: 46px;">
                            <option class='select-option-text' value="${option.value}">Bahçelievler</option>
                            <option class='select-option-text' value="${option.value}">Osmangazi</option>
                        </select>
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Mahalle*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-quarter-2" style="height: 46px;">
                            <option class='select-option-text' value="${option.value}">Yenibosna Merkez Mah.</option>
                        </select>
                    </div>
                </div>
                <div class="flex-column gap-2 w-full">
                    <label class=" text-sm font-family-semibold ml-1">
                        Adres*
                    </label>
                    <textarea id="addressTextArea" class="font-family-semibold text-xs" name="story" rows="5" cols="33" placeholder="Cadde, mahalle sokak ve diğer bilgileri giriniz."></textarea>
                </div>
                <div class="flex-column gap-2 w-full">
                    <label class=" text-sm font-family-semibold ml-1">
                        Adres Başlığı*
                    </label>
                    <input class="input" type="text" placeholder="Adres Başlığı Giriniz" style="height: 23px;">
                </div>
                <button type="submit" class="w-full continue-shop-button card-border px-6  font-family-semibold text-sm py-2" style="cursor: pointer;">
                    Kaydet
                </button>
            </form>
        </div>
    </div>
    <div id="deleteAddressModal" class="modal-2">
        <div class="modal-content-2">
            <div class="modal-header-2">
                <div class="flex justify-between alignItems-center">
                    <h4 class="text-base font-family-semibold">Adresi Sil</h4>
                    <span class="close">&times;</span>
                </div>
            </div>
            <div class="my-2" style="height: 1px;background-color: #333; opacity:0.1"></div>
            <div>
                <h6 class=" text-sm font-family-regular my-5">Adresi silmek istediğinizden emin misiniz?</h6>
                <div class="flex gap-5">
                    <button class="w-full card-border px-6  font-family-semibold text-sm py-2" style="cursor: pointer; background-color:white">
                        Evet
                    </button>
                    <button id="deleteAddresModalNoButton" class="w-full card-border px-6  font-family-semibold text-sm py-2 text-color-t" style="cursor: pointer; background-color:white">
                        Hayır
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4" style="min-height: 100vh;">
        <div class="row gap-7">
            <div class="col-2">
                <?php require_once('settingsTabs.php') ?>
            </div>
            <div class="col-10">
                <div class="flex-column gap-6">
                    <div class="page-header-tag px-4 py-3 card-border flex justify-between">
                        <h3 class="font-family-semibold text-base">
                            Adres Bilgilerim
                        </h3>
                        <div id="newAddressButton" class="flex alignItems-center gap-2" style="cursor: pointer;">
                            <span class="material-symbols-outlined text-black-t">
                                add
                            </span>
                            <h6 class=" text-sm font-family-semibold">Yeni Adres Ekle</h6>
                        </div>
                    </div>
                    <div class="card-border p-4 flex flex-wrap gap-4">
                        <div class="card-border" style="width: calc((100% / 3) - ((24px + 16px) / 3));">
                            <div class="address-cart-header p-1 px-2">
                                <h6 class=" text-sm font-family-semibold">Ev Adresim</h6>
                            </div>
                            <div class="flex-column gap-5 p-2">
                                <div class="flex-column gap-1">
                                    <h6 class=" text-xs font-family-semibold" style="font-size: 13px;">Murat Canatan</h6>
                                    <h6 class=" text-xs font-family-regular">İ.O.S.B Mah.</h6>
                                    <h6 class=" text-xs font-family-regular">Süleyman Demirel Bulvarı HESKOP Sanayi Sitesi Kat 5</h6>
                                    <h6 class=" text-xs font-family-regular">Başakşehir/İstanbul</h6>
                                    <h6 class=" text-xs font-family-regular">05383727524</h6>
                                </div>
                                <div class="flex justify-between alignItems-center">
                                    <div class="flex alignItems-center gap-1 delete-address-button pointer">
                                        <span class="material-symbols-outlined text-gray-t text-lg">
                                            delete
                                        </span>
                                        <h6 class="font-family-regular text-sm">Sil</h6>
                                    </div>
                                    <button class="edit-address-button editAddressButton" role="button">Adresi Düzenle</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/addressInfo.js"></script>
<?php
require_once("footer.php");
?>