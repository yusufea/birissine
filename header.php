<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Birissine</title>
    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script type="text/javascript" lang="javascript" src="assets/js/script.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/media/images/favicon.png">
</head>
<style>
    .border-navbar {
        border-bottom: solid 1px #e6e6e6;
        box-shadow: 0 1px 0px 0 rgba(0, 0, 0, 0.05);
    }
</style>

<body>
    <header class="header-line" style="background-color: white;">
        <div class="container ">
            <div id="top-header" class="row justifyContent-end">
                <ul id="top-header-left-menu" class="listStyleType-none p-0 flex alignItems-center">
                    <li class="f-left mr-2">
                        <a href="" class="text-gray-t font-family-regular text-xs">Kampanyalar</a>
                    </li>
                    <li class="f-left mr-2">
                        <a href="" class="text-gray-t font-family-regular text-xs">Kuponlar</a>
                    </li>
                    <li class="f-left mr-2">
                        <a href="" class="text-gray-t font-family-regular text-xs">Destek</a>
                    </li>
                    <li class="f-left">
                        <a href="favorites.php" class="text-gray-t font-family-regular text-xs">Favorilerim</a>
                    </li>
                </ul>
                <!-- <ul id="top-header-right-menu" class="listStyleType-none my-1 p-0">
                    <li class="f-left mr-2 flex alignItems-center">
                        <select class="select p-0 h-fit b-none" class="text-xl">
                            <option value="Türkçe">Türkçe</option>
                            <option value="English">English</option>
                        </select>
                    </li>
                    <li class="f-left flex alignItems-center">
                        <select class="select p-0 h-fit b-none">
                            <option value="TRY">TRY</option>
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                        </select>
                    </li>
                </ul> -->
            </div>
            <div class="row">
                <div class="col-2">
                    <a href="index.php">
                        <img class="my-2" id="logo-header" src="assets/media/images/birissine_logo.png">
                    </a>
                </div>
                <div class="col-8 flex alignItems-center justifyContent-center">
                    <form action="" class="relative form-header-input">
                        <input class="input font-family-semibold header-search-bar" type="text" placeholder="Ürün, Marka veya kategori arayın" style="background-color: #f3f3f3;padding-right:40px;">
                        <button type="submit" class="material-symbols-outlined search-bar-icon pointer">
                            search
                        </button>
                        <div class="search-menu" id="search-menu" style="width: calc(100% + 21px);">
                            <!-- Menü içeriği burada olacak -->
                        </div>
                    </form>
                </div>
                <div class="col-2 flex alignItems-end justifyContent-end header-right-area" style="align-items: end;">
                    <div class="relative flex justifyContent-center">
                        <a href="login.php" class="text-black-t text-sm font-family-semibold header-right-side-text" id="login-button">
                            <span class="material-symbols-outlined">login</span>&nbsp;&nbsp;Giriş Yap
                        </a>
                        <div id="login-menu">
                            <ul class="listStyleType-none m-0 p-1">
                                <li class="text-sm">
                                    <a class="flex alignItems-center text-black-t text-xs font-family-regular" href="login.php">
                                        <span class="material-symbols-outlined text-lg">
                                            login
                                        </span>
                                        &nbsp;&nbsp;
                                        Giriş Yap
                                    </a>
                                </li>
                                <li class="text-sm">
                                    <a class="flex alignItems-center text-black-t text-xs font-family-regular" href="register.php">
                                        <span class="material-symbols-outlined text-lg">
                                            person
                                        </span>
                                        &nbsp;&nbsp;
                                        Üye Ol
                                    </a>
                                </li>
                                <hr class="my-1" style="opacity: 0.3;">
                                <li class="text-sm">
                                    <a class="flex alignItems-center text-black-t text-xs font-family-regular" href="allOrders.php">
                                        <span class="material-symbols-outlined text-lg">
                                            package_2
                                        </span>
                                        &nbsp;&nbsp;
                                        Tüm Siparişler
                                    </a>
                                </li>
                                <li class="text-sm">
                                    <a class="flex alignItems-center text-black-t text-xs font-family-regular" href="addressInfo.php">
                                        <span class="material-symbols-outlined text-lg">
                                            pin_drop
                                        </span>
                                        &nbsp;&nbsp;
                                        Adres Bilgilerim
                                    </a>
                                </li>
                                <li class="text-sm">
                                    <a class="flex alignItems-center text-black-t text-xs font-family-regular" href="userInfo.php">
                                        <span class="material-symbols-outlined text-lg">
                                            person
                                        </span>
                                        &nbsp;&nbsp;
                                        Kullanıcı Bilgilerim
                                    </a>
                                </li>
                                <li class="text-sm">
                                    <a class="flex alignItems-center text-black-t text-xs font-family-regular" href="help.php">
                                        <span class="material-symbols-outlined text-lg">
                                            help
                                        </span>
                                        &nbsp;&nbsp;
                                        Yardım
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative flex justifyContent-end">
                        <a id="cart-button" class="text-black-t text-sm font-family-semibold header-right-side-text" href="cart.php">
                            <span class="material-symbols-outlined">shopping_cart</span>&nbsp;&nbsp;Sepet
                        </a>
                        <div id="cart-menu">
                            <div class="flex-column gap-2 p-2">
                                <h6 class="text-sm font-family-semibold">
                                    Sepetim (2 ürün)
                                </h6>
                                <div style="background-color: #e6e6e6;height:1px" class="my-1"></div>
                                <div class="flex-column gap-4 mb-1">
                                    <a href="productDetail.php" class="flex gap-2">
                                        <img src="assets/media/images/cardimg4.webp" class="cart-shopping-img">
                                        <div class="flex-column gap-1 justify-start">
                                            <p class="font-family-regular text-sm"><span class="font-family-semibold text-sm" style="margin-right:2px">Lufian </span>Yoko Kadın Sneaker Ayakkabı Siyah</p>
                                            <div class="flex items-center alignItems-center gap-1">
                                                <h6 class=" text-xs font-family-regular text-gray-t">Beden: M</h6>
                                                <div class="dot-icon"></div>
                                                <h6 class=" text-xs font-family-regular text-gray-t">Adet: 1</h6>
                                            </div>
                                            <h5 class=" text-md font-family-black text-general-color">179,99 TL</h5>
                                        </div>
                                    </a>
                                    <a href="productDetail.php" class="flex gap-2">
                                        <img src="assets/media/images/cardimg4.webp" class="cart-shopping-img">
                                        <div class="flex-column gap-1 justify-start">
                                            <p class="font-family-regular text-sm"><span class="font-family-semibold text-sm" style="margin-right:2px">Lufian </span>Yoko Kadın Sneaker Ayakkabı Siyah</p>
                                            <div class="flex items-center alignItems-center gap-1">
                                                <h6 class=" text-xs font-family-regular text-gray-t">Beden: M</h6>
                                                <div class="dot-icon"></div>
                                                <h6 class=" text-xs font-family-regular text-gray-t">Adet: 1</h6>
                                            </div>
                                            <h5 class=" text-md font-family-black text-general-color">179,99 TL</h5>
                                        </div>
                                    </a>
                                    <a href="productDetail.php" class="flex gap-2">
                                        <img src="assets/media/images/cardimg4.webp" class="cart-shopping-img">
                                        <div class="flex-column gap-1 justify-start">
                                            <p class="font-family-regular text-sm"><span class="font-family-semibold text-sm" style="margin-right:2px">Lufian </span>Yoko Kadın Sneaker Ayakkabı Siyah</p>
                                            <div class="flex items-center alignItems-center gap-1">
                                                <h6 class=" text-xs font-family-regular text-gray-t">Beden: M</h6>
                                                <div class="dot-icon"></div>
                                                <h6 class=" text-xs font-family-regular text-gray-t">Adet: 1</h6>
                                            </div>
                                            <h5 class=" text-md font-family-black text-general-color">179,99 TL</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="flex gap-2">
                                    <a href="cart.php" class="finish-order-button p-2  text-sm font-bold w-full font-family-semibold">Sepete Git</a>
                                    <a href="check.php" class="go-cart-button p-2  text-sm font-bold w-full font-family-semibold">Siparişi Tamamla</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="navbar" id="navbar">
                </div>
            </div>
        </div>
        <!-- <div class="px-4">
            <div class="-bold">bold</div>
            <div class="-black">Black</div>
            <div class="-Semibold">Semibold</div>
            <div class="-Regular">Regular</div>
            <div class="-Light">Light</div>
            <div class="-ExtraLight">ExtraLight</div>
            <div class="-ExtraLighttlt">ExtraLighttlt</div>
        </div> -->
    </header>