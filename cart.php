<?php
require_once("header.php");
?>
<link rel="stylesheet" href="assets/css/cart.css">
<script type="text/javascript" lang="js" src="assets/js/cart.js"></script>
<main>
    <div id="addNewAddress-modal" class="modal-container none">
        <div class="modal">
            <div class="modal-header bg-white">
                <p class="text-sm font-bold"></p>
                <svg onclick="close_modal(this)" xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                    <path d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z" />
                </svg>
            </div>
            <div class="modal-body">
                <div class="m-2">
                    <h3 class="text-center">Sepetinizdeki Ürünlerden Bazıları Tükendi</h3>
                    <p class="mt-2 text-center">Sepetinizdeki ürünlerin bir kısmı tükendi ya da satıcı ürünleri satıştan kaldırdı. Sepetinizi tekrar kontrol ederek ödeme işlemine devam edin.</p>
                    <button onclick="close_modal(this.parentElement)" class="button button-general w-fitContent block mx-auto mt-2">
                        Sepete Göz At
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 6rem">
        <h6 class="font-family-semibold text-xl my-3">Sepetim (1 Ürün)</h6>
        <div class="flex gap-4">
            <div style="width: 78%;">
                <div class="flex-column gap-5" id="product-container">
                    <!-- Satıcı 1 -->
                    <div id="products" class="card-border">
                        <div class="cart-card-header-tag p-2">
                            <div class="flex justify-between alignItems-center">
                                <div class="flex gap-3 alignItems-center">
                                    <input type="checkbox" class="select-checkbox-general">
                                    <div>
                                        <h6 class="text-gray-t font-family-regular text-sm">
                                            Satıcı: <span class="font-family-semibold text-black-t">Birissine</span>
                                        </h6>
                                    </div>
                                </div>
                                <a class="flex alignItems-center pointer">
                                    <h6 class="font-family-semibold text-sm text-general-color">Tüm ürünler</h6>
                                    <span class="material-symbols-outlined">
                                        chevron_right
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="flex-column">
                            <!-- Ürün 1 -->
                            <div class="product flex gap-3 p-2 py-4">
                                <input type="checkbox" class="select-checkbox">
                                <div>
                                    <img class="product-img" src="assets/media/images/c_0158.jpg" alt="">
                                </div>
                                <div class="flex-column h-full w-full">
                                    <div class="flex gap-1">
                                        <span class="font-family-semibold text-sm">Birissine</span>
                                        <h4 class="font-family-regular text-sm">Baget Çanta Bej</h4>
                                    </div>
                                    <p class="flex alignItems-center gap-1 text-xs text-green font-family-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#22c55e">
                                            <path d="M240-192q-50 0-85-35t-35-85H48v-408q0-29.7 21.15-50.85Q90.3-792 120-792h552v144h120l120 168v168h-72q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-72q20.4 0 34.2-13.8Q288-291.6 288-312q0-20.4-13.8-34.2Q260.4-360 240-360q-20.4 0-34.2 13.8Q192-332.4 192-312q0 20.4 13.8 34.2Q219.6-264 240-264ZM120-384h24q17-23 42-35.5t54-12.5q29 0 54 12.5t41.53 35.5H600v-336H120v336Zm600 120q20.4 0 34.2-13.8Q768-291.6 768-312q0-20.4-13.8-34.2Q740.4-360 720-360q-20.4 0-34.2 13.8Q672-332.4 672-312q0 20.4 13.8 34.2Q699.6-264 720-264Zm-48-192 168-1-85-119h-83v120Zm-310-93Z" />
                                        </svg>
                                        Kargo Bedava
                                    </p>
                                    <div class="flex justify-between alignItems-center mt-3">
                                        <div class="flex alignItems-center">
                                            <span class="material-symbols-outlined text-general-color cart-remove">
                                                remove
                                            </span>
                                            <h6 class="font-family-regular text-md cart-count">2</h6>
                                            <span class="material-symbols-outlined text-general-color cart-add">add</span>
                                        </div>
                                        <h3 class="font-family-semibold text-xl text-center mr-4">109<span class="text-sm">,99 <span style="font-size:12px">TL</span></span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <!-- Ürün 2 -->
                            <div class="product flex gap-3 p-2 py-4">
                                <input type="checkbox" class="select-checkbox">
                                <div>
                                    <img class="product-img" src="assets/media/images/c_0159.jpg" alt="">
                                </div>
                                <div class="flex-column h-full w-full">
                                    <div class="flex gap-1">
                                        <span class="font-family-semibold text-sm">Birissine</span>
                                        <h4 class="font-family-regular text-sm">Baget Çanta Bej</h4>
                                    </div>
                                    <p class="flex alignItems-center gap-1 text-xs text-green font-family-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#22c55e">
                                            <path d="M240-192q-50 0-85-35t-35-85H48v-408q0-29.7 21.15-50.85Q90.3-792 120-792h552v144h120l120 168v168h-72q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-72q20.4 0 34.2-13.8Q288-291.6 288-312q0-20.4-13.8-34.2Q260.4-360 240-360q-20.4 0-34.2 13.8Q192-332.4 192-312q0 20.4 13.8 34.2Q219.6-264 240-264ZM120-384h24q17-23 42-35.5t54-12.5q29 0 54 12.5t41.53 35.5H600v-336H120v336Zm600 120q20.4 0 34.2-13.8Q768-291.6 768-312q0-20.4-13.8-34.2Q740.4-360 720-360q-20.4 0-34.2 13.8Q672-332.4 672-312q0 20.4 13.8 34.2Q699.6-264 720-264Zm-48-192 168-1-85-119h-83v120Zm-310-93Z" />
                                        </svg>
                                        Kargo Bedava
                                    </p>
                                    <div class="flex justify-between alignItems-center mt-3">
                                        <div class="flex alignItems-center">
                                            <span class="material-symbols-outlined text-general-color cart-remove">
                                                remove
                                            </span>
                                            <h6 class="font-family-regular text-md cart-count">1</h6>
                                            <span class="material-symbols-outlined text-general-color cart-add">add</span>
                                        </div>
                                        <h3 class="font-family-semibold text-xl text-center mr-4">109<span class="text-sm">,99 <span style="font-size:12px">TL</span></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Satıcı 2 -->
                    <div id="products" class="card-border">
                        <div class="cart-card-header-tag p-2">
                            <div class="flex justify-between alignItems-center">
                                <div class="flex gap-3 alignItems-center">
                                    <input type="checkbox" class="select-checkbox-general">
                                    <div>
                                        <h6 class="text-gray-t font-family-regular text-sm">
                                            Satıcı: <span class="font-family-semibold text-black-t">Başkassına</span>
                                        </h6>
                                    </div>
                                </div>
                                <a class="flex alignItems-center pointer">
                                    <h6 class="font-family-semibold text-sm text-general-color">Tüm ürünler</h6>
                                    <span class="material-symbols-outlined">
                                        chevron_right
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="flex-column">
                            <!-- Ürün 1 -->
                            <div class="product flex gap-3 p-2 py-4">
                                <input type="checkbox" class="select-checkbox">
                                <div>
                                    <img class="product-img" src="assets/media/images/c_0159.jpg" alt="">
                                </div>
                                <div class="flex-column h-full w-full">
                                    <div class="flex gap-1">
                                        <span class="font-family-semibold text-sm">Başkassına</span>
                                        <h4 class="font-family-regular text-sm">Baget Çanta Bej</h4>
                                    </div>
                                    <p class="flex alignItems-center gap-1 text-xs text-green font-family-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#22c55e">
                                            <path d="M240-192q-50 0-85-35t-35-85H48v-408q0-29.7 21.15-50.85Q90.3-792 120-792h552v144h120l120 168v168h-72q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-72q20.4 0 34.2-13.8Q288-291.6 288-312q0-20.4-13.8-34.2Q260.4-360 240-360q-20.4 0-34.2 13.8Q192-332.4 192-312q0 20.4 13.8 34.2Q219.6-264 240-264ZM120-384h24q17-23 42-35.5t54-12.5q29 0 54 12.5t41.53 35.5H600v-336H120v336Zm600 120q20.4 0 34.2-13.8Q768-291.6 768-312q0-20.4-13.8-34.2Q740.4-360 720-360q-20.4 0-34.2 13.8Q672-332.4 672-312q0 20.4 13.8 34.2Q699.6-264 720-264Zm-48-192 168-1-85-119h-83v120Zm-310-93Z" />
                                        </svg>
                                        Kargo Bedava
                                    </p>
                                    <div class="flex justify-between alignItems-center mt-3">
                                        <div class="flex alignItems-center">
                                            <span class="material-symbols-outlined text-general-color cart-remove">
                                                remove
                                            </span>
                                            <h6 class="font-family-regular text-md cart-count">1</h6>
                                            <span class="material-symbols-outlined text-general-color cart-add">add</span>
                                        </div>
                                        <h3 class="font-family-semibold text-xl text-center mr-4">109<span class="text-sm">,99 <span style="font-size:12px">TL</span></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Satıcı 3 -->
                    <div id="products" class="card-border">
                        <div class="cart-card-header-tag p-2">
                            <div class="flex justify-between alignItems-center">
                                <div class="flex gap-3 alignItems-center">
                                    <input type="checkbox" class="select-checkbox-general">
                                    <div>
                                        <h6 class="text-gray-t font-family-regular text-sm">
                                            Satıcı: <span class="font-family-semibold text-black-t">Benissine</span>
                                        </h6>
                                    </div>
                                </div>
                                <a class="flex alignItems-center pointer">
                                    <h6 class="font-family-semibold text-sm text-general-color">Tüm ürünler</h6>
                                    <span class="material-symbols-outlined">
                                        chevron_right
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="flex-column">
                            <!-- Ürün 1 -->
                            <div class="product flex gap-3 p-2 py-4">
                                <input type="checkbox" class="select-checkbox">
                                <div>
                                    <img class="product-img" src="assets/media/images/c_0159.jpg" alt="">
                                </div>
                                <div class="flex-column h-full w-full">
                                    <div class="flex gap-1">
                                        <span class="font-family-semibold text-sm">Başkassına</span>
                                        <h4 class="font-family-regular text-sm">Baget Çanta Bej</h4>
                                    </div>
                                    <p class="flex alignItems-center gap-1 text-xs text-green font-family-semibold">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#22c55e">
                                            <path d="M240-192q-50 0-85-35t-35-85H48v-408q0-29.7 21.15-50.85Q90.3-792 120-792h552v144h120l120 168v168h-72q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-72q20.4 0 34.2-13.8Q288-291.6 288-312q0-20.4-13.8-34.2Q260.4-360 240-360q-20.4 0-34.2 13.8Q192-332.4 192-312q0 20.4 13.8 34.2Q219.6-264 240-264ZM120-384h24q17-23 42-35.5t54-12.5q29 0 54 12.5t41.53 35.5H600v-336H120v336Zm600 120q20.4 0 34.2-13.8Q768-291.6 768-312q0-20.4-13.8-34.2Q740.4-360 720-360q-20.4 0-34.2 13.8Q672-332.4 672-312q0 20.4 13.8 34.2Q699.6-264 720-264Zm-48-192 168-1-85-119h-83v120Zm-310-93Z" />
                                        </svg>
                                        Kargo Bedava
                                    </p>
                                    <div class="flex justify-between alignItems-center mt-3">
                                        <div class="flex alignItems-center">
                                            <span class="material-symbols-outlined text-general-color cart-remove">
                                                remove
                                            </span>
                                            <h6 class="font-family-regular text-md cart-count">1</h6>
                                            <span class="material-symbols-outlined text-general-color cart-add">add</span>
                                        </div>
                                        <h3 class="font-family-semibold text-xl text-center mr-4">109<span class="text-sm">,99 <span style="font-size:12px">TL</span></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex gap-2 tabs">
                        <div class="card-border-s py-2 px-1 order-tab pointer" id="beforeAddTab">
                            <h6 class="font-family-semibold text-sm">Önceden Eklediklerim</h6>
                        </div>
                        <div class="card-border-s py-2 px-1 order-tab pointer" id="onerilenUrunlerTab">
                            <h6 class="font-family-semibold text-sm">Önerilen Ürünler</h6>
                        </div>
                        <div class="card-border-s py-2 px-1 order-tab pointer" id="favoritesTab">
                            <h6 class="font-family-semibold text-sm">Favorilerim</h6>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div id="beforeAddContent" class="order-content">
                        <div id="beforeAdd-product-slider" class="splide mt-2">
                            <div class="splide__track">
                                <ul class="splide__list" id="beforeAdd-product-list">
                                    <li class="splide__slide">
                                        <a href="productDetail.php" class="card">
                                            <div style="position: relative;">
                                                <img
                                                    src="assets/media/images/c_0158.jpg"
                                                    class="card-img"
                                                    alt="ürün görseli" />
                                                <span class="material-symbols-outlined add-favorite-icon">
                                                    favorite
                                                </span>
                                            </div>
                                            <div class='card-down-side my-1'>
                                                <div class="flex-column gap-2">
                                                    <div style="display: flex; align-items: start; gap: 3px">
                                                        <p class="font-family-regular text-black-t line-clamp-2"><span class="font-family-semibold">
                                                                Birissine
                                                            </span>Baget Çanta Bej</p>
                                                    </div>
                                                    <div class="flex alignItems-center gap-2">
                                                        <div class="flex alignItems-center gap-1 text-xxs" style="margin-top: 1px;">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star none-checked"></span>
                                                            <span class="fa fa-star none-checked"></span>
                                                        </div>
                                                        <p class="text-gray-t text-xxs font-family-regular">(3)</p>
                                                    </div>
                                                </div>
                                                <h4 class="card-price font-family-semibold">102,99</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="onerilenUrunlerContent" class="order-content">
                        <div id="recommended-product-slider" class="splide mt-2">
                            <div class="splide__track">
                                <ul class="splide__list" id="recommended-product-list">
                                    <li class="splide__slide">
                                        <a href="productDetail.php" class="card">
                                            <div style="position: relative;">
                                                <img
                                                    src="assets/media/images/c_0158.jpg"
                                                    class="card-img"
                                                    alt="ürün görseli" />
                                                <span class="material-symbols-outlined add-favorite-icon">
                                                    favorite
                                                </span>
                                            </div>
                                            <div class='card-down-side my-1'>
                                                <div class="flex-column gap-2">
                                                    <div style="display: flex; align-items: start; gap: 3px">
                                                        <p class="font-family-regular text-black-t line-clamp-2"><span class="font-family-semibold">
                                                                Birissine
                                                            </span>Baget Çanta Bej</p>
                                                    </div>
                                                    <div class="flex alignItems-center gap-2">
                                                        <div class="flex alignItems-center gap-1 text-xxs" style="margin-top: 1px;">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star none-checked"></span>
                                                            <span class="fa fa-star none-checked"></span>
                                                        </div>
                                                        <p class="text-gray-t text-xxs font-family-regular">(3)</p>
                                                    </div>
                                                </div>
                                                <h4 class="card-price font-family-semibold">102,99</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="favoritesContent" class="order-content">
                        <div id="favorites-product-slider" class="splide mt-2">
                            <div class="splide__track">
                                <ul class="splide__list" id="favorites-product-list">
                                    <li class="splide__slide">
                                        <a href="productDetail.php" class="card">
                                            <div style="position: relative;">
                                                <img
                                                    src="assets/media/images/c_0158.jpg"
                                                    class="card-img"
                                                    alt="ürün görseli" />
                                                <span class="material-symbols-outlined add-favorite-icon">
                                                    close
                                                </span>
                                            </div>
                                            <div class='card-down-side my-1'>
                                                <div class="flex-column gap-2">
                                                    <div style="display: flex; align-items: start; gap: 3px">
                                                        <p class="font-family-regular text-black-t line-clamp-2"><span class="font-family-semibold">
                                                                Birissine
                                                            </span>Baget Çanta Bej</p>
                                                    </div>
                                                    <div class="flex alignItems-center gap-2">
                                                        <div class="flex alignItems-center gap-1 text-xxs" style="margin-top: 1px;">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star none-checked"></span>
                                                            <span class="fa fa-star none-checked"></span>
                                                        </div>
                                                        <p class="text-gray-t text-xxs font-family-regular">(3)</p>
                                                    </div>
                                                </div>
                                                <h4 class="card-price font-family-semibold">102,99</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 22%;">
                <?php $page = 'cart';
                require('orderSummary.php') ?>
            </div>
        </div>
    </div>
</main>
<?php
require_once("footer.php");
?>