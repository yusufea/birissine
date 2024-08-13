<?php
require_once("header.php");
?>
<link rel="stylesheet" href="assets/css/productQuestion.css">
<div class="container my-4" style="min-height: 100vh;">
    <a href="productDetail.php" class="flex gap-2 my-2 text-gray alignItems-center">
        <span class="material-symbols-outlined">
            arrow_left_alt
        </span>
        <h6 class="open-sans font-semibold text-sm">Ürüne dön</h6>
    </a>
    <div class="row">
        <div class="col-5">
            <div class="flex-column gap-4">
                <div class="flex gap-2">
                    <img src="assets/media/images/cardimg4.webp" class="product-detail-img" alt="ürün görseli" />
                    <div class="flex-column justify-center gap-5" style="width: 100%;">
                        <h5 class="open-sans text-sm font-medium">
                            <span class="font-bold">Lufian </span>Yoko Kadın Sneaker
                            Ayakkabı Siyah
                        </h5>
                        <h4 class="text-orange-t open-sans font-bold">1.539,90 TL</h4>
                        <div class="flex alignItems-center gap-3">
                            <select id="dropdown-menu">
                                <!-- JavaScript ile doldurulacak -->
                            </select>
                            <button class="add-to-basket open-sans font-semibold text-sm" role="button">
                                Sepete Ekle
                            </button>
                            <span class="material-symbols-outlined add-to-favorite-second" style="font-size: 32px">
                                favorite
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1 flex justify-center">
            <hr style="min-height: 100vh; opacity: 0.2" />
        </div>
        <div class="col-6">
            <div class="flex-column gap-8">
                <h2 class="open-sans font-semibold text-xl">
                    Tüm Ürün Soru ve Cevapları (27)
                </h2>
                <div class="flex gap-3">
                    <input class="input" type="text" placeholder="Satıcı Sorularında Ara" />
                    <select id="dropdown-question-options-menu">
                        <!-- JavaScript ile doldurulacak -->
                    </select>
                </div>
                <div class="flex-column gap-5">
                    <div class="flex-column gap-3">
                        <h4 class="font-semibold text-sm">Oversize mı</h4>
                        <div class="flex justify-between">
                            <div class="flex">
                                <span class="open-sans text-xs">A** P**</span>
                                <div class="dot-icon"></div>
                                <span class="open-sans text-xs">4 Temmuz 2024</span>
                            </div>
                            <div class="flex" style="gap: 4px; align-items: center">
                                <div class="flex gap-1 alignItems-center text-xs">
                                    <span class="material-symbols-outlined like-icon" style="font-size: 13px">thumb_up</span>(12)
                                </div>
                                <div class="dot-icon"></div>
                                <span class="material-symbols-outlined report-icon" style="font-size: 13px; margin-top: 1px">report</span>
                            </div>
                        </div>
                        <div class="question-reply-area w-full">
                            <div class="flex gap-3">
                                <img src="./assets/media/images/lufianlogo.webp" class="seller-logo-questions" alt="" />
                                <div class="flex-column">
                                    <h6 class="open-sans text-xs font-normal">
                                        <span class="open-sans font-bold">Lufian</span>
                                        satıcısının cevabı
                                    </h6>
                                    <h6 class="open-sans text-xs font-medium">11 saat içinde cevaplandı.</h6>
                                </div>
                            </div>
                            <h6 class="open-sans text-xs font-medium">
                                Merhaba, ürün slim fit'dir. Keyifli alışverişler dileriz
                            </h6>
                        </div>
                    </div>
                    <hr style="opacity: 0.3" />
                </div>
                <div class="flex-column gap-5">
                    <div class="flex-column gap-3">
                        <h4 class="font-semibold text-sm">Oversize mı</h4>
                        <div class="flex justify-between">
                            <div class="flex">
                                <span class="open-sans text-xs">A** P**</span>
                                <div class="dot-icon"></div>
                                <span class="open-sans text-xs">4 Temmuz 2024</span>
                            </div>
                            <div class="flex" style="gap: 4px; align-items: center">
                                <div class="flex gap-1 alignItems-center text-xs">
                                    <span class="material-symbols-outlined like-icon" style="font-size: 13px">thumb_up</span>(12)
                                </div>
                                <div class="dot-icon"></div>
                                <span class="material-symbols-outlined report-icon" style="font-size: 13px; margin-top: 1px">report</span>
                            </div>
                        </div>
                        <div class="question-reply-area w-full">
                            <div class="flex gap-3">
                                <img src="./assets/media/images/lufianlogo.webp" class="seller-logo-questions" alt="" />
                                <div class="flex-column">
                                    <h6 class="open-sans text-xs font-normal">
                                        <span class="open-sans font-bold">Lufian</span>
                                        satıcısının cevabı
                                    </h6>
                                    <h6 class="open-sans text-xs font-medium">11 saat içinde cevaplandı.</h6>
                                </div>
                            </div>
                            <h6 class="open-sans text-xs font-medium">
                                Merhaba, ürün slim fit'dir. Keyifli alışverişler dileriz
                            </h6>
                        </div>
                    </div>
                    <hr style="opacity: 0.3" />
                </div>
                <div class="flex-column gap-5">
                    <div class="flex-column gap-3">
                        <h4 class="font-semibold text-sm">Oversize mı</h4>
                        <div class="flex justify-between">
                            <div class="flex">
                                <span class="open-sans text-xs">A** P**</span>
                                <div class="dot-icon"></div>
                                <span class="open-sans text-xs">4 Temmuz 2024</span>
                            </div>
                            <div class="flex" style="gap: 4px; align-items: center">
                                <div class="flex gap-1 alignItems-center text-xs">
                                    <span class="material-symbols-outlined like-icon" style="font-size: 13px">thumb_up</span>(12)
                                </div>
                                <div class="dot-icon"></div>
                                <span class="material-symbols-outlined report-icon" style="font-size: 13px; margin-top: 1px">report</span>
                            </div>
                        </div>
                        <div class="question-reply-area w-full">
                            <div class="flex gap-3">
                                <img src="./assets/media/images/lufianlogo.webp" class="seller-logo-questions" alt="" />
                                <div class="flex-column">
                                    <h6 class="open-sans text-xs font-normal">
                                        <span class="open-sans font-bold">Lufian</span>
                                        satıcısının cevabı
                                    </h6>
                                    <h6 class="open-sans text-xs font-medium">11 saat içinde cevaplandı.</h6>
                                </div>
                            </div>
                            <h6 class="open-sans text-xs font-medium">
                                Merhaba, ürün slim fit'dir. Keyifli alışverişler dileriz
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/productQuestion.js"></script>
<?php
require_once("footer.php");
?>