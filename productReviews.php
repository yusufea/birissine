<?php
require_once("header.php");
?>
<link rel="stylesheet" href="assets/css/productReviews.css">
<div class="container my-4" style="min-height: 100vh;">
    <a href="productDetail.php" class="flex my-2 text-gray alignItems-center sticky-left-back">
        <span class="material-symbols-outlined" style="margin-bottom: 1px;">
            chevron_left
        </span>
        <h6 class="font-family-semibold text-sm">Ürüne dön</h6>
    </a>
    <div class="row">
        <div class="col-4">
            <div class="flex-column gap-4 sticky-left">
                <div class="flex gap-2">
                    <div class="relative">
                        <img src="assets/media/images/cardimg4.webp" class="product-detail-img" alt="ürün görseli" />
                        <span class="material-symbols-outlined add-to-favorite-second">
                            favorite
                        </span>
                    </div>
                    <div class="flex-column  gap-5" style="width: 100%;">
                        <div class="flex-column gap-1">
                            <h5 class="font-family-regular text-base">
                                <span class="font-family-semibold">Lufian </span>Yoko Kadın Sneaker
                                Ayakkabı Siyah
                            </h5>
                            <h4 class="text-general-color font-family-black text-lg">1.539,90 TL</h4>
                        </div>
                        <div class="flex alignItems-center gap-3">
                            <select id="dropdown-menu">
                                <option class='select-option-size' value="${option.value}">S</option>
                                <option class='select-option-size' value="${option.value}">M</option>
                                <option class='select-option-size' value="${option.value}">L</option>
                                <option class='select-option-size' value="${option.value}">XL</option>
                            </select>
                            <button class="add-to-basket font-family-semibold text-sm" role="button" style="padding-top: 2.5px;">
                                Sepete Ekle
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2 alignItems-center justify-between">
                    <div class="flex gap-2 alignItems-center">
                        <div class="flex-column alignItems-center text-center">
                            <span class="font-family-semibold text-xl">3.6</span>
                            <h6 class="text-gray-t font-family-regular text-center" style="width: 45px;">Ortalama Puan</h6>
                        </div>
                        <div class="flex gap-1 alignItems-center text-lg">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star none-checked"></span>
                            <span class="fa fa-star none-checked"></span>
                        </div>
                    </div>
                    <div class="flex gap-2 alignItems-center">
                        <div class="flex">
                            <span class="font-family-regular text-xs text-gray-t">107 Değerlendirme</span>
                        </div>
                        <div class="dot-icon"></div>
                        <div class="flex">
                            <span class="font-family-regular text-xs text-gray-t">71 Yorum</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mx-5" style="min-height: 100vh; opacity: 0.2" />
        <div class="col-8">
            <div class="flex-column gap-5">
                <h2 class="font-family-semibold text-xl">
                    Tüm Değerlendirmeler (107)
                </h2>
                <div class="flex gap-3">
                    <input class="input font-family-semibold" type="text" placeholder="Değerlendirmelerde Ara" />
                    <select id="dropdown-comment-options-menu">
                        <option class='select-option-size' value="${option.value}">Önerilen</option>
                        <option class='select-option-size' value="${option.value}">Yeniden Eskiye</option>
                        <option class='select-option-size' value="${option.value}">Eskiden Yeniye</option>
                    </select>
                </div>
                <div class="featured-comment-tag">
                    <i class="fa fa-comment" style="color: #232f3e"></i>
                    <h6 class="font-family-semibold text-13 text-black-t">
                        Kullanıcıların çoğu 1 beden küçük almanızı öneriyor
                    </h6>
                </div>
                <div class="flex-column gap-6">
                    <div class="flex-column gap-4">
                        <div class="flex justify-between gap-2">
                            <div class="flex alignItems-center gap-3">
                                <span class="font-family-regular text-xs" style="color: #666">Y** T**</span>
                                <div class="dot-icon"></div>
                                <span class="font-family-regular text-xs" style="color: #666">4 Temmuz 2024</span>
                                <div class="dot-icon"></div>
                                <span class="font-family-regular text-xs" style="color: #666">Boy: 165cm</span>
                                <div class="dot-icon"></div>
                                <span class="font-family-regular text-xs" style="color: #666">Kilo: 62kg</span>
                                <div class="dot-icon"></div>
                                <span class="font-family-regular text-xs" style="color: #666">Beden: M</span>
                            </div>
                            <div class="flex alignItems-center gap-1 text-xs">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star none-checked"></span>
                                <span class="fa fa-star none-checked"></span>
                            </div>
                        </div>

                        <p class="font-family-regular text-sm">
                            Çok güzelll :) biraz bol dursun diye M beden aldım 1.65 boy 62
                            kiloya istediğim gibi oldu
                        </p>
                        <div class="flex justify-between">
                            <h6 class="font-family-regular">
                                <span class="font-family-semibold">Lufian</span>
                                satıcısından alındı.
                            </h6>
                            <div class="flex alignItems-center gap-2">
                                <div class="flex alignItems-center gap-1 text-xs font-family-regular">
                                    <span class="material-symbols-outlined like-icon" style="font-size: 13px">thumb_up</span>(12)
                                </div>
                                <div class="dot-icon"></div>
                                <span class="material-symbols-outlined report-icon" style="font-size: 13px; margin-top: 1px">report</span>
                            </div>
                        </div>
                        <hr style="margin-top: 1rem; opacity: 0.3" />
                    </div>
                    <div class="flex-column gap-4">
                        <div class="flex justify-between gap-2">
                            <div class="flex alignItems-center gap-3">
                                <span class="font-family-regular text-xs" style="color: #666">Y** T**</span>
                                <div class="dot-icon"></div>
                                <span class="font-family-regular text-xs" style="color: #666">4 Temmuz 2024</span>
                                <div class="dot-icon"></div>
                                <span class="font-family-regular text-xs" style="color: #666">Boy: 165cm</span>
                                <div class="dot-icon"></div>
                                <span class="font-family-regular text-xs" style="color: #666">Kilo: 62kg</span>
                                <div class="dot-icon"></div>
                                <span class="font-family-regular text-xs" style="color: #666">Beden: M</span>
                            </div>
                            <div class="flex alignItems-center gap-1 text-xs">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star none-checked"></span>
                                <span class="fa fa-star none-checked"></span>
                            </div>
                        </div>

                        <p class="font-family-regular text-sm">
                            Çok güzelll :) biraz bol dursun diye M beden aldım 1.65 boy 62
                            kiloya istediğim gibi oldu
                        </p>
                        <div class="flex justify-between">
                            <h6 class="font-family-regular">
                                <span class="font-family-semibold">Lufian</span>
                                satıcısından alındı.
                            </h6>
                            <div class="flex alignItems-center gap-2">
                                <div class="flex alignItems-center gap-1 text-xs font-family-regular">
                                    <span class="material-symbols-outlined like-icon" style="font-size: 13px">thumb_up</span>(12)
                                </div>
                                <div class="dot-icon"></div>
                                <span class="material-symbols-outlined report-icon" style="font-size: 13px; margin-top: 1px">report</span>
                            </div>
                        </div>
                        <hr style="margin-top: 1rem; opacity: 0.3" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/productReviews.js"></script>
<?php
require_once("footer.php");
?>