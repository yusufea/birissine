<?php
require_once("header.php");
?>
<link rel="stylesheet" href="assets/css/productDetail.css">
<main class="container flex-column gap-4">
  <div class="breadcrumbs open-sans mt-3 flex justify-center">
    <h6 class="font-family-regular text-sm">Kadın</h6>
    <span class="fa fa-angle-right" style="color: orange"></span>
    <h6 class="font-family-regular text-sm">Kadın Ayakkabı</h6>
    <span class="fa fa-angle-right" style="color: orange"></span>
    <h6 class="font-family-regular text-sm">Kadın Spor Ayakkabı</h6>
    <span class="fa fa-angle-right" style="color: orange"></span>
    <h6 class="font-family-regular text-sm">Kadın Sneaker</h6>
    <span class="fa fa-angle-right" style="color: orange"></span>
    <h6 class="font-family-semibold text-sm">Lufian Kadın Sneaker</h6>
  </div>
  <div class="row gap-2">
    <div class="col-10">
      <div class="row gap-4">
        <div class="col-6 row">
          <div class="col-2" style="overflow-y: scroll; height: 637px;">
            <div id="thumb-container" class="product-thumb-img-container">
              <!-- Statik küçük resimler burada yer alacak -->
              <img src="assets/media/images/prodthumbimg_1.webp" alt="Product Thumbnail 0" class="product-detail-thumb-img selected">
              <img src="assets/media/images/prodthumbimg_2.webp" alt="Product Thumbnail 0" class="product-detail-thumb-img">
              <img src="assets/media/images/prodthumbimg_3.webp" alt="Product Thumbnail 0" class="product-detail-thumb-img">
              <img src="assets/media/images/prodthumbimg_4.webp" alt="Product Thumbnail 0" class="product-detail-thumb-img">
              <img src="assets/media/images/prodthumbimg_5.webp" alt="Product Thumbnail 0" class="product-detail-thumb-img">
              <img src="assets/media/images/prodthumbimg_1.webp" alt="Product Thumbnail 0" class="product-detail-thumb-img">
              <img src="assets/media/images/prodthumbimg_2.webp" alt="Product Thumbnail 0" class="product-detail-thumb-img">
              <!-- Diğer küçük resimler buraya eklenebilir -->
            </div>
          </div>
          <div class="col-10">
            <div class="relative">
              <img id="product-image-id" src="assets/media/images/prodmainimg.webp" class="product-img" alt="ürün görseli" />
              <div>
                <span id="prevImage" class="material-symbols-outlined arrow-left-icon p-1_5">
                  chevron_left
                </span>
                <span id="nextImage" class="material-symbols-outlined arrow-right-icon p-1_5">
                  chevron_right
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="flex-column gap-3 relative">
            <div id="product-img-result" class="img-zoom-result" style="
                    position: absolute;
                    width: 100%;
                    height: 613.005px;
                    z-index: 100;
                    visibility: hidden;
                    border-radius:12px
                  "></div>
            <div class="text-lg font-family-regular flex gap-1">
              <span class="font-family-semibold">Lufian </span>
              <h6 class="sans-pro-ExtraLight text-lg" style="letter-spacing: 0.5px;">
                Yoko Kadın Sneaker
                Ayakkabı Siyah
              </h6>
            </div>
            <div class="flex alignItems-center gap-2_5">
              <div class="flex gap-1 alignItems-center">
                <span class="open-sans font-semibold text-base">4</span>
                <div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star none-checked"></span>
                </div>
              </div>
              <div class="dot-icon"></div>
              <div class="flex gap-1">
                <span class="font-family-regular text-xs"><span class="font-family-semibold">5 </span>Değerlendirme
                </span>
              </div>
              <!-- <div class="dot-icon"></div>
                <div class="flex gap-1">
                  <span class="open-sans text-xs font-normal">
                    <span class="font-semibold">4 </span> Soru & Cevap
                  </span>
                </div> -->
              <div class="dot-icon"></div>
              <div class="flex gap-1">
                <span class="material-symbols-outlined" style="font-size: 19px;">favorite</span>
                <span class="font-family-regular text-xs">
                  <span class="font-family-semibold">1076</span> Favori
                </span>
              </div>
            </div>
            <div class="flex">
              <div class="flex-column gap-1 my-1 card-border p-2 py-1 alignItems-start" style="border-radius: 6px;">
                <h4 class="text-sm font-family-semibold text-gray-t line-through">1899 TL</h4>
                <h4 class="font-family-black text-3xl text-black-t" style="border-radius: 6px;line-height:0px;color: #f8796c;">
                  1.539<span class="text-md">,90 TL</span>
                </h4>
              </div>
            </div>
            <hr style="opacity: 30%" />
            <div class="flex-column gap-7">
              <div class="flex-column gap-4">
                <h6 class="font-family-regular text-sm">
                  <span class="font-family-semibold"> Renk: </span>
                  Siyah
                  <i class="fa fa-info info-icon tooltip text-xs" style="font-size: 12px;"><span class="tooltiptext text-xs font-family-regular">
                      Görseldeki renkler, ürünün rengi konusunda yaklaşık bir bilgi verme amaçlı olup %100 uyum taahhüt edilmemektedir. Bununla birlikte elektronik cihazınızın görüntü ve çözünürlük ayarları nedeniyle renk görselleri ile ürünlerin renkleri arasında önlenemez bir farklılık oluşması teknik olarak mümkündür. Farklılıktan dolayı **************’nin herhangi bir sorumluluğu bulunmamaktadır.
                    </span></i>
                </h6>
                <div class="flex gap-1_5">
                  <img src="assets/media/images/cardimg4.webp" class="product-other-color-img product-other-color-img-border" alt="" />
                  <img src="assets/media/images/prodothercolorimg.webp" class="product-other-color-img pointer" alt="" />
                </div>
              </div>
              <div class="flex-column gap-4">
                <h6 class="font-family-regular text-sm">
                  <span class="font-family-semibold"> Beden: </span>
                  36
                </h6>
                <div class="flex open-sans" style="gap: 10px">
                  <div class="size-table selected">
                    <span class="font-family-regular" style="font-size: 14px">36</span>
                  </div>
                  <div class="size-table">
                    <span class="font-family-regular" style="font-size: 14px">37</span>
                  </div>
                  <div class="size-table size-sold-out size-sold-out-bg">
                    <span class="font-family-regular" style="font-size: 14px">38</span>
                  </div>
                  <div class="size-table">
                    <span class="font-family-regular" style="font-size: 14px">39</span>
                  </div>
                  <div class="size-table size-sold-out size-sold-out-bg">
                    <span class="font-family-regular" style="font-size: 14px">40</span>
                  </div>
                </div>
              </div>
              <div class="flex alignItems-center gap-2">
                <button class="add-to-basket font-family-semibold text-xs" role="button" style="height: 45px;">
                  Sepete Ekle
                </button>
                <div class="flex-column justify-center">
                  <span class="material-symbols-outlined add-favorite-icon-pd">
                    favorite
                  </span>
                </div>
              </div>
              <div class="relative">
                <h4 class="font-family-semibold text-sm mb-2">
                  Ürün Özellikleri:
                </h4>
                <div>
                  <ul class="font-family-regular text-xs px-3 text-gray-t">
                    <li>Bu ürün EFAL tarafından gönderilecektir.</li>
                    <li>
                      Kampanya fiyatından satılmak üzere 5 adetten az stok
                      bulunmaktadır.
                    </li>
                    <li>
                      İncelemiş olduğunuz ürünün satış fiyatını satıcı
                      belirlemektedir.
                    </li>
                    <li>
                      Bir ürün, birden fazla satıcı tarafından satılabilir.
                      Birden fazla satıcı tarafından satışa sunulan ürünlerin
                      satıcıları ürün için belirledikleri fiyata, satıcı
                      puanlarına, teslimat statülerine, ürünlerdeki
                      promosyonlara, kargonun bedava olup olmamasına ve
                      ürünlerin hızlı teslimat ile teslim edilip edilememesine,
                      ürünlerin stok ve kategorileri bilgilerine göre
                      sıralanmaktadır.
                    </li>
                    <li>
                      Bu üründen en fazla 10 adet sipariş verilebilir. 10 adedin
                      üzerindeki siparişleri Birissine iptal etme hakkını saklı
                      tutar. Belirlenen bu limit kurumsal siparişlerde geçerli
                      olmayıp, kurumsal siparişler için farklı limitler
                      belirlenebilmektedir.
                    </li>
                    <li>
                      15 gün içinde ücretsiz iade. Detaylı bilgi için tıklayın.
                    </li>
                    <li>
                      Yoko Kadin Sneaker Ayakkabi %100 Deri Kadin Ayakkabi
                    </li>
                  </ul>
                </div>
                <div class="opacity-background w-full absolute"></div>
                <div onclick="focusProductAllProperty()" class="relative w-full mt-4 pointer" style="background-color: #e6e6e6;height: 1px;">
                  <div class="absolute see-all text-black-t product-all-property-tag flex gap-2 alignItems-center">
                    <span class="font-family-semibold text-xs" style="letter-spacing:1.2px">ÜRÜNÜN TÜM ÖZELLİKLERİ</span>
                    <i class="fa fa-angle-right" style="font-size: 18px;"></i>
                  </div>
                </div>
                <!-- <a href="productReviews.php" class="open-sans featured-comment-absolute-text">
                    <span>DAHA FAZLA YORUM</span>
                    <i class="fa fa-angle-right" style="font-size: 12px"></i>
                  </a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-2" style="height: 100vh">
      <div class="flex-column gap-10">
        <div class="brand-area">
          <div class="brand-area-tag">
            <h4 class="font-family-semibold text-xs" style="color: #1f6bc1">
              Lufian
            </h4>
            <p class="font-family-normal text-xs">
              699,9B Takipçi
            </p>
          </div>
          <div class="flex alignItems-center gap-1">
            <i class="fa fa-gift overlay-brand-icons"></i>
            <h5 class="font-family-regular text-xs">
              Takip Et Kazan
            </h5>
          </div>
          <!-- <a href="productQuestion.php" class="flex alignItems-center gap-1">
              <i class="fa fa-comment overlay-brand-icons"></i>
              <h5 class="open-sans font-normal text-xs">
                Satıcı Soruları (27)
              </h5>
            </a> -->
          <div class="font-family-regular brand-absolute-text text-xs">
            <span>MAĞAZAYA GİT</span>
            <i class="fa fa-angle-right"></i>
          </div>
        </div>
        <div class="featured-comment-area">
          <h6 class="font-family-semibold text-center">
            ÖNE ÇIKAN YORUM
          </h6>
          <div class="featured-comment-area" style="margin-top: 8px; position: relative">
            <div class="featured-comment-tag-detail">
              <i class="fa fa-comment text-white"></i>
              <h6 class="font-family-regular text-white">
                Kullanıcıların çoğu 1 beden küçük almanızı öneriyor
              </h6>
            </div>
            <div style="display: flex; flex-direction: column; gap: 6px">
              <div class="text-xs">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star none-checked"></span>
              </div>
              <p class="font-family-regular text-xs">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequuntur quas repudiandae qui.
              </p>
              <div class="flex gap-1 alignItems-center">
                <span class="font-family-regular text-xs">Y** E** A**</span>
                <div class="dot-icon"></div>
                <span class="font-family-regular text-xs">4 Temmuz 2024</span>
              </div>
            </div>
            <a href="productReviews.php" class="font-family-regular text-xs featured-comment-absolute-text">
              <span>DAHA FAZLA YORUM</span>
              <i class="fa fa-angle-right" style="font-size: 12px"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-column">
    <h3 class="text-xl font-family-semibold">Benzer Ürünler</h3>
    <div class="similar-product-slider">
      <div class="similar-product-card">
        <div id="product-slider" class="splide">
          <div class="splide__track">
            <ul class="splide__list" id="product-list">
              <li class="splide__slide">
                <a href="productDetail.php" class="card">
                  <div style="position: relative;">
                    <img
                      src='assets/media/images/c_0158.jpg'
                      class="card-img"
                      alt="ürün görseli" />
                    <span class="material-symbols-outlined add-favorite-icon">
                      favorite
                    </span>
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
                          <span class="fa fa-star none-checked"></span>
                          <span class="fa fa-star none-checked"></span>
                        </div>
                        <p class="text-black-t font-family-regular">(3)</p>
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
  <!-- PRODUCT REVİEW -->
  <div>
    <h3 class="text-xl font-family-semibold">Ürün Değerlendirmeleri</h3>
    <div class="comment-tag-area mt-4 text-white">
      <div class="flex alignItems-center gap-3" style="display: flex; gap: 12px; align-items: center">
        <div class="text-base gap-1 flex alignItems-center">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star none-checked"></span>
          <span class="fa fa-star none-checked"></span>
        </div>
        <span class="font-family-regular text-base">3.6</span>
        <!-- <i class="fa fa-angle-down" style="font-size: 28px; color: #333"></i> -->
        <div class="dot-icon"></div>
        <span class="font-family-regular text-sm">116 Değerlendirme</span>
        <div class="dot-icon"></div>
        <span class="font-family-regular text-sm">74 Yorum</span>
      </div>
      <div class="featured-comment-tag-detail">
        <i class="fa fa-comment" style="color: #2d3b4d"></i>
        <h6 class="font-family-semibold text-sm">
          Kullanıcıların çoğu 1 beden küçük almanızı öneriyor
        </h6>
      </div>
    </div>
    <div id="comment-slider" class="splide mt-5 mb-5">
      <div class="splide__track">
        <ul class="splide__list" id="comment-list">
          <li class="splide__slide">
            <div class="comment-card">
              <div class="flex-column gap-1">
                <div class="flex alignItems-center gap-1 text-xs">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star none-checked"></span>
                </div>
                <div class="flex alignItems-center gap-1">
                  <span class="font-family-regular text-xs">Y** E** A**</span>
                  <div style="width: 5px; height: 5px; background-color: #9999; border-radius: 100%;"></div>
                  <span class="font-family-regular text-xs">4 Temmuz 2024</span>
                </div>
              </div>
              <div class="flex-column gap-2">
                <p class="font-family-regular text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quas repudiandae qui.</p>
              </div>
              <h6 class="font-family-regular text-xs">
                <span class="text-xs">Beden: </span>L
              </h6>
              <div class="flex justify-between">
                <h6 class="font-family-regular"><span class="font-family-semibold">Birissine</span> satıcısından alındı.</h6>
                <div class="flex gap-1 alignItems-center">
                  <div class="flex alignItems-center gap-1 text-sm font-family-regular">
                    <span class="material-symbols-outlined text-xs">thumb_up</span>(3)
                  </div>
                  <div style="width: 5px; height: 5px; background-color: #9999; border-radius: 100%;"></div>
                  <span class="material-symbols-outlined" style="font-size: 18px; margin-top: 1px">report</span>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div style="position: relative">
      <div style="width: 100%; height: 2px; background-color: #333; margin-bottom: 3rem; opacity: 0.1;"></div>
      <a href="productReviews.php" class="open-sans-normal see-all" style="bottom: -20px; left: 40%;">
        <span class="font-family-semibold text-xs">TÜM YORUMLARI GÖSTER</span>
        <i class="fa fa-angle-down" style="font-size: 16px"></i>
      </a>
    </div>
  </div>
  <!-- PRODUCT EMPTY REVİEW ATTENTION -->
  <!-- <div>
    <div class="empty-review-card p-4 flex justify-center">
      <div class="flex gap-4 alignItems-center">
        <span class="material-symbols-outlined">
          star
        </span>
        <h6 class=" text-base font-family-semibold">
          Henüz Yorum Yazılmamış.
        </h6>
      </div>
    </div>
  </div> -->
  <div class="flex-column">
    <h3 class="text-xl font-family-semibold">Bu Ürünü Alanlar Bunları da Aldı</h3>
    <div id="buy-product-slider" class="splide">
      <div class="splide__track">
        <ul class="splide__list" id="buy-product-list">
          <li class="splide__slide">
            <a href="productDetail.php" class="card">
              <div style="position: relative;">
                <img
                  src='assets/media/images/c_0158.jpg'
                  class="card-img"
                  alt="ürün görseli" />
                <span class="material-symbols-outlined add-favorite-icon">
                  favorite
                </span>
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
                      <span class="fa fa-star none-checked"></span>
                      <span class="fa fa-star none-checked"></span>
                    </div>
                    <p class="text-black-t font-family-regular">(3)</p>
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
  <!-- <div class="question-area">
    <h3 class="open-sans mb-4">Ürün Soru ve Cevapları</h3>
    <div id="question-slider" class="splide">
      <div class="splide__track">
        <ul class="splide__list" id="question-list"></ul>
      </div>
    </div>
    <div class="relative mt-5">
      <div style="
                width: 100%;
                height: 2px;
                background-color: #333;
                margin-bottom: 3rem;
                opacity: 0.1;
              "></div>
      <a href="productQuestion.php" class="open-sans-normal see-all" style="left: 40%; bottom: -20px;">
        <span class="text-xs font-semibold open-sans">TÜM SORULARI GÖSTER
          <i class="fa fa-angle-down" style="font-size: 16px"></i></span>
      </a>
    </div>
  </div> -->
  <div id="product-info-area" class="product-info-area" style="margin-bottom: 4rem">
    <h3 class="text-xl font-family-semibold">Ürün Bilgileri</h3>
    <div class="product-info">
      <div class="flex gap-3">
        <div class="product-info-img-side">
          <img class="product-info-img" src="assets/media/images/cardimg4.webp" alt="" />
        </div>
        <div class="flex-column gap-1">
          <h3 class="font-family-semibold text-base">
            Lufian Vera Kadın Örme Sweatshırt Kırık Beyaz
          </h3>
          <div>
            <ul class="font-family-regular text-sm px-3">
              <li>Bu ürün EFAL tarafından gönderilecektir.</li>
              <li>
                İncelemiş olduğunuz ürünün satış fiyatını satıcı
                belirlemektedir.
              </li>
              <li>
                Bir ürün, birden fazla satıcı tarafından satılabilir.
                Birden fazla satıcı tarafından satışa sunulan ürünlerin
                satıcıları ürün için belirledikleri fiyata, satıcı
                puanlarına, teslimat statülerine, ürünlerdeki
                promosyonlara, kargonun bedava olup olmamasına ve
                ürünlerin hızlı teslimat ile teslim edilip edilememesine,
                ürünlerin stok ve kategorileri bilgilerine göre
                sıralanmaktadır.
              </li>
              <li>
                15 gün içinde ücretsiz iade. Detaylı bilgi için tıklayın.
              </li>
              <li>
                Yoko Kadin Sneaker Ayakkabi %100 Deri Kadin Ayakkabi
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="info-line"></div>
      <div>
        <h4 class="font-family-semibold">Ürün Özellikleri</h4>
        <div class="product-property-side">
          <div class="product-property-card product-property-two-side">
            <h6 class="font-family-regular text-sm">
              Kalıp
            </h6>
            <h6 class="font-family-semibold text-sm">
              Regular
            </h6>
          </div>
          <div class="product-property-card product-property-two-side">
            <h6 class="font-family-regular text-sm">
              Materyal
            </h6>
            <h6 class="font-family-semibold text-sm">
              Pamuk Polyester
            </h6>
          </div>
          <div class="product-property-card product-property-two-side">
            <h6 class="font-family-regular text-sm">
              Koleksiyon
            </h6>
            <h6 class="font-family-semibold text-sm">Basic</h6>
          </div>
          <div class="product-property-card product-property-two-side">
            <h6 class="font-family-regular text-sm">Renk</h6>
            <h6 class="font-family-semibold text-sm">Beyaz</h6>
          </div>
          <div class="product-property-card product-property-two-side">
            <h6 class="font-family-regular text-sm">
              Kumaş Tipi
            </h6>
            <h6 class="font-family-semibold text-sm">Örme</h6>
          </div>
          <div class="product-property-card product-property-two-side">
            <h6 class="font-family-regular text-sm">
              Yaka Tipi
            </h6>
            <h6 class="font-family-semibold text-sm">
              Bisiklet Yaka
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="assets/js/productDetail.js"></script>
<?php
require_once("footer.php");
?>