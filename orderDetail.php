<?php require_once('header.php') ?>
<link rel="stylesheet" href="./assets/css/orderDetail.css">
<div>
    <div id="reviewSellerModal" class="modal-2">
        <div class="modal-content-2" style="width: 28%;padding: 20px;padding-top: 11px;">
            <div class="modal-header-2 mb-2">
                <div class="flex justify-between alignItems-center">
                    <h4 class=" text-base font-family-semibold">Görüşlerinizi Paylaşın</h4>
                    <span class="modal-close-icon">&times;</span>
                </div>
            </div>
            <!-- <div class="my-2" style="height: 1px;background-color: #333; opacity:0.1"></div> -->
            <div class="flex-column gap-4">
                <div class="flex gap-4">
                    <img src="assets/media/images/c_0158.jpg" style="width: 80px;border-radius:4px">
                    <div class="flex-column gap-2">
                        <div class="flex-column">
                            <h6 class="font-family-semibold" style="font-size: 15px;">Birissine</h6>
                            <h6 class="font-family-regular" style="font-size: 13px;">Baget Çanta Bej</h6>
                        </div>
                        <div class="flex gap-1 text-base">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star none-checked"></span>
                            <span class="fa fa-star none-checked"></span>
                        </div>
                    </div>
                </div>
                <div class="flex-column gap-2 w-full">
                    <div class="flex gap-1 alignItems-center">
                        <label class=" text-sm font-family-semibold">
                            Yorumunuz
                        </label>
                        <div class="flex text-xs font-family-regular text-gray-t">
                            (<div class="flex text-xs font-family-regular text-gray-t" style="justify-content: end;" id="charCount">2500</div>)
                        </div>
                    </div>
                    <div class="flex-column">
                        <textarea maxlength="2500" id="story" name="story" rows="5" cols="33" class="font-family-regular" style="font-size: 13px;" placeholder="Bu ürün, hem fiyatıyla bütçe dostu hem de kaliteli bir yapıya sahip."></textarea>
                    </div>
                </div>
                <div class="flex gap-2 alignItems-center">
                    <input type="checkbox" style="width: 15px; height: 15px;">
                    <p class="font-family-regular text-xs">
                        Yorumlarda ismimin gözükmesine ve yorum detaylarının platform genelinde kullanılmasına izin veriyorum. Aydınlatma Metni’ne ulaşmak için tıklayınız.
                    </p>
                </div>
                <button class="add-comment py-2">Yorum Yap</button>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row gap-7">
            <div class="col-2">
                <?php require_once('settingsTabs.php') ?>
            </div>
            <div class="col-10">
                <div class="flex-column gap-5">
                    <div class="page-header-tag p-4 card-border open-sans">
                        <div class="flex justify-between alignItems-center">
                            <h3 class="open-sans font-family-semibold text-base">
                                Sipariş Detayı
                            </h3>
                            <div class="flex-column text-center">
                                <h5 class="text-sm font-family-semibold">Sipariş Tarihi</h5>
                                <h6 class="font-family-regular text-13">24 Mayıs 2021 - 20:27</h6>
                            </div>
                            <div class="flex-column text-center">
                                <h5 class="text-sm font-family-semibold">Sipariş Özeti</h5>
                                <h6 class="font-family-regular text-13">2 Teslimat, 2 Ürün</h6>
                            </div>
                            <div class="flex-column text-center">
                                <h5 class="text-sm font-family-semibold">Alıcı</h5>
                                <h6 class="font-family-regular text-13">Kullanıcı adı</h6>
                            </div>
                            <div class="flex-column text-center">
                                <h5 class="text-sm font-family-semibold">Tutar</h5>
                                <h6 class="font-family-regular text-13">110,86 TL</h6>
                            </div>
                            <p class="text-sm text-green-t open-sans font-family-semibold">1 Teslim</p>
                        </div>
                    </div>
                    <div class="flex-column card-border rounded-md">
                        <div class="flex justify-between order-tag-area px-4 py-2">
                            <div class="flex gap-4 alignItems-center">
                                <div class="flex gap-2 alignItems-center">
                                    <span class="material-symbols-outlined bg-white p-2 rounded-full text-general-color">
                                        package_2
                                    </span>
                                    <div class="flex-column">
                                        <h5 class="text-sm font-family-semibold">Teslimat No</h5>
                                        <h6 class="text-xs font-family-regular" style="font-size: 13px;">387534120</h6>
                                    </div>
                                </div>
                                <hr class="h-full" style="opacity: 0.4;">
                                <div class="flex-column">
                                    <h5 class="text-sm font-family-semibold">Kargo Firması</h5>
                                    <h6 class="text-xs font-family-regular" style="font-size: 13px;">Aras Kargo</h6>
                                </div>
                            </div>
                            <div class="flex gap-2 show-bill alignItems-center card-border px-2 p-1" style="cursor: pointer;">
                                <span class="material-symbols-outlined text-black-t">
                                    receipt_long
                                </span>
                                <h6 class="font-family-regular open-sans" style="font-size: 13px;">Fatura Görüntüle</h6>
                            </div>
                        </div>
                        <div class="p-3">
                            <div class="flex">
                                <div class="flex-column gap-3 w-full">
                                    <div class="flex justify-between w-full alignItems-center rounded-md" style="background-color: #fafafa;padding-top:8px;padding-bottom:8px">
                                        <h6 class="font-family-semibold text-md pl-2">
                                            Satıcı: <span class="font-family-regular">Birissine</span>
                                        </h6>
                                        <div class="pr-2">
                                            <button class="seller-review font-family-regular text-xs pr-2">Satıcıyı Değerlendir</button>
                                        </div>
                                    </div>
                                    <div class="flex justify-between alignItems-center">
                                        <div class="flex-column gap-1">
                                            <div class="flex alignItems-center gap-1 text-green-t text-sm">
                                                <span class="material-symbols-outlined">
                                                    check
                                                </span>
                                                <h6 class="text-sm font-family-semibold">Teslim Edildi</h6>
                                            </div>
                                            <p class="font-family-regular text-13">
                                                Aşağıdaki <span class="font-family-semibold">1</span> ürün <span class="font-family-semibold">28 Mayıs</span> tarihinde teslim edilmiştir.
                                            </p>
                                        </div>
                                        <button class="delivery-detail-button card-border mr-2" style="cursor: pointer;">Teslimat Detayı</button>
                                    </div>
                                    <div class="flex flex-wrap gap-4">
                                        <a href="productDetail.php" class="card-border p-2 flex gap-3 order-detail-card grow">
                                            <img class="order-img" src="./assets/media/images/cardimg4_2.webp" />
                                            <div class="flex-column gap-2 justify-between">
                                                <div class="flex-column gap-1">
                                                    <div class="flex-column">
                                                        <h6 class="open-sans font-family-regular text-sm text-black-t">
                                                            <span class="font-family-semibold">Lufian</span> Yoko Kadın Sneaker Ayakkabı Siyah
                                                        </h6>
                                                        <p class="open-sans font-family-regular text-gray-t text-xs" style="font-size: 13px;">- Beden: M - Adet: 1</p>
                                                    </div>
                                                    <h6 class="open-sans font-family-semibold text-black-t text-md">589.99 TL</h6>
                                                </div>
                                                <div class="flex gap-4">
                                                    <div class="order-detail-card-container flex alignItems-center">
                                                        <span class="material-symbols-outlined text-base">
                                                            cached
                                                        </span>
                                                        <button class="order-detail-card-button">Tekrar Satın Al</button>
                                                    </div>
                                                    <button class="order-detail-card-button order-detail-card-container review-seller-button">Ürünü Değerlendir</button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="productDetail.php" class="card-border p-2 flex gap-3 order-detail-card grow">
                                            <img class="order-img" src="./assets/media/images/cardimg4_2.webp" />
                                            <div class="flex-column gap-2 justify-between">
                                                <div class="flex-column gap-1">
                                                    <div class="flex-column">
                                                        <h6 class="open-sans font-family-regular text-sm text-black-t">
                                                            <span class="font-family-semibold">Lufian</span> Yoko Kadın Sneaker Ayakkabı Siyah
                                                        </h6>
                                                        <p class="open-sans font-family-regular text-gray-t text-xs" style="font-size: 13px;">- Beden: M - Adet: 1</p>
                                                    </div>
                                                    <h6 class="open-sans font-family-semibold text-black-t text-md">589.99 TL</h6>
                                                </div>
                                                <div class="flex gap-4">
                                                    <div class="order-detail-card-container flex alignItems-center">
                                                        <span class="material-symbols-outlined text-base">
                                                            cached
                                                        </span>
                                                        <button class="order-detail-card-button">Tekrar Satın Al</button>
                                                    </div>
                                                    <button class="order-detail-card-button order-detail-card-container review-seller-button">Ürünü Değerlendir</button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="productDetail.php" class="card-border p-2 flex gap-3 order-detail-card grow">
                                            <img class="order-img" src="./assets/media/images/cardimg4_2.webp" />
                                            <div class="flex-column gap-2 justify-between">
                                                <div class="flex-column gap-1">
                                                    <div class="flex-column">
                                                        <h6 class="open-sans font-family-regular text-sm text-black-t">
                                                            <span class="font-family-semibold">Lufian</span> Yoko Kadın Sneaker Ayakkabı Siyah
                                                        </h6>
                                                        <p class="open-sans font-family-regular text-gray-t text-xs" style="font-size: 13px;">- Beden: M - Adet: 1</p>
                                                    </div>
                                                    <h6 class="open-sans font-family-semibold text-black-t text-md">589.99 TL</h6>
                                                </div>
                                                <div class="flex gap-4">
                                                    <div class="order-detail-card-container flex alignItems-center">
                                                        <span class="material-symbols-outlined text-base">
                                                            cached
                                                        </span>
                                                        <button class="order-detail-card-button">Tekrar Satın Al</button>
                                                    </div>
                                                    <button class="order-detail-card-button order-detail-card-container review-seller-button">Ürünü Değerlendir</button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="productDetail.php" class="card-border p-2 flex gap-3 order-detail-card grow">
                                            <img class="order-img" src="./assets/media/images/cardimg4_2.webp" />
                                            <div class="flex-column gap-2 justify-between">
                                                <div class="flex-column gap-1">
                                                    <div class="flex-column">
                                                        <h6 class="open-sans font-family-regular text-sm text-black-t">
                                                            <span class="font-family-semibold">Lufian</span> Yoko Kadın Sneaker Ayakkabı Siyah
                                                        </h6>
                                                        <p class="open-sans font-family-regular text-gray-t text-xs" style="font-size: 13px;">- Beden: M - Adet: 1</p>
                                                    </div>
                                                    <h6 class="open-sans font-family-semibold text-black-t text-md">589.99 TL</h6>
                                                </div>
                                                <div class="flex gap-4">
                                                    <div class="order-detail-card-container flex alignItems-center">
                                                        <span class="material-symbols-outlined text-base">
                                                            cached
                                                        </span>
                                                        <button class="order-detail-card-button">Tekrar Satın Al</button>
                                                    </div>
                                                    <button class="order-detail-card-button order-detail-card-container review-seller-button">Ürünü Değerlendir</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div class="flex-column w-full">
                            <div class="card-tag-area p-2 px-4">
                                <h6 class="font-family-semibold text-md">Teslimat Bilgileri</h6>
                            </div>
                            <div class="card-content-area p-4 flex-column gap-4">
                                <div class="flex-column gap-2">
                                    <h6 class="font-family-semibold text-sm">Fatura Adresi</h6>
                                    <div class="flex-column gap-1">
                                        <h6 class="font-family-regular text-sm">Kullanıcı Adı</h6>
                                        <p class="font-family-regular text-sm">İkitelli OSB Masko Birissine.com 5.kat, Başakşehir/İstanbul</p>
                                        <h6 class="font-family-regular text-sm">Başakşehir/İstanbul</h6>
                                    </div>
                                </div>
                                <div class="flex-column gap-2">
                                    <h6 class="font-family-semibold text-sm">Teslimat Adresi</h6>
                                    <div class="flex-column gap-1">
                                        <h6 class="font-family-regular text-sm">Kullanıcı Adı</h6>
                                        <p class="font-family-regular text-sm">İkitelli OSB Masko Birissine.com 5.kat, Başakşehir/İstanbul</p>
                                        <h6 class="font-family-regular text-sm">Başakşehir/İstanbul</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-column w-full h-full" style="height: 302px;">
                            <div class="card-tag-area p-2 px-4 flex justify-between">
                                <h6 class="font-family-semibold text-md">Ödeme Bilgileri</h6>
                                <div>
                                    <h6 class="font-family-semibold text-sm">****1744 - Tek Çekim</h6>
                                </div>
                            </div>
                            <div class="card-content-area p-4 h-full">
                                <div>
                                    <div class="flex justify-between py-1">
                                        <h6 class="font-family-regular text-sm">Ürün Toplam</h6>
                                        <h6 class="font-family-semibold text-sm">589.99 TL</h6>
                                    </div>
                                    <hr style="opacity: 0.4;">
                                </div>
                                <div>
                                    <div class="flex justify-between py-1">
                                        <h6 class="font-family-regular text-sm">Kargo Tutarı</h6>
                                        <h6 class="font-family-semibold text-sm">-20,49 TL</h6>
                                    </div>
                                    <hr style="opacity: 0.4;">
                                </div>
                                <div>
                                    <div class="flex justify-between py-1">
                                        <h6 class="font-family-regular text-sm">Sepette %20 İndirim</h6>
                                        <h6 class="font-family-semibold text-sm">-9,99 TL</h6>
                                    </div>
                                    <hr style="opacity: 0.4;">
                                </div>
                                <div>
                                    <div class="flex justify-between py-1">
                                        <h6 class="font-family-semibold text-md">Toplam</h6>
                                        <h6 class="font-family-semibold text-md">589.99 TL</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-column mt-4">
                        <h3 class="text-xl font-family-semibold mb-3">Bu Ürünü Alanlar Bunları da Aldı</h3>
                        <div id="buy-product-slider" class="splide">
                            <div class="splide__track">
                                <ul class="splide__list" id="buy-product-list">
                                    <li class="splide__slide">
                                        <a href="productDetail.php" class="card">
                                            <div style="position: relative;">
                                                <img
                                                    src="assets/media/images/c_0159.jpg"
                                                    class="card-img"
                                                    alt="ürün görseli" />
                                                <i class="fa fa-heart add-favorite-icon" style="color: #f8796c;" aria-hidden="true"></i>
                                            </div>
                                            <div class='card-down-side my-1'>
                                                <div class="flex-column gap-2">
                                                    <div style="display: flex; align-items: start; gap: 3px">
                                                        <p class="font-family-regular text-xs"><span class="font-family-semibold text-sm" style="margin-right:2px">Birissine
                                                            </span>Baget Çanta Bej</p>
                                                    </div>
                                                    <div style="display: flex; gap: 4px; align-items: center">
                                                        <div class="flex alignItems-center gap-1 text-xs">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                        </div>
                                                        <p class="text-black-t font-family-regular">(6)</p>
                                                    </div>

                                                </div>
                                                <h4 class="card-price font-family-black text-black-t">102,99 TL</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('footer.php') ?>
    <script src="./assets/js/orderDetail.js"></script>