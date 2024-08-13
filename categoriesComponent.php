<link rel="stylesheet" href="assets/css/categories.css">
<main class="container my-4">
    <div class="row  gap-10">
        <div class="col-2">
            <div class="flex-column gap-4">
                <div class="category-filter-container">
                    <div class="flex-justify-between collapsible">
                        <h4 class="text-sm py-1 font-family-semibold">Beden</h4>
                        <span class="fa fa-angle-down"></span>
                    </div>
                    <div class="content">
                        <form class="flex-column gap-1 mt-1">
                            <input
                                class="filter-input font-family-semibold"
                                style="font-size: 13px;"
                                type="text"
                                id="fname"
                                name="firstname"
                                placeholder="Beden ara" />
                            <div class="flex-column gap-1 mt-1" id="checkbox-container">
                                <label class="flex" style="align-items: center;">
                                    <input type="checkbox" value="${size.value}" />
                                    <span class="checkmark"></span>
                                    <h6 class="font-family-regular text-xs text-black-t">S</h6>
                                </label>
                                <label class="flex" style="align-items: center;">
                                    <input type="checkbox" value="${size.value}" />
                                    <span class="checkmark"></span>
                                    <h6 class="font-family-regular text-xs text-black-t">M</h6>
                                </label>
                                <label class="flex" style="align-items: center;">
                                    <input type="checkbox" value="${size.value}" />
                                    <span class="checkmark"></span>
                                    <h6 class="font-family-regular text-xs text-black-t">L</h6>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="category-filter-container">
                    <div class="flex-justify-between collapsible ">
                        <h4 class="text-sm font-family-semibold py-1">Marka</h4>
                        <span class="fa fa-angle-down"></span>
                    </div>
                    <div class="content">
                        <form class="flex-column gap-1 mt-1">
                            <input
                                class="filter-input font-family-semibold text-gray-t"
                                type="text"
                                id="fname"
                                name="firstname"
                                style="font-size: 13px;"
                                placeholder="Marka ara" />
                            <div class="flex-column gap-1 mt-1" id="checkbox-container-brand">
                                <label class="flex" style="align-items: center;">
                                    <input type="checkbox" value="${size.value}" />
                                    <span class="checkmark"></span>
                                    <h6 class="font-family-regular text-xs text-black-t">Birissine</h6>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="category-filter-container">
                    <div class="flex-justify-between collapsible">
                        <h4 class="text-sm font-family-semibold py-1">Cinsiyet</h4>
                        <span class="fa fa-angle-down"></span>
                    </div>
                    <div class="content">
                        <form class="flex-column gap-1 mt-1">
                            <input
                                class="filter-input font-family-semibold text-gray-t"
                                type="text"
                                id="fname"
                                name="firstname"
                                style="font-size: 13px;"
                                placeholder="Cinsiyet ara" />
                            <div class="flex-column gap-1 mt-1" id="checkbox-container-gender">
                                <label class="flex" style="align-items: center;">
                                    <input type="checkbox" value="${size.value}" />
                                    <span class="checkmark"></span>
                                    <h6 class="font-family-regular text-xs text-black-t">Erkek</h6>
                                </label>
                                <label class="flex" style="align-items: center;">
                                    <input type="checkbox" value="${size.value}" />
                                    <span class="checkmark"></span>
                                    <h6 class="font-family-regular text-xs text-black-t">Kız</h6>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="flex-column gap-6">
                <div class="flex-justify-between">
                    <h4 class="font-family-semibold text-lg">
                        "<?php
                            // Gönderilen query parametresini al
                            $category = isset($_GET['category']) ? $_GET['category'] : '';

                            // Ekrana bas
                            echo "$category";
                            ?>" araması için 8 sonuç listeleniyor
                    </h4>
                    <div class="custom-select-wrapper">
                        <div class="custom-select">
                            <div class="custom-select-trigger px-1">
                                <span class="trigger-text text-sm font-family-semibold">Önerilen</span>
                                <span class="material-symbols-outlined text-black-t">
                                    filter_alt
                                </span>
                            </div>
                            <div class="custom-options">
                                <div class="custom-option font-family-regular" style="font-size:13px" data-value="1">Önerilen</div>
                                <div class="custom-option font-family-regular" style="font-size:13px" data-value="2">Önerilen</div>
                                <div class="custom-option font-family-regular" style="font-size:13px" data-value="3">Önerilen</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="my-2" style="background-color: #e6e6e6; height:1px"></div> -->
                <div class="flex flex-wrap gap-3" id="cards-container">
                    <a href="productDetail.php" class="card make-it-slow">
                        <div style="position: relative;">
                            <img src="assets/media/images/c_0158.jpg" class="card-img" alt="ürün görseli" />
                            <i class="fa fa-heart-o add-favorite-icon" style="color: #f8796c;" aria-hidden="true"></i>
                            <div id="different-color-design" class="different-color-design" style="background-color: #ffffff; color: #9d9d9d; border-radius: 0.25rem; padding: 0.20rem 0.55rem 0.20rem 0rem; display: flex; align-items: center;">
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #1e90ff, #00ff00, #ffa500); border-radius: 50%; position: relative; left: 0.5rem; border: 1px solid #ffffff;"></div>
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #800080, #ff69b4, #ffa500); border-radius: 50%; margin-right: 0.5rem;"></div>
                                <h6 class="font-family-semibold text-xs text-black-t"> 3 </h6>
                            </div>
                            <div id="hover-element" class="hover-element" style="visibility: hidden;">
                                <h6 class="font-family-semibold text-xxs px-2 py-1">Farklı renk seçenekleri</h6>
                                <div class="flex gap-2 justify-start px-2">
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                </div>
                            </div>
                        </div>
                        <div class='card-down-side'>
                            <div class='flex-column gap-2'>
                                <div style="display: flex; align-items: start; gap: 3px">
                                    <p class="font-family-regular text-sm" style="font-size:14px">
                                        <span class="font-family-semibold text-sm" style="margin-right:2px">Birissine</span>
                                        Baget Çanta Bej
                                    </p>
                                </div>
                                <div style="display: flex; gap: 4px; align-items: center">
                                    <div class="flex alignItems-center gap-1 text-xs">
                                        <span class="fa fa-star checked">
                                            <span class="fa fa-star checked">
                                                <span class="fa fa-star checked">
                                                    <span class="fa fa-star none-checked">
                                                        <span class="fa fa-star none-checked">
                                                        </span>
                                    </div>
                                    <p style="color: #333;">(12)</p>
                                </div>
                            </div>
                            <h4 class="card-price font-family-semibold text-lg" style="font-size:18px">169<span style="font-size:12px">,99 TL</span></h4>
                        </div>
                    </a>
                    <a href="productDetail.php" class="card make-it-slow">
                        <div style="position: relative;">
                            <img src="assets/media/images/c_0158.jpg" class="card-img" alt="ürün görseli" />
                            <i class="fa fa-heart-o add-favorite-icon" style="color: #f8796c;" aria-hidden="true"></i>
                            <div id="different-color-design" class="different-color-design" style="background-color: #ffffff; color: #9d9d9d; border-radius: 0.25rem; padding: 0.20rem 0.55rem 0.20rem 0rem; display: flex; align-items: center;">
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #1e90ff, #00ff00, #ffa500); border-radius: 50%; position: relative; left: 0.5rem; border: 1px solid #ffffff;"></div>
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #800080, #ff69b4, #ffa500); border-radius: 50%; margin-right: 0.5rem;"></div>
                                <h6 class="font-family-semibold text-xs text-black-t"> 3 </h6>
                            </div>
                            <div id="hover-element" class="hover-element" style="visibility: hidden;">
                                <h6 class="font-family-semibold text-xxs px-2 py-1">Farklı renk seçenekleri</h6>
                                <div class="flex gap-2 justify-start px-2">
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                </div>
                            </div>
                        </div>
                        <div class='card-down-side'>
                            <div class='flex-column gap-2'>
                                <div style="display: flex; align-items: start; gap: 3px">
                                    <p class="font-family-regular text-sm" style="font-size:14px">
                                        <span class="font-family-semibold text-sm" style="margin-right:2px">Birissine</span>
                                        Baget Çanta Bej
                                    </p>
                                </div>
                                <div style="display: flex; gap: 4px; align-items: center">
                                    <div class="flex alignItems-center gap-1 text-xs">
                                        <span class="fa fa-star checked">
                                            <span class="fa fa-star checked">
                                                <span class="fa fa-star checked">
                                                    <span class="fa fa-star none-checked">
                                                        <span class="fa fa-star none-checked">
                                                        </span>
                                    </div>
                                    <p style="color: #333;">(12)</p>
                                </div>
                            </div>
                            <h4 class="card-price font-family-semibold text-lg" style="font-size:18px">169<span style="font-size:12px">,99 TL</span></h4>
                        </div>
                    </a>
                    <a href="productDetail.php" class="card make-it-slow">
                        <div style="position: relative;">
                            <img src="assets/media/images/c_0159.jpg" class="card-img" alt="ürün görseli" />
                            <i class="fa fa-heart add-favorite-icon" style="color: #f8796c;" aria-hidden="true"></i>
                            <div id="different-color-design" class="different-color-design" style="background-color: #ffffff; color: #9d9d9d; border-radius: 0.25rem; padding: 0.20rem 0.55rem 0.20rem 0rem; display: flex; align-items: center;">
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #1e90ff, #00ff00, #ffa500); border-radius: 50%; position: relative; left: 0.5rem; border: 1px solid #ffffff;"></div>
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #800080, #ff69b4, #ffa500); border-radius: 50%; margin-right: 0.5rem;"></div>
                                <h6 class="font-family-semibold text-xs text-black-t"> 3 </h6>
                            </div>
                            <div id="hover-element" class="hover-element" style="visibility: hidden;">
                                <h6 class="font-family-semibold text-xxs px-2 py-1">Farklı renk seçenekleri</h6>
                                <div class="flex gap-2 justify-start px-2">
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                </div>
                            </div>
                        </div>
                        <div class='card-down-side'>
                            <div class='flex-column gap-2'>
                                <div style="display: flex; align-items: start; gap: 3px">
                                    <p class="font-family-regular text-sm" style="font-size:14px">
                                        <span class="font-family-semibold text-sm" style="margin-right:2px">Birissine</span>
                                        Baget Çanta Bej
                                    </p>
                                </div>
                                <div style="display: flex; gap: 4px; align-items: center">
                                    <div class="flex alignItems-center gap-1 text-xs">
                                        <span class="fa fa-star checked">
                                            <span class="fa fa-star checked">
                                                <span class="fa fa-star checked">
                                                    <span class="fa fa-star none-checked">
                                                        <span class="fa fa-star none-checked">
                                                        </span>
                                    </div>
                                    <p style="color: #333;">(12)</p>
                                </div>
                            </div>
                            <h4 class="card-price font-family-semibold text-lg" style="font-size:18px">169<span style="font-size:12px">,99 TL</span></h4>
                        </div>
                    </a>
                    <a href="productDetail.php" class="card make-it-slow">
                        <div style="position: relative;">
                            <img src="assets/media/images/c_0159.jpg" class="card-img" alt="ürün görseli" />
                            <i class="fa fa-heart add-favorite-icon" style="color: #f8796c;" aria-hidden="true"></i>
                            <div id="different-color-design" class="different-color-design" style="background-color: #ffffff; color: #9d9d9d; border-radius: 0.25rem; padding: 0.20rem 0.55rem 0.20rem 0rem; display: flex; align-items: center;">
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #1e90ff, #00ff00, #ffa500); border-radius: 50%; position: relative; left: 0.5rem; border: 1px solid #ffffff;"></div>
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #800080, #ff69b4, #ffa500); border-radius: 50%; margin-right: 0.5rem;"></div>
                                <h6 class="font-family-semibold text-xs text-black-t"> 3 </h6>
                            </div>
                            <div id="hover-element" class="hover-element" style="visibility: hidden;">
                                <h6 class="font-family-semibold text-xxs px-2 py-1">Farklı renk seçenekleri</h6>
                                <div class="flex gap-2 justify-start px-2">
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                </div>
                            </div>
                        </div>
                        <div class='card-down-side'>
                            <div class='flex-column gap-2'>
                                <div style="display: flex; align-items: start; gap: 3px">
                                    <p class="font-family-regular text-sm" style="font-size:14px">
                                        <span class="font-family-semibold text-sm" style="margin-right:2px">Birissine</span>
                                        Baget Çanta Bej
                                    </p>
                                </div>
                                <div style="display: flex; gap: 4px; align-items: center">
                                    <div class="flex alignItems-center gap-1 text-xs">
                                        <span class="fa fa-star checked">
                                            <span class="fa fa-star checked">
                                                <span class="fa fa-star checked">
                                                    <span class="fa fa-star none-checked">
                                                        <span class="fa fa-star none-checked">
                                                        </span>
                                    </div>
                                    <p style="color: #333;">(12)</p>
                                </div>
                            </div>
                            <h4 class="card-price font-family-semibold text-lg" style="font-size:18px">169<span style="font-size:12px">,99 TL</span></h4>
                        </div>
                    </a>
                    <a href="productDetail.php" class="card make-it-slow">
                        <div style="position: relative;">
                            <img src="assets/media/images/c_0159.jpg" class="card-img" alt="ürün görseli" />
                            <i class="fa fa-heart add-favorite-icon" style="color: #f8796c;" aria-hidden="true"></i>
                            <div id="different-color-design" class="different-color-design" style="background-color: #ffffff; color: #9d9d9d; border-radius: 0.25rem; padding: 0.20rem 0.55rem 0.20rem 0rem; display: flex; align-items: center;">
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #1e90ff, #00ff00, #ffa500); border-radius: 50%; position: relative; left: 0.5rem; border: 1px solid #ffffff;"></div>
                                <div style="width: 1rem; height: 1rem; background-image: linear-gradient(to right, #800080, #ff69b4, #ffa500); border-radius: 50%; margin-right: 0.5rem;"></div>
                                <h6 class="font-family-semibold text-xs text-black-t"> 3 </h6>
                            </div>
                            <div id="hover-element" class="hover-element" style="visibility: hidden;">
                                <h6 class="font-family-semibold text-xxs px-2 py-1">Farklı renk seçenekleri</h6>
                                <div class="flex gap-2 justify-start px-2">
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0158.jpg'>
                                    <img class="other-color-img" src='assets/media/images/c_0159.jpg'>
                                </div>
                            </div>
                        </div>
                        <div class='card-down-side'>
                            <div class='flex-column gap-2'>
                                <div style="display: flex; align-items: start; gap: 3px">
                                    <p class="font-family-regular text-sm" style="font-size:14px">
                                        <span class="font-family-semibold text-sm" style="margin-right:2px">Birissine</span>
                                        Baget Çanta Bej
                                    </p>
                                </div>
                                <div style="display: flex; gap: 4px; align-items: center">
                                    <div class="flex alignItems-center gap-1 text-xs">
                                        <span class="fa fa-star checked">
                                            <span class="fa fa-star checked">
                                                <span class="fa fa-star checked">
                                                    <span class="fa fa-star none-checked">
                                                        <span class="fa fa-star none-checked">
                                                        </span>
                                    </div>
                                    <p style="color: #333;">(12)</p>
                                </div>
                            </div>
                            <h4 class="card-price font-family-semibold text-lg" style="font-size:18px">169<span style="font-size:12px">,99 TL</span></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="./assets/js/categories.js"></script>