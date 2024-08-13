<?php require_once('header.php') ?>
<link rel="stylesheet" href="./assets/css/favorites.css">
<div>
    <div class="container my-4">
        <div class="flex alignItems-center gap-2">
            <h2 class="font-family-semibold text-xl">Favorilerim</h2>
        </div>
        <div class="flex flex-wrap gap-4 my-4">
            <a href="productDetail.php" class="card make-it-slow" style="width: calc((100% / 5) - 15px);">
                <div style="position: relative;">
                    <img src="./assets/media/images/cardimg4_1.webp" class="card-img" alt="ürün görseli" />
                    <span class="material-symbols-outlined add-favorite-icon"> close </span>
                </div>
                <div class='card-down-side'>
                    <div class='flex-column gap-2'>
                        <div style="display: flex; align-items: start; gap: 3px">
                            <p class="font-family-regular text-sm" style="font-size:14px">
                                <span class="font-family-semibold text-sm" style="margin-right:2px">Lufian</span>Yoko Kadın Sneaker Ayakkabı Siyah
                            </p>
                        </div>
                        <div style="display: flex; gap: 4px; align-items: center">
                            <div class="flex alignItems-center gap-1 text-xs">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star none-checked"></span>
                                <span class="fa fa-star none-checked"></span>
                            </div>
                            <p style="color: #333;">(12)</p>
                        </div>
                    </div>
                    <h4 class="card-price font-family-semibold text-lg" style="font-size:18px">169<span style="font-size:12px">,99 TL</span></h4>
                    <div class="flex gap-2 card-event-side">
                        <select class="dropdown-menu" id="dropdown-menu">
                            <option class='select-option-size' value="S">S</option>
                            <option class='select-option-size' value="X">X</option>
                            <option class='select-option-size' value="M">M</option>
                            <option class='select-option-size' value="L">L</option>
                        </select>
                        <button class="add-to-card card-border px-4 font-family-semibold text-sm py-2 w-full" style="cursor: pointer;">
                            Sepete Ekle
                        </button>
                    </div>
                </div>
            </a>
            <a href="productDetail.php" class="card make-it-slow" style="width: calc((100% / 5) - 15px);">
                <div style="position: relative;">
                    <img src="./assets/media/images/cardimg4_1.webp" class="card-img" alt="ürün görseli" />
                    <span class="material-symbols-outlined add-favorite-icon"> close </span>
                </div>
                <div class='card-down-side'>
                    <div class='flex-column gap-2'>
                        <div style="display: flex; align-items: start; gap: 3px">
                            <p class="font-family-regular text-sm" style="font-size:14px">
                                <span class="font-family-semibold text-sm" style="margin-right:2px">Lufian</span>Yoko Kadın Sneaker Ayakkabı Siyah
                            </p>
                        </div>
                        <div style="display: flex; gap: 4px; align-items: center">
                            <div class="flex alignItems-center gap-1 text-xs">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star none-checked"></span>
                                <span class="fa fa-star none-checked"></span>
                            </div>
                            <p style="color: #333;">(12)</p>
                        </div>
                    </div>
                    <h4 class="card-price font-family-semibold text-lg" style="font-size:18px">169<span style="font-size:12px">,99 TL</span></h4>
                    <div class="flex gap-2 card-event-side">
                        <select class="dropdown-menu" id="dropdown-menu">
                            <option class='select-option-size' value="S">S</option>
                            <option class='select-option-size' value="X">X</option>
                            <option class='select-option-size' value="M">M</option>
                            <option class='select-option-size' value="L">L</option>
                        </select>
                        <button class="add-to-card card-border px-4 font-family-semibold text-sm py-2 w-full" style="cursor: pointer;">
                            Sepete Ekle
                        </button>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="card-border p-4 mt-4">
            <div class="flex justify-between">
                <div class="flex gap-4 alignItems-center">
                    <span class="material-symbols-outlined text-orange-t heart-icon-overlay p-3 rounded-full">
                        favorite
                    </span>
                    <h6 class=" text-base font-family-semibold">
                        Favorilerinizde ürün bulunmamaktadır.
                    </h6>
                </div>
                <button class="add-to-card card-border px-6  font-family-semibold text-sm" style="cursor: pointer;">
                    Alışverişe Devam Et
                </button>
            </div>
        </div> -->
    </div>
</div>
<?php require_once('footer.php') ?>
<script src="assets/js/favorites.js"></script>