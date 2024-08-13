<?php
require_once("simpleHeader.php");
?>
<link rel="stylesheet" href="assets/css/check.css">

<div class="container my-3">
    <div class="flex gap-4">
        <div style="width: 78%;">
            <div class="flex tabs w-full" style="background-color: #fafafa;">
                <div class="tab address p-2 order-tab w-full" id="addressTab">
                    <h6 class="font-family-semibold text-2xl text-general-color mb-1">Adres Bilgileri</h6>
                    <h6 class="font-family-semibold text-md pointer text-gray">Evim</h6>
                    <h6 class="font-family-regular text-sm text-gray">Bahçelievler/Yenibosna 29 ekim caddesi yenibosna merkez mahallesi</h6>
                    <h6 class="font-family-regular text-sm text-gray">34194 - İstanbul/Bahçelievler</h6>
                </div>
                <div class="tab payment p-2 order-tab w-full" id="paymentTab">
                    <h6 class="font-family-semibold text-xl text-general-color mb-1">Ödeme Seçenekleri</h6>
                    <h6 class="font-family-regular text-sm pointer text-gray">Banka veya Kredi Kartı kullanarak ödemenizi güvenle yapabilirsiniz.</h6>
                </div>
            </div>
            <div id="orderContent" class="flex-column gap-6 rounded-md mt-4"></div>
        </div>

        <div style="width: 22%;">
            <?php $page = 'check';
            require('orderSummary.php') ?>
        </div>
    </div>
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
                        <input class="input w-full" type="text" placeholder="Adınızı Giriniz" style="height: 46px;width:100%">
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            Soyad*
                        </label>
                        <input class="input" type="text" placeholder="Soyadınızı Giriniz" style="height: 46px;width:100%">
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Cep telefonu*
                        </label>
                        <input type="tel" id="phone" name="phone" placeholder="0 (___) ___ __ __" style="height: 46px;width:100%" class="input" required>
                        <p id="message"></p>
                        <!-- <input class="input w-full" type="tel" id="phone" name="phone" pattern="^(?:\+90|0)?[1-9][0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}$" > -->
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            İl*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-province" style="height: 46px;">
                            <!-- JavaScript ile doldurulacak -->
                        </select>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            İlçe*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-district" disabled style="height: 46px;">
                            <!-- JavaScript ile doldurulacak -->
                        </select>
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Mahalle*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-quarter" disabled style="height: 46px;">
                            <!-- JavaScript ile doldurulacak -->
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
                    <input class="input" type="text" placeholder="Adres Başlığı Giriniz" style="height: 46px;width:100%">
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
                    <div class="flex-column gap-1">
                        <h4 class=" text-base font-family-semibold">Adresi Düzenle</h4>
                        <p class="sans-pro-Light text-xs">Kargonuzun sorunsuz ulaşması için tüm alanları eksiksiz doldurun. *</p>
                    </div>
                    <span class="close">&times;</span>
                </div>
            </div>
            <div class="my-2" style="height: 1px;background-color: #333; opacity:0.1"></div>
            <form action="" class="flex-column gap-3 py-2">
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            Ad*
                        </label>
                        <input class="input" type="text" placeholder="Adınızı Giriniz" style="height: 46px;width:100%">
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            Soyad*
                        </label>
                        <input class="input" type="text" placeholder="Soyadınızı Giriniz" style="height: 46px;width:100%">
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            Cep telefonu*
                        </label>
                        <input class="input" type="tel" id="phone2" name="phone" placeholder="0 (___) ___ __ __" style="height: 46px;width:100%">
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            İl*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-province-2" style="height: 46px;">
                            <!-- JavaScript ile doldurulacak -->
                        </select>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex-column gap-2 w-full">
                        <label class="text-sm font-family-semibold ml-1">
                            İlçe*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-district-2" disabled style="height: 46px;">
                            <!-- JavaScript ile doldurulacak -->
                        </select>
                    </div>
                    <div class="flex-column gap-2 w-full">
                        <label class=" text-sm font-family-semibold ml-1">
                            Mahalle*
                        </label>
                        <select class="dropdown-menu" id="dropdown-menu-quarter-2" disabled style="height: 46px;">
                            <!-- JavaScript ile doldurulacak -->
                        </select>
                    </div>
                </div>
                <div class="flex-column gap-2 w-full">
                    <label class=" text-sm font-family-semibold ml-1">
                        Adres*
                    </label>
                    <textarea id="addressTextArea" name="story" rows="5" cols="33" placeholder="Cadde, mahalle sokak ve diğer bilgileri giriniz."></textarea>
                </div>
                <div class="flex-column gap-2 w-full">
                    <label class="text-sm font-family-semibold ml-1">
                        Adres Başlığı*
                    </label>
                    <input class="input" type="text" placeholder="Adres Başlığı Giriniz" style="height: 46px;width:100%">
                </div>
                <button type="submit" class="w-full continue-shop-button card-border px-6  font-semibold text-sm py-2" style="cursor: pointer;">
                    Kaydet
                </button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" lang="js" src="assets/js/check.js"></script>
<?php
require_once("footer.php");
?>