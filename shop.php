<link rel="stylesheet" href="assets/css/shop.css">

<div class="container my-4">
    <div class="shop-banner flex-column justify-center px-4">
        <div class="flex justify-between alignItems-center">
            <div class="flex alignItems-center gap-2">
                <img src="assets/media/images/seller_logo.webp" class="seller-logo">
                <h6 class="text-white font-family-semibold text-lg">Birissine</h6>
                <span class="material-symbols-outlined text-white">
                    check
                </span>
                <div class="shop-score-area">
                    <h6 class="text-white font-family-regular text-xs">9.9</h6>
                </div>
            </div>
            <div class="flex-column gap-1">
                <button class="follow-seller-button font-family-semibold text-sm">Takip Et</button>
                <h6 class="font-family-regular text-xxs text-white text-center"><span class="font-family-semibold">1,1M</span> Takipçi</h6>
            </div>
        </div>
    </div>
    <div class="seller-tabs-container px-4">
        <div class="flex justify-between alignItems-center">
            <div class="flex gap-10">
                <a href="sellerAllProducts.php?category=Birissine" class="font-family-semibold text-base text-gray seller-tab-title">
                    TÜM ÜRÜNLER
                </a>
                <a href="sellerProfile.php" class="font-family-semibold text-base text-gray seller-tab-title">
                    SATICI PROFİLİ
                </a>
            </div>
            <form action="" class="relative" style="width: 250px;">
                <input class="input font-family-semibold seller-search-bar" type="text" placeholder="Mağazada Ara">
                <button type="submit" class="material-symbols-outlined search-bar-icon pointer">
                    search
                </button>
                <div class="search-menu" id="seller-search-menu" style="width: calc(100% - 2px);">
                    <!-- Menü içeriği burada olacak -->
                </div>
            </form>
        </div>
    </div>
</div>
<script src="assets/js/shop.js"></script>